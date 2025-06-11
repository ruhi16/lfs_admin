<div class="container mx-auto p-4">
    @if(session()->has('message'))
    <div class="p-4 mb-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative">
        <strong class="font-bold">Success!!! </strong>
        <span class="block sm:inline">{{ session('message') }}</span>
    </div>
    @elseif(session()->has('error'))
    <div class="p-4 mb-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative">
        <strong class="font-bold">Error!!! </strong>
        <span class="block sm:inline">{{ session('error') }}</span>
    </div>
    @endif

    <div class="relative flex flex-col w-full h-full  text-gray-700 bg-white shadow-md rounded-lg bg-clip-border">

        <div class="flex justify-between items-center">
            <h1 class="text-2xl font-bold m-4">Student Admission & Data Entry Form</h1>
            <div>
                <label for="selectedMyclass">Select Class:</label>
                <select id="selectedMyclass" wire:model="selectedMyclass"
                    class="p-2 border border-slate-300 rounded-lg max-w-2xl" style="width: 200px;">
                    <option value="">All Classes</option>
                    @foreach($currMyclasses as $index => $currMyclass)
                    <option value="{{$currMyclass->id}}">{{$currMyclass->description}}</option>
                    @endforeach

                </select>
            </div>
            <!-- Button -->
            <div>
                {{-- <a href="#" id="openModal" wire:click="openModal"
                    class=" text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-lg px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                    Add New {{ $modal_is_open ? 'True' : 'False' }}
                </a> --}}
                <button wire:click="generatePdf" class="bg-green-500 text-white px-4 py-2 m-4 rounded">Generate PDF</button>
            </div>
        </div>
    </div>
    <br />

    <div
        class="relative flex flex-col w-full h-full overflow-scroll text-gray-700 bg-white shadow-md rounded-lg bg-clip-border">

        <div class="flex justify-between p-2 ph-4">
            <!-- Search Input -->
            <div>
                <input type="text" id="searchInput" onkeyup="searchRecords()" placeholder="Search by name..."
                    class="p-2 border border-slate-300 rounded-lg">
            </div>

            <!-- Page Size Selector -->
            <div>
                <select id="pageSizeSelector" class="p-2 border border-slate-300 rounded-lg min-w-auto"
                    style="width: 200px;">
                    <option value="2">2 per page</option>
                    <option value="5">5 per page</option>
                    <option value="10">10 per page</option>
                    <option value="20">20 per page</option>
                </select>
            </div>

        </div>

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
                        <p class="block text-sm font-normal leading-none text-slate-800">Name & Details</p>
                    </th>
                    <th class="p-2 border-b border-slate-300 bg-slate-50">
                        <p class="block text-lg font-normal leading-none text-slate-800">DOB & Aadhar No</p>
                    </th>
                    <th class="p-2 border-b border-slate-300 bg-slate-50">
                        <p class="block text-lg font-normal leading-none text-slate-800">Address</p>
                    </th>
                    <th class="p-2 border-b border-slate-300 bg-slate-50">
                        <p class="block text-lg font-normal leading-none text-slate-800">Class-Sec: Roll</p>
                    </th>
                    <th class="p-2 border-b border-slate-300 bg-slate-50">
                        <p class="block text-lg font-normal leading-none text-slate-800">Image</p>
                    </th>
                    <th class="p-2 border-b border-slate-300 bg-slate-50">
                        <p class="block text-lg font-normal leading-none text-slate-800">Actions</p>
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
                        <p class="block text-sm text-slate-500">{{$studentcr->studentdb->uuid_auto}}-
                            {{-- {{$studentcr->studentdb_id }}-{{ $studentcr->id }}</p> --}}
                    </td>

                    <td class="p-2 border-b border-slate-200">
                        <p class="block text-sm font-normal leading-none text-slate-500"><b>{{
                                $studentcr->studentdb->name }} ({{ $studentcr->studentdb->ssex }})</b><br />{{
                            $studentcr->studentdb->fname }}<br />{{ $studentcr->studentdb->mname }}</p>
                    </td>
                    <td class="p-2 border-b border-slate-200">
                        <p class="block text-sm font-normal leading-none text-slate-500">{{ $studentcr->studentdb->dob
                            }}<br />{{ $studentcr->studentdb->adhaar }}</p>
                    </td>
                    <td class="p-2 border-b border-slate-200">
                        <p class="block text-sm font-normal leading-none text-slate-500">
                            {{ $studentcr->studentdb->vill }}, {{ $studentcr->studentdb->post }}<br />
                            {{ $studentcr->studentdb->pstn }}, {{ $studentcr->studentdb->dist }}, {{
                            $studentcr->studentdb->pin }}<br />
                            {{ $studentcr->studentdb->mobl }}
                        </p>
                    </td>
                    <td class="p-2 border-b border-slate-200">
                        <p class="block text-sm font-normal leading-none text-slate-500">
                            {{ $studentcr->myclass->name ?? 'x'}}-{{ $studentcr->section->name ?? 'x'}}: {{
                            $studentcr->roll_no ?? 'x'}}
                        </p>
                    </td>
                    <td class="p-2 border-b border-slate-200">
                        <img src="{{ Storage::url($studentcr->studentdb->img_ref_profile) }}" alt="Image" class="w-10 h-10 rounded-full">
                    </td>
                    <td class="p-2 border-b border-slate-200">
                        <p class="block text-lg font-normal leading-none text-slate-500">
                            <a href="{{ route('admin.studentdb_admission', ['studentdb_id' => $studentcr->studentdb_id]) }}"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                Edit
                            </a>

                            <a href="{{ route('admin.studentcr-records-individual-idcard', [ 'uuid' => $studentcr->id ]) }}" target="_blank" 
                                class="text-white bg-orange-700 hover:bg-orange-800 focus:ring-4 focus:ring-orange-300 font-medium rounded-lg text-sm px-3 py-2 dark:bg-orange-600 dark:hover:bg-orange-700 focus:outline-none dark:focus:ring-orange-800">
                                Id Card
                            </a>
                            
                            {{-- <a href="{{ route('admin.studentdb_updation', ['studentdb_id' => $studentcr->studentdb_id]) }}"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Edit</a> --}}
                            {{-- <a href="javascript:void(0)"
                                class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-3 py-2 dark:bg-red-600 dark:hover:bg-red-700 focus:outline-none dark:focus:ring-red-800">Delete</a> --}}
                        </p>
                    </td>
                </tr>

                @endforeach
            </tbody>
        </table>





        <script>
            document.addEventListener("DOMContentLoaded", function () {
            const tableBody = document.getElementById("tableBody");
                 const rows = tableBody.getElementsByTagName("tr");
                 const searchInput = document.getElementById("searchInput");
                 const pagination = document.getElementById("pagination");
                 const pageSizeSelector = document.getElementById("pageSizeSelector");
                 let rowsPerPage = parseInt(pageSizeSelector.value); // Default rows per page
                 let currentPage = 1;
                // Function to filter rows based on search input
                 function filterRows() {
                     const searchTerm = searchInput.value.toLowerCase();
                     for (let i = 0; i < rows.length; i++) {
                         const name = rows[i].getElementsByTagName("td")[0].textContent.toLowerCase();
                         if (name.includes(searchTerm)) {
                             rows[i].style.display = "";
                         } else {
                             rows[i].style.display = "none";
                         }
                     }
                     currentPage = 1; // Reset to the first page after filtering
                     updatePagination();
                     showPage(currentPage);
                 }
    
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
        <script>
            function searchRecords() {
                // Get the search input value
                const searchInput = document.getElementById("searchInput");
                const filter = searchInput.value.toLowerCase();

                // Get the table body and rows
                const tableBody = document.getElementById("tableBody");
                const rows = tableBody.getElementsByTagName("tr");

                // Loop through all rows
                for (let i = 0; i < rows.length; i++) {
                    const cells = rows[i].getElementsByTagName("td");
                    let match = false;

                    // Check each cell in the row
                    for (let j = 0; j < cells.length; j++) {
                        if (cells[j]) {
                            const text = cells[j].textContent || cells[j].innerText;
                            if (text.toLowerCase().includes(filter)) {
                                match = true;
                                break;
                            }
                        }
                    }

                    // Show or hide the row based on the match
                    rows[i].style.display = match ? "" : "none";
                }
            }
        </script>
    </div>