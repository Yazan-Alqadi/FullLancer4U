<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;500&family=Roboto+Slab&display=swap"
        rel="stylesheet">
    <link href="css/fl.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- CSS only -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <title>freelancer Profile</title>
</head>

<body style="background-color: rgb(235, 235, 235);">

    <div class="navbar navbar-expand-md bg-dark navbar-dark text-light ">
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
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
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


    <!-- alerts Icons -->
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
            <path
                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
        </symbol>
        <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
            <path
                d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
        </symbol>
        <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
            <path
                d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
        </symbol>
    </svg>

    <!-- Error alert
        @if (count($errors) > 0)
<div class="alert alert-primary d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:">
                <use xlink:href="#info-fill" />
            </svg>
            <div>
                {{ $errors->first() }}
            </div>
        </div>
@endif

        <!-- successful alert

        @if (session('message'))
<div class="alert alert-success d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
                <use xlink:href="#check-circle-fill" />
            </svg>
            <div>
                {{ session('message') }}
            </div>
        </div>
@endif -->


    <div class="text-dark ms-1 container h1 mt-5 row"> Name of the serves </div>
    <div class="m-2">
        <span class="bg-success p-2 rounded text-light">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-cart3" viewBox="0 0 16 16">
                <path
                    d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
            </svg>
            <a href="#buy" class="text-light text-decoration-none"> Buy this service </a>
        </span>
    </div>

    <section class="py-2">
        <div class="mx-3">
            <div class="row">
                <!-- Here is the card service -->
                <div class="col-lg-4 col-md-4 mb-4">
                    <div class="card bg-light text-start text-dark rounded">
                        <div class="card-body">
                            <h5 class="card-title">
                                Card Service
                            </h5>
                        </div>
                    </div>
                    <!-- Info about the service -->
                    <div class="card bg-light text-start text-dark rounded">
                        <div class="card-body">
                            <div class="card-text d-inline-block">
                                <div>
                                    <span>Rating:</span>
                                    <span class="fa fa-star checked"
                                        style="font: normal normal normal 14px/1 FontAwesome !important;"></span>
                                    <span class="fa fa-star checked"
                                        style="font: normal normal normal 14px/1 FontAwesome !important;"></span>
                                    <span class="fa fa-star checked"
                                        style="font: normal normal normal 14px/1 FontAwesome !important;"></span>
                                    <span class="fa fa-star not-checked"
                                        style="font: normal normal normal 14px/1 FontAwesome !important;"></span>
                                    <span class="fa fa-star not-checked"
                                        style="font: normal normal normal 14px/1 FontAwesome !important;"></span>
                                </div>
                                <div>
                                    <span>Number of buyers:</span>
                                    <span>5</span>
                                </div>
                                <div>
                                    <span>Requests are being executed:</span>
                                    <span>0</span>
                                </div>
                                <div>
                                    <span>Service price starts at:</span>
                                    <span>10.00$</span>
                                </div>
                                <div>
                                    <span>Delivery term:</span>
                                    <span>3 Days</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Here the img -->
                    <div class="card bg-light text-start text-dark rounded">
                        <div class="card-body">
                            <div class="card-text">
                                <!-- if user set a pic -->
                                <!-- <img src="/files/pic-1.jpg" class="card-img-top img-user-style" alt="..."> -->
                                <!-- if does not set a pic yet -->
                                <span class="span-photo ms-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70"
                                        fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                        <path fill-rule="evenodd"
                                            d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                    </svg>
                                </span>
                                <div style="display: inline-grid;">
                                    <span class="card-title">
                                        <a href="#" class="navbar-brand text-dark">
                                            name of user
                                        </a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card bg-light text-start text-dark rounded">
                        <div class="card-body text-center">
                            <button type="button" class="btn btn-success">Contact</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8">
                    <div class="card bg-light text-dark rounded">
                        <div class="p-4">
                            <h2>Description</h2>
                            <p>
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloremque dicta ea iusto
                                quia qui eaque impedit, sed aut expedita molestiae ullam eligendi est rerum odio
                                molestias. Molestias animi nobis non.

                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore ullam voluptates,
                                consequuntur distinctio, culpa maxime facilis quisquam perspiciatis, nesciunt
                                eligendi temporibus odio! Praesentium molestias delectus, alias voluptatum
                                consectetur est magni.

                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis velit aut voluptas
                                veniam sequi pariatur?



                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat, debitis. Dolores
                                consectetur accusantium tenetur molestiae ex! Saepe vero corrupti rem, ipsam libero
                                consequuntur nisi fugit sit. Nihil mollitia officia nam saepe minus eos suscipit
                                quis. Totam, consequuntur qui maiores ea sequi adipisci quaerat rerum ratione?
                            </p>
                        </div>
                    </div>

                    <div class="card bg-light text-start text-dark mb-4 rounded">
                        <div class="card-body text-center">
                            <div class="h5">Buy this service</div>
                            <!-- if the service not buyed yet -->
                            <button href="#" type="button" class="btn btn-success mt-2" id="buy">Buy,
                                and add to my
                                projects</button>
                            <!-- if the service is required and has not yet been approved -->
                            <!-- <button type="button" class="btn btn-secondary" disabled>requested</button> -->
                            <!-- if the service is accepted and not finished -->
                            <!-- <button type="button" class="btn btn-info" disabled>In work</button> -->
                            <!-- if the service is over -->
                            <!-- <button type="button" class="btn btn-success" disabled>Service over</button> -->
                        </div>
                    </div>

                    <!-- Other suggested services -->
                    <div class="card bg-light text-start text-dark rounded">
                        <div class="card-body text-center">
                            <div class="h5 mb-3">Other suggested services</div>
                            <!-- Only the first 6 similar services -->
                            <section class="py-5 section-style">
                                <div class="container">
                                    <div class="row text-center">
                                        @foreach ($professions as $profession)
                                            <div class="col-md-6 col-lg-6 mb-2">
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
                                                                        <span
                                                                            class="for-size span-number-1">Category:</span>
                                                                        <span
                                                                            class="for-size span-number-2">{{ "\n" . $profession->category->title }}</span>
                                                                    </div>
                                                                    <div class="row justify-content-center">
                                                                        <span
                                                                            class="for-size span-number-1">professional:</span>
                                                                        <span
                                                                            class="for-size span-number-2">{{ $profession->freelancer->user->full_name }}</span>
                                                                    </div>
                                                                    <div style="white-space: nowrap;">
                                                                        <span
                                                                            class="for-size span-number-1">Rating:</span>
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
                                                                        <span
                                                                            class="for-size span-number-1">Price:</span>
                                                                        <span
                                                                            class="for-size span-number-2">{{ $profession->price }}</span>
                                                                    </div>
                                                                    <div class="row justify-content-center mt-3"
                                                                        style="display: block;">
                                                                        <span
                                                                            class="for-size span-number-1">descreption:</span>
                                                                        <span
                                                                            class="for-size span-number-2">{{ $profession->description }}</span>
                                                                    </div>
                                                                    <!-- Profile of the user -->
                                                                    <a href="#"
                                                                        class="btn btn-info mt-2 btn-font-size">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- JavaScript Bundle with Popper -->
    <script src=" /js/bootstrap.bundle.min.js"></script>
</body>

</html>
