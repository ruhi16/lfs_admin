<div>
    
<div class="min-h-screen bg-gray-50">
    <!-- Header -->
    <header class="bg-white shadow-sm border-b border-gray-200">
        <div class="flex items-center justify-between px-6 py-4">
            <div class="flex items-center space-x-4">
                <div class="flex items-center space-x-2">
                    <div class="w-8 h-8 bg-blue-600 rounded-lg flex items-center justify-center">
                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                        </svg>
                    </div>
                    <h1 class="text-xl font-semibold text-gray-900">Exam Management</h1>
                </div>
            </div>
            <div class="flex items-center space-x-4">
                <button class="p-2 text-gray-500 hover:text-gray-700">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-5 5-5-5h5v-12"></path>
                    </svg>
                </button>
                <div class="w-8 h-8 bg-gray-300 rounded-full"></div>
            </div>
        </div>
    </header>

    <div class="flex w-full">
        <!-- Sidebar -->
        <aside class="w-64 bg-white shadow-sm min-h-[calc(100vh-73px)] border-r border-gray-200">
            <nav class="p-4 space-y-2">
                <!-- Dashboard -->
                <div>
                    <button wire:click="setActiveSection('dashboard')" 
                            class="w-full flex items-center px-3 py-2 text-sm font-medium rounded-md transition-colors duration-150 {{ $activeSection === 'dashboard' ? 'bg-blue-50 text-blue-700' : 'text-gray-700 hover:bg-gray-50' }}">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2H5a2 2 0 00-2-2z"></path>
                        </svg>
                        Dashboard
                    </button>
                </div>

                <!-- Exam Management -->
                <div>
                    <button wire:click="toggleSubmenu('exams')" 
                            class="w-full flex items-center justify-between px-3 py-2 text-sm font-medium text-gray-700 rounded-md hover:bg-gray-50 transition-colors duration-150">
                        <div class="flex items-center">
                            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                            Exam Management
                        </div>
                        <svg class="w-4 h-4 transition-transform duration-200 {{ in_array('exams', $openSubmenus) ? 'rotate-180' : '' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    @if(in_array('exams', $openSubmenus))
                        <div class="ml-8 mt-1 space-y-1">
                            <button wire:click="setActiveSection('create-exam')" 
                                    class="w-full text-left px-3 py-2 text-sm rounded-md transition-colors duration-150 {{ $activeSection === 'create-exam' ? 'bg-blue-50 text-blue-700' : 'text-gray-600 hover:bg-gray-50' }}">
                                Create Exam
                            </button>
                            <button wire:click="setActiveSection('manage-exams')" 
                                    class="w-full text-left px-3 py-2 text-sm rounded-md transition-colors duration-150 {{ $activeSection === 'manage-exams' ? 'bg-blue-50 text-blue-700' : 'text-gray-600 hover:bg-gray-50' }}">
                                Manage Exams
                            </button>
                            <button wire:click="setActiveSection('exam-schedule')" 
                                    class="w-full text-left px-3 py-2 text-sm rounded-md transition-colors duration-150 {{ $activeSection === 'exam-schedule' ? 'bg-blue-50 text-blue-700' : 'text-gray-600 hover:bg-gray-50' }}">
                                Exam Schedule
                            </button>
                        </div>
                    @endif
                </div>

                <!-- Question Bank -->
                <div>
                    <button wire:click="toggleSubmenu('questions')" 
                            class="w-full flex items-center justify-between px-3 py-2 text-sm font-medium text-gray-700 rounded-md hover:bg-gray-50 transition-colors duration-150">
                        <div class="flex items-center">
                            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Question Bank
                        </div>
                        <svg class="w-4 h-4 transition-transform duration-200 {{ in_array('questions', $openSubmenus) ? 'rotate-180' : '' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    @if(in_array('questions', $openSubmenus))
                        <div class="ml-8 mt-1 space-y-1">
                            <button wire:click="setActiveSection('add-question')" 
                                    class="w-full text-left px-3 py-2 text-sm rounded-md transition-colors duration-150 {{ $activeSection === 'add-question' ? 'bg-blue-50 text-blue-700' : 'text-gray-600 hover:bg-gray-50' }}">
                                Add Questions
                            </button>
                            <button wire:click="setActiveSection('manage-questions')" 
                                    class="w-full text-left px-3 py-2 text-sm rounded-md transition-colors duration-150 {{ $activeSection === 'manage-questions' ? 'bg-blue-50 text-blue-700' : 'text-gray-600 hover:bg-gray-50' }}">
                                Manage Questions
                            </button>
                            <button wire:click="setActiveSection('question-categories')" 
                                    class="w-full text-left px-3 py-2 text-sm rounded-md transition-colors duration-150 {{ $activeSection === 'question-categories' ? 'bg-blue-50 text-blue-700' : 'text-gray-600 hover:bg-gray-50' }}">
                                Categories
                            </button>
                        </div>
                    @endif
                </div>

                <!-- Students -->
                <div>
                    <button wire:click="toggleSubmenu('students')" 
                            class="w-full flex items-center justify-between px-3 py-2 text-sm font-medium text-gray-700 rounded-md hover:bg-gray-50 transition-colors duration-150">
                        <div class="flex items-center">
                            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"></path>
                            </svg>
                            Students
                        </div>
                        <svg class="w-4 h-4 transition-transform duration-200 {{ in_array('students', $openSubmenus) ? 'rotate-180' : '' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    @if(in_array('students', $openSubmenus))
                        <div class="ml-8 mt-1 space-y-1">
                            <button wire:click="setActiveSection('student-list')" 
                                    class="w-full text-left px-3 py-2 text-sm rounded-md transition-colors duration-150 {{ $activeSection === 'student-list' ? 'bg-blue-50 text-blue-700' : 'text-gray-600 hover:bg-gray-50' }}">
                                Student List
                            </button>
                            <button wire:click="setActiveSection('enroll-students')" 
                                    class="w-full text-left px-3 py-2 text-sm rounded-md transition-colors duration-150 {{ $activeSection === 'enroll-students' ? 'bg-blue-50 text-blue-700' : 'text-gray-600 hover:bg-gray-50' }}">
                                Enroll Students
                            </button>
                        </div>
                    @endif
                </div>

                <!-- Results & Reports -->
                <div>
                    <button wire:click="toggleSubmenu('results')" 
                            class="w-full flex items-center justify-between px-3 py-2 text-sm font-medium text-gray-700 rounded-md hover:bg-gray-50 transition-colors duration-150">
                        <div class="flex items-center">
                            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                            </svg>
                            Results & Reports
                        </div>
                        <svg class="w-4 h-4 transition-transform duration-200 {{ in_array('results', $openSubmenus) ? 'rotate-180' : '' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    @if(in_array('results', $openSubmenus))
                        <div class="ml-8 mt-1 space-y-1">
                            <button wire:click="setActiveSection('exam-results')" 
                                    class="w-full text-left px-3 py-2 text-sm rounded-md transition-colors duration-150 {{ $activeSection === 'exam-results' ? 'bg-blue-50 text-blue-700' : 'text-gray-600 hover:bg-gray-50' }}">
                                Exam Results
                            </button>
                            <button wire:click="setActiveSection('analytics')" 
                                    class="w-full text-left px-3 py-2 text-sm rounded-md transition-colors duration-150 {{ $activeSection === 'analytics' ? 'bg-blue-50 text-blue-700' : 'text-gray-600 hover:bg-gray-50' }}">
                                Analytics
                            </button>
                            <button wire:click="setActiveSection('reports')" 
                                    class="w-full text-left px-3 py-2 text-sm rounded-md transition-colors duration-150 {{ $activeSection === 'reports' ? 'bg-blue-50 text-blue-700' : 'text-gray-600 hover:bg-gray-50' }}">
                                Generate Reports
                            </button>
                        </div>
                    @endif
                </div>

                <!-- Settings -->
                <div>
                    <button wire:click="setActiveSection('settings')" 
                            class="w-full flex items-center px-3 py-2 text-sm font-medium rounded-md transition-colors duration-150 {{ $activeSection === 'settings' ? 'bg-blue-50 text-blue-700' : 'text-gray-700 hover:bg-gray-50' }}">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        Settings
                    </button>
                </div>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-6">
            <div class="max-w-full mx-auto">
                @if($activeSection === 'dashboard')
                    <div>
                        <div class="mb-6">
                            <h2 class="text-2xl font-bold text-gray-900">Dashboard</h2>
                            <p class="text-gray-600">Overview of your exam management system</p>
                        </div>
                        
                        <!-- Stats Cards -->
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">

                            <div class="bg-white rounded-lg shadow-sm p-6 border border-gray-200">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0">
                                        <div class="w-8 h-8 bg-blue-500 rounded-md flex items-center justify-center">
                                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="ml-4">
                                        <p class="text-sm font-medium text-gray-500">Total Exams</p>
                                        <p class="text-2xl font-semibold text-gray-900">24</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="bg-white rounded-lg shadow-sm p-6 border border-gray-200">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0">
                                        <div class="w-8 h-8 bg-green-500 rounded-md flex items-center justify-center">
                                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="ml-4">
                                        <p class="text-sm font-medium text-gray-500">Students</p>
                                        <p class="text-2xl font-semibold text-gray-900">156</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="bg-white rounded-lg shadow-sm p-6 border border-gray-200">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0">
                                        <div class="w-8 h-8 bg-yellow-500 rounded-md flex items-center justify-center">
                                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="ml-4">
                                        <p class="text-sm font-medium text-gray-500">Questions</p>
                                        <p class="text-2xl font-semibold text-gray-900">892</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="bg-white rounded-lg shadow-sm p-6 border border-gray-200">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0">
                                        <div class="w-8 h-8 bg-purple-500 rounded-md flex items-center justify-center">
                                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="ml-4">
                                        <p class="text-sm font-medium text-gray-500">Completed</p>
                                        <p class="text-2xl font-semibold text-gray-900">18</p>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- Recent Activity -->
                        <div class="bg-white rounded-lg shadow-sm border border-gray-200">
                            <div class="px-6 py-4 border-b border-gray-200">
                                <h3 class="text-lg font-medium text-gray-900">Recent Activity</h3>
                            </div>
                            <div class="p-6">
                                <div class="flow-root">
                                    <ul class="-mb-8">
                                        <li>
                                            <div class="relative pb-8">
                                                <div class="relative flex space-x-3">
                                                    <div class="flex h-8 w-8 items-center justify-center rounded-full bg-blue-100">
                                                        <svg class="h-4 w-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                                        </svg>
                                                    </div>
                                                    <div class="min-w-0 flex-1">
                                                        <div>
                                                            <p class="text-sm text-gray-900">New exam "Mathematics Final" created</p>
                                                            <p class="text-sm text-gray-500">2 hours ago</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="relative pb-8">
                                                <div class="relative flex space-x-3">
                                                    <div class="flex h-8 w-8 items-center justify-center rounded-full bg-green-100">
                                                        <svg class="h-4 w-4 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>
                                                    </div>
                                                    <div class="min-w-0 flex-1">
                                                        <div>
                                                            <p class="text-sm text-gray-900">25 students completed "Physics Quiz"</p>
                                                            <p class="text-sm text-gray-500">4 hours ago</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="relative">
                                                <div class="relative flex space-x-3">
                                                    <div class="flex h-8 w-8 items-center justify-center rounded-full bg-yellow-100">
                                                        <svg class="h-4 w-4 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                        </svg>
                                                    </div>
                                                    <div class="min-w-0 flex-1">
                                                        <div>
                                                            <p class="text-sm text-gray-900">15 new questions added to Chemistry bank</p>
                                                            <p class="text-sm text-gray-500">1 day ago</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <!-- Dynamic Content Based on Selected Menu -->
                    @livewire('admin-session-exam-details-component')
                    {{-- <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-8">

                        
                        <div class="text-center">
                            <div class="container mx-auto px-4 py-6">
                                xx
                            <div class="mx-auto flex items-center justify-center h-12 w-12 rounded-full bg-gray-100">
                                <svg class="h-6 w-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 100 4m0-4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 100 4m0-4v2m0-6V4"></path>
                                </svg>
                            </div>
                            <h3 class="mt-4 text-lg font-medium text-gray-900 capitalize">{{ str_replace('-', ' ', $activeSection) }}</h3>
                            <p class="mt-2 text-sm text-gray-500">Content for {{ str_replace('-', ' ', $activeSection) }} will be displayed here.</p>
                            <p class="mt-1 text-xs text-gray-400">Implement your Livewire methods to handle the functionality for this section.</p>
                        </div>
                    </div> --}}

                @endif
            </div>
        </main>
    </div>
</div>

</div>
