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
            <div class="row text-center">
                @foreach ($freelancers as $freelancer)
                    @include('components.freelancer_card')
                @endforeach
            </div>
            {{ $freelancers->links('pagination::bootstrap-4') }}
        </div>
    </section>

    {{-- Footer here --}}
    @include('layouts.footer')

    <!-- JavaScript Bundle with Popper -->
    <script src="{{ asset('/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
