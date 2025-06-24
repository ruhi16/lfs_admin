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

    public function addItem($itemId = null)
    {
        $this->validate([
            'itemName' => 'required|string|max:255',
            'itemSlug' => 'required|string|max:255', //|unique:shop03_items,slug',
            'itemDescription' => 'nullable|string|max:500',
            'selectedCategory' => 'required|exists:shop02_categories,id',
        ]);


        try {
            $data = Item::updateOrCreate([
                'id' => $itemId, // If $itemId is null, it will create a new item
            ], [
                'name' => $this->itemName,
                'slug' => $this->itemSlug,
                'description' => $this->itemDescription,
                // 'price' => $this->itemPrice,
                // 'owner_id' => 1, // auth()->id(), // Assuming the owner is the authenticated user
                // 'category_id' => $this->selectedCategory,
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            $this->items = Item::all(); // Refresh the items list



            session()->flash('message', 'Item "' . $this->itemName . '" added successfully!');

        } catch (\Exception $e) {
            session()->flash('error', 'Error adding item: ' . $e->getMessage());
        }
    }


    // public function filterByCategory($categoryId)
    // {
    //     $this->selectedCategory = $categoryId;
    //     if ($categoryId) {
    //         $this->items = Item::where('category_id', $categoryId)->get();
    //     } else {
    //         $this->items = Item::all(); // Reset to all items if no category is selected
    //     }
    // }

    public function deleteItem($itemId)
    {
        $item = Item::find($itemId);
        if ($item) {
            $item->delete();
            $this->items = Item::all(); // Refresh the items list
            session()->flash('message', 'Item deleted successfully.');
        } else {
            session()->flash('error', 'Item not found.');
        }
    }


    public function editItem($itemId)
    {
        $item = Item::find($itemId);
        if ($item) {
            $this->itemId = $item->id;
            $this->itemName = $item->name;
            $this->itemSlug = $item->slug;
            $this->itemDescription = $item->description;
            $this->selectedCategory = $item->category_id; // Set the selected category
            // You can also set other fields like price, image, etc. if needed
        } else {
            session()->flash('error', 'Item not found.');
        }
    }

    public function refresh(){       
            $this->selectedCategory = null; // Reset the selected category 
            // $this->itemId = null; // Reset the item ID
            $this->itemName = ''; // Reset the input field
            $this->itemSlug = ''; // Reset the input field
            $this->itemDescription = ''; // Reset the input field
    }


    public function render()
    {
        return view('livewire.admin-shop-item-component');
    }
}
