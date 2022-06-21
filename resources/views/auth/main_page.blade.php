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

    <div class="navbar navbar-expand-md bg-dark navbar-dark text-light fixed-top">
        <div class="container justify-content-between">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#search-par"
                aria-expanded="true">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a href="{{ route('home') }}" class="navbar-brand text-info navbar-title-hover">Fullancer4U</a>


            <form class="form-inline collapse navbar-collapse" id="search-par">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-info my-2 my-sm-0" type="submit"><svg xmlns="http://www.w3.org/2000/svg"
                        width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path
                            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                    </svg></button>
            </form>


            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainmenu"
                aria-expanded="true">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="mainmenu">
                <ul class="navbar-nav ms-3">
                    <li class="nav-item"><a href="{{ route('professions.index') }}"
                            class="nav-link in-hover">Professions</a></li>
                    <li class="nav-item"><a href="{{ route('freelancers.index') }}"
                            class="nav-link in-hover">Freealncers</a></li>
                    <li class="nav-item"><a href="{{ route('projects.index') }}"
                            class="nav-link in-hover">Projects</a></li>
                    {{-- Bacome freelancer --}}
                    <li> <a href="{{ route('become_freelancer') }}" class="nav-link in-hover-t text-warning fw-bold">Become Freelancer</a></li>
                </ul>
                @auth
                    <div class="navbar-nav ms-auto dropdown">

                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-person-circle" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                <path fill-rule="evenodd"
                                    d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                            </svg>
                            <span class="containar">{{ Auth::user()->full_name }}</span>
                        </a>

                        <ul class="dropdown-menu" aria-labelledby="#navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="{{ route('profile', Auth::user()->id) }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-person-badge" viewBox="0 0 16 16">
                                        <path
                                            d="M6.5 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3zM11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                        <path
                                            d="M4.5 0A2.5 2.5 0 0 0 2 2.5V14a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2.5A2.5 2.5 0 0 0 11.5 0h-7zM3 2.5A1.5 1.5 0 0 1 4.5 1h7A1.5 1.5 0 0 1 13 2.5v10.795a4.2 4.2 0 0 0-.776-.492C11.392 12.387 10.063 12 8 12s-3.392.387-4.224.803a4.2 4.2 0 0 0-.776.492V2.5z" />
                                    </svg>
                                    Profile
                                </a></li>
                            <li><a class="dropdown-item" href="{{ route('logout') }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-arrow-left-square-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M16 14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12zm-4.5-6.5H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5a.5.5 0 0 0 0-1z" />
                                    </svg>
                                    Log out
                                </a></li>
                        </ul>
                    </div>
                @else
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a href="{{ route('register.show') }}" class="nav-link">Sign
                                Up</a></li>
                        <li class="nav-item"><a href="{{ route('login.show') }}" class="nav-link">Log
                                in</a></li>
                    </ul>
                @endauth


            </div>
        </div>
    </div>


    <section id="hero" class="bg-dark text-light text-lg-center text-md-center text-sm-start pt-5 mt-5 pb-2">
        <div class="container">
            <div class="d-flex">
                <div>
                    <h2>How to make this site <span class="text-info">useful to you</span>
                        <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
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
                    <button type="button" class="btn btn-primary btn-lg">Register now</button>
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
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Back_end</td>
                                <td>
                                    @if (5 > 0)
                                        <span class="fa fa-star checked"></span> {{-- star one --}}
                                    @else
                                        <span class="fa fa-star not-checked"></span> {{-- star one --}}
                                    @endif
                                    @if (5 > 1)
                                        <span class="fa fa-star checked"></span> {{-- star two --}}
                                    @else
                                        <span class="fa fa-star not-checked"></span> {{-- star two --}}
                                    @endif
                                    @if (5 > 2)
                                        <span class="fa fa-star checked"></span> {{-- star three --}}
                                    @else
                                        <span class="fa fa-star not-checked"></span> {{-- star three --}}
                                    @endif
                                    @if (5 > 3)
                                        <span class="fa fa-star checked"></span> {{-- star four --}}
                                    @else
                                        <span class="fa fa-star not-checked"></span> {{-- star four --}}
                                    @endif
                                    @if (5 > 4)
                                        <span class="fa fa-star checked"></span> {{-- star five --}}
                                    @else
                                        <span class="fa fa-star not-checked"></span> {{-- star five --}}
                                    @endif

                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Yazan</td>
                                <td>Back_end ,Front_end ,Teacher ,desiner ,transleater</td>
                                <td>
                                    @if (5 > 0)
                                        <span class="fa fa-star checked"></span> {{-- star one --}}
                                    @else
                                        <span class="fa fa-star not-checked"></span> {{-- star one --}}
                                    @endif
                                    @if (5 > 1)
                                        <span class="fa fa-star checked"></span> {{-- star two --}}
                                    @else
                                        <span class="fa fa-star not-checked"></span> {{-- star two --}}
                                    @endif
                                    @if (5 > 2)
                                        <span class="fa fa-star checked"></span> {{-- star three --}}
                                    @else
                                        <span class="fa fa-star not-checked"></span> {{-- star three --}}
                                    @endif
                                    @if (5 > 3)
                                        <span class="fa fa-star checked"></span> {{-- star four --}}
                                    @else
                                        <span class="fa fa-star not-checked"></span> {{-- star four --}}
                                    @endif
                                    @if (5 > 4)
                                        <span class="fa fa-star checked"></span> {{-- star five --}}
                                    @else
                                        <span class="fa fa-star not-checked"></span> {{-- star five --}}
                                    @endif

                                </td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>MOMO</td>
                                <td>Front_end</td>
                                <td>
                                    @if (5 > 0)
                                        <span class="fa fa-star checked"></span> {{-- star one --}}
                                    @else
                                        <span class="fa fa-star not-checked"></span> {{-- star one --}}
                                    @endif
                                    @if (5 > 1)
                                        <span class="fa fa-star checked"></span> {{-- star two --}}
                                    @else
                                        <span class="fa fa-star not-checked"></span> {{-- star two --}}
                                    @endif
                                    @if (5 > 2)
                                        <span class="fa fa-star checked"></span> {{-- star three --}}
                                    @else
                                        <span class="fa fa-star not-checked"></span> {{-- star three --}}
                                    @endif
                                    @if (5 > 3)
                                        <span class="fa fa-star checked"></span> {{-- star four --}}
                                    @else
                                        <span class="fa fa-star not-checked"></span> {{-- star four --}}
                                    @endif
                                    @if (5 > 4)
                                        <span class="fa fa-star checked"></span> {{-- star five --}}
                                    @else
                                        <span class="fa fa-star not-checked"></span> {{-- star five --}}
                                    @endif

                                </td>
                            </tr>
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
                    Contact the seller directly within the Fiverr website until receiving your entire order.
                </div>
            </div>
        </div>

    </section>

    <!-- Professions Cards -->
    <section class="py-5 section-style" style="background-color: #c0faff99 !important;">

        <h2 class="text-success ms-3 fw-bold" style="color: blue  !important;">Professions</h2>

        <div class="container" style="height: 350px; overflow: hidden; overflow-y: scroll;">
            <div class="row text-center">
                @foreach ($professions as $profession)
                    <div class="col-md-6 col-lg-4 mb-2">
                        <div class="card text-light" style="background-color: #001b24;">
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
                            <div class="card-body text-center">

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
                                                    <span class="fa fa-star checked"></span> {{-- star one --}}
                                                @else
                                                    <span class="fa fa-star not-checked"></span> {{-- star one --}}
                                                @endif
                                                @if ($profession->freelancer->rate > 1)
                                                    <span class="fa fa-star checked"></span> {{-- star two --}}
                                                @else
                                                    <span class="fa fa-star not-checked"></span> {{-- star two --}}
                                                @endif
                                                @if ($profession->freelancer->rate > 2)
                                                    <span class="fa fa-star checked"></span> {{-- star three --}}
                                                @else
                                                    <span class="fa fa-star not-checked"></span> {{-- star three --}}
                                                @endif
                                                @if ($profession->freelancer->rate > 3)
                                                    <span class="fa fa-star checked"></span> {{-- star four --}}
                                                @else
                                                    <span class="fa fa-star not-checked"></span> {{-- star four --}}
                                                @endif
                                                @if ($profession->freelancer->rate > 4)
                                                    <span class="fa fa-star checked"></span> {{-- star five --}}
                                                @else
                                                    <span class="fa fa-star not-checked"></span> {{-- star five --}}
                                                @endif

                                            </div>
                                            <div class="row justify-content-center">
                                                <span class="for-size span-number-1">Price:</span>
                                                <span class="for-size span-number-2">{{ $profession->price }}</span>
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
                    <div class="col-md-6 col-lg-4 mb-2">
                        <div class="card text-light" style="background-color: #001b24;">
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

                            <div class="card-body text-center">

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
                                                    {{ $project->client->user->full_name }}

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

    <!-- JavaScript Bundle with Popper -->
    <script src="/js/bootstrap.bundle.min.js"></script>
</body>

</html>
