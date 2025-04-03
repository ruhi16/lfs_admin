<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\Studentdb;
use App\Models\Studentcr;
use App\Models\Myclass;
use App\Models\Section;
use App\Models\MyclassSection;


use Mccarlosen\LaravelMpdf\Facades\LaravelMpdf as PDF;

use Livewire\Component;

class AdminStudentCurrentComponent extends Component{

    public $modal_is_open = false;
    public $currMyclasses, $currSections, $currMyclassSections;

    public $selectedMyclass = null, $selectedSection = null, $message = null;
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
        $this->currSections = MyclassSection::orderBy('myclass_id', 'asc')->get();


        $this->studentcrs = Studentcr::orderBy('myclass_id', 'asc')->get();

        // $this->name = "Ram";
    }

    public function updatedSelectedMyclass(){
        // $this->selectedMyclass = $this->currMyclass;
        // $this->message = $this->selectedMyclass;
        if( $this->selectedMyclass != null ){
            $this->studentcrs = Studentcr::where('myclass_id', $this->selectedMyclass)
                ->orderBy('myclass_id', 'asc')->get();
        }else{
            $this->studentcrs = Studentcr::orderBy('myclass_id', 'asc')->get();
        }
        
    }

    public function generatePdf(){

        // $this->studentcrs = Studentcr::where('myclass_id', $this->selectedMyclass)->get();

        $data = ['title' => 'Merit List Class Section', 'content' => 'This is the content of the Secondary PDF.'];
        $pdf = PDF::loadView('pdfs.temp_studentlist', [
            'studentcrs' => $this->studentcrs,
            
        ], [], [
            'title' => 'Another Title',
            'format' => 'A4-P',
            'orientation' => 'P',
            'margin_top' => 20,
            'default_font_size' => 8,
        ]);
        // return $pdf->stream('document.pdf');
        $pdf_filename = 'StudentList-Class-'. $this->selectedMyclass .'.pdf';

        return response()->streamDownload(function () use ($pdf) {
            echo $pdf->stream();
            // echo $pdf->Output('', 'S'); // Output the PDF content as a string
        }, $pdf_filename, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="ccc.pdf"'
        ]);

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

    public function render(){
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
