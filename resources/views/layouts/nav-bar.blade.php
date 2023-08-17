<link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap-notifications.min.css') }}">


<div class="ps-3 pe-2 navbar container-fluid navbar-expand-lg bg-dark navbar-dark text-light fixed-top h6">
    <div class="container align-items-start">
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
            <ul class="navbar-nav ms-1 navbar-nav-scroll" style="--bs-scroll-height: 150px;">
                <li class="nav-item h6">
                    <a href="{{ route('professions.index') }}"
                        class="nav-link in-hover font-ar">{{ __('home.services_title') }}</a>
                </li>
                <li class="nav-item h6">
                    <a href="{{ route('freelancers.index') }}"
                        class="nav-link in-hover font-ar">{{ __('home.freelancers_title') }}</a>
                </li>
                <li class="nav-item h6">
                    <a href="{{ route('projects.index') }}"
                        class="nav-link in-hover font-ar">{{ __('home.projects_title') }}</a>
                </li>

                {{-- Bacome freelancer --}}
                @if (Auth::check() && !Auth::user()->is_freelancer)
                    <li>
                        <a href="{{ route('become_freelancer') }}"
                            class="nav-link in-hover-t text-warning fw-bold font-ar">{{ __('home.become') }}</a>
                    </li>
                @endif

                {{-- Gallery Page --}}
                @if (Auth::check() && Auth::user()->is_freelancer)
                    <li class="nav-item h6">
                        <a class="nav-link in-hover-gallery font-ar"
                            href="{{ route('gallery_profile') }}">
                            {{ __('home.jobs') }}
                        </a>
                    </li>
                @endif

            </ul>


            @auth
                <div class="navbar-nav ms-auto dropdown d-flex align-items-center">

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

                    {{-- Funds Or Points --}}
                    <div class="text-info me-4 ms-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-plus m-0" viewBox="0 0 16 16">
                            <path
                                d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                        </svg>
                        200.00 SP
                    </div>

                    <ul class="dropdown-menu dropdown-menu-end" id="navbarDropdownMenuLink1">
                        <li><a class="dropdown-item font-ar" href="{{ route('profile') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-person-badge" viewBox="0 0 16 16">
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
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-patch-plus-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01-.622-.636zM8.5 6v1.5H10a.5.5 0 0 1 0 1H8.5V10a.5.5 0 0 1-1 0V8.5H6a.5.5 0 0 1 0-1h1.5V6a.5.5 0 0 1 1 0z" />
                                </svg>
                                {{ __('home.addProject') }}
                            </a>
                        </li>
                        <li><a class="dropdown-item font-ar" href="{{ route('contact') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-chat-dots-fill" viewBox="0 0 16 16">
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
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-bag-heart-fill" viewBox="0 0 16 16">
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
        <div class="d-flex align-items-center">
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
                                                    <div class="px-3 pt-1 p-2 mb-2" style="font-size: 13px !important;">
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
            id="offcanvasRight" aria-labelledby="offcanvasRightLabel" style="overflow: auto;">

            {{-- offcanvas head --}}
            <div class="offcanvas-header">
                <h5 class="offcanvas-title text-light" id="offcanvasRightLabel font-ar">{{ __('home.menu') }}</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>

            {{-- offcanvas body --}}
            <div class="offcanvas-body d-lg-none d-md-block text-dark">
                <ul class="navbar-nav ms-1 navbar-nav-scroll">
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

                    {{-- Gallery Page --}}
                    @if (Auth::check() && Auth::user()->is_freelancer)
                        <li class="nav-item h6"><a class="nav-link in-hover-gallery font-ar"
                                href="{{ route('gallery_profile') }}">
                                {{ __('home.jobs') }}
                            </a>
                        </li>
                    @endif


                </ul>

                @auth
                    <div class="navbar-nav ms-auto dropdown">

                        {{-- Funds Or Points --}}
                    <div class="text-info nav-linkfw-bold p-2 font-ar">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-plus m-0" viewBox="0 0 16 16">
                            <path
                                d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                        </svg>
                        200.00 SP
                    </div>

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
