<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    @include('layouts.head')

    <!-- CSS only -->
    <link href="{{ asset('css/fl.css') }}" rel="stylesheet">
    <link href="{{ asset('css/profession.css') }}" rel="stylesheet">

    <title>Projects card</title>

</head>

<body class="bg-rgb-235-235-235">

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
                                <div class="d-inline-grid">
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
                                                @include('components.project_card')
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

</body>

</html>
