<div>    
    <h1 class="text-2xl font-semibold text-gray-800 mb-6">Shop Items</h1>
    @if (session()->has('item_message'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">  
            <strong class="font-bold">Success!</strong>
            <span class="block sm:inline">{{ session('item_message') }}</span> 
        </div>
    @endif
    @if (session()->has('item_error'))
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
            <strong class="font-bold">Error!</strong>
            <span class="block sm:inline">{{ session('item_error') }}</span>
        </div>
    @endif



    <div class="flex flex-col md:flex-row items-start  space-x-4 p-6 bg-indigo-50 rounded-lg shadow">

        {{-- Category Section --}}
        <div class="md:w-1/3 bg-pink-50 rounded-lg shadow p-6">
            <h2 class="text-lg font-semibold text-gray-800 mb-4">Add or Edit New Item</h2>
            <div class="flex-1 items-start space-x-2">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

                    <div class="mb-0">
                        <label for="category" class="block text-sm font-medium text-gray-700">Category</label>
                        <select wire:model="selectedCategory" id="category" name="category"
                            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 p-2">
                            <option value="">Select Category</option>
                            @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        @error('selectedCategory')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <div class="mb-0">
                        <label for="name" class="block text-sm font-medium text-gray-700">Item Name</label>
                        <input wire:model="itemName" type="text" id="name" name="name" required
                            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 p-2"
                            placeholder="Enter item name">
                        @error('itemName')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-0">
                        <label for="name" class="block text-sm font-medium text-gray-700">Slug</label>
                        <input wire:model="itemSlug" type="text" id="slug" name="slug" required
                            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 p-2"
                            placeholder="Enter item slug">
                        @error('itemSlug')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-0">
                        <label for="name" class="block text-sm font-medium text-gray-700">Description</label>
                        <input wire:model="itemDescription" type="text" id="description" name="description" required
                            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 p-2"
                            placeholder="Enter item description">
                        @error('itemDescription')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    

                    <div class="mb-0">
                        <button wire:click="addItem()" type="button"
                            class="w-full bg-blue-600 text-white font-semibold py-2 px-4 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                            Add Item
                        </button>
                    </div>

                </div>

            </div>
            
        </div>



        <div class="md:w-2/3 bg-pink-200 rounded-lg shadow p-6 overflow-y-auto">
            <h2 class="text-lg font-semibold text-gray-800 mb-4">All Items</h2>
            <table class="min-w-full divide-y divide-gray-200 border border-gray-200 overflow-y-auto">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Sl</th>
                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Category</th>
                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Item
                        </th>
                        <th class="px-4 py-2 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Slug
                        </th>
                        <th class="px-4 py-2 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Description</th>
                        <th class="px-4 py-2 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Action
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach($items as $item)
                    <tr>
                        <td class="px-4 py-2 whitespace-nowrap text-sm">{{ $loop->iteration }}-{{ $item['id'] }}</td>
                        <td class="px-4 py-2 whitespace-nowrap text-sm">{{ $item->category->name ?? 'N/A' }}</td>
                        <td class="px-4 py-2 whitespace-nowrap text-sm">{{ $item['name'] }}</td>
                        <td class="px-4 py-2 whitespace-nowrap text-sm text-right">{{ $item['slug'] }}</td> 
                        <td class="px-4 py-2 whitespace-nowrap text-sm text-right">{{ $item['description'] }}</td>
                        <td class="px-4 py-2 whitespace-nowrap text-sm text-right">
                            <button wire:click="addItem({{ $item['id'] }})"
                                class="text-blue-600 hover:text-blue-900">Edit</button>
                            <button wire:click="deleteItem({{ $item['id'] }})"
                                class="text-red-600 hover:text-red-900 ml-2">Delete</button>
                        </td>

                    </tr>
                    @endforeach


                </tbody>
            </table>
        </div>


    </div>
</div>

