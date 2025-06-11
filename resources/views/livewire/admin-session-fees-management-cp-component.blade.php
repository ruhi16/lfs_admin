<div>
    <div class="flex items-left mb-4 gap-2">
        <div class="bg-slate-100 h-max-screen flex-1 p-4 rounded-md">
            <h1>Fee Category & Particular Management</h1>
            
            @if (session()->has('partSuccess'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
            @elseif (session()->has('partError'))
            <div class="alert alert-danger">
                {{ session('partError') }}
            </div>
            @endif

            <div class="overflow-x-auto">
                <table class="min-w-full text-sm text-left border border-gray-300" id="dataTable">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="px-3 py-2 font-medium text-gray-900 border-b border-gray-300 cursor-pointer">
                                Sl
                            </th>
                            
                            <th class="px-3 py-2 font-medium text-gray-900 border-b border-gray-300 cursor-pointer" {{--
                                data-column="1" --}}>
                                <div class="flex justify-between">
                                    <div>
                                        Fee Category
                                    </div>
                                    <div>
                                        <button type="button" wire:click="categoryModalOpen"
                                            class="px-3 py-2 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add</button>
                                    </div>
                                </div>

                            </th>
                            <th class="px-3 py-2 font-medium text-gray-900 border-b border-gray-300 cursor-pointer">
                                Fee Particulars
                            </th>
                            <th class="px-3 py-2 font-medium text-gray-900 border-b border-gray-300 cursor-pointer">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($sessionFeeCategories as $sessionFeeCategory)

                        <tr class="border-b border-gray-200">
                            <td class="px-3 py-2 border-r border-gray-300">{{ $loop->iteration }}</td>
                            <td class="px-3 py-2 border-r border-gray-300">
                                {{$sessionFeeCategory->name ?? 'X' }}
                            </td>
                            <td class="px-3 py-2 border-r border-gray-300 flex justify-between">
                                <div>
                                    @foreach($sessionFeeCategory->feeParticulars as $FeeParticular)
                                    {{$FeeParticular->name}},
                                    @endforeach
                                </div>
                                <div>
                                    <button type="button"
                                        wire:click="particularModalOpen({{ $sessionFeeCategory->id }}, false )"
                                        class="px-3 py-2 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                        Add
                                    </button>
                                    <button type="button"
                                        wire:click="particularModalOpen({{ $sessionFeeCategory->id }}, true )"
                                        class="px-3 py-2 text-xs font-medium text-center text-white bg-green-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-blue-800">Edit</button>
                                    {{-- <button type="button"
                                        class="px-3 py-2 text-xs font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Delete</button>
                                    --}}

                                </div>

                            </td>
                            <td class="px-3 py-2 border-r border-gray-300">
                                <div class="flex space-x-2">
                                    {{-- <button type="button"
                                        class="px-3 py-2 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">View</button>
                                    <button type="button"
                                        class="px-3 py-2 text-xs font-medium text-center text-white bg-green-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-blue-800">Edit</button>
                                    <button type="button"
                                        class="px-3 py-2 text-xs font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Delete</button>
                                    --}}

                                </div>
                            </td>


                        </tr>

                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>



    {{-- <div class="flex items-left mb-4 gap-2">
        <div class="bg-slate-100 h-max-screen flex-1 p-4 rounded-md">
            @if ($showCategoryModal)
            @include('livewire.admin-session-fees-management-cp-category-modal')
            @endif

            @if ($showParticularModal)
            @include('livewire.admin-session-fees-management-cp-particular-modal')
            @endif
        </div>
    </div> --}}


    
    {{-- 1. Category Modal start --}}
    <div id="myModal"
        class="fixed inset-0 z-50 overflow-auto bg-black bg-opacity-50 {{ $categoryModal ? '' : 'hidden' }}"> {{--
        hidden will be t or f to show or hide modal --}}
        <div class="flex items-center justify-center min-h-screen p-4">
            <div class="bg-white rounded-lg shadow-lg w-full max-w-md">
                <div class="p-6">
                    <h2 id="modalTitle" class="text-2xl font-semibold mb-4">Add or Edit Category Name</h2>

                    <div id="modalContent" class="mb-4">
                        <label>Add New Category</label>
                        <input wire:model="categoryName" type="text" placeholder="Enter category name..."
                            class="border text-gray-900 rounded p-2 w-full mt-2" />
                        @error('categoryName') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>

                    <div class="flex justify-end gap-2">
                        <button wire:click="categoryModalClose" id="cancelButton"
                            class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 rounded">
                            Cancel
                        </button>
                        <button wire:click="categoryModalSaveData" id="confirmButton"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded">
                            Save Data
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Category Modal end --}}

    {{-- 2. Particular Modal start --}}
    <div id="myModal"
        class="fixed inset-0 z-50 overflow-auto bg-black bg-opacity-50 {{ $particularModal ? '' : 'hidden' }}"> {{--
        hidden will be t or f to show or hide modal --}}
        <div class="flex items-center justify-center min-h-screen p-4">
            <div class="bg-white rounded-lg shadow-lg w-full max-w-md">
                <div class="p-6 ">
                    <h2 id="modalTitle" class="text-2xl font-semibold mb-4">Add or Edit Particular Name</h2>
                    @if($particularEditFlag)
                    {{-- Edit Mode --}}
                    <div id="modalContent" class="mb-4">
                        <label>Particulars to Category <b>{{ $categoryName ?? 'X' }}</b></label>
                        @foreach($particularsOfCategory as $particular)
                        {{-- {{ $particular->name }} --}}
                        <input wire:model="particularNameEdit.{{ $particular->id }}" type="text"
                            placeholder="Enter particular name..."
                            class="border text-gray-900 rounded p-2 w-full mt-2" />
                        @error('particularNameEdit.{{$particular->id}}')
                        <span class="text-red-500">{{ $message }}</span>
                        @enderror
                        <br />
                        @endforeach

                    </div>
                    @else
                    {{-- Create Mode --}}
                    <div id="modalContent" class="mb-4">
                        <label>Particular to Category <b>{{ $categoryName ?? 'X' }}</b></label>
                        <input wire:model="particularName" type="text" placeholder="Enter particular name..."
                            class="border text-gray-900 rounded p-2 w-full mt-2" />
                        @error('particularName') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                    @endif

                    <div class="flex justify-end gap-2">
                        <button wire:click="particularModalClose" id="cancelButton"
                            class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 rounded">
                            Cancel
                        </button>
                        <button wire:click="particularModalSaveData" id="confirmButton"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded">
                            Save Data
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </div>
    {{-- Particular Modal end --}}

</div>
