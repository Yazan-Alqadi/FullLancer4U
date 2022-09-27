<!DOCTYPE html>
<html lang="en" style="background-color: rgb(186, 195, 195);">

<head>


    @include('layouts.head')

    <!-- CSS only -->
    <link href="{{ asset('css/fl.css') }}" rel="stylesheet">
    <link href="{{ asset('css/profession.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <title>Services</title>

    @livewireStyles

</head>

<body>

@include('layouts.nav-bar')




<!-- card is here -->
@livewire('service-cards', ['services' => $services, 'categories' => $categories]);


{{-- Footer here --}}
@include('layouts.footer')



@livewireScripts

<!-- JavaScript Bundle with Popper -->
<script src="{{asset('/js/bootstrap.bundle.min.js')}}"></script>
</body>

</html>
