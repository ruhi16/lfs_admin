<x-app-layout>
    @section('header')
        <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
            {{ __('Dashboard') . ': ' . __(auth()->user()->teacher->name) }}
        </h2>
        @yield('component_name')
    @endsection



    <livewire:admin-notice-component />


</x-app-layout>
