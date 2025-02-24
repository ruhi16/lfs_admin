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
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@600&family=Lobster+Two:wght@700&display=swap" rel="stylesheet">
    
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
                $color = 'red';
            }
        @endphp       
        <header class="bg-{{$color}}-400 shadow mb-4">
            <div class="max-w-7xl mx-auto py-4 px-4 sm:px-6 lg:px-8 ">
                <div class="font-semibold text-xl text-gray-800 leading-tight">Dashboard: {{ auth()->user()->role->name }}{{-- {{ $slot }} --}}</div>
                @yield('header')
            </div>
        </header>

        <!-- Page Content -->
        {{-- <livewire:admin-sidebar-component /> --}}
        {{-- {{ auth()->user()->role->id  }} --}}

        {{ $slot }}


        <!-- Page Footer -->
        {{-- @include('layouts.footer') --}}



        {{-- <livewire:footer-component /> --}}
    </div>

    @livewireScripts
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
</body>

</html>