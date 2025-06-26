<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AdminShopSaleCartComponent extends Component
{
    public $user;
    public $sale;
    public $saleProducts;

    public function mount()
    {
        $this->user = auth()->user();
        $this->sale = \App\Models\Shop10Sale::where('studentcr_id', $this->user->id)
            ->where('is_paid', false)
            ->first();

        if ($this->sale) {
            $this->saleProducts = $this->sale->saleProducts;
        } else {
            $this->saleProducts = collect();
        }
    }

    public function render()
    {
        return view('livewire.admin-shop-sale-cart-component');
    }
}
