<?php

namespace App\Http\Livewire;

use App\Models\Myclass;
use App\Models\MyclassSection;
use App\Models\Section;
use App\Models\Studentcr;
use App\Models\Studentdb;
use App\Models\User;

use Livewire\Component;
use Livewire\WithFileUploads;

class AdminStudentdbEntryComponent extends Component
{   
    use WithFileUploads;
    public $step; // Current step
    public  $studentdb_id = null, $student_uuid = null, $adm_book_no = null, $adm_book_slno = null, $adm_class = null, $adm_section = null, 
            $student_name = null, $student_gender = null, $student_dob = null, $student_aadhar = null, $student_blood_grp = null,
            $student_religion = null, $student_caste = null; //$student_subcaste, $student_national;

    public  $father_name = null, $father_aadhar = null, $mother_name = null, $mother_aadhar = null,
            $addr_line1 = null, $addr_line2 = null, $addr_po = null, $addr_ps = null, $addr_dist = null, $addr_pin = null,
            $addr_state = null, $addr_nation = null, $addr_mobile1 = null, $addr_mobile2 = null; 

    public $adm_roll_no = null;
    
    public $studentdb = null;

    public $img_ref_profile = null, $img_ref_aadhar = null, $img_ref_birthcertificate = null,$img_ref_caste = null, $img_ref_income = null, $img_ref_residence = null, $img_ref_marksheet = null, $img_ref_tc = null, $img_ref_other = null;
    
    public $img_url_profile = null;

    public $office_name = null, $office_address = null; // Step 1 fields
    public $studentx_name = null, $student_email = null; // Step 2 fields
    public $payment_method = null, $amount = 0; // Step 3 fields


    public $curr_classes = null, $curr_myclass_sections = null, $curr_rollno = null;

    public function mount($studentdb_id = null){
        // $this->refresh();
        // $this->studentdb_id = auth()->user()->id;
        $this->step = 1;
        $this->student_uuid = $this->unique_code(7);
        // $this->student_uuid = auth()->user()->uuid;
        $this->addr_state = 'West Bengal';
        $this->addr_nation = 'India';
        $this->curr_classes = Myclass::all();
        $this->curr_myclass_sections = MyclassSection::all();
        if($studentdb_id > 0){
            // dd($studentdb_id);
            $this->updationDataload($studentdb_id);
        }

    }


    public function updation($studentdb_id){
        // dd($studentdb_id);
        $this->updationDataload($studentdb_id);
        $this->curr_classes = Myclass::all();
        $this->curr_myclass_sections = MyclassSection::all();

        // dd($this->studentdb);
        // $this->redner();

        return view('livewire.admin-studentdb-entry-component', [
            'step' => $this->step,
            'curr_classes' => $this->curr_classes,
            'curr_myclass_sections' => $this->curr_myclass_sections,
            'adm_class' => $this->adm_class,
        ]);
    }

