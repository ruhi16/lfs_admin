<?php

namespace App\Http\Livewire;












use Livewire\Component;

class AdminSessionFeesManagementComponent extends Component{
    
    

    public $myclasses, $studentcrs;
    public $activeMyclassId = null;


    public function mount($myclassId = null){
        $this->myclasses = \App\Models\Myclass::all();
        
        if ($myclassId) {
            $this->activeMyclassId = $myclassId;
        }else{
            $this->activeMyclassId = 1; // Default to the first class, or you can set it to a specific class ID
        }

    }

    public function setActiveMyclass($myclassId)
    {
        $this->activeMyclassId = $myclassId;
        $this->studentcrs = \App\Models\Myclass::find($myclassId)->studentcrs ?? collect();
        $this->emit('activeMyclassSet', $myclassId);
    }

      
    public function render()
    {
        return view('livewire.admin-session-fees-management-component');
    }
}
