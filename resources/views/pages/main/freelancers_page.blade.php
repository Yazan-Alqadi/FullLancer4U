<!DOCTYPE html>
<html class="bg-rgb-186-195-195" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    @include('layouts.head')

    <!-- CSS only -->
    <link href="{{ asset('css/fl.css') }}" rel="stylesheet">

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
</body>

</html>
