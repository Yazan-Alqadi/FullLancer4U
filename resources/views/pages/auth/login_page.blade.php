<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" style="background-color: lightgrey;">

<head>

    @include('layouts.head')

    <!-- CSS only -->
    <link href="{{ asset('css/fl.css') }}" rel="stylesheet">
    <link href="{{ asset('css/login_register_page.css') }}" rel="stylesheet">

    <title>Log-in</title>

</head>

<body style="background-color: lightgrey;">

    @include('layouts.nav-bar')

    <img src="../../../../public/files/munt-background.jpg" class="img-log-in" alt="...">

    @if (session('status'))
        <div class="alert-error-state">
            {{ session('status') }}
        </div>
    @endif

    {{-- <img src="../../../../public/images/1680196605.png" alt=""> --}}

    <div class="row mx-1">
        <div class="container col-lg-5 col-md-6 z-3">
            <section class="container bg-light text-dark p-3 mgg mx-auto rounded row">
                <div class="border-bottom border-dark ps-3 h5 py-1">
                    Login
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                        class="bi bi-patch-plus-fill" viewBox="0 0 16 16">
                        <path
                            d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01-.622-.636zM8.5 6v1.5H10a.5.5 0 0 1 0 1H8.5V10a.5.5 0 0 1-1 0V8.5H6a.5.5 0 0 1 0-1h1.5V6a.5.5 0 0 1 1 0z" />
                    </svg>
                </div>

                <div class="text-center h4 p-4 border-bottom border-secondary border-opacity-25 text-secondary fw-bold">
                    Welcome Back
                </div>

                <div>
                    <form class="form-login-1 fs-6" method="POST" action="{{ route('login.store') }}">
                        @csrf
                        <div>
                            @if (session('error'))
                                <div class="alert alert-danger fs-5" role="alert">
                                    {{ session('error') }}
                                </div>
                            @endif
                            <div class="mb-3">
                                <div class="form-floating">
                                    <input class="form-control w-100" type="email" name="email" required
                                        placeholder="Email address..." id="floatingTextarea"
                                        value="{{ Cookie::get('email') }}">
                                    <label for="floatingTextarea">Email</label>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="mb-3">
                                <div class="form-floating">
                                    <input id="pass-id" class="form-control w-100" type="password" name="password"
                                        minlength="8" required placeholder="*************" id="floatingTextarea">
                                    <label for="floatingTextarea">Password</label>
                                    <div id="div-id-svg" onclick="displayPassIcon()"
                                        class="pass-icon-display btn border border-0 p-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"></path>
                                            <path
                                                d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z">
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Remember Me -->
                        <div class="txt1 row d-flex">

                            <label for="remember_me" class="inline-flex items-center col-lg-5 mb-2 f-min-content">
                                <input id="remember_me" type="checkbox"
                                    class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                    name="remember">
                                <span class="ml-2 text-sm text-gray-600">Remember me</span>
                            </label>

                            <a href="{{ route('password.request') }}" class="link-primary text-decoration-none col-lg-7 f-min-content">
                                Forgot Your Password?
                            </a>
                        </div>

                        <div class="d-grid gap-2">
                            <button class="btn btn-primary my-3" type="submit">Login</button>

                        </div>

                        <div class="container-asq">
                            <span class="asq">Don't have account ?</span>
                            <a href="{{ route('register.show') }}" class="btn btn-link">
                                Sign up
                            </a>
                        </div>

                    </form>
                </div>
            </section>
        </div>
    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="{{ asset('/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
