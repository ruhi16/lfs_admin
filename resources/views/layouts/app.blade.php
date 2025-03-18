<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Scripts -->
    <!-- @vite(['resources/css/app.css', 'resources/js/app.js']) -->

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>



    <!-- New Templates -->
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@600&family=Lobster+Two:wght@700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">



    @livewireStyles
</head>

<body class="font-sans antialiased">

    
    <div class="min-h-screen bg-gray-100">
        @auth
        @include('layouts.navigation')
        @endauth
        <!-- Page Heading -->
        @php
        // $color = auth()->user()->role->id == 3
        if(auth()->user()->role->id == 1){
            $color = 'red';
        }else if(auth()->user()->role->id == 2){
            $color = 'blue';
        }else if(auth()->user()->role->id == 3){
            $color = 'purple';
        }else if(auth()->user()->role->id == 4){
            $color = 'orange';
        }else{
            $color = 'green';
        }
        @endphp
        <header class="bg-{{$color}}-400 shadow mb-4">
            <div class="max-w-7xl mx-auto py-4 px-4 sm:px-6 lg:px-8 ">
                <div class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __(auth()->user()->role->name) . ': ' . auth()->user()->role->description }}{{-- {{ $slot }} --}}
                </div>
                @yield('header')
            </div>
        </header>

        <!-- Page Content -->
        {{--  --}}
        
        {{--  --}}
        
        <div class="flex gap-2 px-2">
            <!-- Sidebar -->
            <div class="w-64 bg-gray-800 text-white h-screen">
                <div class="p-4">
                    <h1 class="text-2xl text-white font-bold ">Admin Dashboard</h1>
                </div>
                <nav class="mt-2">
                    <a href="{{ route('adminDash') }}"
                        class="block py-2.5 px-4 rounded text-yellow-400 transition duration-200 hover:bg-gray-700 hover:text-white">Dashboard</a>
                    
                    <a href="{{ route('about') }}"
                        class="block py-2.5 px-4 rounded text-yellow-400 transition duration-200 hover:bg-gray-700 hover:text-white">Dashboard</a>

                    <div x-data="{ open: true }">
                        <a href="#" @click="open = !open"
                            class="block py-2.5 px-4 text-yellow-400 rounded transition duration-200 hover:bg-gray-700 hover:text-white">Welcome Screen</a>
                            <div x-show="open" class="pl-4">
                                <a href="{{ route('ws.caraosel-view') }}"
                                    class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700 hover:text-white">Carousel View</a>
                                
                                <a href="{{ route('ws.carousel-crud') }}"
                                    class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700 hover:text-white">Carousel View 2</a>
                                <a href="{{ route('ws.notices-view') }}"
                                    class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700 hover:text-white">Notices</a>
                                <a href="{{ route('admin.facility-crud') }}"
                                    class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700 hover:text-white">Facilities</a>
                                <a href="{{ route('admin.principal-crud') }}"
                                    class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700 hover:text-white">Principal</a>
{{--                                     
                                
                                <a href="{{ route('ws.notices-view') }}"
                                        class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700 hover:text-white">Activity</a>
                                <a href="{{ route('ws.notices-view') }}"
                                    class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700 hover:text-white">Extra Classes</a>
                                <a href="{{ route('ws.notices-view') }}"
                                    class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700 hover:text-white">Appointments</a>
                                <a href="{{ route('ws.notices-view') }}"
                                    class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700 hover:text-white">Teachers</a>
                                <a href="{{ route('ws.notices-view') }}"
                                    class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700 hover:text-white">Parent Comments</a>
                                <a href="{{ route('ws.notices-view') }}"
                                    class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700 hover:text-white">In Touch</a>
                                <a href="{{ route('ws.notices-view') }}"
                                    class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700 hover:text-white">Gallery</a> --}}
                            </div>
                    </div>
                    
                    <div x-data="{ open: true }">
                        <a href="#" @click="open = !open"
                            class="block py-2.5 px-4 rounded text-yellow-400 transition duration-200 hover:bg-gray-700 hover:text-white">Students</a>
                        <div x-show="open" class="pl-4">
                            <a href="{{ route('admin.studentcr-details') }}"
                                class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700 hover:text-white">Detail View</a>
                            <a href="{{ route('admin.studentdb_admission') }}"
                                class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700 hover:text-white">New Admission</a>
                            <a href="{{ route('idcard') }}"
                                class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700 hover:text-white">Id Card</a>


                        </div>
                    </div>

                    <div x-data="{ open: true }">
                        <a href="#" @click="open = !open"
                            class="block py-2.5 px-4 rounded text-yellow-400 transition duration-200 hover:bg-gray-700 hover:text-white">Management</a>
                        <div x-show="open" class="pl-4">
                            <a href="{{ route('admin.session-event-management') }}"
                                class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700 hover:text-white">Session Events</a>
                            
                            <a href="{{ route('admin.session-fees-management') }}"
                                class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700 hover:text-white">Session Fees</a>
                            {{-- <a href="{{ route('admin.studentdb_admission') }}"
                                class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700 hover:text-white">New Admission</a>
                            <a href="{{ route('idcard') }}"
                                class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700 hover:text-white">Id Card</a> --}}


                        </div>
                    </div>
{{--
                    <div x-data="{ open: false }">
                        <a href="#" @click="open = !open"
                            class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700 hover:text-white">Classes</a>
                        <div x-show="open" class="pl-4">
                            <a href="{{ route('admin.classes') }}"
                                class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700 hover:text-white">Classes
                                View</a>
                        </div>
                    </div>

                    <div x-data="{ open: false }">
                        <a href="#" @click="open = !open"
                            class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700 hover:text-white">Appointments</a>
                        <div x-show="open" class="pl-4">
                            <a href="{{ route('admin.appointments') }}"
                                class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700 hover:text-white">Appointments
                                View</a>
                        </div>
                    </div>

                    <div x-data="{ open: false }">
                        <a href="#" @click="open = !open"
                            class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700 hover:text-white">Team</a>
                        <div x-show="open" class="pl-4">
                            <a href="{{ route('admin.team') }}"
                                class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700 hover:text-white">Team
                                View</a>
                        </div>
                    </div>

                    <div x-data="{ open: false }">
                        <a href="#" @click="open = !open"
                            class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700 hover:text-white">Comments</a>
                        <div x-show="open" class="pl-4">
                            <a href="{{ route('admin.comments') }}"
                                class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700 hover:text-white">Comments
                                View</a>
                        </div>
                    </div>

                    <div x-data="{ open: false }">
                        <a href="#" @click="open = !open"
                            class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700 hover:text-white">Contact</a>
                        <div x-show="open" class="pl-4">
                            <a href="{{ route('admin.contact') }}"
                                class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700 hover:text-white">Contact
                                View</a>
                        </div>
                    </div>

                    <div x-data="{ open: false }">
                        <a href="#" @click="open = !open"
                            class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700 hover:text-white">Gallery</a>
                        <div x-show="open" class="pl-4">
                            <a href="{{ route('admin.gallery') }}"
                                class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700 hover:text-white">Gallery
                                View</a>
                        </div>
                    </div>

                    <div x-data="{ open: false }">
                        <a href="#" @click="open = !open"
                            class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700 hover:text-white">Settings</a>
                        <div x-show="open" class="pl-4">
                            <a href="{{ route('admin.settings') }}"
                                class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700 hover:text-white">Settings
                                View</a>
                        </div>
                    </div> --}}
                </nav>
            </div>            
        
            <!-- Main Content -->
            <div class="flex-1 p-10 bg-green-200">
                {{-- @yield('content') --}}
        
                {{ $slot }}
            </div>
        </div>
        
    </div>









    <!-- Page Footer -->
    {{-- @include('layouts.footer') --}}
    {{--
    <livewire:footer-component /> --}}
    </div>

    @livewireScripts
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
</body>

</html>