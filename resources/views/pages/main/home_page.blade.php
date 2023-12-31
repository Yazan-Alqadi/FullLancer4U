<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    @include('layouts.head')

    <!-- CSS only -->
    <link href="{{ asset('css/fl.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/profession.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main_page_css.css') }}" rel="stylesheet">
    <link href="{{ asset('css/home_page.css') }}" rel="stylesheet">

    <title>Home</title>

</head>

<body>

    @include('layouts.nav-bar')

    {{-- Slids section --}}
    <div id="slid-section" class="bg-dark py-4 main slid-section-style">
        <div id="carouselExampleCaptions" class="carousel slide carousel-fade my-4" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="5000">
                    <img src="files/Freelancer-7.jpg" class="d-block w-75 image-style-slid" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="5000">
                    <img src="files/Freelancer-1.png" class="d-block w-75 image-style-slid" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="files/Freelancer-3.png" class="d-block w-75 image-style-slid" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev carousel-dark" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next carousel-dark" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    {{-- Instruction of using --}}
    <div class="load-from-right-0">
        <section id="instruction-of-using" class="mx-5 load-from-right instruction-of-using-style">
            <div class="row">

                <div class="container col-lg-6 d-flex justify-content-center d-none d-lg-flex">
                    <img src="{{ asset('files/img_hero.svg') }}" alt="" class="w-50">
                </div>

                <div
                    class="container rounded col-lg-6 container text-light bg-dark p-4 ar d-flex flex-column justify-content-center">
                    <h2 class="text-center font-ar">{{ __('home.title1') }} <span
                            class="text-info font-ar">{{ __('home.title2') }}</span>
                        <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                            </svg></span>
                    </h2>

                    <div class="h5 text-center">
                        <p class="font-ar">
                            {{ __('home.text') }}
                        </p>
                    </div>
                    @auth
                    @else
                        <a href="{{ route('register.show') }}"
                            class="btn btn-primary btn-lg font-ar">{{ __('home.registernow') }}</a>
                    @endauth
                </div>
            </div>
        </section>
    </div>

    {{-- Sgin up instruction --}}
    <div class="load-from-left-0">
        <section id="sgin-up-instruction" class="mx-5 load-from-left instruction-of-using-style">
            <div class="row">
                <div
                    class="container rounded col-lg-6 container text-light bg-dark p-4 d-flex flex-column justify-content-center">
                    <div class="h1 text-center font-ar ar text-info">{{ __('home.how-to-start') }}</div>
                    <div class="h5 text-center font-ar ar"> {{ __('home.sign-in') }} </div>
                    <div class="h5 text-center font-ar ar"> <span class="text-info">{{ __('home.enter') }}</span> {{ __('home.your-infomation') }}</div>
                    <div class="h5 text-center font-ar ar"> {{ __('home.log-in-finish') }} </div>
                    <div class="h5 text-center font-ar ar"> {{ __('home.gongrats-befor') }} <span
                            class="text-info font-ar ar"> {{ __('home.gongrats') }} </span>
                    </div>
                </div>

                <div class="container col-lg-6 d-flex justify-content-center d-none d-lg-flex">
                    <img src="{{ asset('images/sign-in.svg') }}" alt="" class="w-75">
                </div>
            </div>
        </section>
    </div>

    {{-- site actions --}}
    <div class="load-from-right-0">
        <section id="site-actions" class="mx-5 load-from-right instruction-of-using-style">
            <div class="row">
                <div class="container col-lg-6 d-flex justify-content-center d-none d-lg-flex">
                    <img src="{{ asset('images/thinking.svg') }}" alt="" class="w-75">
                </div>
                <div
                    class="container rounded col-lg-6 container text-light bg-dark p-4 d-flex flex-column justify-content-center">
                    <div class="h1 text-center font-ar ar text-info"> {{ __('home.website') }}  </div>
                    <div class="h6 text-center font-ar ar"> {{ __('home.offer') }} </div>
                    <div class="h6 text-center font-ar ar"> {{ __('home.proposed-projects') }} </div>
                    <div class="h6 text-center font-ar ar"> {{ __('home.add-posts') }} </div>
                    <div class="h6 text-center font-ar ar"> {{ __('home.available-services') }} </div>
                </div>
            </div>
        </section>
    </div>

    {{-- GO to JOBS Gallery --}}
    <div class="load-from-left-0">
        <section id="site-actions" class="mx-5 load-from-left instruction-of-using-style">
            <div class="row">
                <div
                    class="container rounded col-lg-6 container text-light bg-dark p-4 d-flex flex-column justify-content-center">
                    <div class="h1 text-center font-ar ar text-info"> {{ __('home.browse-services') }} </div>
                    <div class="h6 text-center font-ar ar"> {{ __('home.through-postings') }} </div>
                    <div class="h6 text-center font-ar ar"> {{ __('home.browse-projects') }} </div>
                    <div class="h6 text-center font-ar ar"> {{ __('home.number-of-likes') }} </div>
                    <div class="h6 text-center font-ar ar"> {{ __('home.publish-posts') }} </div>
                    <span class="h6 text-center font-ar ar"> {{ __('home.new-website') }} 
                        <a class="nav-link font-ar bg-94297d ms-1 p-2 rounded color-dea90b d-inline-block text-center font-ar ar"
                            href="{{ route('gallery_main_page') }}">
                            {{ __('home.jobs-gallery') }}
                        </a>
                    </span>
                </div>
                <div class="container col-lg-6 d-flex justify-content-center d-none d-lg-flex">
                    <img src="{{ asset('files/undraw_posts_re_ormv.svg') }}" alt="" class="w-75">
                </div>
            </div>
        </section>
    </div>


    {{-- NNNNNN --}}
    <div class="load-from-left-0">
        <section class="bg-dark my-5 p-3 load-from-left rounded">
            <div class="container">
                <div class="h4 text-warning text-center load load-one font-ar ar"> {{ __('home.confused') }} </div>
                <div class="h4 text-warning text-center load load-two font-ar ar"> {{ __('home.afraid-of-learning') }} </div>
                <div class="h4 text-warning text-center load load-three font-ar ar"> {{ __('home.most-requested-jobs') }} </div>
                <div class="h2 text-center text-success mt-4 font-ar ar">
                    {{ __('home.find-everything') }} 
                    <a href="{{ route('analysis') }}" class="btn btn-success font-ar ar"> {{ __('home.info') }} </a>
                </div>
            </div>
        </section>
    </div>

    {{-- Top freelancers --}}
    <div class="load-from-right-0">
        <section id="top-fl" class="bg-light text-center py-5 ar load-from-right">
            <div class="container-fluid">
                <h2 class="mb-5 font-ar">{{ __('home.top1') }} <span
                        class="text-warning font-ar">{{ __('home.top2') }}</span></h2>
                <div class="d-flex">
                    <img class="ms-2 d-none d-sm-block img-fluid font-ar top-fl-img-style" alt="photo"
                        src={{ 'files/top_fl.svg' }}>
                    <div class="table-responsive flex-grow-1">

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
                                                <span class="fa fa-star checked span-star"></span>
                                                {{-- star one --}}
                                            @else
                                                <span class="fa fa-star not-checked span-star"></span>
                                                {{-- star one --}}
                                            @endif
                                            @if ($freelancer->rate > 1)
                                                <span class="fa fa-star checked span-star"></span>
                                                {{-- star two --}}
                                            @else
                                                <span class="fa fa-star not-checked span-star"></span>
                                                {{-- star two --}}
                                            @endif
                                            @if ($freelancer->rate > 2)
                                                <span class="fa fa-star checked span-star"></span>
                                                {{-- star three --}}
                                            @else
                                                <span class="fa fa-star not-checked span-star"></span>
                                                {{-- star three --}}
                                            @endif
                                            @if ($freelancer->rate > 3)
                                                <span class="fa fa-star checked span-star"></span>
                                                {{-- star four --}}
                                            @else
                                                <span class="fa fa-star not-checked span-star"></span>
                                                {{-- star four --}}
                                            @endif
                                            @if ($freelancer->rate > 4)
                                                <span class="fa fa-star checked span-star"></span>
                                                {{-- star five --}}
                                            @else
                                                <span class="fa fa-star not-checked span-star"></span>
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
    </div>

    {{-- How works ? --}}
    <div class="load-from-left-0">
        <section class="py-5 section-style ar font-ar load-from-left how-works-section-style">

            <h1 class="text-center font-ar how-works-h1-style">{{ __('home.how') }}</h1>

            <div class="container text-white">
                <div class="card bg-success mb-3">
                    <div class="card-text p-3 font-ar bg-color-cadetblue">
                        <h5 class="font-ar">
                            <span class="bg-light text-dark rounded-5 d-inline-block p-1 m-1 font-ar">1</span>
                            {{ __('home.how1') }}
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                <path
                                    d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                            </svg>
                        </h5>
                        {{ __('home.how1Text') }}
                    </div>
                </div>

                <div class="card bg-success mb-3">
                    <div class="card-text p-3 font-ar bg-color-darkcyan">
                        <h5 class="font-ar"><span class="bg-light text-dark rounded-5 d-inline-block p-1 m-1">2</span>
                            {{ __('home.how2') }}
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-arrow-right-square-fill" viewBox="0 0 16 16">
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
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-check-square-fill" viewBox="0 0 16 16">
                                <path
                                    d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm10.03 4.97a.75.75 0 0 1 .011 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.75.75 0 0 1 1.08-.022z" />
                            </svg>
                        </h5>
                        {{ __('home.how3Text') }}
                    </div>
                </div>
            </div>

        </section>
    </div>

    <!-- Services Cards -->
    <div class="load-from-right-0">
        <section class="py-5 section-style ar load-from-right bg-color-c0faff99">

            <h2 class="text-success ms-3 fw-bold font-ar me-3 color-blue">
                {{ __('home.services_title1') }}</h2>

            <div class="container services-cards-div-1-style">
                <div class="row text-center">
                    @foreach ($services as $service)
                        {{-- @if (Auth::check() && !Auth::user()->category->contains($profession->category_id))
                        @continue
                    @endif --}}
                        <div class="col-md-6 col-lg-4 mb-2 ar">
                            @include('components.service_card')
                        </div>
                    @endforeach
                </div>
            </div>

        </section>
    </div>


    <!-- Project Cards -->
    <div class="load-from-left-0">
        <section class="py-5 section-style ar load-from-left bg-color-c0faff99">

            <h2 class="text-success ms-3 fw-bold font-ar me-3 color-blue">
                {{ __('home.projects_title1') }}</h2>

            <div class="container services-cards-div-1-style">
                <div class="row text-center">
                    @foreach ($projects as $project)
                        {{-- @if (Auth::check() && !Auth::user()->category->contains($project->category_id))
                        @continue
                    @endif --}}
                        <div class="col-md-6 col-lg-4 mb-2 ar">
                            @include('components.project_card')
                        </div>
                    @endforeach
                </div>
            </div>

        </section>
    </div>

    <div class="toast-container position-fixed bottom-0 end-0 p-3">
        <div id="liveToast" class="toast bg-dark toast-verification" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header text-light bg-dark">
                <img src="" class="rounded me-2" alt="">
                <strong class="me-auto font-ar ar"> {{ __('home.message') }} </strong>
                <small>1 min ago</small>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body text-info font-ar ar"> {{ __('home.verification-email') }} </div>
        </div>
    </div>

    <div class="toast-container position-fixed bottom-0 end-0 p-3">
        <div id="liveToast" class="toast bg-dark toast-reset-password" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header text-light bg-dark">
                <img src="" class="rounded me-2" alt="">
                <strong class="me-auto font-ar ar"> {{ __('home.message') }} </strong>
                <small>1 min ago</small>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body text-info font-ar ar"> {{ __('home.password-reset') }} </div>
        </div>
    </div>
        
    {{-- Footer here --}}
    @include('layouts.footer')
    
    @if (session('verified'))
        <script>
            var toast = new bootstrap.Toast(document.querySelector('.toast-verification'));
            toast.show();
            setTimeout(function() {
                toast.hide();
            }, 10000); // 10000 milliseconds = 10 seconds
        </script>
    @endif

    @if (session('status'))
        <script>
            var toast = new bootstrap.Toast(document.querySelector('.toast-reset-password'));
            toast.show();
            setTimeout(function() {
                toast.hide();
            }, 10000); // 10000 milliseconds = 10 seconds
        </script>
    @endif

</body>

</html>
