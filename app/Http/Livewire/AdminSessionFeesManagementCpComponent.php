<?php

namespace App\Http\Livewire;

use App\Models\FeeCategory;
use App\Models\FeeParticular;
use App\Models\FeeStructure;
use App\Models\Myclass;
use App\Models\SessionEvent;
use App\Models\SessionEventCategory;
use App\Models\SessionEventSchedule;
use App\Models\Studentcr;

use Livewire\Component;
use Session;
use Validator;

class AdminSessionFeesManagementCpComponent extends Component
{

    public $sessionFeesParticulars, $sessionFeeCategories, $sessionFeesStructures;

    public $categoryModal = false, $categoryName = null, $editCategoryId = null;
    public $particularModal = false, $particularName = null, $particularNameEdit = [], $editParticularId = null, 
            $particularCategoryId = null, $particularsOfCategory = null, 
            $particularEditFlag = false, $particularDeleteFlag = false;



    // public $myclasses, $sessionEvents, $studentcrs, $sessionEventsSchedules = null;
    // public $selectedClass = null, $selectedSessionEvent = null;
    // public $structureModal = false, $structureName = null, $editStructureId = null;

    public function mount(){
        $this->sessionFeeCategories = FeeCategory::all();
        $this->sessionFeesParticulars = FeeParticular::all();
        $this->sessionFeesStructures = FeeStructure::all();

        // $this->myclasses = Myclass::all();
        // $this->sessionEvents = SessionEvent::all();
        $this->studentcrs = Studentcr::all();
        // $this->sessionEventsSchedules = SessionEventSchedule::all();

    }

    public function updatedSelectedSessionEvent(){
        $this->sessionEventsSchedules = SessionEventSchedule::where('session_event_id', $this->selectedSessionEvent)->get();
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


    // public function deleteCategory($categoryId){
    //     try{
    //         FeeCategory::find($categoryId)->delete();
    //         Session::flash('success', 'Category deleted successfully.');
    //     }catch(\Exception $e){
    //         Session::flash('error', $e->getMessage());
    //     }
    // }


      
    public function particularModalOpen($feeCategoryId, $particularEditFlag = false, $particularDeleteFlag = false){
        $this->particularEditFlag = $particularEditFlag;
        $this->particularDeleteFlag = $particularDeleteFlag;

        $this->particularCategoryId = $feeCategoryId;
        $this->categoryName = FeeCategory::find($feeCategoryId)->name;

        if($this->particularEditFlag){            
            $this->particularsOfCategory = FeeParticular::where('fee_category_id', $feeCategoryId)->get();
            foreach($this->particularsOfCategory as $particular){
                $this->particularNameEdit[$particular->id] = $particular->name;
            }            
        }
        

        
        $this->particularModal = true;
    }

    public function particularModalClose(){
        $this->particularEditFlag = false;
        $this->particularDeleteFlag = false;

        $this->particularsOfCategory = null;

        $this->particularCategoryId = null;
        $this->categoryName = null;
        $this->particularName = null;
        
        $this->particularNameEdit = [];   
        $this->editParticularId = null;

        $this->particularModal = false;
    }


    public function particularModalSaveData(){
        
        // dd($this->particularEditFlag);

        try{
            if($this->particularEditFlag){
                // Edit particular name
                // dd($this->particularNameEdit);
                // $validatedName = Validator::make($this->particularNameEdit, [
                //     '*.particularNameEdit' => 'required|string|max:255', // Validate each name in the array
                // ])->validate();
                $validatedName = $this->validate([
                    'particularNameEdit.*' => 'required|string|max:255', // Validate each element in the array
                ], [
                    'particularNameEdit.*.required' => 'Please enter the particular name.',
                    'particularNameEdit.*.string' => 'The particular name must be a valid string.',
                    'particularNameEdit.*.max' => 'The particular name cannot exceed 255 characters.',
                ]);

                // dd(true, $validatedName);
                // Update each particular name
                foreach($this->particularNameEdit as $key => $name){
                    FeeParticular::find($key)
                        ->update([
                            'name' => $name,
                    ]);
                }


            }else{
                $validatedName = $this->validate([
                    'particularName' => 'required'],
                    [
                    'particularName.required' => 'Please enter the particular name.'
                    
                ]);

                FeeParticular::create([
                    'name' => $validatedName['particularName'],
                    'fee_category_id' => $this->particularCategoryId,
                ]);
            }

            $this->particularCategoryId = null;
            Session::flash('partSuccess', 'Particular added successfully.');
        }catch(\Exception $e){
            Session::flash('partError', $e->getMessage());
        }
        

        $this->particularModal = false;
    }


    public function render()
    {
        return view('livewire.admin-session-fees-management-cp-component');
    }
}
