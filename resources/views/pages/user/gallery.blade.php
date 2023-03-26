<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" style="background-color: lightgrey;">

<head>

    @include('layouts.head')

    <!-- CSS only -->
    <link href="{{ asset('css/fl.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    {{-- for font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,400;1,200;1,300&display=swap"
        rel="stylesheet">

    <title>Jobs_gallery</title>

</head>

<body style="background-color: #ab6f6f;">

    <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap-notifications.min.css') }}">


    <div class="ps-3 pe-2 navbar container-fluid navbar-expand-lg navbar-dark text-light fixed-top h6"
        style="    background-color: #5e1155;">
        <div class="container">
            {{-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#search-par"
            aria-expanded="true" style="margin-right: auto;">
            <span class="navbar-toggler-icon"></span>
        </button> --}}

            <a href="{{ route('home') }}" class="navbar-brand text-info navbar-title-hover">Fullancer4U</a>


            {{-- <form class="form-inline collapse navbar-collapse" id="search-par">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-info my-2 my-sm-0" type="submit">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-search" viewBox="0 0 16 16">
                    <path
                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                </svg>
            </button>
        </form> --}}




            <div class="collapse navbar-collapse" id="mainmenu">



                @auth
                    <div class="navbar-nav ms-auto dropdown">

                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-person-circle" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                <path fill-rule="evenodd"
                                    d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                            </svg>
                            <span class="containar">{{ Auth::user()->full_name }}</span>
                        </a>

                        <ul class="dropdown-menu dropdown-menu-end" id="navbarDropdownMenuLink1">
                            <li><a class="dropdown-item font-ar" href="{{ route('profile') }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-person-badge" viewBox="0 0 16 16">
                                        <path
                                            d="M6.5 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3zM11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                        <path
                                            d="M4.5 0A2.5 2.5 0 0 0 2 2.5V14a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2.5A2.5 2.5 0 0 0 11.5 0h-7zM3 2.5A1.5 1.5 0 0 1 4.5 1h7A1.5 1.5 0 0 1 13 2.5v10.795a4.2 4.2 0 0 0-.776-.492C11.392 12.387 10.063 12 8 12s-3.392.387-4.224.803a4.2 4.2 0 0 0-.776.492V2.5z" />
                                    </svg>
                                    {{ __('home.profile') }}
                                </a>
                            </li>
                            @if (Auth::check() && Auth::user()->is_freelancer)
                                <li><a class="dropdown-item font-ar" href="{{ route('gallery') }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-stars" viewBox="0 0 16 16">
                                            <path
                                                d="M7.657 6.247c.11-.33.576-.33.686 0l.645 1.937a2.89 2.89 0 0 0 1.829 1.828l1.936.645c.33.11.33.576 0 .686l-1.937.645a2.89 2.89 0 0 0-1.828 1.829l-.645 1.936a.361.361 0 0 1-.686 0l-.645-1.937a2.89 2.89 0 0 0-1.828-1.828l-1.937-.645a.361.361 0 0 1 0-.686l1.937-.645a2.89 2.89 0 0 0 1.828-1.828l.645-1.937zM3.794 1.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387A1.734 1.734 0 0 0 4.593 5.69l-.387 1.162a.217.217 0 0 1-.412 0L3.407 5.69A1.734 1.734 0 0 0 2.31 4.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387A1.734 1.734 0 0 0 3.407 2.31l.387-1.162zM10.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732L9.1 2.137a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L10.863.1z" />
                                        </svg>
                                        {{ __('home.jobs') }}
                                    </a>
                                </li>
                            @endif
                            @if (Auth::check() && Auth::user()->is_freelancer)
                                <li><a class="dropdown-item font-ar" href="{{ route('become_freelancer') }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-patch-plus-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01-.622-.636zM8.5 6v1.5H10a.5.5 0 0 1 0 1H8.5V10a.5.5 0 0 1-1 0V8.5H6a.5.5 0 0 1 0-1h1.5V6a.5.5 0 0 1 1 0z" />
                                        </svg>
                                        {{ __('home.addService') }}
                                    </a>
                                </li>
                            @endif
                            <li><a class="dropdown-item font-ar" href="{{ route('create_project') }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-patch-plus-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01-.622-.636zM8.5 6v1.5H10a.5.5 0 0 1 0 1H8.5V10a.5.5 0 0 1-1 0V8.5H6a.5.5 0 0 1 0-1h1.5V6a.5.5 0 0 1 1 0z" />
                                    </svg>
                                    {{ __('home.addProject') }}
                                </a>
                            </li>
                            <li><a class="dropdown-item font-ar" href="{{ route('contact') }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-chat-dots-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M16 8c0 3.866-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7zM5 8a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                                    </svg>
                                    {{ __('home.myChat') }}
                                </a>
                            </li>
                            @if (Auth::check() && Auth::user()->is_freelancer)
                                <li><a class="dropdown-item font-ar" href="{{ route('work_page', Auth::id()) }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-tools" viewBox="0 0 16 16">
                                            <path
                                                d="M1 0 0 1l2.2 3.081a1 1 0 0 0 .815.419h.07a1 1 0 0 1 .708.293l2.675 2.675-2.617 2.654A3.003 3.003 0 0 0 0 13a3 3 0 1 0 5.878-.851l2.654-2.617.968.968-.305.914a1 1 0 0 0 .242 1.023l3.27 3.27a.997.997 0 0 0 1.414 0l1.586-1.586a.997.997 0 0 0 0-1.414l-3.27-3.27a1 1 0 0 0-1.023-.242L10.5 9.5l-.96-.96 2.68-2.643A3.005 3.005 0 0 0 16 3c0-.269-.035-.53-.102-.777l-2.14 2.141L12 4l-.364-1.757L13.777.102a3 3 0 0 0-3.675 3.68L7.462 6.46 4.793 3.793a1 1 0 0 1-.293-.707v-.071a1 1 0 0 0-.419-.814L1 0Zm9.646 10.646a.5.5 0 0 1 .708 0l2.914 2.915a.5.5 0 0 1-.707.707l-2.915-2.914a.5.5 0 0 1 0-.708ZM3 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026L3 11Z" />
                                        </svg>
                                        {{ __('home.myWork') }}
                                    </a>
                                </li>
                            @endif
                            <li><a class="dropdown-item font-ar" href="{{ route('purchase_page', Auth::id()) }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-bag-heart-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M11.5 4v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5ZM8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1Zm0 6.993c1.664-1.711 5.825 1.283 0 5.132-5.825-3.85-1.664-6.843 0-5.132Z" />
                                    </svg>
                                    {{ __('home.myPurchase') }}
                                </a>
                            </li>
                            <li><a class="dropdown-item font-ar" href="{{ route('logout') }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-arrow-left-square-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M16 14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12zm-4.5-6.5H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5a.5.5 0 0 0 0-1z" />
                                    </svg>
                                    {{ __('home.logout') }}
                                </a>
                            </li>
                        </ul>
                    </div>
                @else
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a href="{{ route('register.show') }}"
                                class="nav-link font-ar">{{ __('home.register') }}</a></li>
                        <li class="nav-item"><a href="{{ route('login') }}"
                                class="nav-link font-ar">{{ __('home.signUp') }}</a>
                        </li>
                    </ul>
                @endauth


            </div>

            {{-- <ul> --}}
            {{-- <li> --}}
            <div class="d-flex">
                <div>
                    @auth
                        {{-- Notification --}}
                        @php
                            $notification = \App\Models\Notification::latest()
                                ->where('user_id', Auth::id())
                                ->take(5)
                                ->get();
                        @endphp
                        <div class="dropdown-notifications" id="navbarNavDarkDropdown">
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="#notifications-panel" class="dropdown-toggle"
                                        data-toggle="dropdown" role="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <span class="bg-light border rounded px-1 notif-count text-dark" data-count="0"
                                            style="position: absolute; top: 0px; left: -7px; font-size: 10px;">0</span>
                                        <svg style="z-index: 100;color: white;" xmlns="http://www.w3.org/2000/svg"
                                            width="16" height="16" fill="currentColor" class="bi bi-bell-fill"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z" />
                                        </svg>
                                    </a>

                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-light p-2">
                                        <div
                                            style="min-width: 400px !important; display: flex; justify-content: space-between;align-items: center;">
                                            <span>Notifications (<span class="notif-count">0</span>)</span>
                                            <span><button class="btn btn-link px-0">mark all as read</button></span>
                                        </div>
                                        <div style="overflow: hidden;max-height: 320px;overflow: auto;">
                                            <ul class="disd" style="display: contents;">

                                                @foreach ($notification as $otif)
                                                    <li>
                                                        <div class="px-3 pt-1 p-2 mb-2"
                                                            style="font-size: 13px !important;">
                                                            <a class="text-decoration-none"
                                                                href="{{ route('my_notification') }}">
                                                                {{-- message from who ? --}}
                                                                <div class="d-flex"
                                                                    style="justify-content: space-between; align-items: center;">
                                                                    <span class="text-danger" style="font-size: 15px">
                                                                        {{ $otif->title }} </span>
                                                                    <span
                                                                        class="rounded-2 p-1 text-secondary">{{ \Carbon\Carbon::parse($otif->created_at)->diffForHumans() }}</span>
                                                                </div>
                                                                <div class="text-dark" style="word-break: break-word;">
                                                                    {{ $otif->content }}
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </li>
                                                @endforeach

                                            </ul>
                                        </div>
                                        <br>
                                        <div class="text-center">
                                            <a href="{{ route('my_notification') }}"
                                                class="bg-light text-primary text-decoration-none">View
                                                all</a>
                                        </div>
                                    </ul>


                                </li>
                            </ul>
                        </div>
                    @endauth
                </div>

                <a @if (app()->getLocale() == 'ar') href="{{ route('switchLan', 'en') }}"
        @else
        href="{{ route('switchLan', 'ar') }}" @endif
                    class="btn btn-outline-secondary p-1 mx-1">

                    @if (app()->getLocale() == 'ar')
                        En
                    @else
                        Ar
                    @endif
                </a>
                {{-- toggler button --}}
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" aria-expanded="true"
                    {{-- style="margin-left: auto; margin-right: 10px;" --}}>
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>

            {{-- offcanvas --}}
            {{-- <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
            aria-controls="offcanvasRight">Toggle right offcanvas</button> --}}
            <div class="offcanvas offcanvas-end d-lg-none d-md-inline d-sm-inline bg-dark ar" tabindex="-1"
                id="offcanvasRight" aria-labelledby="offcanvasRightLabel">

                {{-- offcanvas head --}}
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title text-light" id="offcanvasRightLabel font-ar">{{ __('home.menu') }}
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>

                {{-- offcanvas body --}}
                <div class="offcanvas-body d-lg-none d-md-block text-dark">
                    <ul class="navbar-nav ms-1 navbar-nav-scroll" style="--bs-scroll-height: 150px;">
                        <li class="nav-item h6"><a href="{{ route('professions.index') }}"
                                class="nav-link in-hover font-ar">{{ __('home.services_title') }}</a>
                        </li>
                        <li class="nav-item h6"><a href="{{ route('freelancers.index') }}"
                                class="nav-link in-hover font-ar">{{ __('home.freelancers_title') }}</a>
                        </li>
                        <li class="nav-item h6"><a href="{{ route('projects.index') }}"
                                class="nav-link in-hover font-ar">{{ __('home.projects_title') }}</a>
                        </li>
                        {{-- Bacome freelancer --}}



                        @if (Auth::check() && !Auth::user()->is_freelancer)
                            <li><a href="{{ route('become_freelancer') }}"
                                    class="nav-link in-hover-t text-warning fw-bold font-ar">{{ __('home.become') }}</a>
                            </li>
                        @endif


                    </ul>

                    @auth
                        <div class="navbar-nav ms-auto dropdown">

                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                    <path fill-rule="evenodd"
                                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                </svg>
                                <span class="containar">{{ Auth::user()->full_name }}</span>
                            </a>

                            <ul class="dropdown-menu dropdown-menu-end" id="navbarDropdownMenuLink1">
                                <li><a class="dropdown-item font-ar" href="{{ route('profile') }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-person-badge" viewBox="0 0 16 16">
                                            <path
                                                d="M6.5 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3zM11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                            <path
                                                d="M4.5 0A2.5 2.5 0 0 0 2 2.5V14a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2.5A2.5 2.5 0 0 0 11.5 0h-7zM3 2.5A1.5 1.5 0 0 1 4.5 1h7A1.5 1.5 0 0 1 13 2.5v10.795a4.2 4.2 0 0 0-.776-.492C11.392 12.387 10.063 12 8 12s-3.392.387-4.224.803a4.2 4.2 0 0 0-.776.492V2.5z" />
                                        </svg>
                                        {{ __('home.profile') }}
                                    </a>
                                </li>
                                @if (Auth::check() && Auth::user()->is_freelancer)
                                    <li><a class="dropdown-item font-ar" href="{{ route('become_freelancer') }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-patch-plus-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01-.622-.636zM8.5 6v1.5H10a.5.5 0 0 1 0 1H8.5V10a.5.5 0 0 1-1 0V8.5H6a.5.5 0 0 1 0-1h1.5V6a.5.5 0 0 1 1 0z" />
                                            </svg>
                                            {{ __('home.addService') }}
                                        </a>
                                    </li>
                                @endif
                                <li><a class="dropdown-item font-ar" href="{{ route('create_project') }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-patch-plus-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01-.622-.636zM8.5 6v1.5H10a.5.5 0 0 1 0 1H8.5V10a.5.5 0 0 1-1 0V8.5H6a.5.5 0 0 1 0-1h1.5V6a.5.5 0 0 1 1 0z" />
                                        </svg>
                                        {{ __('home.addProject') }}
                                    </a>
                                </li>
                                <li><a class="dropdown-item font-ar" href="{{ route('contact') }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-chat-dots-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M16 8c0 3.866-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7zM5 8a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                                        </svg>
                                        {{ __('home.myChat') }}
                                    </a>
                                </li>
                                @if (Auth::check() && Auth::user()->is_freelancer)
                                    <li><a class="dropdown-item font-ar" href="{{ route('work_page', Auth::id()) }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-tools" viewBox="0 0 16 16">
                                                <path
                                                    d="M1 0 0 1l2.2 3.081a1 1 0 0 0 .815.419h.07a1 1 0 0 1 .708.293l2.675 2.675-2.617 2.654A3.003 3.003 0 0 0 0 13a3 3 0 1 0 5.878-.851l2.654-2.617.968.968-.305.914a1 1 0 0 0 .242 1.023l3.27 3.27a.997.997 0 0 0 1.414 0l1.586-1.586a.997.997 0 0 0 0-1.414l-3.27-3.27a1 1 0 0 0-1.023-.242L10.5 9.5l-.96-.96 2.68-2.643A3.005 3.005 0 0 0 16 3c0-.269-.035-.53-.102-.777l-2.14 2.141L12 4l-.364-1.757L13.777.102a3 3 0 0 0-3.675 3.68L7.462 6.46 4.793 3.793a1 1 0 0 1-.293-.707v-.071a1 1 0 0 0-.419-.814L1 0Zm9.646 10.646a.5.5 0 0 1 .708 0l2.914 2.915a.5.5 0 0 1-.707.707l-2.915-2.914a.5.5 0 0 1 0-.708ZM3 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026L3 11Z" />
                                            </svg>
                                            {{ __('home.myWork') }}
                                        </a>
                                    </li>
                                @endif
                                <li><a class="dropdown-item font-ar" href="{{ route('purchase_page', Auth::id()) }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-bag-heart-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M11.5 4v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5ZM8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1Zm0 6.993c1.664-1.711 5.825 1.283 0 5.132-5.825-3.85-1.664-6.843 0-5.132Z" />
                                        </svg>
                                        {{ __('home.myPurchase') }}
                                    </a>
                                </li>
                                <li><a class="dropdown-item font-ar" href="{{ route('logout') }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-arrow-left-square-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M16 14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12zm-4.5-6.5H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5a.5.5 0 0 0 0-1z" />
                                        </svg>
                                        {{ __('home.logout') }}
                                    </a>
                                </li>
                            </ul>
                        </div>
                    @else
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item"><a href="{{ route('register.show') }}"
                                    class="nav-link font-ar">{{ __('home.register') }}</a></li>
                            <li class="nav-item"><a href="{{ route('login') }}"
                                    class="nav-link font-ar">{{ __('home.signUp') }}</a>
                            </li>
                        </ul>
                    @endauth
                </div>
            </div>
        </div>


    </div>

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://js.pusher.com/7.1/pusher.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
    </script>


    <script type="text/javascript">
        var notificationsWrapper = $('.dropdown-notifications');
        var notificationsToggle = notificationsWrapper.find('a[data-toggle]');
        var notificationsCountElem = notificationsToggle.find('span[data-count]');
        var notificationsCount = parseInt(notificationsCountElem.data('count'));
        var notifications = notificationsWrapper.find('ul.disd');

        if (notificationsCount <= 0) {
            //notificationsWrapper.hide();
        }

        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;

        var pusher = new Pusher('c8e5a10ba21a1531fe1f', {
            cluster: 'ap2'
        });

        // Subscribe to the channel we specified in our Laravel Event
        var channel = pusher.subscribe('new-message' + {{ Auth::user()->id ?? ' ' }});

        // Bind a function to a Event (the full Laravel class)
        channel.bind('my', function(data) {
            var existingNotifications = notifications.html();
            var avatar = Math.floor(Math.random() * (71 - 20 + 1)) + 20;
            var newNotificationHtml = `
        <a href="{{ route('my_notification') }}" class="text-decoration-none">
            <li>
            <div class="px-3 pt-1 p-2 mb-2" style="font-size: 13px !important;">
                                        {{-- message from who ? --}}
            <div class="d-flex" style="justify-content: space-between; align-items: center;">
                <span class="text-danger" style="font-size: 15px"> ` +
                data.username + `</span>
                                            <span class="rounded-2 p-1 text-secondary" >1 seconds ago</span>
                                        </div>
                                        <div class="text-dark" style="word-break: break-word;">
                                            ` + data.message + `
                                        </div>
                                    </div>
                                    </li>
            </a>`;
            // alert(notificationsCountElem);

            notifications.html(newNotificationHtml + existingNotifications);
            notificationsCount += 1;
            notificationsCountElem.attr('data-count', notificationsCount);
            notificationsWrapper.find('.notif-count').text(notificationsCount);
            notificationsWrapper.show();
        });
    </script>


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

    <div class="row mx-1">
        <div class="container col-lg-9 col-md-10">
            <section class="bg-light text-dark p-3 rounded mgg">
                <div class="border-bottom border-dark px-3 h5 py-1"
                    style="display: flex;justify-content: space-between;">
                    <span class="text-start" style="font-family: 'Josefin Sans', sans-serif;">Jobs Gallery
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                            class="bi bi-stars" viewBox="0 0 16 16">
                            <path
                                d="M7.657 6.247c.11-.33.576-.33.686 0l.645 1.937a2.89 2.89 0 0 0 1.829 1.828l1.936.645c.33.11.33.576 0 .686l-1.937.645a2.89 2.89 0 0 0-1.828 1.829l-.645 1.936a.361.361 0 0 1-.686 0l-.645-1.937a2.89 2.89 0 0 0-1.828-1.828l-1.937-.645a.361.361 0 0 1 0-.686l1.937-.645a2.89 2.89 0 0 0 1.828-1.828l.645-1.937zM3.794 1.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387A1.734 1.734 0 0 0 4.593 5.69l-.387 1.162a.217.217 0 0 1-.412 0L3.407 5.69A1.734 1.734 0 0 0 2.31 4.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387A1.734 1.734 0 0 0 3.407 2.31l.387-1.162zM10.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732L9.1 2.137a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L10.863.1z" />
                        </svg>
                    </span>
                    <span class="text-end fs-6">user name</span>
                </div>

                <div class="div-profile-image">
                    <!-- if user does not have photo display icon -->

                    {{-- <div class="container my-5" style="text-align: center;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" style="    color: #5e1155;"
                                        fill="currentColor" class="bi bi-person-circle" viewBox="3 3 10 10">
                                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                        <path fill-rule="evenodd"
                                            d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                    </svg>
                                </div> --}}
                    <!-- here put the image if user have one already -->

                    <div class="profile-image rounded-circle mx-auto d-block m-3">
                        <button class="btn"
                            style="position: relative; top: 75%; left: 70%; border-color: #ffdead00;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34"
                                class="border rounded-circle"
                                style="    color: #5e1155;border-color: #ab6f6f!important;background-color: #ab6f6f;"
                                fill="currentColor" class="bi bi-person-fill-up" viewBox="0 0 16 16">
                                <path
                                    d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm.354-5.854 1.5 1.5a.5.5 0 0 1-.708.708L13 11.707V14.5a.5.5 0 0 1-1 0v-2.793l-.646.647a.5.5 0 0 1-.708-.708l1.5-1.5a.5.5 0 0 1 .708 0ZM11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                <path
                                    d="M2 13c0 1 1 1 1 1h5.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.544-3.393C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4Z" />
                            </svg>
                        </button>
                    </div>

                    {{-- name of the user --}}
                    <div class="text-center">Full name</div>
                    {{-- BIO --}}
                    <div class="text-center py-1">Bio</div>

                    <div class="border-bottom border-dark px-3"></div>

                    {{-- Links --}}
                    <div style="display: flex; align-items: baseline; justify-content: space-between;" class="my-2">
                        {{-- Facebook account --}}
                        <span class="text-start">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                style="color: #5e1155;" fill="currentColor" class="bi bi-facebook"
                                viewBox="0 0 16 16">
                                <path
                                    d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                            </svg>
                            <a href="#" class="ms-1 text-decoration-none fst-italic text-secondary"> My facebook
                            </a>
                        </span>
                        <span class="text-end">
                            number
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                style="color: #5e1155;" fill="currentColor" class="bi bi-hand-thumbs-up-fill"
                                viewBox="0 0 16 16">
                                <path
                                    d="M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a9.84 9.84 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733.058.119.103.242.138.363.077.27.113.567.113.856 0 .289-.036.586-.113.856-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.163 3.163 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16H8c-.605 0-1.07-.081-1.466-.218a4.82 4.82 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z" />
                            </svg>
                        </span>
                    </div>

                    {{-- LinkedIn account --}}
                    <div class="text-start my-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            style="color: #5e1155;" class="bi bi-linkedin" viewBox="0 0 16 16">
                            <path
                                d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
                        </svg>
                        <a href="#" class="ms-1 text-decoration-none fst-italic text-secondary"> My LinkedIn
                        </a>
                    </div>

                    {{-- Instagram account --}}
                    <div class="text-start my-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            style="color: #5e1155;" class="bi bi-instagram" viewBox="0 0 16 16">
                            <path
                                d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                        </svg>
                        <a href="#" class="ms-1 text-decoration-none fst-italic text-secondary"> My Instagram
                        </a>
                    </div>
                    {{-- Twitter account --}}
                    <div class="text-start my-2 ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            style="color: #5e1155;" class="bi bi-twitter" viewBox="0 0 16 16">
                            <path
                                d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                        </svg>
                        <a href="#" class="ms-1 text-decoration-none fst-italic text-secondary"> My Twitter
                        </a>
                    </div>
                    <button class="btn btn-outline-secondary"> + Add social link</button>
                    <div class="border-bottom border-dark px-3 pt-3"></div>
                </div>


                {{-- posts --}}
                <section class="my-4">
                    <div class="border my-2 p-3 border-dark rounded" style="--bs-border-opacity: .5;">
                        {{-- head of the post --}}
                        <div>
                            <!-- if user does not have photo display icon -->

                            {{-- <div class="container my-5" style="text-align: center;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" style="    color: #5e1155;"
                                        fill="currentColor" class="bi bi-person-circle" viewBox="3 3 10 10">
                                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                        <path fill-rule="evenodd"
                                            d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                    </svg>
                                </div> --}}
                            <!-- here put the image if user have one already -->

                            <div class="profile-image-post rounded-circle d-block m-3">
                                <span class="user-name-post">user name</span>
                                <span class="time-post">posted from 3h</span>
                            </div>


                        </div>

                        {{-- body of the post --}}
                        <div>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quod molestias ullam corporis
                            at
                            error eum laborum quaerat assumenda, unde, voluptates reiciendis? Consequatur cumque,
                            voluptatum laudantium quae impedit asperiores facere perferendis.
                        </div>

                        {{-- reactions section --}}
                        <div class="border mt-2 d-flex p-0"
                            style="align-items: baseline; justify-content: space-evenly;">
                            {{-- number of likes --}}
                            <span class="">
                                <button class="btn border-end border-2 rounded-0"
                                    style="--bs-border-opacity: .5; border-color : #f0f8ff00">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" style="color: #5e1155;"
                                        fill="currentColor" class="bi bi-hand-thumbs-up-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a9.84 9.84 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733.058.119.103.242.138.363.077.27.113.567.113.856 0 .289-.036.586-.113.856-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.163 3.163 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16H8c-.605 0-1.07-.081-1.466-.218a4.82 4.82 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z" />
                                    </svg>
                                </button>
                            </span>
                            <span class="me-1">
                                945883
                            </span>

                            {{-- number of dislikes --}}
                            <span class="">
                                <button class="btn border-end border-start border-2 rounded-0"
                                    style="--bs-border-opacity: .5; border-color : #f0f8ff00">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" style="color: #5e1155;"
                                        fill="currentColor" class="bi bi-hand-thumbs-down-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M6.956 14.534c.065.936.952 1.659 1.908 1.42l.261-.065a1.378 1.378 0 0 0 1.012-.965c.22-.816.533-2.512.062-4.51.136.02.285.037.443.051.713.065 1.669.071 2.516-.211.518-.173.994-.68 1.2-1.272a1.896 1.896 0 0 0-.234-1.734c.058-.118.103-.242.138-.362.077-.27.113-.568.113-.856 0-.29-.036-.586-.113-.857a2.094 2.094 0 0 0-.16-.403c.169-.387.107-.82-.003-1.149a3.162 3.162 0 0 0-.488-.9c.054-.153.076-.313.076-.465a1.86 1.86 0 0 0-.253-.912C13.1.757 12.437.28 11.5.28H8c-.605 0-1.07.08-1.466.217a4.823 4.823 0 0 0-.97.485l-.048.029c-.504.308-.999.61-2.068.723C2.682 1.815 2 2.434 2 3.279v4c0 .851.685 1.433 1.357 1.616.849.232 1.574.787 2.132 1.41.56.626.914 1.28 1.039 1.638.199.575.356 1.54.428 2.591z" />
                                    </svg>
                                </button>
                            </span>
                            <span class="me-1">
                                945883
                            </span>

                            {{-- number of comments --}}
                            <span class="">
                                <button class="btn border-end border-start border-2 rounded-0"
                                    style="--bs-border-opacity: .5; border-color : #f0f8ff00">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" style="color: #5e1155;"
                                        fill="currentColor" class="bi bi-chat-square-text-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2h-2.5a1 1 0 0 0-.8.4l-1.9 2.533a1 1 0 0 1-1.6 0L5.3 12.4a1 1 0 0 0-.8-.4H2a2 2 0 0 1-2-2V2zm3.5 1a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 2.5a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 2.5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5z" />
                                    </svg>
                                </button>
                            </span>
                            <span class="me-1">
                                945883
                            </span>

                            {{-- number of share --}}
                            <span class="">
                                <button class="btn border-end border-start border-2 rounded-0"
                                    style="--bs-border-opacity: .5; border-color : #f0f8ff00">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" style="color: #5e1155;"
                                        fill="currentColor" class="bi bi-share-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5z" />
                                    </svg>
                                </button>
                            </span>
                            <span class="me-1">
                                945883
                            </span>


                        </div>

                    </div>
                </section>
            </section>
        </div>
    </div>

    {{-- Footer here --}}
    @include('layouts.footer')



    <!-- JavaScript Bundle with Popper -->
    <script src="{{ asset('/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
