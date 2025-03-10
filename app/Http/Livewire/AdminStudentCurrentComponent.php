<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\Studentdb;
use App\Models\Studentcr;
use App\Models\Myclass;
use App\Models\Section;
use App\Models\MyclassSection;

use Livewire\Component;

class AdminStudentCurrentComponent extends Component{

    public $modal_is_open = false;
    public $currMyclasses, $currSections, $currMyclassSections;
    public $studentcrs; 

    public $myclass, $section, $rollNo, $regNo;
    public $name, $gender, $dob;
    public $aadhar, $religious, $caste, $nationality;
    public $fname, $mname;
    public $addrLine1, $addrLine2, $postoffice,  $policeStm;
    public $district, $pin, $mob1, $mob2;


    public function mount(){
        $this->refresh();

        $this->currMyclassSections = MyclassSection::all();
        $this->currMyclasses = Myclass::all();
        $this->currSections = MyclassSection::all();


        $this->studentcrs = Studentcr::all();

        // $this->name = "Ram";
    }

    public function openModal(){
        $this->modal_is_open = true;
    }

    public function closeModal(){    
        $this->modal_is_open = false;
    }


    public function saveStudentDB(){
        $this->validate([
            'name' => 'required',
            'gender' => 'required',
            'aadhar' => 'required',
        ]);


    }

    public function render()
    {
        return view('livewire.admin-student-current-component');
    }

    public function refresh(){
        $this->myclass = '';
        $this->section = '';
        $this->rollNo = '';
        $this->regNo = '';


        $this->name = '';
        $this->gender = '';
        $this->aadhar = '';

        


    }
}
