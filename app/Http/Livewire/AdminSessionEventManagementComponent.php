<?php

namespace App\Http\Livewire;


use App\Models\Session;
use App\Models\SessionEvent;
use App\Models\SessionEventCategory;
use App\Models\SessionEventSchedule;

use Livewire\Component;

class AdminSessionEventManagementComponent extends Component{


    public $sessionEventCategories;
    public $sessionEvents;
    public $sessionEventSchedules;

    public $activeSessionEvent = false;

    public function mount(){
        $this->sessionEventCategories = SessionEventCategory::all();
        $this->sessionEvents = SessionEvent::all();
        $this->sessionEventSchedules = SessionEventSchedule::all();


    }


    public function selectSessionEvent($eventCategoryId, $eventId){
        $this->sessionEventSchedules = SessionEventSchedule::where('session_event_category_id', $eventCategoryId)
            ->where('session_event_id', $eventId)
            ->get();

    }


    public function render(){


        return view('livewire.admin-session-event-management-component');
    }
}