    public function updationDataload($studentdb_id){
        $this->studentdb = Studentdb::find($studentdb_id);

        if($this->studentdb){
            // $this->step = 1;
            $this->studentdb_id = $this->studentdb->id;
            $this->student_uuid = $this->studentdb->uuid_auto;
            $this->adm_book_no = $this->studentdb->admBookNo;
            $this->adm_book_slno = $this->studentdb->admSlNo;
            
            // $this->adm_date = $this->studentdb->admDate;
            $this->adm_class = $this->studentdb->stclass_id;
            $this->adm_section = $this->studentdb->stsection_id;
            $this->adm_roll_no = $studentdb_id > 0 ? $this->studentdb->studentcrs()->where('session_id', 1)->first()->roll_no : 0;
            $this->student_name = $this->studentdb->name;            
            $this->student_gender = $this->studentdb->ssex;
            $this->student_dob = $this->studentdb->dob;
            $this->student_aadhar = $this->studentdb->adhaar;
            $this->student_blood_grp = $this->studentdb->blood_grp;
            $this->student_religion = $this->studentdb->relg;
            $this->student_caste = $this->studentdb->cste;

            // $this->student_email = $this->studentdb->email;
            $this->father_name = $this->studentdb->fname;
            $this->father_aadhar = $this->studentdb->fadhaar;
            $this->mother_name = $this->studentdb->mname;
            $this->mother_aadhar = $this->studentdb->madhaar;
            $this->addr_line1 = $this->studentdb->vill1;
            $this->addr_line2 = $this->studentdb->vill2;
            $this->addr_po = $this->studentdb->post;
            $this->addr_ps = $this->studentdb->pstn;
            $this->addr_dist = $this->studentdb->dist;
            $this->addr_pin = $this->studentdb->pin;
            $this->addr_state = $this->studentdb->state ?: 'West Bengal';
            $this->addr_nation = $this->studentdb->natn ?: 'Indian';
            $this->addr_mobile1 = $this->studentdb->mobl1;
            $this->addr_mobile2 = $this->studentdb->mobl2;
            // $this->img_ref_profile = $this->studentdb->img_ref_profile;
        }
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

        $this->step = 1;

        // Save data to database or perform other actions
        // Example: \App\Models\Student::create($this->all());
        // Reset form
        // $this->reset();
        // dd($this->studentdb_id);


        try{
            if($this->img_ref_profile){
                $this->img_url_profile = $this->img_ref_profile->storeAs('public/studentdb', $this->studentdb_id .'_profile.' . $this->img_ref_profile->getClientOriginalExtension());
                // <img src="{{ Storage::disk('public')->exists($existingImage) ? asset('storage/' . $existingImage) : asset('path/to/default/image.jpg') }}" 
            }else{
                $this->img_url_profile = null;
            }


        $studentdb = Studentdb::updateOrCreate([
            // 'uuid_auto' => $this->student_uuid,
            'id' => $this->studentdb_id,

        ],[
            'admBookNo' => $this->adm_book_no,
            'admSlNo'=> $this->adm_book_slno,
            'admDate' => date('Y-m-d'),
            'uuid_auto' => $this->student_uuid,
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
            'state' => $this->addr_state,
            'mobl' => $this->addr_mobile1,
            'ssex'  => $this->student_gender,
            'relg' => $this->student_religion,
            'cste' => $this->student_caste,
            'stclass_id' => $this->adm_class,
            'stsection_id' => $this->adm_section,
            'user_id' => auth()->user()->id,
            'img_ref_profile' => $this->img_url_profile ?: $this->studentdb->img_ref_profile,

        ]);

            // dd($studentdb);

            if($this->studentdb == null){
                // for new student only: find the student with last roll no
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
                        // 'roll_no' => $this->addr_roll_no,
                    ]);
            }else{
                Studentcr::updateOrCreate([
                    'myclass_id'=> $studentdb->stclass_id,
                    'section_id'=> $studentdb->stsection_id,
                    'studentdb_id'=> $studentdb->id,
                    'session_id'=> 1,
                ],[
                    // 'roll_no' => $studentcr ? $studentcr->roll_no + 1 : 1,
                    'roll_no' => $this->adm_roll_no,
                ]);
            }

            
            session()->flash('message', '{$studentdb->name} Form submitted successfully!');
        }catch(\Exception $e){
            session()->flash('error', $e->getMessage());
        }
        return redirect()->route('admin.studentcr-details');
    }

    public function initiate_values(){
        $this->student_uuid = $this->unique_code(7);
        $this->adm_book_no = null;
        $this->adm_book_slno = null;
        $this->adm_class = null;
        $this->adm_section = null;
        $this->adm_roll_no = null;
        $this->student_name = null;
        $this->student_email = null;
        $this->student_gender = null;
        $this->student_dob = null;
        $this->student_aadhar = null;
        $this->student_blood_grp = null;
        $this->student_religion = null;
        $this->student_caste = null;
        $this->student_subcaste = null;
        $this->student_national = null;
        $this->father_name = null;
        $this->father_aadhar = null;
        $this->mother_name = null;
        $this->mother_aadhar = null;
        $this->addr_po = null;
        $this->addr_ps = null;
        $this->addr_dist = null;
        $this->addr_pin = null;
        $this->addr_mobile1 = null;
        $this->addr_mobile2 = null;
        $this->img_ref_profile = null;
    }


    // Validation rules for each step
    public function rules()
    {
        return [
            1 => [
                'studentdb_id' => 'required',
                'student_uuid' => 'required|string|max:255',
                // 'adm_book_no' => 'required',
                // 'adm_book_slno' => 'required',
                'adm_class' => 'required',
                'adm_section' => 'required',
                // 'adm_roll_no' => 'required',
                // 'adm_date' => 'required|date',
                'student_name' => 'required|string|max:255',
                'student_gender' => 'required|string|max:255',
                'student_dob' => 'required|',
                // 'student_aadhar' => 'required|',
                // 'student_blood_grp' => 'required|',
                'student_religion' => 'required|string|max:255',
                'student_caste' => 'required|string|max:255',
                // 'student_subcaste' => 'required|string|max:255',
                // 'student_national' => 'required|string|max:255',
            ],
            2 => [
                'father_name' => 'required|string|max:255',
                // 'father_aadhar' => 'required|string|max:255',
                'mother_name' => 'required|string|max:255',
                // 'mother_aadhar' => 'required|string|max:255',
                'addr_line1' => 'required|string|max:255',
                // 'addr_line2' => 'required|string|max:255',
                'addr_po' => 'required|string|max:255',
                'addr_ps' => 'required|string|max:255',
                'addr_dist' => 'required|string|max:255',
                'addr_pin' => 'required|string|max:255',
                'addr_state' => 'required|string|max:255',
                'addr_nation' => 'required|string|max:255',
                'addr_mobile1' => 'required|string|max:50',
                // 'addr_mobile2' => 'required|string|max:10',
            ],
            3 => [
                'payment_method' => 'required|string|max:255',
                // 'amount' => 'required|numeric',
                // 'img_ref_profile' => 'required|image|max:2048|mimes:png,jpg,jpeg,webp,pdf', // 2MB Max
            ],
        ];


        
    }
    public function render(){
        
        
        return view('livewire.admin-studentdb-entry-component', [
            'step' => $this->step,
            'curr_classes' => $this->curr_classes,
            'curr_myclass_sections' => $this->curr_myclass_sections,
            'adm_class' => $this->adm_class,
        ]);
    }

    public function unique_code($limit)
    {
        return strtoupper(substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, $limit) );
    }
}
