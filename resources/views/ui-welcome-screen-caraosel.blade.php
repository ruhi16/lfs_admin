
<x-app-layout>
    @section('header')
        <h2 class="font-semibold text-2xl text-gray-800 leading-tight">            
            {{ 'Dashboard: ' . __('Role-').__(auth()->user()->role->description) . ': ' . __(auth()->user()->teacher->id).'-' . __(auth()->user()->teacher->name) }}
        </h2>        
        @yield('component_name') 
    @endsection



    <div class="max-w-full spacey mx-auto sm:px-6 lg:px-8 flex flex-row gap-2">
       


    {{-- UI Welcome Screen Caraosel --}}

    {{-- {{ json_encode($uiwelcomescreen_caraosels) }} --}}
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">ID</th>
                <th scope="col" class="px-6 py-3">Title</th>
                <th scope="col" class="px-6 py-3">SubTitle</th>
                <th scope="col" class="px-6 py-3">Description</th>
                {{-- <th scope="col" class="px-6 py-3">Dates</th> --}}
                <th scope="col" class="px-6 py-3">Image</th>
                <th scope="col" class="px-6 py-3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($uiwelcomescreen_caraosels as $uiwelcomescreen_caraosel)
            <form class=""
                action="{{ url('admin/welcomescreens/caraosel-submit') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $uiwelcomescreen_caraosel->id }}</td>
                    <td class="px-6 py-4 dark:text-white" width="20%">  
                        <input type="hidden" name="id" value="{{ $uiwelcomescreen_caraosel->id }}"/>
                        <input type="text" name="title" value="{{ $uiwelcomescreen_caraosel->title }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter your title" required />
                    </td>
                    <td class="px-6 py-4 dark:text-white">
                        <textarea id="sub_title" name="sub_title" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"                             
                            placeholder="Leave a descriptions...">
                            {{ $uiwelcomescreen_caraosel->sub_title }}
                        </textarea>
                    </td>
                    <td class="px-6 py-4 dark:text-white">
                        <textarea id="details" name="details" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"                             
                            placeholder="Leave a descriptions...">
                            {{ trim($uiwelcomescreen_caraosel->details) }}
                        </textarea>
                    </td>
                    {{-- <td class="px-6 py-4 dark:text-white">
                        <div class=" w-full">
                            <lable for="dop" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date of PUblication</lable>
                            <input id="dop" type="date" name="dop" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                            @error('dop') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class=" w-full">
                            <lable for="doe" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date of Expire</lable>
                            <input id ="doe" type="date" name="doe" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                            @error('doe') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </td> --}}
                    <td class="px-6 py-4 dark:text-white">
                        {{-- {{ $uiwelcomescreen_caraosel->img_ref_1 }} --}}
                        {{-- <img src="{{ asset($uiwelcomescreen_caraosel->img_ref_1) }}" alt="Image" class="w-20 h-20 rounded-lg" /> --}}
                        <div class="shrink-0">
                            <img id='preview_img{{$uiwelcomescreen_caraosel->id}}' class="h-20 w-20 object-cover rounded-lg" src="{{ asset($uiwelcomescreen_caraosel->img_ref_1) }}" alt="Current profile photo" />
                        </div>

                        <input type="file" name="fileaddr" id="file_input" onchange="loadFile(event, {{ $uiwelcomescreen_caraosel->id }})" class="block w-full text-sm text-slate-500
                            file:mr-4 file:py-2 file:px-4
                            file:rounded-full file:border-0
                            file:text-sm file:font-semibold
                            file:bg-violet-50 file:text-violet-700
                            hover:file:bg-violet-100
                        "/>
                        </label>
                        
                    </td>
                    <td class="px-6 py-4 dark:text-white">
                        {{-- <lable>Status(Active ? or Not)</lable>
                        <input type="checkbox" name="is_active" class="" {{ old('is_active') == true ? checked:'' }}/>
                        @error('is_active') <span class="text-danger">{{ $message }}</span> @enderror --}}
                        
                        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                        {{-- <a href="{{ url('uiwelcomescreencaraosel/edit/'.$uiwelcomescreen_caraosel->id) }}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                        <a href="{{ url('uiwelcomescreencaraosel/delete/'.$uiwelcomescreen_caraosel->id) }}" class="text-red-600 hover:text-red-900">Delete</a> --}}
                    </td>
                </tr>
            </form>
            @endforeach
        </tbody>

    </table>


    <script>
        var loadFile = function(event, id) {
            
            var input = event.target;
            var file = input.files[0];
            console.log(input);
            var type = file.type;

            var output = document.getElementById('preview_img'+id);


            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function() {
                URL.revokeObjectURL(output.src) // free memory
            }
        };
    </script>
</x-app-layout>