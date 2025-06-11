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

    public $selectedSessionEventCategoryId = null;
    public $selectedSessionEventCategoryParticularId = null;

    public function mount(){
        $this->sessionEventCategories = SessionEventCategory::all();
        $this->sessionEvents = SessionEvent::all();
        $this->sessionEventSchedules = SessionEventSchedule::all();


        
    }

    public function selectSessionEventCategory($eventCategoryId){
        $this->selectedSessionEventCategoryId = $eventCategoryId;

        // Reset the session events and schedules when a new category is selected
        // $this->sessionEvents = SessionEvent::where('session_event_category_id', $eventCategoryId)->get();
        // $this->sessionEventSchedules = collect(); // Clear schedules as well
    }


    public function selectSessionEventCategoryParticular($eventCategoryId, $eventCategoryParticularId){
        $this->selectedSessionEventCategoryParticularId = $eventCategoryParticularId;


        $this->sessionEventSchedules = SessionEventSchedule::where('session_event_category_id', $eventCategoryId)
            ->where('session_event_id', $eventCategoryParticularId)
            ->get();

    }


    public function render(){


        return view('livewire.admin-session-event-management-component');
    }
}
