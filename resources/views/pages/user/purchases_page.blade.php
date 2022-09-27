<!DOCTYPE html>
<html lang="en" style="background-color: lightgrey;">

<head>

    @include('layouts.head')

    <!-- CSS only -->
    <link href="{{ asset('css/fl.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <title>My Purchases</title>

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
    @if (count($errors) > 0)
        <div class="alert alert-primary d-flex align-items-center mgg" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:">
                <use xlink:href="#info-fill" />
            </svg>
            <div>
                {{ $errors->first() }}
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

    <div class="row">
        <div class="container col-lg-9 col-md-10">
            <section class="bg-light text-dark p-3 rounded mgg mb-4">
                <div class="border-bottom border-dark ps-3 h5 py-1">
                    My Purchases
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                        class="bi bi-bag-heart-fill" viewBox="0 0 16 16">
                        <path
                            d="M11.5 4v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5ZM8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1Zm0 6.993c1.664-1.711 5.825 1.283 0 5.132-5.825-3.85-1.664-6.843 0-5.132Z" />
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
                                <span>Freelancer:</span>
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


                        </div>
                    </div>
                @endforeach


                {{-- if the work is Project --}}
                @foreach ($projects as $project)
                    <div class="px-3 pt-3 m-2 border border-secondary p-2 mb-2 border-opacity-25">
                        <div class="d-flex " style="justify-content: space-between; align-items: center;">
                            <span class="h4 text-danger">
                                <span>Project:</span>
                                <span class="ms-1">{{ $project->title }}</span>
                            </span>
                            <span class="h6 rounded-2 p-1 text-secondary">{{ $project->updated_at }}</span>
                        </div>
                        <div class="d-flex " style="justify-content: space-between; align-items: center;">
                            <span class="h4 text-danger">
                                <span>Freelancer:</span>
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
                            @elseif($project->status == 'done')
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
