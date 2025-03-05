<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AdminFacilityUpdateComponent extends Component
{
    public $title, $subtitle, $description;

    public $item_title, $item_description;

    

    public function mount(){
        $this->refresh();
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
    }


    public function render()
    {
        return view('livewire.admin-facility-update-component');
    }

    public function refresh(){
        $this->title = "";
        $this->subtitle = "";
        $this->description = "";
    }
}
