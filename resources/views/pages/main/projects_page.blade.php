<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" style="background-color: rgb(186, 195, 195);">

<head>

    @include('layouts.head')

    <!-- CSS only -->
    <link href="{{ asset('css/fl.css') }}" rel="stylesheet">
    <link href="{{ asset('css/profession.css') }}" rel="stylesheet">

    <title>Projects</title>

    @livewireStyles

</head>

<body style="background-color: rgb(186, 195, 195);">


    @include('layouts.nav-bar')






    <!-- card is here -->
    @livewire('project-cards', ['projects' => $projects, 'categories' => $categories]);


    {{-- Footer here --}}
    @include('layouts.footer')

    @livewireScripts

    {{-- <script type="text/javascript">
        window.onscroll = function(ev) {
            if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight) {
                window.livewire.emit('load-more');
            }
        };
    </script> --}}
</body>

</html>
