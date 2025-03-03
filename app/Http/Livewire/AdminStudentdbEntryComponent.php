<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AdminStudentdbEntryComponent extends Component
{   public $step = 1; // Current step
    public  $studentdb_id, $student_uuid, $adm_book_no, $adm_book_slno, $adm_class, $adm_section, 
            $student_name, $student_gender, $student_dob, $student_aadhar, $student_blood_grp,
            $student_religion, $student_caste; //$student_subcaste, $student_national;

    public  $addr_line1, $addr_line2, $addr_po, $addr_ps, $addr_dist, $addr_pin,
            $addr_state, $addr_nation, $addr_mobile1, $addr_mobile2; 


    public $office_name, $office_address; // Step 1 fields
    public $studentx_name, $student_email; // Step 2 fields
    public $payment_method, $amount; // Step 3 fields

    // Move to the next step
    public function nextStep()
    {
        // $this->validate($this->rules()[$this->step]);
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
        $this->reset();
        $this->step = 1;

        session()->flash('message', 'Form submitted successfully!');
    }

    // Validation rules for each step
    public function rules()
    {
        return [
            1 => [
                'studentdb_id' => 'required|string|max:255',
                'student_uuid' => 'required|string|max:255',
                'adm_book_no' => 'required|string|max:255',
                'adm_book_slno' => 'required|string|max:255',
                'adm_class' => 'required|string|max:255',
                'adm_section' => 'required|string|max:255',
            ],
            2 => [
                'student_name' => 'required|string|max:255',
                'student_gender' => 'required|email|max:255',
                'student_dob' => 'required|email|max:255',
                'student_aadhar' => 'required|email|max:255',
                'student_blood_group' => 'required|email|max:255',

                'father_name' => 'required|string|max:255',
                'father_aadhar' => 'required|string|max:255',
                'mother_name' => 'required|string|max:255',
                'mother_aadhar' => 'required|string|max:255',
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
}
