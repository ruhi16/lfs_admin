<?php

namespace App\Http\Livewire;
use App\Models\User;
use App\Models\UiSection;
use App\Models\UiScreenDesign;
use Illuminate\Support\Facades\Auth;

use Livewire\Component;

class GenPrincipalSpeachComponent extends Component
{
    public $title, $subTitle, $description;
    public $name, $desig,  $imageRef;
    
    public $principal_desk;

    public function mount(){
        $this->principal_desk = UiScreenDesign::where('ui_screen_id', 1)
            ->where('ui_section_id', 5)
            ->where('ui_entity_id', 1)
            ->first();


        $this->title = "Welcome to School Management System (SMS)";
    }



    public function render()
    {
        return view('livewire.gen-principal-speach-component');
    }
}
