<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" style="background-color: lightgrey;">

<head>

    @include('layouts.head')

    <!-- CSS only -->
    <link href="{{ asset('css/fl.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <title>My Works</title>

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

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

    <div class="row mx-1">
        <div class="container col-lg-9 col-md-10">
            <section class="bg-light text-dark p-3 rounded mgg">
                <div class="border-bottom border-dark ps-3 h5 py-1">
                    My Works
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                        class="bi bi-tools" viewBox="0 0 16 16">
                        <path
                            d="M1 0 0 1l2.2 3.081a1 1 0 0 0 .815.419h.07a1 1 0 0 1 .708.293l2.675 2.675-2.617 2.654A3.003 3.003 0 0 0 0 13a3 3 0 1 0 5.878-.851l2.654-2.617.968.968-.305.914a1 1 0 0 0 .242 1.023l3.27 3.27a.997.997 0 0 0 1.414 0l1.586-1.586a.997.997 0 0 0 0-1.414l-3.27-3.27a1 1 0 0 0-1.023-.242L10.5 9.5l-.96-.96 2.68-2.643A3.005 3.005 0 0 0 16 3c0-.269-.035-.53-.102-.777l-2.14 2.141L12 4l-.364-1.757L13.777.102a3 3 0 0 0-3.675 3.68L7.462 6.46 4.793 3.793a1 1 0 0 1-.293-.707v-.071a1 1 0 0 0-.419-.814L1 0Zm9.646 10.646a.5.5 0 0 1 .708 0l2.914 2.915a.5.5 0 0 1-.707.707l-2.915-2.914a.5.5 0 0 1 0-.708ZM3 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026L3 11Z" />
                    </svg>
                </div>

                {{-- if the work is service --}}
                @foreach ($services as $service)
                    <div class="px-3 pt-3 m-2 border border-secondary p-2 mb-2 border-opacity-25">
                        {{-- message from who ? --}}
                        <div class="d-flex " style="justify-content: space-between; align-items: center;">
                            <span class="h4 text-danger">
                                <span>Service:</span>
                                <span class="ms-1">{{ $service->title }}</span>
                            </span>
                            <span class="h6 rounded-2 p-1 text-secondary">{{ $service->updated_at }}</span>
                        </div>
                        <div class="d-flex " style="justify-content: space-between; align-items: center;">
                            <span class="h4 text-danger">
                                <span>Client:</span>
                                <span class="ms-1">{{ $service->full_name }}</span>
                            </span>
                        </div>
                        <div class="h6 text-dark" style="word-break: break-word;">
                            <span>state:</span>
                            {{-- if work is in timeline --}}
                            @if ($service->status == 'in work')
                                <span class="ms-1 disabled btn btn-warning"
                                    style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                                    In Work
                                </span>
                                {{-- if work Done --}}
                            @elseif($service->status == 'done')
                                <span class="ms-1 disabled btn btn-success"
                                    style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                                    Done
                                </span>
                                {{-- if work canceled --}}
                            @else
                                <span class="ms-1 disabled btn btn-danger"
                                    style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                                    Canceled
                                </span>
                            @endif


                            {{-- if work is in timeline then he can change the state --}}
                            @if ($service->status == 'in work')
                                <div class="text-start">

                                    <form action="{{ route('work_update', $service->id) }}" class="my-3">
                                        <span> change state into: </span>
                                        <input type="radio" class="btn-check" value="cancel" name="options_outlined"
                                            id="can{{ $service->id }}" autocomplete="off">
                                        <label class="btn btn-outline-danger" id="can{{ $service->id }}"
                                            for="can{{ $service->id }}"
                                            style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">Canceled</label>

                                        <input type="radio" class="btn-check" value="done" name="options_outlined"
                                            id="done{{ $service->id }}" autocomplete="off">
                                        <label class="btn btn-outline-success" id="done{{ $service->id }}"
                                            for="done{{ $service->id }}"
                                            style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">Done</label>
                                        <button type="submit" class="px-4 mx-2 mt-2 btn btn-danger"
                                            style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                                            Confirm
                                        </button>
                                    </form>
                                </div>
                            @endif
                        </div>
                    </div>
                @endforeach


                {{-- if the work is Project --}}
                @foreach ($projects as $project)
                    <div class="px-3 pt-3 m-2 border border-secondary p-2 mb-2 border-opacity-25">
                        {{-- message from who ? --}}
                        <div class="d-flex " style="justify-content: space-between; align-items: center;">
                            <span class="h4 text-danger">
                                <span>Project:</span>
                                <span class="ms-1">{{ $project->title }}</span>
                            </span>
                            <span class="h6 rounded-2 p-1 text-secondary">{{ $project->updated_at }}</span>
                        </div>
                        <div class="d-flex " style="justify-content: space-between; align-items: center;">
                            <span class="h4 text-danger">
                                <span>Client:</span>
                                <span class="ms-1">{{ $project->full_name }}</span>
                            </span>
                        </div>
                        <div class="h6 text-dark" style="word-break: break-word;">
                            <span>state:</span>
                            {{-- if work is in timeline --}}
                            @if ($project->status == 'in work')
                                <span class="ms-1 disabled btn btn-warning"
                                    style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                                    In Work
                                </span>
                                {{-- if work Done --}}
                            @elseif ($project->status == 'done')
                                <span class="ms-1 disabled btn btn-success"
                                    style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                                    Done
                                </span>
                                {{-- if work canceled --}}
                            @else
                                <span class="ms-1 disabled btn btn-danger"
                                    style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                                    Canceled
                                </span>
                            @endif

                            {{-- if work is in timeline --}}
                            @if ($project->status == 'in work')
                                <div class="text-start">

                                    <form action="{{ route('work_project_update', $project->id) }}" class="my-3">
                                        @csrf
                                        <span> change state into: </span>
                                        <input type="radio" class="btn-check" value="cancel"
                                            name="options_outlined" id="cancel{{ $project->id }}"
                                            autocomplete="off">
                                        <label class="btn btn-outline-danger" id="cancel{{ $project->id }}"
                                            for="cancel{{ $project->id }}"
                                            style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">Canceled</label>

                                        <input type="radio" class="btn-check" value="done"
                                            name="options_outlined" id="done{{ $project->id }}" autocomplete="off">
                                        <label class="btn btn-outline-success" id="done{{ $project->id }}"
                                            for="done{{ $project->id }}"
                                            style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">Done</label>
                                        <button type="submit" class="px-4 mx-2 mt-2 btn btn-danger"
                                            style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                                            Confirm
                                        </button>
                                    </form>
                                </div>
                            @endif
                        </div>
                    </div>
                @endforeach


            </section>
        </div>
    </div>

    {{-- Footer here --}}
    {{-- @include('layouts.footer') --}}

    <!-- JavaScript Bundle with Popper -->
    <script src="{{ asset('/js/bootstrap.bundle.min.js') }}"></script>

</body>

</html>
