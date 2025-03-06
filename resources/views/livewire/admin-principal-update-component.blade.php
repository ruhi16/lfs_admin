<div class="max-w-7xl spacey mx-auto sm:px-6 lg:px-8 flex flex-col bg-slate-100">    
    
    @if (session()->has('success'))
        <div class="p-4 mb-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative">
            <strong class="font-bold">Success!</strong>
            <span class="block sm:inline">{{ session('success') }}</span>
            {{-- @if(session()->has('savedData'))
                <pre class="mt-2 p-2 bg-gray-100 rounded">{{session('savedData')}}</pre>
            @endif --}}
        </div>
    @elseif (session()->has('error'))
        <div class="p-4 mb-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative">
            <strong class="font-bold">Error!</strong>
            <span class="block sm:inline">{{ session('error') }}</span>
        </div>
    @endif

    <!-- Display uploaded image -->
    @if ($imageUrl)
        <div class="mt-4">
            <h4>Uploaded Image:</h4>
            <img src="{{ Storage::url($imageUrl) }}" alt="Uploaded Image" class="img-fluid">
        </div>
    @endif
    @if ($principal_desk->img_ref_1)
        <div class="mt-4">
            <h4>Uploaded Image:{{ Storage::url($principal_desk->img_ref_1) }}</h4>
            <img src="{{ Storage::url($principal_desk->img_ref_1) }}" alt="Uploaded Image" class="img-fluid">
        </div>
    @endif
        
    <div class="max-w-8xl spacey  sm:px-6 lg:px-8 ">
        <div class="relative overflow-x-auto">
            <form wire:submit.prevent="saveFacility">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">Title</th>
                            <td class="px-6 py-3">
                                <div>
                                    <input type="text" wire:model="title" id="title" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Title"  />
                                    @error('title') <span class="text-red-500">{{ $message }}</span> @enderror
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="col" class="px-6 py-3">Sub-Title</th>
                            <td class="px-6 py-4">                            
                                
                                <div>
                                    <input type="text" wire:model="subTitle" id="first_name" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Subtitle"  />
                                    @error('subTitle') <span class="text-red-500">{{ $message }}</span> @enderror
                                </div>

                            </td>
                        </tr>
                        <tr>
                            <th scope="col" class="px-6 py-3">Speach</th>
                            <td class="px-6 py-3">                                
                                <textarea wire:model="description" id="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your thoughts here..."></textarea>
                                @error('description') <span class="text-red-500">{{ $message }}</span> @enderror
                            </td>
                        </tr>
                        <tr>
                            <th scope="col" class="px-6 py-3">Authority Details</th>
                            <td class="px-6 py-3">
                                <div class="flex flex-row space-x-4">
                                    <div class="w-1/2">
                                        {{$name}}
                                        <input type="text" wire:model="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Principal name"  />
                                        @error('name') <span class="text-red-500">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="w-1/2">
                                        <input type="text" wire:model="desig" id="desig" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Designation"  />
                                        @error('desig') <span class="text-red-500">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                            </td>
                        </tr>
                        {{-- <tr>                            
                            <th scope="col" class="px-6 py-3">School Details</th>
                            <td class="px-6 py-3">
                                <div class="flex flex-row space-x-4">
                                    <div class="w-1/2">
                                        <input type="text" wire:model="school" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="School name"  />
                                        @error('school') <span class="text-red-500">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="w-1/2">
                                        <input type="text" wire:model="address" id="last_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Address"  />
                                        @error('address') <span class="text-red-500">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                            </td>
                        </tr> --}}
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white dark:bg-gray-800">Image</th>
                            <td class="px-6 py-3">
                                <input wire:model="imageRef" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" aria-describedby="file_input_help" id="file_input" type="file">
                                @error('imageRef') <span class="text-red-500">{{ $message }}</span> @enderror
                                {{-- @if ($imageUrl)
                                    <img src="{{ $previewUrl }}" alt="Preview" style="max-width: 300px;">
                                @endif --}}
                                @if ($imageRef)
                                {{-- <p class="mt-2">Preview: {{ $imageRef->temporaryUrl() }}</p> --}}
                                <img src="{{ $imageRef->temporaryUrl() }}" alt="Image Preview"
                                    class="max-w-xs mt-2 rounded h-10" >
                                @endif
                            </td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white dark:bg-gray-800"></th>
                            <td class="px-6 py-4">
                                {{-- <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Save</button> --}}
                                <button type="button" wire:click="uploadImage" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Save Data</button>

                            </td>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </form>
        </div>
    </div>
</div>

