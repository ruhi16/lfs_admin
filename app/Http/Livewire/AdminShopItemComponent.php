<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Shop03Item as Item; // Assuming you have a model for shop items
use App\Models\Shop02Category; // Assuming you have a model for shop categories


class AdminShopItemComponent extends Component
{
    public $selectedCategory = null; // For filtering items by category
    public $itemId = null, $itemName = null, $itemSlug = null, $itemDescription = null;
    public $itemPrice = null, $itemCategoryId = null, $itemImage = null;
    public $items = [], $categories = [];

    public function mount()
    {
        $this->items = Item::all(); // Fetch all items from the database
        $this->categories = Shop02Category::all(); // Fetch all categories from the database
    }


    public function render()
    {
        return view('livewire.admin-shop-item-component');
    }
}
