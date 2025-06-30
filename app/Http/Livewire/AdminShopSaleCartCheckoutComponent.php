<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AdminShopSaleCartCheckoutComponent extends Component
{
    public $user;
    public $sale;
    public $saleProducts;

    public function refresh(){
        
        $this->sale = \App\Models\Shop10Sale::where('studentcr_id', $this->user->id)
            ->where('is_paid', false)
            ->first();
        
        if($this->sale){
            $this->saleProducts = $this->sale->saleProducts;
        }
    
    }

    public function mount(){
        $this->user = auth()->user();

        // $this->sale = \App\Models\Shop10Sale::where('studentcr_id', $this->user->id)
        //     ->where('is_paid', false)
        //     ->first();
        // dd($this->sale);
        // if(!$this->sale){
        //     // dd($this->sale);
        //     $this->saleProducts = $this->sale->saleProducts;
        // }
        

        $this->refresh();
        // dd($this->sale);
        // dd($this->saleProducts);
    }

    public function increaseQuantity($productId){
        // dd($productId);

        $userSale = \App\Models\Shop10Sale::where('studentcr_id', $this->user->id)
            ->where('is_paid', false)
            ->first();

        $userSale->saleProducts()->find($productId)->update([
            'sale_unit_qty' => $userSale->saleProducts()->find($productId)->sale_unit_qty + 1,
        ]);

        $userSale->save();
        // dd($userSale);
        $this->refresh();



    }

    public function decreaseQuantity($productId){
        // dd($productId);
        $userSale = \App\Models\Shop10Sale::where('studentcr_id', $this->user->id)
            ->where('is_paid', false)
            ->first();
        if($userSale->saleProducts()->find($productId)->sale_unit_qty == 1){
            return;
        }

        $userSale->saleProducts()->find($productId)->update([
            'sale_unit_qty' => $userSale->saleProducts()->find($productId)->sale_unit_qty - 1,
        ]);

        $userSale->save();
        // dd($userSale);
        $this->refresh();
    }



    public function placeOrder(){
        // dd('placeOrder');
        $userSale = \App\Models\Shop10Sale::where('studentcr_id', $this->user->id)
            ->where('is_paid', false)
            ->first()->update([
                'is_paid' => true,
            ]);
        // $userSale->save();
        $this->refresh();


    }

    

    public function render()
    {
        return view('livewire.admin-shop-sale-cart-checkout-component');
    }




}
