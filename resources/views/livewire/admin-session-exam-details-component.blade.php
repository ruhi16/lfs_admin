<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-8">
        <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-8">
            <!-- Exam Name Input -->
            <div class="mb-6">
                <div class="mb-4 grid grid-cols-1 sm:grid-cols-2 gap-4">
                    
                    <div class="col-span-1">
                    <label for="exam-name" class="block text-sm font-medium text-gray-700 mb-1">Enter exam name</label>
                    <input type="text" id="exam-name" name="exam-name"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                        placeholder="e.g. Mid-term Examination">

                    </div>

                    <div class="col-span-1">
                    {{-- <label for="exam-name" class="block text-sm font-medium text-gray-700 mb-1">Enter exam name</label>
                    <input type="text" id="exam-name" name="exam-name"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                        placeholder="e.g. Mid-term Examination"> --}}

                    </div>


                </div>
            </div>

            <!-- Class Checkboxes -->
            <div class="mb-8">
                <label class="block text-sm font-medium text-gray-700 mb-2">Select Classes</label>
                <div class="grid grid-cols-2 sm:grid-cols-4 gap-3">
                    <div class="flex items-center">
                        <input id="class-1" name="classes" type="checkbox"
                            class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                        <label for="class-1" class="ml-2 text-sm text-gray-700">Class 1</label>
                    </div>
                    <div class="flex items-center">
                        <input id="class-2" name="classes" type="checkbox"
                            class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                        <label for="class-2" class="ml-2 text-sm text-gray-700">Class 2</label>
                    </div>
                    <div class="flex items-center">
                        <input id="class-3" name="classes" type="checkbox"
                            class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                        <label for="class-3" class="ml-2 text-sm text-gray-700">Class 3</label>
                    </div>
                    <div class="flex items-center">
                        <input id="class-4" name="classes" type="checkbox"
                            class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                        <label for="class-4" class="ml-2 text-sm text-gray-700">Class 4</label>
                    </div>
                    <div class="flex items-center">
                        <input id="class-5" name="classes" type="checkbox"
                            class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                        <label for="class-5" class="ml-2 text-sm text-gray-700">Class 5</label>
                    </div>
                    <div class="flex items-center">
                        <input id="class-6" name="classes" type="checkbox"
                            class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                        <label for="class-6" class="ml-2 text-sm text-gray-700">Class 6</label>
                    </div>
                    <div class="flex items-center">
                        <input id="class-7" name="classes" type="checkbox"
                            class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                        <label for="class-7" class="ml-2 text-sm text-gray-700">Class 7</label>
                    </div>
                    <div class="flex items-center">
                        <input id="class-8" name="classes" type="checkbox"
                            class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                        <label for="class-8" class="ml-2 text-sm text-gray-700">Class 8</label>
                    </div>
                </div>
            </div>

            <!-- Exam Type Buttons -->
            <div class="flex flex-wrap gap-3">
                <button type="button"
                    class="inline-flex items-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Monthly Tests <span
                        class="ml-2 bg-gray-100 text-gray-800 text-xs font-semibold px-2 py-0.5 rounded-full">12</span>
                </button>
                <button type="button"
                    class="inline-flex items-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Term Exams <span
                        class="ml-2 bg-gray-100 text-gray-800 text-xs font-semibold px-2 py-0.5 rounded-full">4</span>
                </button>
                <button type="button"
                    class="inline-flex items-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Final Exams <span
                        class="ml-2 bg-gray-100 text-gray-800 text-xs font-semibold px-2 py-0.5 rounded-full">2</span>
                </button>
            </div>

            <div class="flex flex-wrap gap-3">
                <div class="flex flex-wrap gap-3" x-data="{ activeButton: 'monthly' }">
                <button type="button" @click="activeButton = 'monthly'"
                    class="inline-flex items-center px-4 py-2 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    :class="{
                        'border-2 border-indigo-500': activeButton === 'monthly',
                        'border border-gray-300': activeButton !== 'monthly'
                    }">
                    Monthly Tests <span
                        class="ml-2 bg-gray-100 text-gray-800 text-xs font-semibold px-2 py-0.5 rounded-full">12</span>
                </button>
                
                <button type="button" @click="activeButton = 'term'"
                    class="inline-flex items-center px-4 py-2 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    :class="{
                        'border-2 border-indigo-500': activeButton === 'term',
                        'border border-gray-300': activeButton !== 'term'
                    }">
                    Term Exams <span
                        class="ml-2 bg-gray-100 text-gray-800 text-xs font-semibold px-2 py-0.5 rounded-full">4</span>
                </button>
                
                <button type="button" @click="activeButton = 'final'"
                    class="inline-flex items-center px-4 py-2 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    :class="{
                        'border-2 border-indigo-500': activeButton === 'final',
                        'border border-gray-300': activeButton !== 'final'
                    }">
                    Final Exams <span
                        class="ml-2 bg-gray-100 text-gray-800 text-xs font-semibold px-2 py-0.5 rounded-full">2</span>
                </button>
            </div>

            <!-- Include Alpine.js if not already present -->
            <script src="//unpkg.com/alpinejs" defer></script>
            </div>
        </div>

