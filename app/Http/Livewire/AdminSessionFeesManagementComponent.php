<?php

namespace App\Http\Livewire;

use App\Models\FeeCategory;
use App\Models\FeeParticular;
use App\Models\FeeStructure;


use Livewire\Component;
use Session;

class AdminSessionFeesManagementComponent extends Component{


    public $sessionFeesParticulars, $sessionFeeCategories, $sessionFeesStructures;

    public $categoryModal = false, $categoryName = null, $editCategoryId = null;

    public function mount(){
        $this->sessionFeeCategories = FeeCategory::all();
        $this->sessionFeesParticulars = FeeParticular::all();
        $this->sessionFeesStructures = FeeStructure::all();

    }

    public function categoryModalOpen(){
        $this->categoryModal = true;
    }

    public function categoryModalClose(){
        $this->categoryModal = false;
    }


    public function categoryModalEditData($categoryId){
        $this->categoryModal = true;
        $this->editCategoryId = $categoryId;
        $this->categoryName = FeeCategory::find($categoryId)->name;
    }



    public function categoryModalSaveData(){
        
        $validatedName = $this->validate([
            'categoryName' => 'required'],
            [
            'categoryName.required' => 'Please enter the category name.'
            
        ]);
        
        try{
            if($this->editCategoryId){
                FeeCategory::find($this->editCategoryId)
                    ->update([
                        'name' => $validatedName['categoryName'],
                ]);
            }else{
                FeeCategory::create([
                    'name' => $validatedName['categoryName'],
                ]);
            }

            


            Session::flash('success', 'Category added successfully.');
        }catch(\Exception $e){
            Session::flash('error', $e->getMessage());
        }
        

        $this->categoryModal = false;
    }


    public function render()
    {
        return view('livewire.admin-session-fees-management-component');
    }
}
