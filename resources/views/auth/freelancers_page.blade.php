<!DOCTYPE html>
<html lang="en" style="background-color: #212529;">

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
        <link href="/css/fl.css" rel="stylesheet">
        <!-- CSS only -->
        <link href="/css/bootstrap.min.css" rel="stylesheet">
        <title>Freelancers</title>
    </head>

    <body>

        <div class="navbar navbar-expand-md bg-dark navbar-dark text-light ">
            <div class="container justify-content-between">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#search-par"
                    aria-expanded="true">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a href="#" class="navbar-brand text-info navbar-title-hover">Fullancer4U</a>


                <form class="form-inline collapse navbar-collapse" id="search-par">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-info my-2 my-sm-0" type="submit"><svg
                            xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-search" viewBox="0 0 16 16">
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
                        <li class="nav-item"><a href="#Professions" class="nav-link in-hover">Professions</a></li>
                        <li class="nav-item"><a href="#Freealncers" class="nav-link in-hover">Freealncers</a></li>
                        <li class="nav-item"><a href="#Projects" class="nav-link in-hover">Projects</a></li>
                    </ul>
                    <!-- @if (session('user')) -->
                    <div class="navbar-nav ms-auto dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-person-circle" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                <path fill-rule="evenodd"
                                    d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                            </svg>
                            <span class="containar">Home</span>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#Profile">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-person-badge" viewBox="0 0 16 16">
                                        <path
                                            d="M6.5 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3zM11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                        <path
                                            d="M4.5 0A2.5 2.5 0 0 0 2 2.5V14a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2.5A2.5 2.5 0 0 0 11.5 0h-7zM3 2.5A1.5 1.5 0 0 1 4.5 1h7A1.5 1.5 0 0 1 13 2.5v10.795a4.2 4.2 0 0 0-.776-.492C11.392 12.387 10.063 12 8 12s-3.392.387-4.224.803a4.2 4.2 0 0 0-.776.492V2.5z" />
                                    </svg>
                                    Profile
                                </a></li>
                            <li><a class="dropdown-item" href="{{ route('logout') }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-arrow-left-square-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M16 14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12zm-4.5-6.5H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5a.5.5 0 0 0 0-1z" />
                                    </svg>
                                    Log out
                                </a></li>
                        </ul>
                    </div>
                    <!-- @else -->
                    <!-- <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a href="{{ route('register.show') }}" class="nav-link">Sign Up</a></li>
                        <li class="nav-item"><a href="{{ route('login.show') }}" class="nav-link">Log in</a></li>
                    </ul> -->
                    <!-- @endif -->
                </div>
            </div>
        </div>

        <div class="text-center align-items-center" style="color: #f5ff9f;">
            <div class="row align-items-start">
                <div class="col border border-dark py-1 px-1 border-1"
                    style="font-size: 1.5vw; background-color: #47587c; overflow: hidden; text-overflow: ellipsis;">
                    Freelancer Name
                </div>
                <div class="col border border-dark py-1 px-1 border-1"
                    style="font-size: 1.5vw; background-color: #47587c; overflow: hidden; text-overflow: ellipsis;">
                    Projects have done
                </div>
                <div class="col border border-dark py-1 px-1 border-1"
                    style="font-size: 1.5vw; background-color: #47587c; overflow: hidden; text-overflow: ellipsis;">
                    Number of professions
                </div>
                <div class="col border border-dark py-1 px-1 border-1"
                    style="font-size: 1.5vw; background-color: #47587c; overflow: hidden; text-overflow: ellipsis;">
                    Rate
                </div>
                <div class="col border border-dark py-1 px-1 border-1"
                    style="font-size: 1.5vw; background-color: #47587c; overflow: hidden; text-overflow: ellipsis;">
                    Contact
                </div>

            </div>
        </div>

        <div class="text-center align-items-center" style="color: #ffffff;">
            <div class="row align-items-start">
                <div class="col border border-dark py-1 px-1 border-1"
                    style="font-size: 1.5vw; background-color: #6a7da5; overflow: hidden; text-overflow: ellipsis;">
                    yazan
                </div>
                <div class="col border border-dark py-1 px-1 border-1"
                    style="font-size: 1.5vw; background-color: #6a7da5; overflow: hidden; text-overflow: ellipsis;">
                    10
                </div>
                <div class="col border border-dark py-1 px-1 border-1"
                    style="font-size: 1.5vw; background-color: #6a7da5; overflow: hidden; text-overflow: ellipsis;">
                    50
                </div>
                <div class="col border border-dark py-1 px-1 border-1"
                    style="font-size: 1.5vw; background-color: #6a7da5; overflow: hidden; text-overflow: ellipsis;">
                    5
                </div>
                <div class="col border border-dark py-1 px-1 border-1"
                    style="font-size: 1.5vw; background-color: #6a7da5; overflow: hidden; text-overflow: ellipsis;">
                    <a href="#Professions" class="nav-link">
                        yazanalqadi00000000000000000000000000000000000000000000000@gmail.com
                    </a>
                </div>

            </div>
        </div>

        <!-- JavaScript Bundle with Popper -->
        <script src="/js/bootstrap.bundle.min.js"></script>
    </body>

</html>