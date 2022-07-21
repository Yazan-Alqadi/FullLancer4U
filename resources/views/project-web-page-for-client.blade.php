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
    <link href="../css/fl.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- CSS only -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <title>Projects card</title>
</head>

<body style="background-color: rgb(235, 235, 235);">

    @include('layouts.nav-bar')


    <div class="text-dark ms-1 container h1 mgg row"> {{ $project->title }} </div>
    <div class="m-3">
        <span class="bg-info p-2 rounded text-dark">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-cart3" viewBox="0 0 16 16">
                <path
                    d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
            </svg>
        </span>
    </div>

    <section class="py-2">
        <div class="mx-3">
            <div class="row">

                <div class="col-lg-8 col-md-8">
                    <div class="card bg-light text-dark rounded">
                        <div class="p-4">
                            <h2>Description</h2>
                            <p>
                                {{ $project->description }}
                            </p>
                        </div>
                    </div>

                    <div class="card bg-light text-start text-dark mb-4 rounded">
                        <div class="card-body text-center">
                            <div class="h5">Apply for this project</div>
                            <!-- if the service not buyed yet -->
                            <button href="#" type="button" class="btn btn-info mt-2" id="buy">Apply</button>
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
                            @foreach ($projects as $project)

                            <section class="py-5 section-style mt-5">
                                <div class="container">
                                    <div class="row text-center">
                                            <div class="col-md-6 col-lg-4 mb-2">
                                                <div class="card text-light"
                                                    style="background-color: #001b24; height: 100%;">
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
                                                        style="display: flex !important; align-items: center; justify-content: center;">

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
                                                                        <span
                                                                            class="for-size span-number-1">Category:</span>
                                                                        <span class="for-size span-number-2">
                                                                            {{ "\n" . $project->category->title }}
                                                                        </span>
                                                                    </div>
                                                                    <div class="row justify-content-center">
                                                                        <span
                                                                            class="for-size span-number-1">Client:</span>
                                                                        <span class="for-size span-number-2">
                                                                            {{ $project->client->user->full_name }}

                                                                        </span>
                                                                    </div>
                                                                    <div class="row justify-content-center mt-3"
                                                                        style="display: block;">
                                                                        <span
                                                                            class="for-size span-number-1">descreption:</span>
                                                                        <span class="for-size span-number-2">
                                                                            {{ $project->description }}

                                                                        </span>
                                                                    </div>

                                                                    <div class="mt-2"
                                                                        style="text-align-last: justify">
                                                                        {{-- Deadline --}}
                                                                        <span>
                                                                            <span class="text-start d-inline-block">
                                                                                {{ $project->deadline }}
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    width="16" height="16"
                                                                                    fill="currentColor"
                                                                                    class="bi bi-calendar-check"
                                                                                    viewBox="0 0 16 16">
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
                                                                    {{-- <a href="{{ route('project-card-for-client') }}"
                                                                        class="text-center mt-2 bg-light btn text-dark fw-bold">see
                                                                        more</a> --}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                    {{-- {{ $projects->links('pagination::bootstrap-4') }} --}}
                                </div>

                            </section>
                            @endforeach

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
