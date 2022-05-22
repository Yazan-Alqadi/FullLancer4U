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
        <link href="/css/freelancer_page.css" rel="stylesheet">
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
                    @if (session('user'))
                    <div class="navbar-nav ms-auto dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            {{ session('user') }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#Profile">Profile</a></li>
                            <li><a class="dropdown-item" href="{{ route('logout') }}">Log out</a></li>
                        </ul>
                    </div>
                    @else
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a href="{{ route('register.show') }}" class="nav-link">Sign Up</a></li>
                        <li class="nav-item"><a href="{{ route('login.show') }}" class="nav-link">Log in</a></li>
                    </ul>
                    @endif
                </div>
            </div>
        </div>

        <div class="text-center align-items-center" style="color: #f5ff9f;">
            <div class="row align-items-start">
                <div class="col border border-dark py-1 px-1 border-1"
                    style="font-size: 1.5vw; background-color: #47587c;">
                    Freelancer Name
                </div>
                <div class="col border border-dark py-1 px-1 border-1"
                    style="font-size: 1.5vw; background-color: #47587c;">
                    Projects have done
                </div>
                <div class="col border border-dark py-1 px-1 border-1"
                    style="font-size: 1.5vw; background-color: #47587c;">
                    Number of professions
                </div>
                <div class="col border border-dark py-1 px-1 border-1"
                    style="font-size: 1.5vw; background-color: #47587c;">
                    Rate
                </div>
                <div class="col border border-dark py-1 px-1 border-1"
                    style="font-size: 1.5vw; background-color: #47587c;">
                    Contact
                </div>

            </div>
        </div>

        <div class="text-center align-items-center" style="color: #ffffff;">
            <div class="row align-items-start">
                <div class="col border border-dark py-1 px-1 border-1"
                    style="font-size: 1.5vw; background-color: #6a7da5;">
                    yazan
                </div>
                <div class="col border border-dark py-1 px-1 border-1"
                    style="font-size: 1.5vw; background-color: #6a7da5;">
                    10
                </div>
                <div class="col border border-dark py-1 px-1 border-1"
                    style="font-size: 1.5vw; background-color: #6a7da5;">
                    50
                </div>
                <div class="col border border-dark py-1 px-1 border-1"
                    style="font-size: 1.5vw; background-color: #6a7da5;">
                    5
                </div>
                <div class="col border border-dark py-1 px-1 border-1"
                    style="font-size: 1.5vw; background-color: #6a7da5;">
                    yazanalqadi000@gmail.com
                </div>

            </div>
        </div>

        <!-- JavaScript Bundle with Popper -->
        <script src="/js/bootstrap.bundle.min.js"></script>
    </body>

</html>