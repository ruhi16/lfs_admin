
<div class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-8 py-6 bg-amber-100 rounded-lg shadow">
    <h1 class="text-2xl font-semibold text-gray-800 mb-6">Shop Categories</h1>
    
    
    @if (session()->has('message'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
        <strong class="font-bold">Success!</strong>
        <span class="block sm:inline">{{ session('message') }}</span>
    </div>
    @endif
    @if (session()->has('error'))
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
        <strong class="font-bold">Error!</strong>
        <span class="block sm:inline">{{ session('error') }}</span>
    </div>
    @endif

    <div class="flex flex-col md:flex-row items-start  space-x-4 p-6 bg-indigo-50 rounded-lg shadow">

        {{-- Category Section --}}
        <div class="md:w-1/3 bg-pink-50 rounded-lg shadow p-6">
            <h2 class="text-lg font-semibold text-gray-800 mb-4">Add or Edit New Category</h2>
            <div class="flex-1 items-start space-x-2">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

                    <div class="mb-0">
                        <label for="name" class="block text-sm font-medium text-gray-700">Category Name</label>
                        <input wire:model="categoryName" type="text" id="name" name="name" required
                            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 p-2"
                            placeholder="Enter category name">
                        @error('categoryName')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-0">
                        <label for="name" class="block text-sm font-medium text-gray-700">Slug</label>
                        <input wire:model="categorySlug" type="text" id="slug" name="slug" required
                            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 p-2"
                            placeholder="Enter category slug">
                        @error('categorySlug')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-0">
                        <label for="name" class="block text-sm font-medium text-gray-700">Description</label>
                        <input wire:model="categoryDescription" type="text" id="description" name="description" required
                            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 p-2"
                            placeholder="Enter category description">
                        @error('categoryDescription')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-0">
                        {{-- <label for="name" class="block text-sm font-medium text-gray-700">Category Name</label>
                        <input type="text" id="name" name="name" required
                            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 p-2"
                            placeholder="Enter category name"> --}}
                    </div>

                    <div class="mb-0">
                        {{-- <button type="button"
                            class="w-full bg-blue-600 text-white font-semibold py-2 px-4 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                            Add Category
                        </button> --}}
                    </div>

                    <div class="mb-0">
                        <button wire:click="addCategory({{ $categoryId }})" type="button"
                            class="w-full bg-blue-600 text-white font-semibold py-2 px-4 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                            Add Category
                        </button>
                    </div>

                </div>

            </div>
            {{-- <div class="flex justify-between mt-2 text-xs text-gray-500">
                <span>Total Revenue: ₹50,000</span>
                <span>Last Updated: June 07, 2025</span>
            </div> --}}
        </div>



        <div class="md:w-2/3 bg-pink-200 rounded-lg shadow p-6 overflow-y-auto">
            <h2 class="text-lg font-semibold text-gray-800 mb-4">All Categories</h2>
            <table class="min-w-full divide-y divide-gray-200 border border-gray-200 overflow-y-auto">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Sl</th>
                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Category
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
                    @foreach($categories as $category)
                    <tr>
                        <td class="px-4 py-2 whitespace-nowrap text-sm">{{ $loop->iteration }}-{{ $category['id'] }}</td>
                        <td class="px-4 py-2 whitespace-nowrap text-sm">{{ $category['name'] }}</td>
                        <td class="px-4 py-2 whitespace-nowrap text-sm text-right">{{ $category['slug'] }}</td> 
                        <td class="px-4 py-2 whitespace-nowrap text-sm text-right">{{ $category['description'] }}</td>
                        <td class="px-4 py-2 whitespace-nowrap text-sm text-right">
                            <button wire:click="editCategory({{ $category['id'] }})"
                                class="text-blue-600 hover:text-blue-900">Edit</button>
                            <button wire:click="deleteCategory({{ $category['id'] }})"
                                class="text-red-600 hover:text-red-900 ml-2">Delete</button>
                        </td>

                    </tr>
                    @endforeach


                </tbody>
            </table>
        </div>


    </div>

</div>