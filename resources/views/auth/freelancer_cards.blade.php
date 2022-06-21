<!DOCTYPE html>
<html lang="en" style="background-color: rgb(186, 195, 195);">

<head>

    <meta charset=" UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;500&family=Roboto+Slab&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;500&family=Roboto+Slab&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{ asset('css/fl.css') }}" rel="stylesheet">
    <!-- CSS only -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <title>Freelancers</title>
</head>

<body>

    @include('layouts.nav-bar')

    <!-- card is here -->
    <section class="py-5 section-style">
        <div class="container">
            <div class="row text-center">
                @foreach ($freelancers as $freelancer)
                    <div class="col-md-6 col-lg-4 mb-2">
                        <div class="card text-light" style="background-color: #031232;">

                            <div class="container">
                                <!-- if user set a pic -->
                                <!-- <img src="/files/pic-1.jpg" class="card-img-top"
                                                            style="width: 55px; height: 55px; border-radius: 50%; margin: 12px 2px 0px 2px;"
                                                            alt="..."> -->
                                <!-- if does not set a pic yet -->
                                <span class="span-photo">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor"
                                        class="bi bi-person-circle" viewBox="0 0 16 16">
                                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                        <path fill-rule="evenodd"
                                            d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                    </svg>
                                </span>
                                <div style="display: inline-grid;">
                                    <span class="card-title">
                                        <a href="#" class="navbar-brand text-light name-of-user-hover">
                                            {{ $freelancer->full_name }}
                                        </a>
                                    </span>
                                    <span class="card-title">
                                        user name
                                    </span>
                                </div>
                            </div>
                            <div class="card-body text-center">
                                <!-- descreption of the user info -->
                                <div class="card-text">
                                    <div class="container">
                                        <div class="col" style="color: #f5ff9f;">
                                            <div class="row justify-content-center">Projects have done: 5</div>
                                            <div class="row justify-content-center">Number of professions:
                                                {{ $freelancer->number_of_professions }}</div>
                                            <div class="row justify-content-center">
                                                <div style="white-space: nowrap;">
                                                    Rating:
                                                    @if ($freelancer->rate > 0)
                                                        <span class="fa fa-star checked"></span> {{-- star one --}}
                                                    @else
                                                        <span class="fa fa-star not-checked"></span>
                                                        {{-- star one --}}
                                                    @endif
                                                    @if ($freelancer->rate > 1)
                                                        <span class="fa fa-star checked"></span> {{-- star two --}}
                                                    @else
                                                        <span class="fa fa-star not-checked"></span>
                                                        {{-- star two --}}
                                                    @endif
                                                    @if ($freelancer->rate > 2)
                                                        <span class="fa fa-star checked"></span> {{-- star three --}}
                                                    @else
                                                        <span class="fa fa-star not-checked"></span>
                                                        {{-- star three --}}
                                                    @endif
                                                    @if ($freelancer->rate > 3)
                                                        <span class="fa fa-star checked"></span> {{-- star four --}}
                                                    @else
                                                        <span class="fa fa-star not-checked"></span>
                                                        {{-- star four --}}
                                                    @endif
                                                    @if ($freelancer->rate > 4)
                                                        <span class="fa fa-star checked"></span> {{-- star five --}}
                                                    @else
                                                        <span class="fa fa-star not-checked"></span>
                                                        {{-- star five --}}
                                                    @endif

                                                </div>
                                            </div>
                                            <!-- email of the user -->
                                            <a href="#" class="btn btn-info mt-2 btn-font-size">
                                                Contact
                                                name of user
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="col-md-6 col-lg-4 mb-2">
                    <div class="card text-light" style="background-color: #031232;">
                        <div class="container">
                            <!-- if user set a pic -->
                            <!-- <img src="/files/pic-1.jpg" class="card-img-top"
                                                            style="width: 55px; height: 55px; border-radius: 50%; margin: 12px 2px 0px 2px;"
                                                            alt="..."> -->
                            <!-- if does not set a pic yet -->
                            <span class="span-photo">
                                <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor"
                                    class="bi bi-person-circle" viewBox="0 0 16 16">
                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                    <path fill-rule="evenodd"
                                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                </svg>
                            </span>
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
                        </div>
                        <div class="card-body text-center">
                            <!-- descreption of the user info -->
                            <div class="card-text">
                                <div class="container">
                                    <div class="col" style="color: #f5ff9f;">
                                        <div class="row justify-content-center">Projects have done: 4</div>
                                        <div class="row justify-content-center">Number of professions: 5</div>
                                        <div class="row justify-content-center">
                                            <div style="white-space: nowrap;">
                                                Rating:
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star not-checked"></span>
                                                <span class="fa fa-star not-checked"></span>
                                            </div>
                                        </div>
                                        <!-- email of the user -->
                                        <a href="#" class="btn btn-info mt-2 btn-font-size">
                                            Contact
                                            name of user
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- JavaScript Bundle with Popper -->
    <script src="/js/bootstrap.bundle.min.js"></script>
</body>

</html>
