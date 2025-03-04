<?php

namespace App\Http\Livewire;

use App\Models\UiScreenDesign;
use Livewire\Component;

class GenCaraoselComponent extends Component
{

    public $uiscreendesigns;

    public function mount() {
        
        $this->uiscreendesigns = UiScreenDesign::where('ui_screen_id', 1)->get();
    }

    

    public function render()
    {
        return view('livewire.gen-caraosel-component');
    }
}
