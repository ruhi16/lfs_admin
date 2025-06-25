<?php

namespace App\Http\Livewire;

use App\Models\Shop04Product;
use App\Models\Shop08Purchase;
use App\Models\Shop09PurchaseProduct;
use Exception;
use Livewire\Component;

use DB;

class AdminShopPurchaseComponent extends Component
{
    
    public $vendors = [
        [
            'id' => 1,
            'name' => 'Vendor A',
            'contact' => '123-456-7890',
            'email' => 'Hxg9O@example.com',
            'address' => '123 Vendor St, City, Country',
            ],[
            'id' => 2,
            'name' => 'Vendor B',
            'contact' => '987-654-3210',
            'email' => 'Hxg9O@example.com',
            'address' => '123 Vendor St, City, Country',
            ],[
            'id' => 3,
            'name' => 'Vendor C',
            'contact' => '555-555-5555',
            'email' => 'Hxg9O@example.com',
            'address' => '123 Vendor St, City, Country',
            ],

    ], $selectedVendor = null;
    public $invoiceNo = null, $invoiceDate = null;

    public $categories = null, $selectedCategory = null;
    public $items = null, $selectedItem = null;
    public $purchaseUnits = null, $selectedPurchaseUnit = null;


    public $rowCounter = 0;
    public $productDetails = [];

    public function mount(){
        // $this->items = \App\Models\Shop03Item::all();
        // $this->vendors = \App\Models\Vendor::all();
        $this->categories = \App\Models\Shop02Category::all();
        $this->items = \App\Models\Shop03Item::all();
        $this->purchaseUnits = \App\Models\Shop05Unit::all();

        $this->addProductRow();
        
    }

    public function addProductRow(){
        $this->productDetails[$this->rowCounter] = [
            'category_id' => '',
            'item_id' => '',
            'purchase_unit_id' => '',
            'quantity' => 0,
            'rate' => 0,
            'amount' => 0,
        ];
        $this->rowCounter++;
        $this->refresh();
    }

    public function removeProductRow($index){
        unset($this->productDetails[$index]);
        $this->rowCounter--;
        $this->refresh();
    }

    public function updateProductOptions($index){
        $categoryId = $this->productDetails[$index]['category_id'];
        // dd($categoryId, $index);

        if ($categoryId) {
            // Reset product selection when category changes
            $this->productDetails[$index]['item_id'] = '';
            $this->productDetails[$index]['amount'] = 0;
            
            // This will trigger the view to update product options
            // $this->emit('categoryChanged', $index, $categoryId);
        }
    }

    public function calculateAmount($index){
        $this->productDetails[$index]['amount'] = $this->productDetails[$index]['quantity'] * $this->productDetails[$index]['rate'];
    }



    public function getTotalAmount(){
        // $totalAmount = 0;
        return collect($this->productDetails)->sum('amount');
    }


    public function saveProductDetails(){

        $this->validate([
            'selectedVendor' => 'required', //|exists:vendors,id',
            'invoiceNo' => 'required|string|max:255',
            'invoiceDate' => 'required|date',
        ]);

        // dd($this->selectedVendor, $this->invoiceNo, $this->invoiceDate);

        $this->validate([
            'productDetails.*.category_id' => 'required', //|exists:categories,id',
            'productDetails.*.item_id' => 'required',//|exists:items,id',
            'productDetails.*.purchase_unit_id' => 'required', //|exists:units,id',
            'productDetails.*.quantity' => 'required|numeric|min:0',
            'productDetails.*.rate' => 'required|numeric|min:0',
        ]);
        // dd($this->productDetails);

        DB::beginTransaction();
        try{
            
            // dd('hello');

            $purchase = Shop08Purchase::updateOrCreate([
                'vendor_id' => 1002, //$this->selectedVendor,
                'invoice_no' => $this->invoiceNo,        
                'invoice_date' => $this->invoiceDate,   
                'owner_id' => auth()->user()->id,    

            ],[
                'order_id' => 100,
            ]);

            // dd($purchase);

            foreach($this->productDetails as $detail){
                $product = Shop04Product::where('category_id', $detail['category_id'])
                    ->where('item_id', $detail['item_id'])
                    ->first();
                
                // dd('Done',$detail['category_id'], $detail['item_id'], $product);

            
                $purchaseDetails = Shop09PurchaseProduct::updateOrCreate([
                    'purchase_id' => $purchase->id,
                    'product_id' => $detail['item_id'],
                ],[
                    'purchase_unit_id' => $detail['purchase_unit_id'],
                    'purchase_unit_rate' => $detail['rate'],
                    'purchase_unit_qty' => $detail['quantity'],
                    'purchase_amount' => $detail['amount'],
                    'purchase_adjustment' => 0,
                    'purchase_amount_payable' => $detail['amount'] - 0,
                    'owner_id' => auth()->user()->id,
                // ])->product()->associate($product);
                ]);
            }


            $purchase->update([
                'total_amount' => $this->getTotalAmount(),
                'total_adjustment' => 0,
                'total_payable' => $this->getTotalAmount() - 0,
            ]);

            // dd($purchase, $purchaseDetails);

            Db::commit();
            session()->flash('purchase_success', 'Product details saved successfully!');
            

        }catch(Exception $e){
            // dd($e);
            Db::rollBack();
            session()->flash('purchase_error', $e->getMessage());
        }

    }









    public function render()
    {
        return view('livewire.admin-shop-purchase-component');
    }
    
    
    public function refresh(){

    }
}
