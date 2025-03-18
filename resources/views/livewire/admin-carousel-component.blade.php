<div>
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

    
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">ID</th>
                <th scope="col" class="px-6 py-3">Title</th>
                <th scope="col" class="px-6 py-3">SubTitle</th>
                <th scope="col" class="px-6 py-3">Description</th>
                <th scope="col" class="px-6 py-3">Image</th>
                <th scope="col" class="px-6 py-3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($uiwelcomescreen_caraosels as $uiwelcomescreen_caraosel)

                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">

                    <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{-- F:{{ $title[1] ?? 'X' }}   S:{{ $title[5] ?? 'X' }}  T:{{ $title[9] ?? 'X' }} --}}
                        {{ $uiwelcomescreen_caraosel->id }}
                    </td>
                    <td class="px-6 py-4 dark:text-white" width="20%">                    
                        <input type="text" name="title" wire:model='title.{{ $uiwelcomescreen_caraosel->id }}'                            
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Enter your title"  />
                            {{-- {{ "title.{$uiwelcomescreen_caraosel->id}"}} --}}
                            @error("title.{$uiwelcomescreen_caraosel->id}")<span class="text-red-500">{{ $message }}</span> @enderror
                    </td>
                    <td class="px-6 py-4 dark:text-white">
                        <textarea id="sub_title" name="sub_title" rows="4" wire:model='subTitle.{{ $uiwelcomescreen_caraosel->id }}'
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Leave a descriptions...">
                            
                        </textarea>
                        @error('subTitle.{{ $uiwelcomescreen_caraosel->id }}')<span class="text-red-500">{{ $message }}</span> @enderror

                    </td>
                    <td class="px-6 py-4 dark:text-white">
                        <textarea id="details" name="details" rows="4" wire:model='details.{{ $uiwelcomescreen_caraosel->id }}'
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Leave a descriptions...">
                            

                        </textarea>
                        @error('details.{{ $uiwelcomescreen_caraosel->id }}')<span class="text-red-500">{{ $message }}</span> @enderror

                    </td>

                    <td class="px-6 py-4 dark:text-white">
                        <div class="shrink-0">
                            <img id='preview_img{{$uiwelcomescreen_caraosel->id}}' class="h-20 w-20 object-cover rounded-lg"
                                src="{{ Storage::url($uiwelcomescreen_caraosel->img_ref_1) }}" alt="Current profile photo" />
                        </div>

                        
                        <input wire:model="imgFile.{{$uiwelcomescreen_caraosel->id }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" aria-describedby="file_input_help" id="file_input" type="file"/>
                        @error('imgFile.{{$uiwelcomescreen_caraosel->id }}') <span class="text-red-500">{{ $message }}</span> @enderror
                        
                        @if ($imgFile[$uiwelcomescreen_caraosel->id])
                            <p class="mt-2">Preview: {{ $imgFile[$uiwelcomescreen_caraosel->id]}}</p>
                            <img src="{{ $imgFile[$uiwelcomescreen_caraosel->id]->temporaryUrl() }}" alt="Image Preview"class="max-w-xs mt-2 rounded h-10" >
                        @endif

                    </td>
                    <td class="px-6 py-4 dark:text-white">
                        {{-- <lable>Status(Active ? or Not)</lable>
                        <input type="checkbox" name="is_active" class="" {{ old('is_active')==true ? checked:'' }} />
                        @error('is_active') <span class="text-danger">{{ $message }}</span> @enderror --}}

                        <button wire:click='saveCarousel({{$uiwelcomescreen_caraosel->id}})'
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Submit {{ $uiwelcomescreen_caraosel->id }}</button>
                        {{-- <a href="{{ url('uiwelcomescreencaraosel/edit/'.$uiwelcomescreen_caraosel->id) }}"
                            class="text-indigo-600 hover:text-indigo-900">Edit</a>
                        <a href="{{ url('uiwelcomescreencaraosel/delete/'.$uiwelcomescreen_caraosel->id) }}"
                            class="text-red-600 hover:text-red-900">Delete</a> --}}
                    </td>
                    
                </tr>

            @endforeach
                
        </tbody>
    </table>

</div>