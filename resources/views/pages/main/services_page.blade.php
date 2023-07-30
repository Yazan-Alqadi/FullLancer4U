<!DOCTYPE html>
<html class="bg-rgb-186-195-195" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>


    @include('layouts.head')

    <!-- CSS only -->
    <link href="{{ asset('css/fl.css') }}" rel="stylesheet">
    <link href="{{ asset('css/profession.css') }}" rel="stylesheet">

    <title>Services</title>

    @livewireStyles

</head>

<body class="bg-rgb-186-195-195">

    @include('layouts.nav-bar')




    <!-- card is here -->
    @livewire('service-cards', ['services' => $services, 'categories' => $categories]);


    {{-- Footer here --}}
    @include('layouts.footer')



    @livewireScripts
</body>

</html>
