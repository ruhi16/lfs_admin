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

    public function addItem($itemId = null){
        // dd($this->selectedCategory);
        
        $this->validate([
            'selectedCategory' => 'required', //|exists:shop02_categories,id',
            'itemName' => 'required|string|max:255',
            // 'itemSlug' => 'required|string|max:255',
            // 'itemDescription' => 'required|string|max:255',
            // 'itemPrice' => 'required|numeric',
        ]);

        // dd($this->selectedCategory, $this->itemName);
        
        try{          

            $data = Item::updateOrCreate([
                'id' => $itemId ?? null,
            ],[
                'name' => $this->itemName,
                'slug' => $this->itemSlug,
                'description' => $this->itemDescription,
                'is_active' => 1,
                'category_id' => $this->selectedCategory,
                'owner_id' => auth()->user()->id,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        
            // dd($data);

            $this->items = Item::all();
            $this->reset();
            // $this->dispatch('item-added');

            session()->flash('item_message', 'Item added successfully');

        }catch(\Exception $e){
            // $this->dispatch('error', message: 'Failed to add item');
            session()->flash('item_error', 'Failed to add item'. $e->getMessage());
        }
    }


    public function deleteItem($itemId){
        $item = Item::find($itemId);
        $item->delete();
        $this->items = Item::all();
        session()->flash('item_message', 'Item deleted successfully');
    }
    




    public function render()
    {
        return view('livewire.admin-shop-item-component');
    }
}
