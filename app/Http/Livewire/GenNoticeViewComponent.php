<?php

namespace App\Http\Livewire;

// use App\Models\User;
use App\Models\Notice;

use Livewire\Component;

class GenNoticeViewComponent extends Component
{

    public $notices;
    public function mount(){
        $this->notices = Notice::where('is_active', 1)
            ->orderByDesc('id')
            ->get();
    }


    public function render()
    {
        return view('livewire.gen-notice-view-component');
    }
}
