<!DOCTYPE html>
<html lang="en" style="background-color: lightgrey;">

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

    <body style="background-color: lightgrey;">

        <div class="navbar navbar-expand-md bg-dark navbar-dark text-light ">
            <div class="container justify-content-between">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#search-par"
                    aria-expanded="true">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a href="{{ route('home') }}" class="navbar-brand text-info navbar-title-hover">Fullancer4U</a>


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
                        <li class="nav-item"><a href="{{ route('freelancers.index') }}" class="nav-link in-hover">Freealncers</a></li>
                        <li class="nav-item"><a href="#Projects" class="nav-link in-hover">Projects</a></li>
                    </ul>
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
                </div>
            </div>
        </div>

        <div class="h3 text-dark mg mt-5">
            My Account
        </div>

        <section class="bg-light text-dark mg w-75 p-3 rounded">
            <div class="border-bottom border-dark ps-3 h5 py-1">
                My Info
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                    class="bi bi-pencil-square" viewBox="0 0 20 20">
                    <path
                        d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                    <path fill-rule="evenodd"
                        d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                </svg>
            </div>
            <form>
                <div class="container">

                    <img src="/files/pic-1.jpg" class="rounded-5 mx-auto d-block m-3" style="width: 30%;" alt="...">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Full Name</span>
                        <input type="text" class="form-control" aria-label="Sizing example input"
                            placeholder="Full Name" aria-label="Fullname" aria-describedby="inputGroup-sizing-default">
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">User Name</span>
                        <input type="text" class="form-control" aria-label="Sizing example input"
                            placeholder="User Name" aria-label="Username" aria-describedby="inputGroup-sizing-default">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1"
                            placeholder="name@example.com">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput2" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleFormControlInput2"
                            placeholder="**************">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput3" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="exampleFormControlInput3"
                            placeholder="**************">
                    </div>

                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button type="button" class="btn btn-success " disabled>Confirm Edit</button>
                </div>
            </form>
        </section>



        <!-- JavaScript Bundle with Popper -->
        <script src=" /js/bootstrap.bundle.min.js">
        </script>
    </body>

</html>
