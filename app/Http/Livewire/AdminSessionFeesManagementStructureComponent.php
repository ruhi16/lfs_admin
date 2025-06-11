<?php

namespace App\Http\Livewire;
use App\Models\FeeMandate;
use App\Models\FeeStructure;
use App\Models\Myclass;
use App\Models\SessionEvent;
use App\Models\SessionEventCategory;
use App\Models\SessionEventSchedule;
use App\Models\Studentcr;
use Livewire\Component;

class AdminSessionFeesManagementStructureComponent extends Component
{
    public $myclasses, $sessionEvents, $studentcrs, $sessionEventsSchedules = null;
    public $selectedClass = null, $selectedSessionEvent = null;

    public $selectedClassMessage = null;
    public $selectedSessionEventMessage = null;

    public $sessionFeeMandates = null, $sessionFeeSchedules = null, $sessionFeeStructures = null;


    public $currentStep = 1;
    

    public function mount(){

        $this->sessionFeesStructures = FeeStructure::all();

        $this->myclasses = Myclass::all();
        $this->sessionEvents = SessionEvent::all();

        $this->sessionFeeMandates = FeeMandate::all();
        $this->sessionFeeSchedules = SessionEventSchedule::all();
        $this->sessionFeeStructures = FeeStructure::all();
        


        // $this->sessionEventsSchedules = SessionEvent::where('status', 'active')->get();
        $this->studentcrs = Studentcr::all();
    }

    public function updatedSelectedClass($classId){
        $this->selectedClassMessage = "MyClass with ID $classId selected.";
        // $this->sessionEventsSchedules = SessionEvent::where('myclass_id', $classId)->get();
    
    }

    public function updatedSelectedSessionEvent($sessionEventId){
        if($this->selectedClass && $this->selectedSessionEvent){
            $this->sessionEventsSchedules = SessionEventSchedule::where('session_event_id', $sessionEventId)                
                ->get();
        }
        // $this->studentcrs = Studentcr::where('session_event_id', $sessionEventId)->get();
    
    }

    public function nextStep()
    {
        if ($this->currentStep < 3) {
            $this->currentStep++;
        }

    }
    public function previousStep()
    {
        if ($this->currentStep > 1) {
            $this->currentStep--;
        }
    }


    public function render()
    {
        return view('livewire.admin-session-fees-management-structure-component');
    }

}
