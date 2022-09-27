<!DOCTYPE html>
<html lang="en">

<head>

    @include('layouts.head')

    <!-- CSS only -->
    <link rel="stylesheet" href="{{ asset('css/fl.css') }}">
    <link href="{{ asset('/css/profession.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/main_page_css.css') }}">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <title>Home</title>
</head>

<body>

    {{-- <div class="pic"></div> --}}



    @include('layouts.nav-bar')


    <section id="hero" class="bg-dark text-light text-lg-center text-md-center text-sm-start pt-5 mt-5 pb-2 ar" >
        <div class="container-fluid">
            <div class="d-flex">
                <div>
                    <h2 class="font-ar">{{ __('home.title1') }} <span class="text-info font-ar">{{ __('home.title2') }}</span>
                        <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                            </svg></span>
                    </h2>
                    <p class="font-ar">
                        {{ __('home.text') }}
                    </p>
                    @auth
                    @else
                        <a href="{{ route('register.show') }}"
                            class="btn btn-primary btn-lg font-ar">{{ __('home.registernow') }}</a>
                    @endauth
                </div>
                <img class="ms-2 d-none d-sm-block img-fluid font-ar" alt="photo" style="width: 15% !important;"
                    src={{ 'files/img_hero.svg' }}>
            </div>
        </div>
    </section>


    <section id="top-fl" class="bg-light text-center py-5 ar">
        <div class="container-fluid">
            <h2 class="mb-5 font-ar">{{ __('home.top1') }} <span class="text-warning font-ar">{{ __('home.top2') }}</span></h2>
            <div class="d-flex">
                <img class="ms-2 d-none d-sm-block img-fluid font-ar" alt="photo" style="width: 20% !important;"
                    src={{ 'files/top_fl.svg' }}>
                <div style="flex-grow: 1;" class="table-responsive">

                    {{-- <div class="table"> --}}
                    <table class="table">
                        {{-- <caption>List of users</caption> --}}
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Freelancer</th>
                                <th scope="col">Skills</th>
                                <th scope="col">Rating</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($freelancers as $freelancer)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td><a>{{ $freelancer->user->full_name }}</a></td>
                                    <td>
                                        @foreach ($freelancer->user->skills as $skill)
                                            {{ $skill->title }} ,
                                        @endforeach
                                    </td>
                                    <td>
                                        @if ($freelancer->rate > 0)
                                            <span class="fa fa-star checked"
                                                style="font: normal normal normal 14px/1 FontAwesome !important;"></span>
                                            {{-- star one --}}
                                        @else
                                            <span class="fa fa-star not-checked"
                                                style="font: normal normal normal 14px/1 FontAwesome !important;"></span>
                                            {{-- star one --}}
                                        @endif
                                        @if ($freelancer->rate > 1)
                                            <span class="fa fa-star checked"
                                                style="font: normal normal normal 14px/1 FontAwesome !important;"></span>
                                            {{-- star two --}}
                                        @else
                                            <span class="fa fa-star not-checked"
                                                style="font: normal normal normal 14px/1 FontAwesome !important;"></span>
                                            {{-- star two --}}
                                        @endif
                                        @if ($freelancer->rate > 2)
                                            <span class="fa fa-star checked"
                                                style="font: normal normal normal 14px/1 FontAwesome !important;"></span>
                                            {{-- star three --}}
                                        @else
                                            <span class="fa fa-star not-checked"
                                                style="font: normal normal normal 14px/1 FontAwesome !important;"></span>
                                            {{-- star three --}}
                                        @endif
                                        @if ($freelancer->rate > 3)
                                            <span class="fa fa-star checked"
                                                style="font: normal normal normal 14px/1 FontAwesome !important;"></span>
                                            {{-- star four --}}
                                        @else
                                            <span class="fa fa-star not-checked"
                                                style="font: normal normal normal 14px/1 FontAwesome !important;"></span>
                                            {{-- star four --}}
                                        @endif
                                        @if ($freelancer->rate > 4)
                                            <span class="fa fa-star checked"
                                                style="font: normal normal normal 14px/1 FontAwesome !important;"></span>
                                            {{-- star five --}}
                                        @else
                                            <span class="fa fa-star not-checked"
                                                style="font: normal normal normal 14px/1 FontAwesome !important;"></span>
                                            {{-- star five --}}
                                        @endif

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{-- </div> --}}
                </div>
            </div>
        </div>
    </section>

    {{-- How works ? --}}
    <section class="py-5 section-style ar font-ar" style=" background-image: url({{ 'files/bilding.jpg' }});">

        <h1 class="text-center font-ar" style="color: #560b0b !important;">{{ __('home.how') }}</h1>

        <div class="container text-white">
            <div class="card bg-success mb-3">
                <div class="card-text p-3 font-ar" style="background-color: cadetblue;">
                    <h5 class="font-ar">
                        <span class="bg-light text-dark rounded-5 d-inline-block p-1 m-1 font-ar">1</span>
                        {{ __('home.how1') }}
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-eye-fill" viewBox="0 0 16 16">
                            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                            <path
                                d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                        </svg>
                    </h5>
                    {{ __('home.how1Text') }}
                </div>
            </div>

            <div class="card bg-success mb-3">
                <div class="card-text p-3 font-ar" style="background-color: darkcyan;">
                    <h5 class="font-ar"><span class="bg-light text-dark rounded-5 d-inline-block p-1 m-1">2</span>
                        {{ __('home.how2') }}
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-arrow-right-square-fill" viewBox="0 0 16 16">
                            <path
                                d="M0 14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v12zm4.5-6.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5a.5.5 0 0 1 0-1z" />
                        </svg>
                    </h5>
                    {{ __('home.how2Text') }}
                </div>
            </div>

            <div class="card bg-success mb-3">
                <div class="card-text p-3 font-ar">
                    <h5 class="font-ar">
                        <span class="bg-light text-dark rounded-5 d-inline-block p-1 m-1 font-ar">3</span>
                        {{ __('home.how3') }}
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-check-square-fill" viewBox="0 0 16 16">
                            <path
                                d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm10.03 4.97a.75.75 0 0 1 .011 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.75.75 0 0 1 1.08-.022z" />
                        </svg>
                    </h5>
                    {{ __('home.how3Text') }}
                </div>
            </div>
        </div>

    </section>

    <!-- Services Cards -->
    <section class="py-5 section-style ar" style="background-color: #c0faff99 !important;">

        <h2 class="text-success ms-3 fw-bold font-ar me-3" style="color: blue  !important;">{{ __('home.services_title') }}</h2>

        <div class="container" style="height: 350px; overflow: hidden; overflow-y: scroll;">
            <div class="row text-center">
                @foreach ($services as $service)
                    {{-- @if (Auth::check() && !Auth::user()->category->contains($profession->category_id))
                    @continue
                @endif --}}
                    @include('components.service_card')
                @endforeach
            </div>
        </div>

    </section>


    <!-- Project Cards -->
    <section class="py-5 section-style ar" style="background-color: #c0faff99 !important;">

        <h2 class="text-success ms-3 fw-bold font-ar me-3" style="color: blue  !important;">{{ __('home.projects_title') }}</h2>

        <div class="container" style="height: 350px; overflow: hidden; overflow-y: scroll;">
            <div class="row text-center">
                @foreach ($projects as $project)
                    {{-- @if (Auth::check() && !Auth::user()->category->contains($project->category_id))
                    @continue
                @endif --}}
                    @include('components.project_card')
                @endforeach
            </div>
        </div>

    </section>


    {{-- Footer here --}}
    @include('layouts.footer')


    <!-- JavaScript Bundle with Popper -->
    <script src='/js/bootstrap.bundle.min.js'></script>
</body>

</html>
