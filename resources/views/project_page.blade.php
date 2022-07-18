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
    <link href="{{ asset('css/profession.css') }}" rel="stylesheet">
    <!-- CSS only -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <title>Projects</title>
</head>

<body>

    @include('layouts.nav-bar')


    <!-- card is here -->
    <section class="py-5 section-style mt-5">
        <div class="container">
            <div class="row text-center">
                @foreach ($projects as $project)
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

                            <div class="card-body text-center" style="display: flex !important; align-items: center; justify-content: center;">

                                <!-- descreption of the project -->

                                <div class="card-text">
                                    <div class="container">
                                        <div class="col" style="color: #f5ff9f;">
                                            <!-- category belong to the profession -->
                                            <div class="row justify-content-center" style="font-size: 18px !important;">
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
            {{ $projects->links('pagination::bootstrap-4') }}
        </div>

    </section>


    <!-- JavaScript Bundle with Popper -->
    <script src="/js/bootstrap.bundle.min.js"></script>
</body>

</html>
