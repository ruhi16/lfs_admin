<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AdminShopSaleDashboardComponent extends Component
{
    public $products = null;


    public function mount()
    {
        $this->products = \App\Models\Shop04Product::get();
        // dd($this->products);
    }

    public function addToCart($productId){

        //  Validate the product ID
        // $sale = \App\Models\Shop04Product::firstOrCreate([
        //     'product_id', $productId,
        //     'is_paid' => false,
        // ]);






        $product = \App\Models\Shop04Product::find($productId);
        session()->flash('sale_dashboard_success', 'Product added to cart successfully.');
        if (!$product) {
            session()->flash('sale_dashboard_error', 'Product not found.');
            return;
        }

        try{
            $sale = \App\Models\Shop10Sale::updateOrCreate([
                'studentcr_id' => auth()->user()->id,
                'is_paid' => false,
            ]);

            $sale->products()->attach($product, [
                'quantity' => 1, // Assuming a default quantity of 1
                'price' => 10.0, // Assuming the product has a price attribute
            ]);
            

            // $sale =\App\Models\Shop10Sale::updateOrCreate([
            //     'studentcr_id' => auth()->user()->id,
            
            // ],[
            //     'product_id' => $productId,
            //     'quantity' => 1, // Assuming a default quantity of 1
            //     'price' => $product->price, // Assuming the product has a price attribute
            
            // ]);

            session()->flash('sale_dashboard_success', 'Product added to cart successfully.');

        }catch(\Exception $e){
            session()->flash('sale_dashboard_error', 'An error occurred while adding the product to the cart: ' . $e->getMessage());
            return;
        }

    //  Logic to add the product to the cart
    //  This could involve updating a session variable or a database record
    //  session()->push('cart', $productId);
    //  $this->dispatchBrowserEvent('product-added', ['productId' => $productId]);


    }






    public function render()
    {
        return view('livewire.admin-shop-sale-dashboard-component');
    }
}
