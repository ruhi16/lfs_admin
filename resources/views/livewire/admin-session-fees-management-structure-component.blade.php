<div>

    <div class="flex gap-2">

        <aside class="">

        </aside>

        <main class="flex-1">

            <div class="bg-slate-100 h-max-screen flex-1 p-4 rounded-md">
                <h1>Fee Management Structure </h1>
                <div>
                    @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                    @elseif (session()->has('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                    @endif
                </div>

                <!-- Progress Bar -->
                <div class="flex items-center justify-between mb-6">
                    <div class="flex items-center space-x-4">
                        <div class="flex items-center">
                            <div
                                class="w-8 h-8 rounded-full {{ $currentStep >= 1 ? 'bg-blue-500 text-white' : 'bg-gray-300 text-gray-600' }} flex items-center justify-center text-sm font-medium">
                                1</div>
                            <span
                                class="ml-2 text-sm font-medium {{ $currentStep >= 1 ? 'text-blue-600' : 'text-gray-500' }}">Select
                                Class & Fee Type</span>
                        </div>

                        <div class="w-16 h-0.5 {{ $currentStep >= 2 ? 'bg-blue-500' : 'bg-gray-300' }}"></div>

                        <div class="flex items-center">
                            <div
                                class="w-8 h-8 rounded-full {{ $currentStep >= 2 ? 'bg-blue-500 text-white' : 'bg-gray-300 text-gray-600' }} flex items-center justify-center text-sm font-medium">
                                2
                            </div>
                            <span
                                class="ml-2 text-sm font-medium {{ $currentStep >= 2 ? 'text-blue-600' : 'text-gray-500' }}">Add
                                Fee Particulars</span>
                        </div>

                        <div class="w-16 h-0.5 {{ $currentStep >= 3 ? 'bg-blue-500' : 'bg-gray-300' }}"></div>

                        <div class="flex items-center">
                            <div
                                class="w-8 h-8 rounded-full {{ $currentStep >= 3 ? 'bg-blue-500 text-white' : 'bg-gray-300 text-gray-600' }} flex items-center justify-center text-sm font-medium">
                                3
                            </div>
                            <span
                                class="ml-2 text-sm font-medium {{ $currentStep >= 3 ? 'text-blue-600' : 'text-gray-500' }}">Fee
                                Summary</span>
                        </div>
                    </div>
                </div>
                <!-- End of Progress Bar -->

                <div class="flex flex-col">
                    {{-- <div class="flex items-center mb-4">
                        <input type="text" id="searchInput" placeholder="Search..."
                            class="border border-gray-300 rounded-md px-3 py-2 mr-2" />
                    </div> --}}
                    @if( $currentStep === 1 )

                    <table class="min-w-full text-sm text-left border border-gray-300" id="dataTable">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="px-3 py-2 font-medium text-gray-900 border-b border-gray-300 cursor-pointer">ID </th>
                                <th class="px-3 py-2 font-medium text-gray-900 border-b border-gray-300 cursor-pointer">Class</th>
                                <th class="px-3 py-2 font-medium text-gray-900 border-b border-gray-300 cursor-pointer">Session Event</th>
                                <th class="px-3 py-2 font-medium text-gray-900 border-b border-gray-300 cursor-pointer">Schedules</th>
                                <th class="px-3 py-2 font-medium text-gray-900 border-b border-gray-300 cursor-pointer">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($myclasses as $myclass)
                            <tr class="border-b border-gray-200">
                                <td class="px-3 py-2 border-r border-gray-300">{{ $myclass->id }}</td>
                                <td class="px-3 py-2 border-r border-gray-300">{{ $myclass->name }}</td>
                                <td class="px-3 py-2 border-r border-gray-300">
                                    {{ $sessionFeeMandates->where('myclass_id', $myclass->id)->first()->name ?? 'X' }}
                                    @foreach($sessionFeeStructures->where('myclass_id', $sessionFeeMandates->where('myclass_id', $myclass->id)->first()->id ?? 0) as $sessionFeeStructure)
                                        <br/>
                                        {{-- {{ $sessionFeeStructure->fee_category_id }}:{{ $sessionFeeStructure->fee_particular_id }}: --}}
                                        {{ $sessionFeeStructure->amount }} + 
                                    @endforeach

                                </td>
                                <td class="px-3 py-2 border-r border-gray-300">
                                    @foreach($sessionFeeSchedules->where('session_event_id', $sessionFeeMandates->where('myclass_id', $myclass->id)->first()->session_event_id ?? 0) as $sessionFeeSchedule)
                                        {!! Carbon\Carbon::parse($sessionFeeSchedule->start_date)->format('d-m-Y') !!}, 
                                        {{-- -{{ $sessionFeeSchedule->start_date }}, <br/> --}}
                                        
                                    @endforeach
                                </td>

                                <td class="px-3 py-2 border-r border-gray-300">
                                    <button type="button" wire:click="selectClass({{ $myclass->id }})"
                                        class="px-3 py-2 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                        Select Class
                                    </button>
                                </td>
                            </tr>
                        
                        @endforeach
                        </tbody>
                    </table>

                    {{-- <div class="max-w-6xl mx-auto p-6 bg-white shadow-lg rounded-lg">
                        <div class="mb-8">
                            <h2 class="text-2xl font-bold text-gray-800 mb-0">Fee Management Structure</h2>
                            <h3 class="text-xl font-bold text-gray-800 mb-4">Select Class & Its Schedule</h3>

                            <div class="flex items-center mb-4">

                                <div class="flex items-center mb-4">
                                    <div class="flex flex-col ">
                                        <label for="searchSelect" class="mr-2">Select Class:{{ $selectedClass }}</label>
                                        <select id="searchSelect" wire:model="selectedClass"
                                            class="border border-gray-300 rounded-md px-3 py-2 pr-8 mr-2 min-w-[180px] text-base">
                                            <option value="">Select an class...</option>
                                            @foreach($myclasses as $myclass)
                                            <option value="{{ $myclass->id }}">{{ $myclass->name }}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                </div>
                                
                                <div class="flex items-center mb-4">
                                    <div class="flex flex-col ">
                                        <label for="searchSchedule" class="mr-2">Select Schedule:{{$selectedSessionEvent }}</label>
                                        <select id="searchSchedule" wire:model="selectedSessionEvent"
                                            class="border border-gray-300 rounded-md px-3 py-2 pr-8 mr-2 min-w-[180px] text-base">
                                            <option value="">Select an schedule...</option>
                                            @foreach($sessionEvents as $sessionEvent)
                                                <option value="{{ $sessionEvent->id }}">{{ $sessionEvent->sessionEventCategory->name}}:{{ $sessionEvent->name }}
                                                </option>
                                            @endforeach

                                        </select>
                                    </div>
                                </div>

                                <br/>
                                <div class="flex items-center mb-4">XX
                                    @if($sessionEventsSchedules)
                                        @foreach($sessionEventsSchedules as $sessionEventsSchedule)
                                            {{ $sessionEventsSchedule->name }},

                                        @endforeach
                                    @endif
                                </div>
                            </div>

                            <div class="flex justify-end">
                                <button type="button" wire:click="nextStep" 
                                    class="px-6 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 cursor-pointer" 
                                    >
                                    Next Step x
                                </button>
                            </div>




                        </div>
                    </div> --}}


                    {{-- <div class="overflow-x-auto">
                        <table class="min-w-full text-sm text-left border border-gray-300" id="dataTable">
                            <thead class="bg-gray-100">
                                <tr>
                                    <th class="px-3 py-2 font-medium text-gray-900 border-b border-gray-300 cursor-pointer"
                                        data-column="0">ID <span class="sort-icon"></span></th>
                                    <th class="px-3 py-2 font-medium text-gray-900 border-b border-gray-300 cursor-pointer"
                                        data-column="0">Class <span class="sort-icon"></span></th>
                                    <th class="px-3 py-2 font-medium text-gray-900 border-b border-gray-300 cursor-pointer"
                                        data-column="1">Fee Category <span class="sort-icon"></span></th>
                                    <th class="px-3 py-2 font-medium text-gray-900 border-b border-gray-300 cursor-pointer"
                                        data-column="2">Fee Particular <span class="sort-icon"></span></th>
                                    <th class="px-3 py-2 font-medium text-gray-900 border-b border-gray-300 cursor-pointer"
                                        data-column="2">Amount <span class="sort-icon"></span></th>
                                    <th class="px-3 py-2 font-medium text-gray-900 border-b border-gray-300 cursor-pointer"
                                        data-column="2">Action <span class="sort-icon"></span></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($sessionFeesStructures as $sessionFeesStructure)

                                <tr class="border-b border-gray-200">
                                    <td class="px-3 py-2 border-r border-gray-300">{{$sessionFeesStructure->id}}</td>
                                    <td class="px-3 py-2 border-r border-gray-300">
                                        {{$sessionFeesStructure->myclass->name ?? 'X' }}</td>
                                    <td class="px-3 py-2 border-r border-gray-300">
                                        {{$sessionFeesStructure->feeCategory->name }}</td>
                                    <td class="px-3 py-2 border-r border-gray-300">
                                        {{$sessionFeesStructure->feeParticular->name }}

                                    </td>
                                    <td class="px-3 py-2 border-r border-gray-300">
                                        {{$sessionFeesStructure->amount }}

                                    </td>

                                    <td class="px-3 py-2 border-r border-gray-300">
                                        <div class="flex space-x-2">
                                            <button type="button"
                                                class="px-3 py-2 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">View</button>
                                            <button type="button"
                                                class="px-3 py-2 text-xs font-medium text-center text-white bg-green-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-blue-800">Edit</button>
                                            <button type="button"
                                                class="px-3 py-2 text-xs font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Delete</button>

                                        </div>
                                    </td>

                                </tr>

                                @endforeach

                            </tbody>
                        </table>
                    </div> --}}

                    @endif
                



                    @if ($currentStep === 2)

                    <div class="max-w-6xl mx-auto p-6 bg-white shadow-lg rounded-lg">
                        <div class="mb-8">
                            <h2 class="text-2xl font-bold text-gray-800 mb-4">Fee Management Form</h2>

                        </div>
                    </div>


                    @endif


                </div>
                {{-- @livewire('admin-session-fees-management-receipt-component') --}}
        </main>


    </div>

    

    <script>
        const searchInput = document.getElementById('searchInput');
        const table = document.getElementById('dataTable');
        const rows = Array.from(table.getElementsByTagName('tbody')[0].getElementsByTagName('tr'));
        const headers = table.getElementsByTagName('th');
        let sortColumn = null;
        let sortDirection = 'asc';

        searchInput.addEventListener('input', function () {
            const searchTerm = searchInput.value.toLowerCase();
            filterTable(searchTerm);
        });

        function filterTable(searchTerm) {
            rows.forEach(row => {
                const cells = row.getElementsByTagName('td');
                const rowVisible = Array.from(cells).some(cell => cell.textContent.toLowerCase().includes(searchTerm));
                row.style.display = rowVisible ? '' : 'none';
            });
        }

        Array.from(headers).forEach(header => {
            header.addEventListener('click', () => {
                const column = parseInt(header.dataset.column);
                if (sortColumn === column) {
                    sortDirection = sortDirection === 'asc' ? 'desc' : 'asc';
                } else {
                    sortColumn = column;
                    sortDirection = 'asc';
                }
                sortData(column, sortDirection);
                updateSortIcons();
            });
        });

        function sortData(column, direction) {
            rows.sort((a, b) => {
                const aValue = a.getElementsByTagName('td')[column].textContent;
                const bValue = b.getElementsByTagName('td')[column].textContent;
                if (direction === 'asc') {
                    return aValue.localeCompare(bValue, undefined, { numeric: true, sensitivity: 'base' });
                } else {
                    return bValue.localeCompare(aValue, undefined, { numeric: true, sensitivity: 'base' });
                }
            });
            const tbody = table.getElementsByTagName('tbody')[0];
            rows.forEach(row => tbody.appendChild(row));
        }

        function updateSortIcons() {
            Array.from(headers).forEach(header => {
                const icon = header.querySelector('.sort-icon');
                if (parseInt(header.dataset.column) === sortColumn) {
                    icon.textContent = sortDirection === 'asc' ? '▲' : '▼';
                } else {
                    icon.textContent = '';
                }
            });
        }
    </script>

</div>