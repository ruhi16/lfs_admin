{{-- <x-app-layout>
    <x-slot name="header">
        
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">

            {{ 'About: ' . __(auth()->user()->name . ': ' . __(auth()->user()->teacher->name)) }}
            
        </h2>
    </x-slot>

    ABOUT Page
    <livewire:s-a-side-bar-component />
    <livewire:footer-component />

</x-app-layout> --}}
<div>
{{-- <x-app-layout> --}}
    @section('header')
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ 'About: ' . __(auth()->user()->name . ': ' . __(auth()->user()->teacher->name)) }}
            </h2>            
            
    @endsection
    <main class="flex-1 p-8">

        <header class="mb-8">
            <h2 class="text-3xl font-semibold">Dashboard</h2>
        </header>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mb-8">
            <div class="bg-blue-200 p-6 rounded shadow">
                <h3 class="text-lg font-semibold mb-2">Total Students</h3>
                <p class="text-4xl text-blue-800">1200</p>
            </div>
            <div class="bg-green-200 p-6 rounded shadow">
                <h3 class="text-lg font-semibold mb-2">Total Teachers</h3>
                <p class="text-4xl text-green-800">80</p>
            </div>
            <div class="bg-yellow-200 p-6 rounded shadow">
                <h3 class="text-lg font-semibold mb-2">Active Courses</h3>
                <p class="text-4xl text-yellow-800">50</p>
            </div>
            <div class="bg-red-200 p-6 rounded shadow">
                <h3 class="text-lg font-semibold mb-2">New Registrations</h3>
                <p class="text-4xl text-red-800">25</p>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
            <div class="bg-white p-6 rounded shadow">
                <h3 class="text-lg font-semibold mb-4">Student Attendance</h3>
                <canvas id="attendanceChart"></canvas>
            </div>
            <div class="bg-white p-6 rounded shadow">
                <h3 class="text-lg font-semibold mb-4">Recent Payments</h3>
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Student</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Amount</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">John Doe</td>
                                <td class="px-6 py-4 whitespace-nowrap">$100</td>
                                <td class="px-6 py-4 whitespace-nowrap">2023-10-27</td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">Jane Smith</td>
                                <td class="px-6 py-4 whitespace-nowrap">$150</td>
                                <td class="px-6 py-4 whitespace-nowrap">2023-10-26</td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">David Lee</td>
                                <td class="px-6 py-4 whitespace-nowrap">$80</td>
                                <td class="px-6 py-4 whitespace-nowrap">2023-10-25</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </main>
{{-- </x-app-layout> --}}

</div>
