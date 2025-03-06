<?php

namespace App\Http\Livewire;
use App\Models\UiScreenDesign;
use App\Models\UiSection;
use Livewire\Component;

class AdminFacilityUpdateComponent extends Component
{
    public $title, $subtitle, $description;

    public $itemId, $itemIcon, $itemTitle, $itemDescription;

    public $section;
    public $section_entities;

    public $message = 'not clicked';

    public function mount(){
        
        $this->section = UiSection::where('id', 3)->first();
        $this->section_entities = UiScreenDesign::where('ui_section_id', $this->section->id)->get();
        $this->refresh();


    }

    public function updatedItemId(){         
        $this->message = 'clicked';
    }


    

    public function saveFacility(){
        $this->validate([
            'title' => 'required',
            'subtitle' => 'required',
            'description' => 'required'
        ],
        [
            'title.required' => 'Please enter the title.',
            'subtitle.required' => 'The subtitle is invalid.',
        ]);

        try{
            $section = UiSection::updateOrCreate([
                'id' => 3,
            ],[
                'title' => $this->title,
                'subtitle' => $this->subtitle,
                'description' => $this->description,
                'order_index' => 3
            ]);


            session()->flash('message', 'Facility has been updated successfully!');
        }catch(\Exception $e){
            session()->flash('error', $e->getMessage());
        }
    }

    public function saveFacilityItem($id){
        $this->validate([
            'itemId' => 'required',
            'itemIcon' => 'required',
            'itemTitle' => 'required',
            'itemDescription' => 'required'
        ],
        [
            'itemId.required' => 'The item is invalid.',
            'itemIcon.required' => 'Please enter the icon.',
            'itemTitle.required' => 'The title is invalid.',
            'itemDescription.required'=> 'Please enter the description.',
        ]);


        try{
            $section_item = UiScreenDesign::updateOrCreate([
                'ui_screen_id'=> 1,
                'ui_section_id' => 3,
                'ui_entity_id' => $id,
            ],[
                // 'icon' => $this->item_icon,
                'title' => $this->itemTitle,
                'details' => $this->itemDescription,
                'img_ref_1' => $this->itemIcon  
            
            ]);

            session()->flash('message', 'Facility item has been updated successfully!');
        }catch(\Exception $e){
            session()->flash('error', $e->getMessage());
        }
    }


    public function render()
    {
        return view('livewire.admin-facility-update-component');
    }

    public function refresh(){

        $this->title = $this->section->title ?? '';
        $this->subtitle = $this->section->subtitle ?? '';
        $this->description = $this->section->description ?? '';"";
        
    }

    public function refreshItem(){
        $this->itemId = "";
        $this->itemIcon = "";
        $this->itemTitle = "";
        $this->itemDescription = "";
    }
}
