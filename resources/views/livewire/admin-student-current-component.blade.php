<div>

    <div class="relative flex flex-col w-full p-2 text-gray-700 bg-white shadow-md rounded-lg bg-clip-border">
        <!-- Flex container for heading and button -->
        <div class="flex items-center justify-between">
            <!-- Heading -->
            <h1>Student Detail List</h1>

            <!-- Button -->
            <div>
                <a href="#"   {{-- id="openModal" --}}{{-- wire:click="openModal" --}}
                    class=" text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-lg px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                    Add New {{ $modal_is_open ? 'True' : 'False' }}
                </a>
            </div>


        </div>
    </div>

    <br /><br />

    <div
        class="relative flex flex-col w-full h-full overflow-scroll text-gray-700 bg-white shadow-md rounded-lg bg-clip-border">

        <div class="flex justify-between p-2">
            <!-- Search Input -->
            <div>
                <input type="text" id="searchInput" placeholder="Search by name..."
                    class="p-2 border border-slate-300 rounded-lg">
            </div>

            <!-- Page Size Selector -->
            <div>
                <select id="pageSizeSelector" class="p-2 border border-slate-300 rounded-lg min-w-auto">
                    <option value="2">2 per page</option>
                    <option value="5">5 per page</option>
                    <option value="10">10 per page</option>
                    <option value="20">20 per page</option>
                </select>
            </div>

        </div>


        {{-- X: {{ $myclass }} --}}
        <!-- Table -->
        <table class="w-full text-left table-auto min-w-max">
            <thead>
                <tr>
                    <th class="p-2 border-b border-slate-300 bg-slate-50">
                        <p class="block text-sm font-normal leading-none text-slate-500">Sl</p>
                    </th>
                    <th class="p-2 border-b border-slate-300 bg-slate-50">
                        <p class="block text-sm font-normal leading-none text-slate-500">Reg No</p>
                    </th>

                    <th class="p-2 border-b border-slate-300 bg-slate-50">
                        <p class="block text-sm font-normal leading-none text-slate-500">Name & Details</p>

                    </th>
                    <th class="p-2 border-b border-slate-300 bg-slate-50">
                        <p class="block text-lg font-normal leading-none text-slate-500">DOB & Aadhar No</p>
                    </th>
                    <th class="p-2 border-b border-slate-300 bg-slate-50">
                        <p class="block text-lg font-normal leading-none text-slate-500">Address</p>
                    </th>
                    <th class="p-2 border-b border-slate-300 bg-slate-50">
                        <p class="block text-lg font-normal leading-none text-slate-500">Class-Sec: Roll</p>
                    </th>
                    
                    <th class="p-2 border-b border-slate-300 bg-slate-50">
                        <p class="block text-lg font-normal leading-none text-slate-500">Actions</p>
                    </th>
                </tr>
            </thead>
            <tbody id="tableBody">


                @foreach($studentcrs as $studentcr)
                
                    <tr class="hover:bg-slate-50">
                        <td class="p-2 border-b border-slate-200">
                            <p class="block text-sm text-slate-500">{{ $loop->iteration }}</p>
                        </td>
                        <td class="p-2 border-b border-slate-200">
                            <p class="block text-sm text-slate-500">{{$studentcr->studentdb->uuid_auto}}-{{ $studentcr->studentdb_id }}-{{ $studentcr->id }}</p>
                        </td>

                        <td class="p-2 border-b border-slate-200">
                            <p class="block text-sm font-normal leading-none text-slate-500"><b>{{ $studentcr->studentdb->name }} ({{ $studentcr->studentdb->ssex }})</b><br/>{{ $studentcr->studentdb->fname }}<br/>{{ $studentcr->studentdb->mname }}</p>
                        </td>
                        <td class="p-2 border-b border-slate-200">
                            <p class="block text-sm font-normal leading-none text-slate-500">{{ $studentcr->studentdb->dob }}<br/>{{ $studentcr->studentdb->adhaar }}</p>
                        </td>
                        <td class="p-2 border-b border-slate-200">
                            <p class="block text-sm font-normal leading-none text-slate-500">
                                {{ $studentcr->studentdb->vill }}, {{ $studentcr->studentdb->post }}<br/> 
                                {{ $studentcr->studentdb->pstn }}, {{ $studentcr->studentdb->dist }}, {{ $studentcr->studentdb->pin }}<br/>
                                {{ $studentcr->studentdb->mobl }}
                            </p>
                        </td>
                        <td class="p-2 border-b border-slate-200">
                            <p class="block text-sm font-normal leading-none text-slate-500">
                                {{ $studentcr->myclass->name ?? 'x'}}-{{ $studentcr->section->name ?? 'x'}}: {{ $studentcr->roll_no ?? 'x'}}
                            </p>                        
                        </td>
                        <td class="p-2 border-b border-slate-200">
                            <p class="block text-lg font-normal leading-none text-slate-500">
                                <a href="javascript:void(0)" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Edit</a>
                                <a href="javascript:void(0)" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-3 py-2 dark:bg-red-600 dark:hover:bg-red-700 focus:outline-none dark:focus:ring-red-800">Delete</a>
                            </p>
                        </td>
                    </tr>

                @endforeach

                {{-- <tr class="hover:bg-slate-50">
                    <td class="p-2 border-b border-slate-200">
                        <p class="block text-lg text-slate-800">1</p>
                    </td>
                    <td class="p-2 border-b border-slate-200">
                        <p class="block text-lg text-slate-800">123</p>
                    </td>

                    <td class="p-2 border-b border-slate-200">
                        <p class="block text-sm font-normal leading-none text-slate-500">Name</p>
                        <p class="block text-sm font-normal leading-none text-slate-500">DoB: Aadhar: </p>
                        <p class="block text-sm font-normal leading-none text-slate-500">Father Name</p>
                        <p class="block text-sm font-normal leading-none text-slate-500">Mother Name</p>
                        <p class="block text-sm font-normal leading-none text-slate-500">Mobile No</p>
                    </td>
                    <td class="p-2 border-b border-slate-200">
                        <p class="block text-lg text-slate-800">Manager</p>

                    </td>
                    <td class="p-2 border-b border-slate-200">
                        <p class="block text-lg text-slate-800">
                            23/04/18
                        </p>
                    </td>
                    <td class="p-2 border-b border-slate-200">
                        <a href="#" id="openModal"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                            Edit
                        </a>
                    </td>
                </tr>
                <tr class="hover:bg-slate-50">
                    <td class="p-2 border-b border-slate-200">
                        <p class="block text-lg text-slate-800">
                            Alexa Liras
                        </p>
                    </td>
                    <td class="p-2 border-b border-slate-200">
                        <p class="block text-lg text-slate-800">
                            Developer
                        </p>
                    </td>
                    <td class="p-2 border-b border-slate-200">
                        <p class="block text-lg text-slate-800">
                            23/04/18
                        </p>
                    </td>
                    <td class="p-2 border-b border-slate-200">
                        <a href="#" class="block text-lg font-semibold text-slate-800">
                            Edit
                        </a>
                    </td>
                </tr>
                <tr class="hover:bg-slate-50">
                    <td class="p-2 border-b border-slate-200">
                        <p class="block text-lg text-slate-800">
                            Laurent Perrier
                        </p>
                    </td>
                    <td class="p-2 border-b border-slate-200">
                        <p class="block text-lg text-slate-800">
                            Executive
                        </p>
                    </td>
                    <td class="p-2 border-b border-slate-200">
                        <p class="block text-lg text-slate-800">
                            19/09/17
                        </p>
                    </td>
                    <td class="p-2 border-b border-slate-200">
                        <a href="#" class="block text-lg font-semibold text-slate-800">
                            Edit
                        </a>
                    </td>
                </tr>
                <tr class="hover:bg-slate-50">
                    <td class="p-2 border-b border-slate-200">
                        <p class="block text-lg text-slate-800">
                            Michael Levi
                        </p>
                    </td>
                    <td class="p-2 border-b border-slate-200">
                        <p class="block text-lg text-slate-800">
                            Developer
                        </p>
                    </td>
                    <td class="p-2 border-b border-slate-200">
                        <p class="block text-lg text-slate-800">
                            24/12/08
                        </p>
                    </td>
                    <td class="p-2 border-b border-slate-200">
                        <a href="#" class="block text-lg font-semibold text-slate-800">
                            Edit
                        </a>
                    </td>
                </tr>
                <tr class="hover:bg-slate-50">
                    <td class="p-2">
                        <p class="block text-lg text-slate-800">
                            Richard Gran
                        </p>
                    </td>
                    <td class="p-2">
                        <p class="block text-lg text-slate-800">
                            Manager
                        </p>
                    </td>
                    <td class="p-2">
                        <p class="block text-lg text-slate-800">
                            04/10/21
                        </p>
                    </td>
                    <td class="p-2">
                        <a href="#" id="openModal" class="block text-lg font-semibold text-slate-800">
                            Edit
                        </a>
                    </td>
                </tr> --}}




            </tbody>
        </table>

        <!-- Pagination -->
        <div class="flex justify-end p-2">
            <div id="pagination" class="flex space-x-2">
                <!-- Pagination buttons will be dynamically added here -->
            </div>
        </div>

    </div>



    <!-- Modal -->
    <div id="modal" class="fixed inset-0 z-50 overflow-y-auto hidden">
        <div class="flex items-center justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
            <!-- Modal Overlay -->
            <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
            </div>

            <!-- Modal Content -->
            <div
                class="inline-block max-w-full p-2 align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-4xl sm:w-full">
                <!-- Modal Header -->
                <div class="bg-gray-50 py-3 sm:px-6">
                    <p class="text-4xl text-left font-bold leading-6 text-gray-900">New Student Admission</p>
                </div>

                <!-- Modal Body (Form) -->
                <form class="max-w-full p-2">


                    <!-- Admission Details -->
                    <div class="flex flex-wrap -mx-3 mb-2">
                        <!-- Class -->
                        <div class="w-full md:w-1/4 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                                Class
                            </label>
                            <div class="relative">
                                <select wire:model='myclass' class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    id="grid-myclass">
                                    <option>Select Class</option>
                                    @foreach($currMyclasses as $currMyclass)
                                        <option value='{{ $currMyclass->id }}'>{{ $currMyclass->name }}</option>
                                    @endforeach
                                </select>
                                X{{ $myclass }}
                            </div>
                        </div>

                        <!-- Section -->
                        <div class="w-full md:w-1/4 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                                Section
                            </label>
                            <div class="relative">
                                <select wire:model='section'
                                    class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    id="grid-state">
                                    <option>Select Section</option>
                                    <option>Section A</option>
                                    <option>Section B</option>
                                    <option>Section C</option>
                                </select>
                                
                            </div>
                        </div>

                        <!-- Roll No -->
                        <div class="w-full md:w-1/4 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
                                Roll
                            </label>
                            <input wire:model='rollNo'
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                id="grid-zip" type="text" placeholder="Roll No">
                        </div>

                        <!-- Reg No -->
                        <div class="w-full md:w-1/4 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
                                Registration No
                            </label>
                            <input wire:model='regNo'
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                id="grid-zip" type="text" placeholder="Regisration No">
                        </div>
                    </div>


                    <div class="flex flex-wrap -mx-3 mb-6">
                        <!-- Name -->
                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                Name
                            </label>
                            <input wire:model="name"
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                id="grid-name" type="text" placeholder="Student Name">
                            <p class="text-red-500 text-xs italic">Please fill out this field.</p>
                        </div>

                        <!-- Gender -->
                        <div class="w-full md:w-1/4 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="grid-state">
                                Gender
                            </label>
                            <div class="relative">
                                <select wire:model="gender" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    id="grid-state">
                                    <option value="">Select Gender</option>
                                    <option value="boy">Boy</option>
                                    <option value="girl">Girl</option>
                                    <option value="other">Other</option>
                                </select>                                
                            </div>
                        </div>

                        <!-- Aadhar No -->
                        <div class="w-full md:w-1/4 px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="grid-last-name">
                                Aadhaar Number
                            </label>
                            <input
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                id="grid-last-name" type="text" placeholder="Doe">
                        </div>

                    </div>

                    <div class="flex flex-wrap -mx-3 mb-6">
                        <!-- Name -->
                        <div class="w-full md:w-1/4 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                Aadhar
                            </label>
                            <input wire:model="name"
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                id="grid-name" type="text" placeholder="Student Name">
                            <p class="text-red-500 text-xs italic">Please fill out this field.</p>
                        </div>

                        <!-- Gender -->
                        <div class="w-full md:w-1/4 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="grid-state">
                                Religious
                            </label>
                            <div class="relative">
                                <select wire:model="gender" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    id="grid-state">
                                    <option value="">Select Gender</option>
                                    <option value="boy">Boy</option>
                                    <option value="girl">Girl</option>
                                    <option value="other">Other</option>
                                </select>                                
                            </div>
                        </div>

                        <!-- Aadhar No -->
                        <div class="w-full md:w-1/4 px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="grid-last-name">
                                Caste
                            </label>
                            <input
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                id="grid-last-name" type="text" placeholder="Doe">
                        </div>

                        <!-- Aadhar No -->
                        <div class="w-full md:w-1/4 px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="grid-last-name">
                                Nationalityl
                            </label>
                            <input
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                id="grid-last-name" type="text" placeholder="Doe">
                        </div>

                    </div>

                    <div class="flex flex-wrap -mx-3 mb-6">
                        <!-- Name -->
                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                Father Name
                            </label>
                            <input wire:model="name"
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                id="grid-name" type="text" placeholder="Student Name">
                            <p class="text-red-500 text-xs italic">Please fill out this field.</p>
                        </div>

                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                Mother Name
                            </label>
                            <input wire:model="name"
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                id="grid-name" type="text" placeholder="Student Name">
                            <p class="text-red-500 text-xs italic">Please fill out this field.</p>
                        </div>

                    </div>

                    <div class="flex flex-wrap -mx-3 mb-6" >

                        <!-- Middle Name -->
                        <div class="w-full md:w-1/4 px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="grid-middle-name">
                                Village
                            </label>
                            <input
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                id="grid-middle-name" type="text" placeholder="Doe">
                        </div>

                        <!-- Middle Name -->
                        <div class="w-full md:w-1/4 px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="grid-middle-name">
                                Post office
                            </label>
                            <input
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                id="grid-middle-name" type="text" placeholder="Doe">
                        </div>

                        <!-- Middle Name -->
                        <div class="w-full md:w-1/4 px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="grid-middle-name">
                                Police Station
                            </label>
                            <input
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                id="grid-middle-name" type="text" placeholder="Doe">
                        </div>

                        <!-- Middle Name -->
                        <div class="w-full md:w-1/4 px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="grid-middle-name">
                                District
                            </label>
                            <input
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                id="grid-middle-name" type="text" placeholder="Doe">
                        </div>

                    </div>

                    <div class="flex flex-wrap -mx-3 mb-6" >

                        <!-- Middle Name -->
                        <div class="w-full md:w-1/4 px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="grid-middle-name">
                                Pin No
                            </label>
                            <input
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                id="grid-middle-name" type="text" placeholder="Doe">
                        </div>

                        <!-- Middle Name -->
                        <div class="w-full md:w-1/4 px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="grid-middle-name">
                                Nationality
                            </label>
                            <input
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                id="grid-middle-name" type="text" placeholder="Doe">
                        </div>

                        <!-- Middle Name -->
                        <div class="w-full md:w-1/4 px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="grid-middle-name">
                                Mobile 1
                            </label>
                            <input
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                id="grid-middle-name" type="text" placeholder="Doe">
                        </div>

                        <!-- Middle Name -->
                        <div class="w-full md:w-1/4 px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="grid-middle-name">
                                Mobile 2
                            </label>
                            <input
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                id="grid-middle-name" type="text" placeholder="Doe">
                        </div>

                    </div>



                    



                    

                    
                </form>

                <!-- Modal Footer -->
                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row sm:justify-end">
                    <button id="closeModal" type="button"
                        class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-blue-600 text-base font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:ml-3 sm:w-auto sm:text-sm">
                        Close
                    </button>

                    <button id="closeModal" type="button"
                        class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-blue-600 text-base font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:ml-3 sm:w-auto sm:text-sm">
                        Submit
                    </button>
                </div>
            </div>
        </div>
    </div>




     <script>
    //     document.addEventListener("DOMContentLoaded", function () {
    //         const tableBody = document.getElementById("tableBody");
    //         const rows = tableBody.getElementsByTagName("tr");
    //         const searchInput = document.getElementById("searchInput");
    //         const pagination = document.getElementById("pagination");
    //         const pageSizeSelector = document.getElementById("pageSizeSelector");
    //         let rowsPerPage = parseInt(pageSizeSelector.value); // Default rows per page
    //         let currentPage = 1;

    //         // Function to filter rows based on search input
    //         function filterRows() {
    //             const searchTerm = searchInput.value.toLowerCase();
    //             for (let i = 0; i < rows.length; i++) {
    //                 const name = rows[i].getElementsByTagName("td")[0].textContent.toLowerCase();
    //                 if (name.includes(searchTerm)) {
    //                     rows[i].style.display = "";
    //                 } else {
    //                     rows[i].style.display = "none";
    //                 }
    //             }
    //             currentPage = 1; // Reset to the first page after filtering
    //             updatePagination();
    //             showPage(currentPage);
    //         }

    //         // Function to update pagination
    //         function updatePagination() {
    //             pagination.innerHTML = "";
    //             const visibleRows = Array.from(rows).filter(row => row.style.display !== "none");
    //             const totalPages = Math.ceil(visibleRows.length / rowsPerPage);

    //             for (let i = 1; i <= totalPages; i++) {
    //                 const button = document.createElement("button");
    //                 button.textContent = i;
    //                 button.className = "p-2 border border-slate-300 rounded-lg";
    //                 if (i === currentPage) {
    //                     button.classList.add("bg-slate-200");
    //                 }
    //                 button.addEventListener("click", () => {
    //                     currentPage = i;
    //                     showPage(currentPage);
    //                     updatePagination();
    //                 });
    //                 pagination.appendChild(button);
    //             }
    //         }

    //         // Function to show rows for the current page
    //         function showPage(page) {
    //             const visibleRows = Array.from(rows).filter(row => row.style.display !== "none");
    //             const start = (page - 1) * rowsPerPage;
    //             const end = start + rowsPerPage;

    //             for (let i = 0; i < visibleRows.length; i++) {
    //                 if (i >= start && i < end) {
    //                     visibleRows[i].style.display = "";
    //                 } else {
    //                     visibleRows[i].style.display = "none";
    //                 }
    //             }
    //         }

    //         // Event listener for search input
    //         searchInput.addEventListener("input", filterRows);

    //         // Event listener for page size selector
    //         pageSizeSelector.addEventListener("change", () => {
    //             rowsPerPage = parseInt(pageSizeSelector.value);
    //             currentPage = 1; // Reset to the first page
    //             updatePagination();
    //             showPage(currentPage);
    //         });

    //         // Initialize pagination and show the first page
    //         updatePagination();
    //         showPage(currentPage);
    //     });
    
     </script>


    {{-- used for modal window operations --}}
     <script>
    //     document.addEventListener("DOMContentLoaded", function () {
    //   const modal = document.getElementById("modal");
    //   const openModalButton = document.getElementById("openModal");
    //   const closeModalButton = document.getElementById("closeModal");

    //   // Open Modal
    //   openModalButton.addEventListener("click", () => {
    //     modal.classList.remove("hidden");
    //   });

    //   // Close Modal
    //   closeModalButton.addEventListener("click", () => {
    //     modal.classList.add("hidden");
    //   });

    //   // Close Modal when clicking outside
    //   window.addEventListener("click", (event) => {
    //     if (event.target === modal) {
    //       modal.classList.add("hidden");
    //     }
    //   });
    // });
     </script>


</div>