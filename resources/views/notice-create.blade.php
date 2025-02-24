
<x-app-layout>
    @auth
    
        @section('header')
            <h2 class="font-semibold text-2xl text-gray-800 leading-tight">            
                {{ 'Dashboard: ' . __('Role-').__(auth()->user()->role->description) . ': ' . __(auth()->user()->teacher->id).'-' . __(auth()->user()->teacher->name) }}
            </h2>        
            @yield('component_name') 
        @endsection

            <div class="max-w-xl mx-auto">

                @if (session('status'))
                    <div class="alert alert-success">{{session('status')}}</div>
                @endif

                Auth: {{ auth()->user()->role_id }}
                        
                <form class=""
                    action="{{ url('notices/create') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-2">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                        <input type="text" name="title" id="email" 
                            value="{{ old('title') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
                            placeholder="Enter your title" required />
                        @error('title') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>    

                    <div class="mb-5 ">
                        <label for="desc" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                        <textarea id="desc" name="desc" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
                            value="{{ old('desc') }}"
                            placeholder="Leave a descriptions..."></textarea>
                            @error('desc') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="flex  justify-between mb-5  gap-2 bg-slate-200">
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
                    </div>

                    <div class="flex items-center space-x-6 mb-5">                    
                        <label class="block">
                        <span class="sr-only">Choose profile photo</span>
                        <input type="file" name="fileaddr" id="file_input" onchange="loadFile(event)" class="block w-full text-sm text-slate-500
                            file:mr-4 file:py-2 file:px-4
                            file:rounded-full file:border-0
                            file:text-sm file:font-semibold
                            file:bg-violet-50 file:text-violet-700
                            hover:file:bg-violet-100
                        "/>
                        </label>
                        <div class="shrink-0">
                            <img id='preview_img' class="h-32 w-32 object-cover rounded-lg" src="{{ asset('img/avatar.png') }}" alt="Current profile photo" />
                        </div>
                    </div>

                    <div class="mb-2">
                        <lable>Status(Active ? or Not)</lable>
                        <input type="checkbox" name="is_active" class="" {{ old('is_active') == true ? checked:'' }}/>
                        @error('is_active') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-2">
                        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                    </div>
                </form>

                <br/><br/><br/>

            </div>

    @else
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're not logged in
                </div>
            </div>
        </div>
    @endauth
    <script>
        var loadFile = function(event) {
            
            var input = event.target;
            var file = input.files[0];
            var type = file.type;

            var output = document.getElementById('preview_img');


            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function() {
                URL.revokeObjectURL(output.src) // free memory
            }
        };
    </script>


</x-app-layout>