<!DOCTYPE html>
<html lang="en" style="background-color: lightgrey;">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;500&family=Roboto+Slab&display=swap">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;500&family=Roboto+Slab&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;500&family=Roboto+Slab&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{ asset('css/fl.css') }}" rel="stylesheet">
    <!-- CSS only -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <title>Profile</title>
</head>

<body style="background-color: lightgrey;">

    @include('layouts.nav-bar')


    <section class="py-2 mgg">
        <div class="mx-3">
            <div class="row">
                {{-- services section --}}
                <div class="col-lg-8 col-md-8 mb-4">
                    <section class="bg-light text-dark rounded p-3">
                        <div class="container">


                            <!-- if user does not have photo display icon -->

                            <div class="container my-5" style="text-align: center;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100"
                                    fill="currentColor" class="bi bi-person-circle" viewBox="3 3 10 10">
                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                    <path fill-rule="evenodd"
                                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                </svg>
                            </div>
                            <div class="text-center fw-bold"> {{ $user->full_name }} </div>
                            <!-- here put the image if user have one already -->
                            <!-- <img src="/files/pic-1.jpg" class="rounded-circle mx-auto d-block m-3" style="width: 30%;"
                        alt="..."> -->
                        </div>
                    </section>
                    <br>
                    <div class="card bg-light text-dark rounded">
                        <div class="card-title p-3 border-bottom border-secondary">Bio</div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $user->bio }}</h5>



                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-4">
                    <div class="card bg-light text-dark rounded">
                        <div class="card-body">
                            <h5 class="card-title"> Services </h5>

                            @if (Auth::user()->is_freelancer)
                                @foreach ($services as $service)
                                    <div class="d-flex mb-1 border-bottom border-secondary pb-1"
                                        style="justify-content: space-between;">
                                        {{-- here is the title of the service --}}
                                        <span class="mt-1">{{ $service->title }}</span>


                                    </div>
                                @endforeach
                                {{-- if not --}}
                            @else
                                <div class="text-center fw-bold h5 text-dark">Not freelancer yet</div>
                            @endif

                        </div>
                    </div>

                    <br>
                    <div class="card bg-light text-dark rounded">
                        <div class="card-body">
                            <h5 class="card-title"> Projects </h5>

                            {{-- if user has projects --}}
                            @forelse($projects as $project)
                                <div class="d-flex mb-1 border-bottom border-secondary pb-1"
                                    style="justify-content: space-between;">
                                    {{-- here is the title of the service --}}
                                    <span class="mt-1">{{ $project->title }}</span>
                                    </span>
                                </div>
                            @empty
                                <div class="text-center fw-bold h5 text-dark">No Projects Yet</div>
                            @endforelse

                        </div>
                    </div>

                    <br>
                    <div class="card bg-light text-dark rounded">
                        <div class="card-body">
                            <h5 class="card-title"> Skills </h5>

                            {{-- if user has skills --}}
                            @if (Auth::user()->is_freelancer)
                                @foreach ($skills as $skill)
                                    <div class="d-flex mb-1 border-bottom border-secondary pb-1"
                                        style="justify-content: space-between;">
                                        {{-- here is the title of the service --}}
                                        <span class="mt-1">{{ $skill->title }}</span>

                                    </div>
                                @endforeach
                                {{-- if not --}}
                            @else
                                <div class="text-center fw-bold h5 text-dark">No Skills Yet</div>
                            @endif

                        </div>
                    </div>

                    {{-- phone number --}}
                    <br>
                    <div class="card bg-light text-dark rounded">
                        <div class="card-body">
                            <h5 class="card-title"> Phone Number </h5>

                            <div>0984272476</div>

                        </div>
                    </div>

                    {{-- address --}}
                    <br>
                    <div class="card bg-light text-dark rounded">
                        <div class="card-body">
                            <h5 class="card-title"> Address </h5>

                            <div>Lorem ipsum dolor sit amet, consectetur .</div>

                        </div>
                    </div>

                    <br>
                    <div class="card bg-light text-dark rounded">
                        <div class="card-body">
                            <h5 class="card-title"> Rate </h5>

                            {{-- if user are freelancer --}}
                            @if (Auth::user()->is_freelancer)
                                <div class="row justify-content-center">
                                    <div style="white-space: nowrap;">
                                        Rating:
                                        @if ($user->freelancer->rate > 0)
                                            <span class="fa fa-star checked"
                                                style="font: normal normal normal 14px/1 FontAwesome !important;"></span>
                                            {{-- star one --}}
                                        @else
                                            <span class="fa fa-star not-checked"
                                                style="font: normal normal normal 14px/1 FontAwesome !important;"></span>
                                            {{-- star one --}}
                                        @endif
                                        @if ($user->freelancer->rate > 1)
                                            <span class="fa fa-star checked"
                                                style="font: normal normal normal 14px/1 FontAwesome !important;"></span>
                                            {{-- star two --}}
                                        @else
                                            <span class="fa fa-star not-checked"
                                                style="font: normal normal normal 14px/1 FontAwesome !important;"></span>
                                            {{-- star two --}}
                                        @endif
                                        @if ($user->freelancer->rate > 2)
                                            <span class="fa fa-star checked"
                                                style="font: normal normal normal 14px/1 FontAwesome !important;"></span>
                                            {{-- star three --}}
                                        @else
                                            <span class="fa fa-star not-checked"
                                                style="font: normal normal normal 14px/1 FontAwesome !important;"></span>
                                            {{-- star three --}}
                                        @endif
                                        @if ($user->freelancer->rate > 3)
                                            <span class="fa fa-star checked"
                                                style="font: normal normal normal 14px/1 FontAwesome !important;"></span>
                                            {{-- star four --}}
                                        @else
                                            <span class="fa fa-star not-checked"
                                                style="font: normal normal normal 14px/1 FontAwesome !important;"></span>
                                            {{-- star four --}}
                                        @endif
                                        @if ($user->freelancer->rate > 4)
                                            <span class="fa fa-star checked"
                                                style="font: normal normal normal 14px/1 FontAwesome !important;"></span>
                                            {{-- star five --}}
                                        @else
                                            <span class="fa fa-star not-checked"
                                                style="font: normal normal normal 14px/1 FontAwesome !important;"></span>
                                            {{-- star five --}}
                                        @endif

                                    </div>
                                </div>
                                {{-- if not --}}
                            @else
                                <div class="text-center fw-bold h5 text-dark">You are not freelancer yet</div>
                            @endif

                        </div>
                    </div>

                </div>

            </div>
    </section>

    {{-- Footer here --}}
    @include('layouts.footer')

    <!-- JavaScript Bundle with Popper -->
    <script src=" /js/bootstrap.bundle.min.js"></script>

</body>

</html>
