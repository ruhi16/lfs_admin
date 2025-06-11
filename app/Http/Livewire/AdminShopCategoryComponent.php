<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Shop02Category as Category; 


class AdminShopCategoryComponent extends Component
{
    
    public $categoryId = null,  $categoryName = null, $categorySlug = null, $categoryDescription = null; 
    public $categories = []; 

    public function mount()
    {
        $this->categories = Category::all();

    }   

    

    public function addCategory($categoryId = null)
    {
        // dd($categoryId);
        
        $this->validate([
            'categoryName' => 'required|string|max:255',
            'categorySlug' => 'required|string|max:255', //|unique:shop02_categories,slug',
            'categoryDescription' => 'nullable|string|max:500',
        ]);
        try{
            $data = Category::updateOrCreate([
                'id' => $categoryId, // If $categoryId is null, it will create a new category
            ],[
                'name' => $this->categoryName,
                'slug' => $this->categorySlug,
                'description' => $this->categoryDescription,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            // dd($data);
            
            $this->categories = Category::all(); // Refresh the categories list

            session()->flash('message', 'Category "' . $this->categoryName . '" added successfully!');
            $this->categoryId = null; // Reset the category ID
            $this->categoryName = ''; // Reset the input field
            $this->categorySlug = ''; // Reset the input field
            $this->categoryDescription = ''; // Reset the input field

        }catch(\Exception $e){
            session()->flash('error', 'Error adding category: ' . $e->getMessage());
            return;
        }

        
    }

    public function editCategory($categoryId)
    {        
        $category = Category::find($categoryId);

        if ($category) {
            $this->categoryId = $category->id;
            $this->categoryName = $category->name; 
            $this->categorySlug = $category->slug;
            $this->categoryDescription = $category->description;

            // $this->addCategory($categoryId); // Call addCategory to save changes

            session()->flash('message', 'Editing category: ' . $category->name);
        } else {
            session()->flash('error', 'Category not found.');
        }
    }


    public function deleteCategory($categoryId)
    {
        $category = Category::find($categoryId);

        if ($category) {
            $category->delete();
            $this->categories = Category::all(); // Refresh the categories list
            
            session()->flash('message', 'Category "' . $category->name . '" deleted successfully!');
        } else {
            session()->flash('error', 'Category not found.');
        }
    }

    public function render()
    {
        return view('livewire.admin-shop-category-component');
    }
}
