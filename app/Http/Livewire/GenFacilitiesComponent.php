<?php

namespace App\Http\Livewire;

use App\Models\UiScreenDesign;
use App\Models\UiSection;

use Livewire\Component;

class GenFacilitiesComponent extends Component
{
    public $section_name, $section_title, $section_subtitle, $section_description;
    public $item_id, $item_icon, $item_title, $item_description;

    public $section;
    public $section_entities;

    public function mount(){
        $this->section = UiSection::where('id', 3)->first();
        $this->section_entities = UiScreenDesign::where('ui_section_id', $this->section->id)->get();
        $this->refresh();
    }

    public function render()
    {
        return view('livewire.gen-facilities-component');
    }

    public function refresh(){
        
        $this->section_name = $this->section->name;
        $this->section_title = $this->section->title;
        $this->section_subtitle = $this->section->subtitle;
        $this->section_description = $this->section->description;
    }
}
