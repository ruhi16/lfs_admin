
<div class="max-w-6xl spacey mx-auto sm:px-6 lg:px-8 flex flex-row gap-2">
    @if (session()->has('message'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
            <strong class="font-bold">Success!</strong>
            <span class="block sm:inline">{{ session('message') }}</span>
            @if(session()->has('savedData'))
                <pre class="mt-2 p-2 bg-gray-100 rounded">{{session('savedData')}}</pre>
            @endif
        </div>
    @endif
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 table-auto">
        <thead>
            <tr>
                <th colspan="7" class="p-5 text-lg font-semibold text-center bg-slate-300 text-gray-900 dark:text-white">All Notices</th>
                <th class="p-5 text-lg font-semibold text-center bg-slate-300 text-gray-900 dark:text-white">
                    <button class="bg-blue-500 text-white px-4 py-2 rounded" wire:click="edit(0)">Add New</button>
                </th>
            </tr>
        </thead>
        {{-- <caption class="p-5 text-lg font-semibold text-left text-gray-900 dark:text-white">All Notices</caption> --}}
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">ID</th>
                <th scope="col" class="px-6 py-3">Title</th>
                <th scope="col" class="px-6 py-3">SubTitle</th>
                {{-- <th scope="col" class="px-6 py-3">Description</th> --}}
                <th scope="col" class="px-6 py-3">Action</th>
                <th scope="col" class="px-6 py-3">Status</th>
                <th scope="col" class="px-6 py-3">Image</th>
                <th scope="col" class="px-6 py-3">Active</th>
                <th scope="col" class="px-6 py-3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($notices as $notice)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white dark:bg-gray-800">{{ $notice->id }}</th>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white dark:bg-gray-800">{{ $notice->title }}</th>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white dark:bg-gray-800 text-ellipsis " width="5%">{{ $notice->desc }}</th><th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white dark:bg-gray-800">{{ $notice->desc }}</th>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white dark:bg-gray-800 text-ellipsis" width="15%">{{ $notice->dop }} to {{ $notice->doe }}</th>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white dark:bg-gray-800">
                        {{-- {{ $notice->fileaddr }}:{{ Storage::url($notice->fileaddr) }} --}}
                        {{-- <img src="{{ asset($notice->fileaddr) }}" alt="Image Preview" class="max-w-xs mt-2 rounded h-10" height="50%"> --}}
                        <img src="{{ Storage::url($notice->fileaddr) }}" alt="Image Preview" class="max-w-xs mt-2 rounded h-10" height="50%">
                    </th>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white dark:bg-gray-800">{{ $notice->is_active }}</th>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white dark:bg-gray-800">
                        {{-- <a href="" class="btn btn-primary">Edit</a> --}}
                        id:{{ $notice_id }}-{{ $modal_is_open }}
                        <button wire:click="edit({{ $notice->id }})" class="btn btn-danger">Edit</button>
                    </th>

                </tr>
            @endforeach
        </tbody>
    </table>






    <div>
        <!-- Button to open the modal -->
        {{-- <button class="bg-blue-500 text-white px-4 py-2 rounded" wire:click="edit({{ $notice_id }})">Open Modal</button> --}}
        {{-- <button class="bg-blue-500 text-white px-4 py-2 rounded" onclick="openModal()">Open Modal</button> --}}
        
        <!-- Modal -->
        <div id="modal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 {{ $modal_is_open ? '' : 'hidden' }}">
            <div class="bg-white rounded-lg shadow-lg p-6 w-1/2">
                <div class="flex justify-between items-center">
                    <h2 class="text-2xl font-semibold">Notice Details</h2>
                    <button class="text-gray-600" onclick="closeModal()">&times;</button>
                </div>
                <div class="mt-4">
                    <!-- Modal content goes here -->
                    <p>Notice ID: {{ $notice_id }}</p>
                    {{-- <ul>
                        @foreach($notices as $notice)
                            <li>{{ $notice->title }}</li>
                        @endforeach
                    </ul> --}}
                    {{ json_encode($notice_selected) }}
                    <form wire:submit.prevent="submit" class="max-w-md mx-auto" enctype="multipart/form-data">
                        <div class="mb-4">
                            <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Title:</label>
                            <input type="text" wire:model="title" id="title"  class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            @error('title') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                        </div>
                
                        <div class="mb-4">
                            <label for="desc" class="block text-gray-700 text-sm font-bold mb-2">Description:</label>
                            <textarea wire:model="desc" id="desc"  class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                               
                            </textarea>
                            @error('desc') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                        </div>
                
                        <div class="mb-4">
                            <label for="dop" class="block text-gray-700 text-sm font-bold mb-2">Date of Publication:</label>
                            <input type="date" wire:model="dop" id="dop" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            @error('dop') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                        </div>
                
                        <div class="mb-4">
                            <label for="doe" class="block text-gray-700 text-sm font-bold mb-2">Date of Expiration:</label>
                            <input type="date" wire:model="doe" id="doe" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            @error('doe') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                        </div>
                
                        {{-- <div class="mb-4">
                            <label for="fileaddr" class="block text-gray-700 text-sm font-bold mb-2">File Address:</label>
                            <input type="text" wire:model="fileaddr" id="fileaddr" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            @error('fileaddr') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                        </div> --}}

                        <div class="mb-4">
                            <label for="fileaddr" class="block text-gray-700 text-sm font-bold mb-2">Image File:</label>
                            <input type="file" wire:model="fileaddr" id="fileaddr" accept="image/*" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            @error('fileaddr') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                        
                            @if ($fileaddr)
                                <p class="mt-2">Preview: {{ $fileaddr->temporaryUrl() }}</p>
                                <img src="{{ $fileaddr->temporaryUrl() }}" alt="Image Preview" class="max-w-xs mt-2 rounded h-10" height="10%">
                            @endif
                        </div>
                
                        <div class="mb-4">
                            <label for="is_active" class="block text-gray-700 text-sm font-bold mb-2">Is Active:</label>
                            <input type="checkbox" wire:model="is_active" id="is_active" class="form-checkbox h-5 w-5 text-indigo-600">
                            @error('is_active') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                        </div>
                
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Submit</button>
                    </form>

                </div>


                <div class="mt-4 flex justify-end">
                    <button class="bg-gray-500 text-white px-4 py-2 rounded mr-2" onclick="closeModal()">Close</button>
                    <button class="bg-blue-500 text-white px-4 py-2 rounded">Save</button>
                </div>

            </div>
        </div>
    </div>

    <script>
        function openModal() {
            document.getElementById('modal').classList.remove('hidden');
        }

        function closeModal() {
            document.getElementById('modal').classList.add('hidden');
        }

        Livewire.on('openModal', () => {
            openModal();
        });

        Livewire.on('closeModal', () => {
            closeModal();
        });
    </script>

</div>