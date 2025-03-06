<div class="max-w-7xl spacey mx-auto sm:px-6 lg:px-8 flex flex-col bg-slate-100">

    
    
    @if (session()->has('message'))
        <div class="p-4 mb-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative">
            <strong class="font-bold">Success!</strong>
            <span class="block sm:inline">{{ session('message') }}</span>
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
    

        
    <div class="max-w-8xl spacey  sm:px-6 lg:px-8 ">


        <div class="relative overflow-x-auto">
            <form wire:submit.prevent="saveFacility">
            <h1 class="mb-3">Facility Update Component</h1>
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">Title</th>
                        <th scope="col" class="px-6 py-3">Subtitle</th>
                        <th scope="col" class="px-6 py-3">Description</th>
                        <th scope="col" class="px-6 py-3">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">   
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <div>                            
                                {{-- <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First name</label> --}}
                                <input type="text" wire:model="title" id="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Title..."  />
                                @error ('title') <span class="text-red-500">{{ $message }}</span> @enderror
                            </div>
                        </th>
                        <td class="px-6 py-4">
                            <div>
                                {{-- <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First name</label> --}}
                                <input type="text" wire:model="subtitle" id="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Subtitle..."  />
                                @error ('subtitle') <span class="text-red-500">{{ $message }}</span> @enderror
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <div>
                                {{-- <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First name</label> --}}
                                {{-- <input type="text" wire:model="subtitle" id="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Subtitle..." required /> --}}
                                <textarea wire:model="description" id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Descriptions..."></textarea>
                                @error ('description') <span class="text-red-500">{{ $message }}</span> @enderror
                            </div>
                        </td>

                        <td class="px-6 py-4">
                            {{-- <button wire:click="saveFacility" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Save</button> --}}
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Save</button>
                        </td>
                        
                    </tr>
                </tbody>
            </table>
            </form>
        </div>    

        <div class="space-y-4"> xx </div>
            
        <div class="relative overflow-x-auto">
            <form wire:submit.prevent="saveFacilityItem({{ $itemId }})">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">Select</th>
                        <th scope="col" class="px-6 py-3">Icon</th>
                        <th scope="col" class="px-6 py-3">Facility Head</th>
                        <th scope="col" class="px-6 py-3">Short Details</th>
                        <th scope="col" class="px-6 py-3">Action</th>
                        
                        
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <select  wire:model="itemId" id="countries_disabled" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected>Choose a Item</option>
                                <option value="1">Item 1</option>
                                <option value="2">Item 2</option>
                                <option value="3">Item 3</option>
                                <option value="4">Item 4</option>
                            </select>
                            @error ('itemId') <span class="text-red-500">{{ $message }}</span> @enderror
                            

                            {{-- @if($itemId != null)
                                <div class="mt-2">
                                    <span class="text-2xl text-gray-900 dark:text-white">{{ $itemId }}-{{$message }}-</span>
                                </div>
                            @endif --}}
                        </th>
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white" width="20%">
                            <select  wire:model="itemIcon" id="countries_disabled" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected>Choose a Icon</option>
                                <option value="fa fa-bus-alt fa-3x">Bus Icon</option>
                                <option value="fa fa-futbol fa-3x ">Football Icon</option>
                                <option value="fa fa-home fa-3x ">Home Icon</option>
                                <option value="fa fa-chalkboard-teacher fa-3x">Teacher Icon</option>
                            </select>
                            @error ('itemIcon') <span class="text-red-500">{{ $message }}</span> @enderror

                            {{-- @if($itemIcon != null)
                                <div class="mt-2">
                                    <span class="text-2xl text-gray-900 dark:text-white">{{ $itemIcon }}</span>
                                </div>
                            @endif --}}
                        </th>
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <div>
                                <input type="text" wire:model="itemTitle" id="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Title..."  />
                                @error ('itemTitle') <span class="text-red-500">{{ $message }}</span> @enderror
                            </div>
                        </th>
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <textarea wire:model="itemDescription" id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Descriptions..."></textarea>
                                @error ('itemDescription') <span class="text-red-500">{{ $message }}</span> @enderror
                        </th>
                        <td class="px-6 py-4">
                            <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Update Item</button>
                        </td>
                        
                    </tr>

                    

                </tbody>
            </table>
            </form>

        </div>
        
    </div>

    <div class="container-xxl bg-white p-0 border border-gray-200 rounded-lg shadow-sm">
        <livewire:gen-facilities-component />
    </div>

</div>