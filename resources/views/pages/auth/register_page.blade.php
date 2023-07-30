<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" style="background-color: lightgrey; height: 1000px;">

<head>

    @include('layouts.head')

    <!-- CSS only -->
    <link href="{{ asset('css/fl.css') }}" rel="stylesheet">
    <link href="{{ asset('css/login_register_page.css') }}" rel="stylesheet">
    <title>Sign-up</title>
</head>

<body style="background-color: lightgrey;">

    @include('layouts.nav-bar')

    <img src='files/munt-background.jpg' class="img-log-in" alt="...">

    <div class="row mx-1">
        <div class="container col-lg-6 col-md-8 mgg z-3">
            <section class="container bg-light text-dark p-3 rounded">
                <div class="border-bottom border-dark ps-3 h5 py-1">
                    Sign up
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                        class="bi bi-patch-plus-fill" viewBox="0 0 16 16">
                        <path
                            d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01-.622-.636zM8.5 6v1.5H10a.5.5 0 0 1 0 1H8.5V10a.5.5 0 0 1-1 0V8.5H6a.5.5 0 0 1 0-1h1.5V6a.5.5 0 0 1 1 0z" />
                    </svg>
                </div>

                <div>
                    <form class="form-login-1" autocomplete="on" method="POST" action="{{ route('register.store') }}">
                        @csrf
                        <div>
                            @error('full_name')
                                <div class="alert alert-danger" role="alert">
                                    {{ $errors->first('full_name') }}
                                </div>
                            @enderror

                            <div class="mb-3">
                                <div class="form-floating">
                                    <input class="form-control w-100" type="text" name="full_name" required
                                        placeholder="Name..." id="floatingTextarea" autocomplete="on"
                                        value="{{ Cookie::get('full_name') }}">
                                    <label for="floatingTextarea">Full Name</label>
                                </div>
                            </div>

                            <?php
                            if (isset($_POST['full_name'])) {
                                $data = $_POST['full_name'];
                                $fp = fopen('data.txt', 'a');
                                fwrite($fp, $data);
                                fclose($fp);
                            }
                            ?>
                        </div>
                        <div>
                            @error('user_name')
                                <div class="alert alert-danger" role="alert">
                                    {{ $errors->first('user_name') }}
                                </div>
                            @enderror
                            <div class="mb-3">
                                <div class="form-floating">
                                    <input class="form-control w-100" type="text" name="user_name" required
                                        placeholder="Username..." id="floatingTextarea"
                                        value="{{ Cookie::get('user_name') }}" autocomplete="on">
                                    <label for="floatingTextarea">Username</label>
                                </div>
                            </div>
                        </div>
                        <div>
                            @error('email')
                                <div class="alert alert-danger" role="alert">
                                    {{ $errors->first('email') }}
                                </div>
                            @enderror
                            <div class="mb-3">
                                <div class="form-floating">
                                    <input class="form-control w-100" type="email" name="email" required
                                        placeholder="Email address..." id="floatingTextarea" autocomplete="on"
                                        value="{{ Cookie::get('email') }}">
                                    <label for="floatingTextarea">Email</label>
                                </div>
                            </div>
                        </div>

                        <div>
                            @error('password')
                                <div class="alert alert-danger" role="alert">
                                    {{ $errors->first('password') }}
                                </div>
                            @enderror
                            <div class="mb-3">
                                <div class="form-floating">
                                    <input id="pass-id" class="form-control w-100" type="password" name="password"
                                        minlength="8" required placeholder="*************" id="floatingTextarea"
                                        autocomplete="on">
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

                            <div class="mb-3">
                                <div class="form-floating">
                                    <input id="re-pass-id" class="form-control w-100" type="password"
                                        name="password_confirmation" minlength="8" required placeholder="*************"
                                        id="floatingTextarea" autocomplete="on">
                                    <label for="floatingTextarea">Repeat Password</label>
                                    <div id="re-div-id-svg" onclick="displayRePassIcon()"
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
                            <div>
                                <div class="card card-body">
                                    <div class="mb-3">
                                        my interests
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                        </svg>
                                    </div>
                                    @foreach (\App\Models\Category::all() as $category)
                                        @php
                                            $uniqueId = uniqid();
                                        @endphp
                                        <div class="form-check">
                                            <input name="{{ $category->id }}" class="form-check-input"
                                                type="checkbox" value="OK" id="{{ $uniqueId }}">
                                            <label class="form-check-label" for="{{ $uniqueId }}">
                                                {{ $category->title }}
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-qr-code" viewBox="0 0 16 16">
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

                        <div class="d-grid gap-2 d-md-block">
                            <button class="btn btn-primary p-1 my-3 " type="submit">Sign up</button>
                        </div>


                        <div class="container-asq">
                            <span class="asq">Already have account ?</span>
                            <a href="{{ route('login') }}" class="btn btn-link">
                                Login
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
