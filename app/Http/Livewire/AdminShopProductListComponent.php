<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AdminShopProductListComponent extends Component
{
    public $purchases = null;

    public function mount(){
        $this->purchases = \App\Models\Shop08Purchase::get();
        // dd($this->purchase);
    }
    public function render()
    {
        return view('livewire.admin-shop-product-list-component');
    }
}
