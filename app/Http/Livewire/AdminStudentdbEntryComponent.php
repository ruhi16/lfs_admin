<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AdminStudentdbEntryComponent extends Component
{   public $step = 1; // Current step
    public $office_name, $office_address; // Step 1 fields
    public $student_name, $student_email; // Step 2 fields
    public $payment_method, $amount; // Step 3 fields

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
        $this->reset();
        $this->step = 1;

        session()->flash('message', 'Form submitted successfully!');
    }

    // Validation rules for each step
    public function rules()
    {
        return [
            1 => [
                'office_name' => 'required|string|max:255',
                'office_address' => 'required|string|max:255',
            ],
            2 => [
                'student_name' => 'required|string|max:255',
                'student_email' => 'required|email|max:255',
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
