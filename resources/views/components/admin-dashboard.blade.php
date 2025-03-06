
<x-app-layout>
    {{-- <x-slot name="header"> --}}
    @section('header')
        <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
            {{-- {{ 'Dashboard: ' . __(auth()->user()->role->name) . ': ' . __(auth()->user()->teacher->id).'-' . __(auth()->user()->teacher->name).' (User Name: '.__(auth()->user()->name).')' }} --}}
            {{-- {{ 'Dashboard: ' . __('Role-').__(auth()->user()->role->description) . ': ' . __(auth()->user()->teacher->id).'-' . __(auth()->user()->teacher->name) }} --}}
            {{ __(auth()->user()->teacher->name) }}
        </h2>            
        {{-- {{ $slot  }} --}}   
        @yield('component_name') 
    @endsection
    {{-- </x-slot> --}}
    <div class="max-w-full spacey mx-auto sm:px-6 lg:px-8 flex flex-row gap-2">
     
    <table class="w-4xl mx-auto text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">ID</th>
                <th scope="col" class="px-6 py-3">Screen</th>
                <th scope="col" class="px-6 py-3">Section</th>
                <th scope="col" class="px-6 py-3">Action</th>
                
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="px-6 py-4 dark:text-white">1</td>
                <td class="px-6 py-4 dark:text-white">Welcome Screen</td>
                <td class="px-6 py-4 dark:text-white">Caraosel</td>
                <td class="px-6 py-4 dark:text-white">                
                    <a href="{{ route('ws.caraosel-view') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Goto</a>
                </td>
            </tr>
            <tr>
                <td class="px-6 py-4 dark:text-white">2</td>
                <td class="px-6 py-4 dark:text-white">Welcome Screen</td>
                <td class="px-6 py-4 dark:text-white">Notices</td>
                <td class="px-6 py-4 dark:text-white">                
                    <a href="{{ route('ws.notices-view') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Goto</a>
                </td>
            </tr>
            <tr>
                <td class="px-6 py-4 dark:text-white">3</td>
                <td class="px-6 py-4 dark:text-white">Welcome Screen</td>
                <td class="px-6 py-4 dark:text-white">Facility</td>
                <td class="px-6 py-4 dark:text-white">
                    <a href="{{ route('admin.facility-crud') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Goto</a>
                </td>
            </tr>
            <tr>
                <td class="px-6 py-4 dark:text-white">3</td>
                <td class="px-6 py-4 dark:text-white">Welcome Screen</td>
                <td class="px-6 py-4 dark:text-white">Principal Speach</td>
                <td class="px-6 py-4 dark:text-white">
                    <a href="{{ route('admin.principal-crud') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Goto</a>
                </td>
            </tr>
            <tr>
                <td class="px-6 py-4 dark:text-white">4</td>
                <td class="px-6 py-4 dark:text-white">Welcome Screen</td>
                <td class="px-6 py-4 dark:text-white">Admission</td>
                <td class="px-6 py-4 dark:text-white">
                    <a href="{{ route('admin.studentdb_admission') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Goto</a>
                </td>
            </tr>

        </tbody>
    </table>


</div>
<livewire:footer-component/>
</x-app-layout>