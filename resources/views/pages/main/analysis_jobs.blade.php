<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" style="background-color: rgb(186, 195, 195);">

<head>

    @include('layouts.head')

    <!-- CSS only -->
    <link href="{{ asset('css/fl.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <title>Freelancers</title>

</head>

<body>

    @include('layouts.nav-bar')


    <!-- card is here -->
    <section class="py-5 section-style mggg">
        <div class="container">
            <div>
                <div class="text-secondary h6 mb-0 p-3 text-break text-center fw-bold rounded-top bg-light"
                    style="background-color: #e1e1e1 !important;">Lorem
                    ipsum
                    dolor, sit
                    amet
                    consectetur
                    adipisicing elit.
                    Nesciunt
                    amet
                    est tempore! Veniam,consequuntur, quaerat necessitatibus illum, iste quam ducimus totam facilis
                    consectetur suscipit
                    voluptatibus ex nesciunt? Vero, magnam corporis.</div>
                <img src="/images/diagrams/download1.png" class="img-fluid" alt="...">
                <div class="text-secondary h6 p-3 text-break text-center fw-bold rounded-bottom bg-light"
                    style="background-color: #e1e1e1 !important;">Lorem ipsum
                    dolor, sit
                    amet
                    consectetur
                    adipisicing elit.
                    Nesciunt
                    amet
                    est tempore! Veniam,consequuntur, quaerat necessitatibus illum, iste quam ducimus totam facilis
                    consectetur suscipit
                    voluptatibus ex nesciunt? Vero, magnam corporis.</div>
            </div>


            <div class="mt-5">
                <div class="text-secondary h6 mb-0 p-3 text-break text-center fw-bold rounded-top bg-light"
                    style="background-color: #e1e1e1 !important;">Lorem
                    ipsum
                    dolor, sit
                    amet
                    consectetur
                    adipisicing elit.
                    Nesciunt
                    amet
                    est tempore! Veniam,consequuntur, quaerat necessitatibus illum, iste quam ducimus totam facilis
                    consectetur suscipit
                    voluptatibus ex nesciunt? Vero, magnam corporis.</div>
                <img src="/images/diagrams/download3.png" class="img-fluid" alt="...">
                <div class="text-secondary h6 p-3 text-break text-center fw-bold rounded-bottom bg-light"
                    style="background-color: #e1e1e1 !important;">Lorem ipsum
                    dolor, sit
                    amet
                    consectetur
                    adipisicing elit.
                    Nesciunt
                    amet
                    est tempore! Veniam,consequuntur, quaerat necessitatibus illum, iste quam ducimus totam facilis
                    consectetur suscipit
                    voluptatibus ex nesciunt? Vero, magnam corporis.</div>
                </divc>
            </div>
    </section>

    {{-- Footer here --}}
    @include('layouts.footer')

    <!-- JavaScript Bundle with Popper -->
    <script src="{{ asset('/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
