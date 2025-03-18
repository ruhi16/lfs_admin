<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    <div class="flex gap-2">

        <aside class="bg-white border-r border-gray-200 w-64">
            <div class="p-3">
                <h2 class="text-lg font-semibold mb-2">Session Event Management</h2>
                <nav>
                    {{-- @foreach($sessionEventCategories as $sessionEventCategory)
                    <div class="group">
                        <a href="#" class="block p-2 hover:bg-gray-100 rounded text-sm group-hover:bg-gray-100">{{ $sessionEventCategory->name }}</a>
                        <div class="hidden group-hover:block ml-4 mt-1 space-y-1">
                            @foreach($sessionEventCategory->sessionEvents as $sessionEvent)
                            <a href="#"
                                wire:click="selectSessionEvent({{ $sessionEventCategory->id }},{{ $sessionEvent->id }})"
                                class="block p-2 hover:bg-gray-100 rounded text-xs selected">{{ $sessionEvent->name
                                }}</a>

                            @endforeach
                            
                        </div>
                    </div>
                    @endforeach --}}


                    @foreach($sessionEventCategories as $sessionEventCategory)
                    <div class="group relative">
                        <div class="flex items-center justify-between">
                            <a href="#" class="block p-2 hover:bg-gray-100 rounded text-sm group-hover:bg-gray-100">{{ $sessionEventCategory->name }}</a>
                            <div>
                                <button class="ml-2 p-1 rounded-full hover:bg-gray-200" onclick="openAddModal">Aa</button>
                                <button class="ml-2 p-1 rounded-full hover:bg-gray-200">U</button>
                                <button class="ml-2 p-1 rounded-full hover:bg-gray-200">D</button>
                            </div>
                        </div>

                        <div class="hidden group-hover:block ml-4 mt-1 space-y-1">
                            @foreach($sessionEventCategory->sessionEvents as $sessionEvent)
                                <div class="flex items-center justify-between">
                                    <a href="#"
                                        wire:click="selectSessionEvent({{ $sessionEventCategory->id }},{{ $sessionEvent->id }})"
                                        class="block p-2 hover:bg-gray-100 rounded text-xs selected">{{ $sessionEvent->name}}
                                    </a>
                                    <div>
                                        <button class="ml-2 p-1 text-xs rounded-full hover:bg-gray-200">A</button>
                                        <button class="ml-2 p-1 text-xs rounded-full hover:bg-gray-200">U</button>
                                        <button class="ml-2 p-1 text-xs rounded-full hover:bg-gray-200">D</button>
                                    </div>
                                </div>

                            @endforeach
                            
                        </div>
                    </div>
                    @endforeach




                </nav>

            </div>
        </aside>
       

        <div class="bg-slate-100 h-max-screen flex-1 p-4 rounded-md">
            {{-- <p>Main content area.</p> --}}

            <div class="flex flex-col">
                <div class="flex items-center mb-4">
                    <input type="text" id="searchInput" placeholder="Search..."
                        class="border border-gray-300 rounded-md px-3 py-2 mr-2" />
                </div>

                <div class="overflow-x-auto">
                    <table class="min-w-full text-sm text-left border border-gray-300" id="dataTable">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="px-3 py-2 font-medium text-gray-900 border-b border-gray-300 cursor-pointer"
                                    data-column="0">ID <span class="sort-icon"></span></th>
                                <th class="px-3 py-2 font-medium text-gray-900 border-b border-gray-300 cursor-pointer"
                                    data-column="1">Name <span class="sort-icon"></span></th>
                                <th class="px-3 py-2 font-medium text-gray-900 border-b border-gray-300 cursor-pointer"
                                    data-column="2">Start Dt <span class="sort-icon"></span></th>
                                <th class="px-3 py-2 font-medium text-gray-900 border-b border-gray-300 cursor-pointer"
                                    data-column="2">End Dt <span class="sort-icon"></span></th>
                                <th class="px-3 py-2 font-medium text-gray-900 border-b border-gray-300 cursor-pointer"
                                    data-column="2">Action <span class="sort-icon"></span></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($sessionEventSchedules as $sessionEventSchedule)

                            <tr class="border-b border-gray-200">
                                <td class="px-3 py-2 border-r border-gray-300">{{$sessionEventSchedule->id}}</td>
                                <td class="px-3 py-2 border-r border-gray-300">{{$sessionEventSchedule->name}}</td>
                                <td class="px-3 py-2 border-r border-gray-300">
                                    {{ \Carbon\Carbon::parse($sessionEventSchedule->start_date)->format('d-m-Y') }}
                                </td>
                                <td class="px-3 py-2 border-r border-gray-300">
                                    {{ \Carbon\Carbon::parse($sessionEventSchedule->end_date)->format('d-m-Y') }}
                                </td>
                                <td class="px-3 py-2 border-r border-gray-300">
                                    <div class="flex space-x-2">
                                        <button type="button"
                                            class="px-3 py-2 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">View</button>
                                        <button type="button"
                                            class="px-3 py-2 text-xs font-medium text-center text-white bg-green-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-blue-800">Edit</button>
                                        <button type="button"
                                            class="px-3 py-2 text-xs font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Delete</button>
                                        {{-- <button class="text-green-500 hover:underline">View</button>
                                        <button class="text-blue-500 hover:underline">Edit</button>
                                        <button class="text-red-500 hover:underline">Delete</button> --}}
                                    </div>
                                </td>

                            </tr>

                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    {{-- Modal start --}}
    <div id="myModal" class="fixed inset-0 z-50 overflow-auto bg-black bg-opacity-50 hidden"> {{-- hidden will be t or f to show or hide modal --}}
        <div class="flex items-center justify-center min-h-screen p-4">
          <div class="bg-white rounded-lg shadow-lg w-full max-w-md">
            <div class="p-6">
              <h2 id="modalTitle" class="text-2xl font-semibold mb-4">Modal Title</h2>
      
              <div id="modalContent" class="mb-4">
                <p>This is the content of the modal.</p>
                <input type="text" placeholder="Enter data..." class="border rounded p-2 w-full mt-2"/>
              </div>
      
              <div class="flex justify-end gap-2">
                <button id="cancelButton" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 rounded">
                  Cancel
                </button>
                <button id="confirmButton" class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded">
                  Confirm
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      
      {{-- Modal end --}}








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