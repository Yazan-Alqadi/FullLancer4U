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
    <title>My Profile</title>
</head>

<body style="background-color: lightgrey;">

    @include('layouts.nav-bar')


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

    <!-- Error alert -->
    @if (session('errors'))
        <div class="alert alert-primary d-flex align-items-center mgg" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:">
                <use xlink:href="#info-fill" />
            </svg>
            <div>
                {{ session('errors') }}
            </div>
        </div>
    @endif
    <!-- successful alert -->

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


    <div class="h3 text-dark ms-3 mgg">
        My Account
    </div>

    <section class="py-2">
        <div class="mx-3">
            <div class="row">
                {{-- services section --}}
                <div class="col-lg-4 col-md-4 mb-4">
                    <div class="card bg-light text-dark rounded">
                        <div class="card-body">
                            <h5 class="card-title"> My services </h5>

                            {{-- if user is freelancer --}}
                            @if (Auth::user()->is_freelancer)
                                @foreach ($services as $service)
                                    <div class="d-flex mb-1 border-bottom border-secondary pb-1"
                                        style="justify-content: space-between;">
                                        {{-- here is the title of the service --}}
                                        <span class="mt-1">{{ $service->title }}</span>
                                        <span>
                                            {{-- View Service --}}
                                            <button class="p-1 border border-0 bg-light" data-bs-toggle="tooltip"
                                                data-bs-placement="top" data-bs-title="View">
                                                <a class="text-secondary"
                                                    href="{{ route('more_information', $service->id) }}">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="22"
                                                        height="22" fill="currentColor" class="bi bi-eye"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                                        <path
                                                            d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                                    </svg>
                                                </a>
                                            </button>
                                            {{-- Edit Service --}}
                                            <button class="p-1 border border-0 bg-light" data-bs-toggle="tooltip"
                                                data-bs-placement="top" data-bs-title="Edit">
                                                <a class="text-secondary"
                                                    href="{{ route('edit_service', $service->id) }}">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="22"
                                                        height="22" fill="currentColor" class="bi bi-pencil-square"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                        <path fill-rule="evenodd"
                                                            d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                                    </svg>
                                                </a>
                                            </button>
                                            {{-- Delete Service --}}
                                            <button class="p-1 border border-0 bg-light" data-bs-toggle="tooltip"
                                                data-bs-placement="top" data-bs-title="Delete">
                                                <a href="{{ route('service_delete', $service->id) }}"
                                                    class="text-danger">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="22"
                                                        height="22" fill="currentColor" class="bi bi-trash3"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />
                                                    </svg>
                                                </a>
                                            </button>
                                        </span>


                                    </div>
                                @endforeach
                                {{-- if not --}}
                            @else
                                <div class="text-center fw-bold h5 text-dark">You are not freelancer yet</div>
                            @endif
                        </div>
                    </div>
                    <div class="card bg-light text-dark rounded text-center">
                        <div class="card-body">
                            {{-- if user is freelancer --}}
                            @if (Auth::user()->is_freelancer)
                                <a class="btn btn-primary" href="{{ route('become_freelancer') }}"> Add new service
                                </a>
                            @else
                                {{-- if not --}}
                                <a class="btn btn-primary" href="{{ route('become_freelancer') }}"> Become Freelancer
                                </a>
                            @endif

                        </div>
                    </div>
                    <br>
                    <div class="card bg-light text-dark rounded">
                        <div class="card-body">
                            <h5 class="card-title"> My Projects </h5>

                            {{-- if user has projects --}}
                            @forelse(Auth::user()->projects as $project)
                                <div class="d-flex mb-1 border-bottom border-secondary pb-1"
                                    style="justify-content: space-between;">
                                    {{-- here is the title of the service --}}
                                    <span class="mt-1">{{ $project->title }}</span>
                                    <span>
                                        {{-- View project --}}
                                        <button class="p-1 border border-0 bg-light" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="View">
                                            <a class="text-secondary"
                                                href="{{ route('get_project', $project->id) }}">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                                    fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                    <path
                                                        d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                                    <path
                                                        d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                                </svg>
                                            </a>
                                        </button>
                                        {{-- Edit project --}}
                                        <button class="p-1 border border-0 bg-light" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="Edit">
                                            <a class="text-secondary"
                                                href="{{ route('edit_project', $project->id) }}"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                                    fill="currentColor" class="bi bi-pencil-square"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                    <path fill-rule="evenodd"
                                                        d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                                </svg>
                                            </a>
                                        </button>
                                        {{-- Delete project --}}
                                        <button class="p-1 border border-0 bg-light" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="Delete">
                                            <a href="{{ route('project_delete', $project->id) }}"
                                                class="text-danger">

                                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                                    fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                                    <path
                                                        d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />
                                                </svg>
                                            </a>
                                        </button>
                                    </span>

                                </div>
                            @empty
                                <div class="text-center fw-bold h5 text-dark">No Projects Yet</div>
                            @endforelse

                        </div>
                    </div>
                    <div class="card bg-light text-dark rounded text-center">
                        <div class="card-body">
                            <a class="btn btn-primary" href="{{ route('create_project') }}"> Add new Project
                            </a>

                        </div>
                    </div>
                    <br>
                    <div class="card bg-light text-dark rounded">
                        <div class="card-body">
                            <h5 class="card-title"> My Skills </h5>

                            {{-- if user has skills --}}
                            @if (Auth::user()->is_freelancer)
                                @forelse (Auth::user()->skills as $skill)
                                    <div class="d-flex mb-1 border-bottom border-secondary pb-1"
                                        style="justify-content: space-between;">
                                        {{-- here is the title of the service --}}
                                        <span class="mt-1">{{ $skill->title }}</span>
                                        <span>
                                            <button class="p-1 border border-0 bg-light" data-bs-toggle="tooltip"
                                                data-bs-placement="top" data-bs-title="Delete">
                                                <a href="{{ route('skill_delete', $skill->id) }}"
                                                    class="text-danger">

                                                    <svg xmlns="http://www.w3.org/2000/svg" width="22"
                                                        height="22" fill="currentColor" class="bi bi-trash3"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />
                                                    </svg>
                                                </a>
                                            </button>
                                        </span>

                                    </div>
                                @empty
                                    <div class="text-center fw-bold h5 text-dark">No Skills Yet</div>
                                @endforelse
                                {{-- if not --}}
                            @else
                                <div class="text-center fw-bold h5 text-dark">You are not freelancer</div>
                            @endif
                        </div>
                    </div>

                    <div class="card bg-light text-dark rounded text-center">
                        <div class="card-body">

                            @if (Auth::user()->is_freelancer)
                                <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas"
                                    data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">Add new skill</button>
                            @endif

                            <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop"
                                aria-labelledby="offcanvasTopLabel">
                                <div class="offcanvas-header">
                                    <h5 class="offcanvas-title" id="offcanvasTopLabel">New skill</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                        aria-label="Close"></button>
                                </div>
                                <div class="offcanvas-body">
                                    <form action="{{ route('skill_store') }}">
                                        <div class="input-group mb-3 w-50">
                                            <span class="input-group-text" id="basic-addon1">skill</span>
                                            <input type="text" name="title" class="form-control"
                                                placeholder="Type skill" aria-label="text"
                                                aria-describedby="basic-addon1">
                                        </div>
                                        <div class="text-start mx-auto">
                                            <button class="btn btn-primary" type="submit">
                                                Add
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-plus-circle"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                                    <path
                                                        d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                                                </svg>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>

                    <br>
                    <div class="card bg-light text-dark rounded">
                        <div class="card-body">
                            <h5 class="card-title"> My Rate </h5>

                            {{-- if user are freelancer --}}
                            @if (Auth::user()->is_freelancer)
                                <div class="row justify-content-center">
                                    <div style="white-space: nowrap;">
                                        Rating:
                                        @if (Auth::user()->freelancer->rate > 0)
                                            <span class="fa fa-star checked"
                                                style="font: normal normal normal 14px/1 FontAwesome !important;"></span>
                                            {{-- star one --}}
                                        @else
                                            <span class="fa fa-star not-checked"
                                                style="font: normal normal normal 14px/1 FontAwesome !important;"></span>
                                            {{-- star one --}}
                                        @endif
                                        @if (Auth::user()->freelancer->rate > 1)
                                            <span class="fa fa-star checked"
                                                style="font: normal normal normal 14px/1 FontAwesome !important;"></span>
                                            {{-- star two --}}
                                        @else
                                            <span class="fa fa-star not-checked"
                                                style="font: normal normal normal 14px/1 FontAwesome !important;"></span>
                                            {{-- star two --}}
                                        @endif
                                        @if (Auth::user()->freelancer->rate > 2)
                                            <span class="fa fa-star checked"
                                                style="font: normal normal normal 14px/1 FontAwesome !important;"></span>
                                            {{-- star three --}}
                                        @else
                                            <span class="fa fa-star not-checked"
                                                style="font: normal normal normal 14px/1 FontAwesome !important;"></span>
                                            {{-- star three --}}
                                        @endif
                                        @if (Auth::user()->freelancer->rate > 3)
                                            <span class="fa fa-star checked"
                                                style="font: normal normal normal 14px/1 FontAwesome !important;"></span>
                                            {{-- star four --}}
                                        @else
                                            <span class="fa fa-star not-checked"
                                                style="font: normal normal normal 14px/1 FontAwesome !important;"></span>
                                            {{-- star four --}}
                                        @endif
                                        @if (Auth::user()->freelancer->rate > 4)
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

                <div class="col-lg-8 col-md-8 mb-5">
                    <section class="bg-light text-dark rounded p-3">
                        <div class="border-bottom border-dark ps-3 h5 py-1">
                            My Info
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 20 20">
                                <path
                                    d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                <path fill-rule="evenodd"
                                    d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                            </svg>
                        </div>
                        <form method="PUT" action="{{ route('user.update', Auth::user()) }}">
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
                                <!-- here put the image if user have one already -->
                                <!-- <img src="/files/pic-1.jpg" class="rounded-circle mx-auto d-block m-3" style="width: 30%;"
                        alt="..."> -->
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-default">Full Name</span>
                                    <input name="full_name" type="text" class="form-control"
                                        aria-label="Sizing example input" placeholder="Full Name"
                                        aria-label="Fullname" aria-describedby="inputGroup-sizing-default"
                                        value="{{ Auth::user()->full_name }}">
                                </div>

                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-default">User Name</span>
                                    <input name="user_name" type="text" class="form-control"
                                        aria-label="Sizing example input" placeholder="User Name"
                                        aria-label="Username" aria-describedby="inputGroup-sizing-default"
                                        value="{{ Auth::user()->user_name }}">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                                    <input name="email" type="email" class="form-control"
                                        id="exampleFormControlInput1" placeholder="name@example.com"
                                        value="{{ Auth::user()->email }}">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleFormControlInput2" class="form-label">Password</label>
                                    <input name="password" type="password" class="form-control"
                                        id="exampleFormControlInput2" placeholder="**************">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleFormControlInput3" class="form-label">Confirm Password</label>
                                    <input name="password_confirmation" type="password" class="form-control"
                                        id="exampleFormControlInput3" placeholder="**************">
                                </div>

                                <div class="mb-3 form-floating">
                                    <input name="phone" type="text" class="form-control"
                                        id="exampleFormControlInput4" placeholder="Phone Number"
                                        value="{{ Auth::user()->phone }}">
                                    <label for="exampleFormControlInput4" class="form-label">Phone Number</label>
                                </div>

                                <div class="mb-3 form-floating">
                                    <input name="address" type="text" class="form-control"
                                        id="exampleFormControlInput5" placeholder="Address"
                                        value="{{ Auth::user()->address }}">
                                    <label for="exampleFormControlInput5" class="form-label">Address</label>

                                </div>

                                <p>
                                    <button class="btn btn-primary text-dark bg-light border border-opacity-10"
                                        type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample"
                                        aria-expanded="false" aria-controls="collapseExample">
                                        my interests
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                        </svg>
                                    </button>
                                </p>
                                <div class="collapse" id="collapseExample">
                                    <div class="card card-body">
                                        @foreach (\App\Models\Category::all() as $category)
                                            <div class="form-check">
                                                <input name="{{ $category->id }}" class="form-check-input"
                                                    type="checkbox" value=""
                                                    @if (Auth::user()->category->contains($category)) checked @endif
                                                    id="{{ $category->id }}">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    {{ $category->title }}
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor" class="bi bi-qr-code"
                                                        viewBox="0 0 16 16">
                                                        <path d="M2 2h2v2H2V2Z" />
                                                        <path d="M6 0v6H0V0h6ZM5 1H1v4h4V1ZM4 12H2v2h2v-2Z" />
                                                        <path d="M6 10v6H0v-6h6Zm-5 1v4h4v-4H1Zm11-9h2v2h-2V2Z" />
                                                        <path
                                                            d="M10 0v6h6V0h-6Zm5 1v4h-4V1h4ZM8 1V0h1v2H8v2H7V1h1Zm0 5V4h1v2H8ZM6 8V7h1V6h1v2h1V7h5v1h-4v1H7V8H6Zm0 0v1H2V8H1v1H0V7h3v1h3Zm10 1h-1V7h1v2Zm-1 0h-1v2h2v-1h-1V9Zm-4 0h2v1h-1v1h-1V9Zm2 3v-1h-1v1h-1v1H9v1h3v-2h1Zm0 0h3v1h-2v1h-1v-2Zm-4-1v1h1v-2H7v1h2Z" />
                                                        <path d="M7 12h1v3h4v1H7v-4Zm9 2v2h-3v-1h2v-1h1Z" />
                                                    </svg>
                                                </label>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>

                            </div>


                            <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-3">
                                <button type="submit" class="btn btn-success ">Confirm Edit</button>
                            </div>
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </section>

    {{-- Footer here --}}
    @include('layouts.footer')


    <!-- JavaScript Bundle with Popper -->
    <script src=" /js/bootstrap.bundle.min.js"></script>
    <script src=" /js/popper.min.js"></script>

</body>

</html>
