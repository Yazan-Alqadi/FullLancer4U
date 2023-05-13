<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" style="background-color: lightgrey;">

<head>

    @include('layouts.head')

    <!-- CSS only -->
    <link href="{{ asset('css/fl.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    {{-- for font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,400;1,200;1,300&display=swap"
        rel="stylesheet">

    <title>Jobs_gallery</title>

</head>

<body style="background-color: #ab6f6f;">

    @include('layouts.nav-bar-gallery')

    <div class="row mx-1">
        <div class="container col-lg-9 col-md-10">
            <section class="bg-light text-dark p-3 rounded mgg">





                {{-- posts --}}
                <section class="my-4">

                    @include('components.gallery_posts')


                </section>
            </section>
        </div>
    </div>

    {{-- Footer here --}}
    @include('layouts.footer')


    <!-- JavaScript Bundle with Popper -->
    <script src="{{ asset('/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