<div class="max-w-6xl mx-auto p-4">
    <!-- Tabs -->
    <div class="border-b border-gray-200 dark:border-gray-700">
        <ul class="flex flex-wrap -mb-px text-sm font-medium text-center text-gray-500 dark:text-gray-400" x-data="{ activeTab: 'dashboard' }">
            <!-- Tab 1 -->
            <li class="me-2">
                <button @click="activeTab = 'profile'" 
                    class="inline-flex items-center justify-center p-4 rounded-t-lg group"
                    :class="{
                        'text-blue-600 border-b-2 border-blue-600 dark:text-blue-500 dark:border-blue-500': activeTab === 'profile',
                        'border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300': activeTab !== 'profile'
                    }">
                    <svg class="w-4 h-4 me-2" :class="{
                        'text-blue-600 dark:text-blue-500': activeTab === 'profile',
                        'text-gray-400 group-hover:text-gray-500 dark:text-gray-500 dark:group-hover:text-gray-300': activeTab !== 'profile'
                    }" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z"/>
                    </svg>
                    Profile
                </button>
            </li>
            
            <!-- Tab 2 -->
            <li class="me-2">
                <button @click="activeTab = 'dashboard'" 
                    class="inline-flex items-center justify-center p-4 rounded-t-lg group"
                    :class="{
                        'text-blue-600 border-b-2 border-blue-600 dark:text-blue-500 dark:border-blue-500': activeTab === 'dashboard',
                        'border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300': activeTab !== 'dashboard'
                    }">
                    <svg class="w-4 h-4 me-2" :class="{
                        'text-blue-600 dark:text-blue-500': activeTab === 'dashboard',
                        'text-gray-400 group-hover:text-gray-500 dark:text-gray-500 dark:group-hover:text-gray-300': activeTab !== 'dashboard'
                    }" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                        <path d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z"/>
                    </svg>
                    Dashboard
                </button>
            </li>
            
            <!-- Tab 3 -->
            <li class="me-2">
                <button @click="activeTab = 'settings'" 
                    class="inline-flex items-center justify-center p-4 rounded-t-lg group"
                    :class="{
                        'text-blue-600 border-b-2 border-blue-600 dark:text-blue-500 dark:border-blue-500': activeTab === 'settings',
                        'border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300': activeTab !== 'settings'
                    }">
                    <svg class="w-4 h-4 me-2" :class="{
                        'text-blue-600 dark:text-blue-500': activeTab === 'settings',
                        'text-gray-400 group-hover:text-gray-500 dark:text-gray-500 dark:group-hover:text-gray-300': activeTab !== 'settings'
                    }" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M5 11.424V1a1 1 0 1 0-2 0v10.424a3.228 3.228 0 0 0 0 6.152V19a1 1 0 1 0 2 0v-1.424a3.228 3.228 0 0 0 0-6.152ZM19.25 14.5A3.243 3.243 0 0 0 17 11.424V1a1 1 0 0 0-2 0v10.424a3.227 3.227 0 0 0 0 6.152V19a1 1 0 1 0 2 0v-1.424a3.243 3.243 0 0 0 2.25-3.076Zm-6-9A3.243 3.243 0 0 0 11 2.424V1a1 1 0 0 0-2 0v1.424a3.228 3.228 0 0 0 0 6.152V19a1 1 0 1 0 2 0V8.576A3.243 3.243 0 0 0 13.25 5.5Z"/>
                    </svg>
                    Settings
                </button>
            </li>
            
            <!-- Tab 4 -->
            <li class="me-2">
                <button @click="activeTab = 'contacts'" 
                    class="inline-flex items-center justify-center p-4 rounded-t-lg group"
                    :class="{
                        'text-blue-600 border-b-2 border-blue-600 dark:text-blue-500 dark:border-blue-500': activeTab === 'contacts',
                        'border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300': activeTab !== 'contacts'
                    }">
                    <svg class="w-4 h-4 me-2" :class="{
                        'text-blue-600 dark:text-blue-500': activeTab === 'contacts',
                        'text-gray-400 group-hover:text-gray-500 dark:text-gray-500 dark:group-hover:text-gray-300': activeTab !== 'contacts'
                    }" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                        <path d="M16 1h-3.278A1.992 1.992 0 0 0 11 0H7a1.993 1.993 0 0 0-1.722 1H2a2 2 0 0 0-2 2v15a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2Zm-3 14H5a1 1 0 0 1 0-2h8a1 1 0 0 1 0 2Zm0-4H5a1 1 0 0 1 0-2h8a1 1 0 1 1 0 2Zm0-5H5a1 1 0 0 1 0-2h2V2h4v2h2a1 1 0 1 1 0 2Z"/>
                    </svg>
                    Contacts
                </button>
            </li>
            
            <!-- Tab 5 -->
            <li class="me-2">
                <button @click="activeTab = 'messages'" 
                    class="inline-flex items-center justify-center p-4 rounded-t-lg group"
                    :class="{
                        'text-blue-600 border-b-2 border-blue-600 dark:text-blue-500 dark:border-blue-500': activeTab === 'messages',
                        'border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300': activeTab !== 'messages'
                    }">
                    <svg class="w-4 h-4 me-2" :class="{
                        'text-blue-600 dark:text-blue-500': activeTab === 'messages',
                        'text-gray-400 group-hover:text-gray-500 dark:text-gray-500 dark:group-hover:text-gray-300': activeTab !== 'messages'
                    }" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
                        <path d="M18 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2ZM5 4a1 1 0 1 1 0-2 1 1 0 0 1 0 2Zm3 0a1 1 0 1 1 0-2 1 1 0 0 1 0 2Zm3 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0Zm-9 4a1 1 0 1 1 0-2 1 1 0 0 1 0 2Zm3 0a1 1 0 1 1 0-2 1 1 0 0 1 0 2Zm3 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0Zm-9 4a1 1 0 1 1 0-2 1 1 0 0 1 0 2Zm3 0a1 1 0 1 1 0-2 1 1 0 0 1 0 2Zm3 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0Z"/>
                    </svg>
                    Messages
                </button>
            </li>
            
            <!-- Tab 6 -->
            <li class="me-2">
                <button @click="activeTab = 'notifications'" 
                    class="inline-flex items-center justify-center p-4 rounded-t-lg group"
                    :class="{
                        'text-blue-600 border-b-2 border-blue-600 dark:text-blue-500 dark:border-blue-500': activeTab === 'notifications',
                        'border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300': activeTab !== 'notifications'
                    }">
                    <svg class="w-4 h-4 me-2" :class="{
                        'text-blue-600 dark:text-blue-500': activeTab === 'notifications',
                        'text-gray-400 group-hover:text-gray-500 dark:text-gray-500 dark:group-hover:text-gray-300': activeTab !== 'notifications'
                    }" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 14 20">
                        <path d="M12.133 10.632v-1.8A5.406 5.406 0 0 0 7.979 3.57.946.946 0 0 0 8 3.464V1.1a1 1 0 0 0-2 0v2.364a.946.946 0 0 0 .021.106 5.406 5.406 0 0 0-4.154 5.262v1.8C1.867 13.018 0 13.614 0 14.807 0 15.4 0 16 .538 16h12.924C14 16 14 15.4 14 14.807c0-1.193-1.867-1.789-1.867-4.175ZM3.823 17a3.453 3.453 0 0 0 6.354 0H3.823Z"/>
                    </svg>
                    Notifications
                </button>
            </li>
            
            <!-- Tab 7 -->
            <li class="me-2">
                <button @click="activeTab = 'analytics'" 
                    class="inline-flex items-center justify-center p-4 rounded-t-lg group"
                    :class="{
                        'text-blue-600 border-b-2 border-blue-600 dark:text-blue-500 dark:border-blue-500': activeTab === 'analytics',
                        'border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300': activeTab !== 'analytics'
                    }">
                    <svg class="w-4 h-4 me-2" :class="{
                        'text-blue-600 dark:text-blue-500': activeTab === 'analytics',
                        'text-gray-400 group-hover:text-gray-500 dark:text-gray-500 dark:group-hover:text-gray-300': activeTab !== 'analytics'
                    }" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 20">
                        <path d="M16 14V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2ZM4.5 3a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 1 .5-.5Zm3 0a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-4a.5.5 0 0 1 .5-.5Zm3 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-6a.5.5 0 0 1 .5-.5Zm3 0a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-8a.5.5 0 0 1 .5-.5Z"/>
                    </svg>
                    Analytics
                </button>
            </li>
            
            <!-- Tab 8 -->
            <li>
                <button @click="activeTab = 'reports'" 
                    class="inline-flex items-center justify-center p-4 rounded-t-lg group"
                    :class="{
                        'text-blue-600 border-b-2 border-blue-600 dark:text-blue-500 dark:border-blue-500': activeTab === 'reports',
                        'border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300': activeTab !== 'reports'
                    }">
                    <svg class="w-4 h-4 me-2" :class="{
                        'text-blue-600 dark:text-blue-500': activeTab === 'reports',
                        'text-gray-400 group-hover:text-gray-500 dark:text-gray-500 dark:group-hover:text-gray-300': activeTab !== 'reports'
                    }" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 20">
                        <path d="M5 5V.13a2.96 2.96 0 0 0-1.293.749L.879 3.707A2.98 2.98 0 0 0 .13 5H5Z"/>
                        <path d="M14.066 0H7v5a2 2 0 0 1-2 2H0v11a1.97 1.97 0 0 0 1.934 2h12.132A1.97 1.97 0 0 0 16 18V2a1.97 1.97 0 0 0-1.934-2ZM9 13a1 1 0 0 1-2 0v-2a1 1 0 0 1 2 0v2Zm3 1a1 1 0 0 1-2 0v-4a1 1 0 0 1 2 0v4Z"/>
                    </svg>
                    Reports
                </button>
            </li>
        </ul>
    </div>
    
    <!-- Tab Content -->
    <div class="p-4 bg-white border border-t-0 rounded-b-lg dark:bg-gray-800 dark:border-gray-700">
        <!-- Profile Content -->
        <div x-show="activeTab === 'profile'" class="space-y-4">
            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Profile Information</h3>
            <p class="text-gray-600 dark:text-gray-300">Manage your profile details, avatar, and personal information.</p>
            <div class="bg-gray-50 p-4 rounded-lg dark:bg-gray-700">
                <p class="text-gray-700 dark:text-gray-300">Profile content goes here...</p>
            </div>
        </div>
        
        <!-- Dashboard Content -->
        <div x-show="activeTab === 'dashboard'" class="space-y-4">
            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Dashboard Overview</h3>
            <p class="text-gray-600 dark:text-gray-300">View your activity summary and quick access to important features.</p>
            <div class="bg-gray-50 p-4 rounded-lg dark:bg-gray-700">
                <p class="text-gray-700 dark:text-gray-300">Dashboard content goes here...</p>
            </div>
        </div>
        
        <!-- Settings Content -->
        <div x-show="activeTab === 'settings'" class="space-y-4">
            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">System Settings</h3>
            <p class="text-gray-600 dark:text-gray-300">Configure your application preferences and security settings.</p>
            <div class="bg-gray-50 p-4 rounded-lg dark:bg-gray-700">
                <p class="text-gray-700 dark:text-gray-300">Settings content goes here...</p>
            </div>
        </div>
        
        <!-- Contacts Content -->
        <div x-show="activeTab === 'contacts'" class="space-y-4">
            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Contact Management</h3>
            <p class="text-gray-600 dark:text-gray-300">Manage your contact list and communication history.</p>
            <div class="bg-gray-50 p-4 rounded-lg dark:bg-gray-700">
                <p class="text-gray-700 dark:text-gray-300">Contacts content goes here...</p>
            </div>
        </div>
        
        <!-- Messages Content -->
        <div x-show="activeTab === 'messages'" class="space-y-4">
            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Message Center</h3>
            <p class="text-gray-600 dark:text-gray-300">View and respond to your messages.</p>
            <div class="bg-gray-50 p-4 rounded-lg dark:bg-gray-700">
                <p class="text-gray-700 dark:text-gray-300">Messages content goes here...</p>
            </div>
        </div>
        
        <!-- Notifications Content -->
        <div x-show="activeTab === 'notifications'" class="space-y-4">
            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Notification Center</h3>
            <p class="text-gray-600 dark:text-gray-300">Manage your notification preferences and view recent alerts.</p>
            <div class="bg-gray-50 p-4 rounded-lg dark:bg-gray-700">
                <p class="text-gray-700 dark:text-gray-300">Notifications content goes here...</p>
            </div>
        </div>
        
        <!-- Analytics Content -->
        <div x-show="activeTab === 'analytics'" class="space-y-4">
            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Analytics Dashboard</h3>
            <p class="text-gray-600 dark:text-gray-300">View detailed analytics and performance metrics.</p>
            <div class="bg-gray-50 p-4 rounded-lg dark:bg-gray-700">
                <p class="text-gray-700 dark:text-gray-300">Analytics content goes here...</p>
            </div>
        </div>
        
        <!-- Reports Content -->
        <div x-show="activeTab === 'reports'" class="space-y-4">
            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Report Center</h3>
            <p class="text-gray-600 dark:text-gray-300">Generate and view detailed reports.</p>
            <div class="bg-gray-50 p-4 rounded-lg dark:bg-gray-700">
                <p class="text-gray-700 dark:text-gray-300">Reports content goes here...</p>
            </div>
        </div>
    </div>
