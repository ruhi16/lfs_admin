<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AdminSessionExamManagementComponent extends Component
{

    public $activeSection = 'dashboard';
    public $openSubmenus = [];

    // Dashboard stats
    public $totalExams = 0;
    public $totalStudents = 0;
    public $totalQuestions = 0;
    public $completedExams = 0;

    // Exam Management Properties
    public $examTitle = '';
    public $examDescription = '';
    public $examDuration = 60;
    public $examDate = '';
    public $examTime = '';
    public $examMaxMarks = 100;
    public $selectedQuestions = [];

    // Question Management Properties
    public $questionText = '';
    public $questionType = 'multiple_choice';
    public $questionOptions = ['', '', '', ''];
    public $correctAnswer = '';
    public $questionCategory = '';
    public $questionDifficulty = 'medium';

    // Student Management Properties
    public $studentName = '';
    public $studentEmail = '';
    public $studentId = '';
    public $selectedStudents = [];

    protected $rules = [
        'examTitle' => 'required|min:3',
        'examDescription' => 'required|min:10',
        'examDuration' => 'required|numeric|min:1',
        'examDate' => 'required|date',
        'examTime' => 'required',
        'examMaxMarks' => 'required|numeric|min:1',
        'questionText' => 'required|min:5',
        'questionType' => 'required|in:multiple_choice,true_false,short_answer,essay',
        'correctAnswer' => 'required',
        'questionCategory' => 'required',
        'studentName' => 'required|min:2',
        'studentEmail' => 'required|email',
        'studentId' => 'required|unique:students,student_id',
    ];

    public function mount()
    {
        $this->loadDashboardStats();
    }

    

    // Navigation Methods
    public function setActiveSection($section)
    {
        $this->activeSection = $section;
        $this->resetValidation();
    }

    public function toggleSubmenu($submenu)
    {
        if (in_array($submenu, $this->openSubmenus)) {
            $this->openSubmenus = array_diff($this->openSubmenus, [$submenu]);
        } else {
            $this->openSubmenus[] = $submenu;
        }
    }

    // Dashboard Methods
    public function loadDashboardStats()
    {
        // $this->totalExams = Exam::count();
        // $this->totalStudents = Student::count();
        // $this->totalQuestions = Question::count();
        // $this->completedExams = Exam::where('status', 'completed')->count();
    }

    public function refreshStats()
    {
        $this->loadDashboardStats();
        $this->emit('statsUpdated');
    }



















    public function render()
    {
        return view('livewire.admin-session-exam-management-component');
    }
}
