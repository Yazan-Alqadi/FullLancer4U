<!DOCTYPE html>
<html lang="en">

<head>

    @include('layouts.head')

    <!-- CSS only -->
    <link href="{{ asset('css/fl.css') }}" rel="stylesheet">
    <link href="{{ asset('css/profession.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }} " rel="stylesheet">

    <title>Projects card</title>

</head>

<body style="background-color: rgb(235, 235, 235);">

    @include('layouts.nav-bar')

    @if (session('message'))
        <div class="alert alert-success d-flex align-items-center mgg" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
                <use xlink:href="#check-circle-fill" />
            </svg>
            <div>
                {{ session('message') }}
            </div>
        </div>
    @endif


    <div class="text-dark ms-1 container h1 mgg row"> {{ $project->title }} </div>

    <section class="py-2">
        <div class="mx-3">
            <div class="row">
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
                                    <span>Category:</span>
                                    <span>{{ $project->category->title }}</span>
                                </div>
                                <div>
                                    <span>Service price starts at:</span>
                                    <span>{{ $project->price }} Sp</span>
                                </div>
                                <div>
                                    <span>Deadline:</span>
                                    <span>{{ $project->deadline }}</span>
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
                                <!-- if it does not set a pic yet -->
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
                                            {{ $project->user->full_name }}
                                        </a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card bg-light text-start text-dark rounded">
                        <div class="card-body text-center">
                            <a href="
                        {{ route('contact_me', $project->user->id) }}
                        "
                                type="button"
                                class="btn btn-info @if ($project->user_id == Auth::id()) disabled @endif">Contact</a>
                        </div>
                    </div>
                </div>
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
                            @if (Auth::check() && Auth::user()->is_freelancer)
                                <div class="h5">Apply for this project</div>
                                <!-- if the service not buyed yet -->

                                <a href="{{ route('buy_project', $project->id) }}"
                                    class="btn btn-info mt-2 @if ($project->user_id == Auth::id()) disabled @endif"
                                    id="buy">Apply</a>
                                <!-- if the service is required and has not yet been approved -->
                                <!-- <button type="button" class="btn btn-secondary" disabled>requested</button> -->
                                <!-- if the service is accepted and not finished -->
                                <!-- <button type="button" class="btn btn-info" disabled>In work</button> -->
                                <!-- if the service is over -->
                                <!-- <button type="button" class="btn btn-success" disabled>Service over</button> -->

                                {{-- if buyer are not freelancer yet --}}
                            @else
                                <h5 class="mt-2">You are not freelancer yet</h5>
                                <a href="{{ route('become_freelancer') }}"
                                    class="nav-link in-hover-t text-warning fw-bold">Become Freelancer</a>
                            @endif
                        </div>
                    </div>

                    <!-- Other suggested projects -->
                    <div class="card bg-light text-start text-dark rounded">
                        <div class="card-body text-center">
                            <div class="h5 mb-3">Other suggested services</div>
                            <!-- Only the first 6 similar services -->
                            <section class="py-5 section-style mt-5">
                                <div class="container">
                                    <div class="row text-center">
                                        @foreach ($projects as $project)
                                            <div class="col-md-6 col-lg-6 mb-2">
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
                                                                            {{ $project->user->full_name }}

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
                                                                    <a href="{{ route('get_project', $project->id) }}"
                                                                        class="text-center mt-2 bg-light btn text-dark fw-bold">see
                                                                        more</a>
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

    {{-- Footer here --}}
    @include('layouts.footer')



    <!-- JavaScript Bundle with Popper -->
    <script src="{{ asset('/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