</div>

<!-- Include Alpine.js -->
<script src="//unpkg.com/alpinejs" defer></script>


    </div>

    <div class="border-b border-gray-200 dark:border-gray-700">
    <ul class="flex flex-wrap -mb-px text-sm font-medium text-center text-gray-500 dark:text-gray-400">
        <li class="me-2">
            <a href="#" class="inline-flex items-center justify-center p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 group">
                <svg class="w-4 h-4 me-2 text-gray-400 group-hover:text-gray-500 dark:text-gray-500 dark:group-hover:text-gray-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z"/>
                </svg>Profile
            </a>
        </li>
        <li class="me-2">
            <a href="#" class="inline-flex items-center justify-center p-4 text-blue-600 border-b-2 border-blue-600 rounded-t-lg active dark:text-blue-500 dark:border-blue-500 group" aria-current="page">
                <svg class="w-4 h-4 me-2 text-blue-600 dark:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                    <path d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z"/>
                </svg>Dashboard
            </a>
        </li>
        <li class="me-2">
            <a href="#" class="inline-flex items-center justify-center p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 group">
                <svg class="w-4 h-4 me-2 text-gray-400 group-hover:text-gray-500 dark:text-gray-500 dark:group-hover:text-gray-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M5 11.424V1a1 1 0 1 0-2 0v10.424a3.228 3.228 0 0 0 0 6.152V19a1 1 0 1 0 2 0v-1.424a3.228 3.228 0 0 0 0-6.152ZM19.25 14.5A3.243 3.243 0 0 0 17 11.424V1a1 1 0 0 0-2 0v10.424a3.227 3.227 0 0 0 0 6.152V19a1 1 0 1 0 2 0v-1.424a3.243 3.243 0 0 0 2.25-3.076Zm-6-9A3.243 3.243 0 0 0 11 2.424V1a1 1 0 0 0-2 0v1.424a3.228 3.228 0 0 0 0 6.152V19a1 1 0 1 0 2 0V8.576A3.243 3.243 0 0 0 13.25 5.5Z"/>
                </svg>Settings
            </a>
        </li>
        <li class="me-2">
            <a href="#" class="inline-flex items-center justify-center p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 group">
                <svg class="w-4 h-4 me-2 text-gray-400 group-hover:text-gray-500 dark:text-gray-500 dark:group-hover:text-gray-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                    <path d="M16 1h-3.278A1.992 1.992 0 0 0 11 0H7a1.993 1.993 0 0 0-1.722 1H2a2 2 0 0 0-2 2v15a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2Zm-3 14H5a1 1 0 0 1 0-2h8a1 1 0 0 1 0 2Zm0-4H5a1 1 0 0 1 0-2h8a1 1 0 1 1 0 2Zm0-5H5a1 1 0 0 1 0-2h2V2h4v2h2a1 1 0 1 1 0 2Z"/>
                </svg>Contacts
            </a>
        </li>
        <li>
            <a class="inline-block p-4 text-gray-400 rounded-t-lg cursor-not-allowed dark:text-gray-500">Disabled</a>
        </li>
    </ul>
</div>
    





</div>