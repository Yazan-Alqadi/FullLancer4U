<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main_page_css.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;500&family=Roboto+Slab&display=swap"
        rel="stylesheet">
    <!-- Icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/fl.css">
    <link href="{{ asset('css/profession.css') }}" rel="stylesheet">
    <!-- CSS only -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <title>Main_Page</title>
</head>

<body>

    {{-- <div class="pic"></div> --}}



    @include('layouts.nav-bar')




    <section id="hero" class="bg-dark text-light text-lg-center text-md-center text-sm-start pt-5 mt-5 pb-2">
        <div class="container">
            <div class="d-flex">
                <div>
                    <h2>How to make this site <span class="text-info">useful to you</span>
                        <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                            </svg></span>
                    </h2>
                    <p>
                        Create a new account or log in to the site, then start adding the professions you are good at.
                        After
                        adding the service, it will be reviewed by the technical support team within 24 hours. If the
                        service does not contain any violations, it will be accepted and offered to buyers and you can
                        start
                        promoting it, and if you are rejected, you will be notified of the reason for the rejection via
                        your
                        email.
                        When the work is completed and fully delivered, you can press the Connect Service button. If the
                        buyer does not have any feedback or modifications, he will accept the delivery request and the
                        service balance will be transferred to your account.
                        If you want to buy a service, Search for the service through the message or the search button,
                        then
                        read the service details and see the seller's information,
                    </p>
                    @auth
                    @else
                        <a href="{{ route('register.show') }}" class="btn btn-primary btn-lg">Register now</a>
                    @endauth
                </div>
                <img class="ms-2 d-none d-sm-block img-fluid" style="width: 20% !important;"
                    src={{ 'files/img_hero.svg' }} alt="">
            </div>
        </div>
    </section>


    <section id="top-fl" class="bg-light text-center py-5">
        <div class="container">
            <div class="d-flex">
                <img class="ms-2 d-none d-sm-block img-fluid" style="width: 20% !important;"
                    src={{ 'files/top_fl.svg' }} alt="">
                <div style="flex-grow: 1;">
                    <h2>Top <span class="text-warning">Freelancers</span></h2>
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
                            @foreach($freelancers as $freelancer)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td><a >{{ $freelancer->full_name }}</a></td>
                                <td>{}</td>
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
    </section>

    {{-- How works ? --}}
    <section class="py-5 section-style" style=" background-image: url({{ 'files/bilding.jpg' }});"">

        <h1 class="text-center" style="color: #560b0b !important;"> How Fullancer4U works</h1>

        <div class="container text-white">
            <div class="card bg-success mb-3">
                <div class="card-text p-3" style="background-color: cadetblue;">
                    <h5 class="">
                        <span class="bg-light text-dark rounded-5 d-inline-block p-1 m-1">1</span>Browse
                        services
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-eye-fill" viewBox="0 0 16 16">
                            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                            <path
                                d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                        </svg>
                    </h5>
                    Find the service you need using the search box at the top or via the categories.
                </div>
            </div>

            <div class="card bg-success mb-3">
                <div class="card-text p-3" style="background-color: darkcyan;">
                    <h5 class=""> <span class="bg-light text-dark rounded-5 d-inline-block p-1 m-1">2</span>
                        Request service
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-arrow-right-square-fill" viewBox="0 0 16 16">
                            <path
                                d="M0 14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v12zm4.5-6.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5a.5.5 0 0 1 0-1z" />
                        </svg>
                    </h5>
                    Review the service description and buyers' reviews and then ask to open a connection with the
                    seller.
                </div>
            </div>

            <div class="card bg-success mb-3">
                <div class="card-text p-3">
                    <h5 class="">
                        <span class="bg-light text-dark rounded-5 d-inline-block p-1 m-1">3</span>
                        receive your service
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-check-square-fill" viewBox="0 0 16 16">
                            <path
                                d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm10.03 4.97a.75.75 0 0 1 .011 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.75.75 0 0 1 1.08-.022z" />
                        </svg>
                    </h5>
                    Contact the seller directly within the Our website until receiving your entire order.
                </div>
            </div>
        </div>

    </section>

    <!-- Services Cards -->
    <section class="py-5 section-style" style="background-color: #c0faff99 !important;">

        <h2 class="text-success ms-3 fw-bold" style="color: blue  !important;">Professions</h2>

        <div class="container" style="height: 350px; overflow: hidden; overflow-y: scroll;">
            <div class="row text-center">
                @foreach ($professions as $profession)
                    @if (Auth::check() && !Auth::user()->category->contains($profession->category_id))
                    @continue
                    @endif
                        <div class="col-md-6 col-lg-4 mb-2">
                            <div class="card text-light" style="background-color: #001b24; height: 100%;">
                                <!-- <div class="container">

                             <-- add image or icon here ----------

                                <div style="display: inline-grid;">
                                    <span class="card-title">
                                        <a href="#" class="navbar-brand text-light name-of-user-hover">
                                            name of user
                                        </a>
                                    </span>
                                    <span class="card-title">
                                        user name
                                    </span>
                                </div>
                            </div> -->
                                <div class="card-body text-center"
                                    style="display: flex !important;align-items: center;justify-content: center;">

                                    <!-- descreption of the profession -->

                                    <div class="card-text">
                                        <div class="container">
                                            <div class="col" style="color: #f5ff9f;">
                                                <!-- category belong to the profession -->
                                                <div class="row justify-content-center"
                                                    style="font-size: 18px !important;">
                                                    {{-- <span class="for-size span-number-1 ">Title:</span> --}}
                                                    <span
                                                        class="for-size span-number-2 title-des">{{ $profession->title }}</span>
                                                </div>
                                                <div class="row justify-content-center">
                                                    <span class="for-size span-number-1">Category:</span>
                                                    <span
                                                        class="for-size span-number-2">{{ "\n" . $profession->category->title }}</span>
                                                </div>
                                                <div class="row justify-content-center">
                                                    <span class="for-size span-number-1">professional:</span>
                                                    <span
                                                        class="for-size span-number-2">{{ $profession->freelancer->user->full_name }}</span>
                                                </div>
                                                <div style="white-space: nowrap;">
                                                    <span class="for-size span-number-1">Rating:</span>
                                                    @if ($profession->freelancer->rate > 0)
                                                        <span class="fa fa-star checked"
                                                            style="font: normal normal normal 14px/1 FontAwesome !important;"></span>
                                                        {{-- star one --}}
                                                    @else
                                                        <span class="fa fa-star not-checked"
                                                            style="font: normal normal normal 14px/1 FontAwesome !important;"></span>
                                                        {{-- star one --}}
                                                    @endif
                                                    @if ($profession->freelancer->rate > 1)
                                                        <span class="fa fa-star checked"
                                                            style="font: normal normal normal 14px/1 FontAwesome !important;"></span>
                                                        {{-- star two --}}
                                                    @else
                                                        <span class="fa fa-star not-checked"
                                                            style="font: normal normal normal 14px/1 FontAwesome !important;"></span>
                                                        {{-- star two --}}
                                                    @endif
                                                    @if ($profession->freelancer->rate > 2)
                                                        <span class="fa fa-star checked"
                                                            style="font: normal normal normal 14px/1 FontAwesome !important;"></span>
                                                        {{-- star three --}}
                                                    @else
                                                        <span class="fa fa-star not-checked"
                                                            style="font: normal normal normal 14px/1 FontAwesome !important;"></span>
                                                        {{-- star three --}}
                                                    @endif
                                                    @if ($profession->freelancer->rate > 3)
                                                        <span class="fa fa-star checked"
                                                            style="font: normal normal normal 14px/1 FontAwesome !important;"></span>
                                                        {{-- star four --}}
                                                    @else
                                                        <span class="fa fa-star not-checked"
                                                            style="font: normal normal normal 14px/1 FontAwesome !important;"></span>
                                                        {{-- star four --}}
                                                    @endif
                                                    @if ($profession->freelancer->rate > 4)
                                                        <span class="fa fa-star checked"
                                                            style="font: normal normal normal 14px/1 FontAwesome !important;"></span>
                                                        {{-- star five --}}
                                                    @else
                                                        <span class="fa fa-star not-checked"
                                                            style="font: normal normal normal 14px/1 FontAwesome !important;"></span>
                                                        {{-- star five --}}
                                                    @endif

                                                </div>
                                                <div class="row justify-content-center">
                                                    <span class="for-size span-number-1">Price:</span>
                                                    <span
                                                        class="for-size span-number-2">{{ $profession->price }}</span>
                                                </div>
                                                <div class="row justify-content-center mt-3" style="display: block;">
                                                    <span class="for-size span-number-1">descreption:</span>
                                                    <span
                                                        class="for-size span-number-2">{{ $profession->description }}</span>
                                                </div>
                                                <!-- Profile of the user -->
                                                <a href="#" class="btn btn-info mt-2 btn-font-size">
                                                    See more information
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                @endforeach
            </div>
        </div>

    </section>


    <!-- Project Cards -->
    <section class="py-5 section-style" style="background-color: #c0faff99 !important;">

        <h2 class="text-success ms-3 fw-bold" style="color: blue  !important;">Projects</h2>

        <div class="container" style="height: 350px; overflow: hidden; overflow-y: scroll;">
            <div class="row text-center">
                @foreach ($projects as $project)
                    @if (Auth::check()  && !Auth::user()->category->contains($project->category_id))
                    @continue
                    @endif
                        <div class="col-md-6 col-lg-4 mb-2">
                            <div class="card text-light" style="background-color: #001b24; height: 100%;">
                                <!-- <div class="container">

                             <-- add image or icon here ----------

                                <div style="display: inline-grid;">
                                    <span class="card-title">
                                        <a href="#" class="navbar-brand text-light name-of-user-hover">
                                            name of user
                                        </a>
                                    </span>
                                    <span class="card-title">
                                        user name
                                    </span>
                                </div>
                            </div> -->

                                <div class="card-body text-center" style="background-color: #001b24; height: 100%;">

                                    <!-- descreption of the project -->

                                    <div class="card-text">
                                        <div class="container">
                                            <div class="col" style="color: #f5ff9f;">
                                                <!-- category belong to the profession -->
                                                <div class="row justify-content-center"
                                                    style="font-size: 18px !important;">
                                                    <span class="for-size span-number-2 title-des">
                                                        {{ $project->title }}
                                                    </span>
                                                </div>
                                                <div class="row justify-content-center">
                                                    <span class="for-size span-number-1">Category:</span>
                                                    <span class="for-size span-number-2">
                                                        {{ "\n" . $project->category->title }}
                                                    </span>
                                                </div>
                                                <div class="row justify-content-center">
                                                    <span class="for-size span-number-1">Client:</span>
                                                    <span class="for-size span-number-2">
                                                        {{ $project->user->full_name }}

                                                    </span>
                                                </div>
                                                <div class="row justify-content-center mt-3" style="display: block;">
                                                    <span class="for-size span-number-1">descreption:</span>
                                                    <span class="for-size span-number-2">
                                                        {{ $project->description }}

                                                    </span>
                                                </div>

                                                <div class="mt-2" style="text-align-last: justify">
                                                    {{-- Deadline --}}
                                                    <span>
                                                        <span class="text-start d-inline-block">
                                                            {{ $project->deadline }}
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor"
                                                                class="bi bi-calendar-check" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                                                                <path
                                                                    d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
                                                            </svg>
                                                        </span>
                                                    </span>

                                                    {{-- Price --}}
                                                    <span
                                                        class="text-end text-dark bg-light rounded px-2 py-1 tooltipssss d-inline-block">
                                                        {{ $project->price . ' Sp' }}
                                                        <span class="tooltiptext">Price</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                @endforeach
            </div>
        </div>

    </section>


    {{-- Footer here --}}
    @include('layouts.footer')


    <!-- JavaScript Bundle with Popper -->
    <script src="/js/bootstrap.bundle.min.js"></script>
</body>

</html>
