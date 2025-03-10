<?php

namespace App\Http\Livewire;

use App\Models\Myclass;
use App\Models\Myclasssection;
use App\Models\Section;
use App\Models\Studentcr;
use App\Models\Studentdb;
use App\Models\User;

use Livewire\Component;

class AdminStudentdbEntryComponent extends Component
{   public $step = 1; // Current step
    public  $studentdb_id, $student_uuid, $adm_book_no, $adm_book_slno, $adm_class, $adm_section, 
            $student_name, $student_gender, $student_dob, $student_aadhar, $student_blood_grp,
            $student_religion, $student_caste; //$student_subcaste, $student_national;

    public  $father_name, $father_aadhar, $mother_name, $mother_aadhar,
            $addr_line1, $addr_line2, $addr_po, $addr_ps, $addr_dist, $addr_pin,
            $addr_state, $addr_nation, $addr_mobile1, $addr_mobile2; 


    public $office_name, $office_address; // Step 1 fields
    public $studentx_name, $student_email; // Step 2 fields
    public $payment_method, $amount; // Step 3 fields


    public $curr_classes, $curr_myclass_sections, $curr_rollno ;

    public function mount(){
        // $this->refresh();
        // $this->studentdb_id = auth()->user()->id;
        $this->student_uuid = $this->unique_code(7);
        // $this->student_uuid = auth()->user()->uuid;

        $this->curr_classes = Myclass::all();
        $this->curr_myclass_sections = MyclassSection::all();

    }
    // Move to the next step
    public function nextStep()
    {
        $this->validate($this->rules()[$this->step]);
        $this->step++;
    }

    // Move to the previous step
    public function previousStep()
    {
        $this->step--;
    }

    // Submit the form
    public function submit()
    {
        $this->validate($this->rules()[$this->step]);

        // Save data to database or perform other actions
        // Example: \App\Models\Student::create($this->all());

        // Reset form
        // $this->reset();
        $this->step = 1;

        try{
        $studentdb = Studentdb::updateOrCreate([
            'uuid_auto' => $this->student_uuid,

        ],[
            'admBookNo' => $this->adm_book_no,
            'admSlNo'=> $this->adm_book_slno,
            'admDate' => date('Y-m-d'),
            'prCls' => null,
            'prSch' => null,
            'name' => $this->student_name,
            'adhaar' => $this->student_aadhar,
            'fname' => $this->father_name,
            'fadhaar' => $this->father_aadhar,
            'mname' => $this->mother_name,
            'madhaar' => $this->mother_aadhar,
            'dob' => $this->student_dob,
            'post' => $this->addr_po,
            'pstn' => $this->addr_ps,
            'dist' => $this->addr_dist,
            'pin' => $this->addr_pin,
            'mobl' => $this->addr_mobile1 .', '. $this->addr_mobile2,
            'ssex'  => $this->student_gender,
            'relg' => $this->student_religion,
            'cste' => $this->student_caste,
            'stclass_id' => $this->adm_class,
            'stsection_id' => $this->adm_section,
            'user_id' => auth()->user()->id,

            ]);

            $studentcr = Studentcr::where('myclass_id', $studentdb->stclass_id)
                ->where('section_id', $studentdb->stsection_id)
                ->orderBy('roll_no', 'desc')
                ->first();

            Studentcr::updateOrCreate([
                    'myclass_id'=> $studentdb->stclass_id,
                    'section_id'=> $studentdb->stsection_id,
                    'studentdb_id'=> $studentdb->id,
                    'session_id'=> 1,
                ],[
                    'roll_no' => $studentcr ? $studentcr->roll_no + 1 : 1,
                ]);

            session()->flash('message', 'Form submitted successfully!');
        }catch(\Exception $e){
            session()->flash('error', $e->getMessage());
        }
    }

    // Validation rules for each step
    public function rules()
    {
        return [
            1 => [
                'studentdb_id' => 'required',
                'student_uuid' => 'required|string|max:255',
                'adm_book_no' => 'required',
                'adm_book_slno' => 'required',
                'adm_class' => 'required',
                'adm_section' => 'required',
                'student_name' => 'required|string|max:255',
                'student_gender' => 'required|string|max:255',
                'student_dob' => 'required|',
                'student_aadhar' => 'required|',
                'student_blood_grp' => 'required|',
                'student_religion' => 'required|string|max:255',
                'student_caste' => 'required|string|max:255',
                // 'student_subcaste' => 'required|string|max:255',
                // 'student_national' => 'required|string|max:255',
            ],
            2 => [
                'father_name' => 'required|string|max:255',
                'father_aadhar' => 'required|string|max:255',
                'mother_name' => 'required|string|max:255',
                'mother_aadhar' => 'required|string|max:255',
                'addr_line1' => 'required|string|max:255',
                'addr_line2' => 'required|string|max:255',
                'addr_po' => 'required|string|max:255',
                'addr_ps' => 'required|string|max:255',
                'addr_dist' => 'required|string|max:255',
                'addr_pin' => 'required|string|max:255',
                'addr_state' => 'required|string|max:255',
                'addr_nation' => 'required|string|max:255',
                'addr_mobile1' => 'required|string|max:10',
                'addr_mobile2' => 'required|string|max:10',
            ],
            3 => [
                'payment_method' => 'required|string|max:255',
                'amount' => 'required|numeric',
            ],
        ];


        
    }
    public function render()
    {
        return view('livewire.admin-studentdb-entry-component');
    }

    public function unique_code($limit)
    {
        return strtoupper(substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, $limit) );
    }
}
