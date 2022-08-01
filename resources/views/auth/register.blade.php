<!DOCTYPE html>
<html lang="en" style="background-color: lightgrey;">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;500&family=Roboto+Slab&display=swap"
        rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

    <link href="{{ asset('css/fl.css') }}" rel="stylesheet">
    <!-- CSS only -->
    <link href="{{ asset('../css/bootstrap.min.css') }}" rel="stylesheet">
    <title>Sign-up</title>
</head>

<body style="background-color: lightgrey;">

    @include('layouts.nav-bar')

    <section class="container bg-light text-dark p-3 mgg w-50 rounded mb-5">
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
                    @error('email')
                        <div class="alert alert-danger" role="alert">
                            A simple danger alert—check it out!
                        </div>
                    @enderror
                    <div class="mb-3">
                        <div class="form-floating">
                            <input class="form-control w-100" type="text" name="full_name" required
                                placeholder="Name..." id="floatingTextarea" autocomplete="on"></input>
                            <label for="floatingTextarea">Full Name</label>
                        </div>
                    </div>
                </div>
                <div>
                    @error('email')
                        <div class="alert alert-danger" role="alert">
                            A simple danger alert—check it out!
                        </div>
                    @enderror
                    <div class="mb-3">
                        <div class="form-floating">
                            <input class="form-control w-100" type="text" name="user_name" required
                                placeholder="Username..." id="floatingTextarea" value="" autocomplete="on"></input>
                            <label for="floatingTextarea">Username</label>
                        </div>
                    </div>
                </div>
                <div>
                    @error('email')
                        <div class="alert alert-danger" role="alert">
                            A simple danger alert—check it out!
                        </div>
                    @enderror
                    <div class="mb-3">
                        <div class="form-floating">
                            <input class="form-control w-100" type="email" name="email" required
                                placeholder="Email address..." id="floatingTextarea"
                                autocomplete="on"></input>
                            <label for="floatingTextarea">Email</label>
                        </div>
                    </div>
                </div>

                <div>
                    @error('password')
                        <div class="alert alert-danger fs-5" role="alert">
                            A simple danger alert—check it out!
                        </div>
                    @enderror
                    <div class="mb-3">
                        <div class="form-floating">
                            <input class="form-control w-100" type="password" name="password" minlength="8" required
                                placeholder="*************" id="floatingTextarea" autocomplete="on"></input>
                            <label for="floatingTextarea">Password</label>
                        </div>
                    </div>
                    @error('password')
                        <div class="alert alert-danger fs-5" role="alert">
                            A simple danger alert—check it out!
                        </div>
                    @enderror
                    <div class="mb-3">
                        <div class="form-floating">
                            <input class="form-control w-100" type="password" name="password_confirmation"
                                minlength="8" required placeholder="*************" id="floatingTextarea" autocomplete="on"></input>
                            <label for="floatingTextarea">Repeat Password</label>
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
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    IT & Development
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
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value=""
                                    id="flexCheckChecked2">
                                <label class="form-check-label" for="flexCheckChecked2">
                                    Design & Creative
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-palette-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M12.433 10.07C14.133 10.585 16 11.15 16 8a8 8 0 1 0-8 8c1.996 0 1.826-1.504 1.649-3.08-.124-1.101-.252-2.237.351-2.92.465-.527 1.42-.237 2.433.07zM8 5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm4.5 3a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zM5 6.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm.5 6.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
                                    </svg>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value=""
                                    id="flexCheckChecked3">
                                <label class="form-check-label" for="flexCheckChecked3">
                                    Writing & Translation
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
                                        <path
                                            d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z" />
                                    </svg>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value=""
                                    id="flexCheckChecked4">
                                <label class="form-check-label" for="flexCheckChecked4">
                                    Engineering & Architecture
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-tools" viewBox="0 0 16 16">
                                        <path
                                            d="M1 0 0 1l2.2 3.081a1 1 0 0 0 .815.419h.07a1 1 0 0 1 .708.293l2.675 2.675-2.617 2.654A3.003 3.003 0 0 0 0 13a3 3 0 1 0 5.878-.851l2.654-2.617.968.968-.305.914a1 1 0 0 0 .242 1.023l3.27 3.27a.997.997 0 0 0 1.414 0l1.586-1.586a.997.997 0 0 0 0-1.414l-3.27-3.27a1 1 0 0 0-1.023-.242L10.5 9.5l-.96-.96 2.68-2.643A3.005 3.005 0 0 0 16 3c0-.269-.035-.53-.102-.777l-2.14 2.141L12 4l-.364-1.757L13.777.102a3 3 0 0 0-3.675 3.68L7.462 6.46 4.793 3.793a1 1 0 0 1-.293-.707v-.071a1 1 0 0 0-.419-.814L1 0Zm9.646 10.646a.5.5 0 0 1 .708 0l2.914 2.915a.5.5 0 0 1-.707.707l-2.915-2.914a.5.5 0 0 1 0-.708ZM3 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026L3 11Z" />
                                    </svg>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value=""
                                    id="flexCheckChecked5">
                                <label class="form-check-label" for="flexCheckChecked5">
                                    Sales & Marketing
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-bag-check-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5v-.5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0zm-.646 5.354a.5.5 0 0 0-.708-.708L7.5 10.793 6.354 9.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z" />
                                    </svg>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value=""
                                    id="flexCheckChecked6">
                                <label class="form-check-label" for="flexCheckChecked6">
                                    Self employees
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-person-check-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                                        <path
                                            d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                    </svg>
                                </label>
                            </div>
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

    <!-- JavaScript Bundle with Popper -->
    <script src=" /js/bootstrap.bundle.min.js"></script>

    {{-- <div class="form-login-div">
        <form class="form-login-1" method="POST" action="{{ route('register.store') }}">
            @csrf
            <span class="form-login-title">Sign Up</span>
            <div class="wrap-input" data-validate="Name is required">
                <span class="label-input ho">Full Name</span>
                <input class="input1" type="text" name="full_name" required placeholder="Name..."
                    @if (session('user')) value="{{ session('user')->name }}" @endif>
                @error('full_name')
                    <span class="alert-error" role="alert">
                        <strong> {{ $message }} </strong>
                    </span>
                @enderror
            </div>
            <div class="wrap-input" data-validate="Username is required">
                <span class="label-input">Username</span>
                <input class="input1" type="text" name="user_name" required placeholder="Username..."
                    @if (session('user')) value="{{ session('user')->email }}" @endif>
                @error('user_name')
                    <span class="alert-error" role="alert">
                        <strong> {{ $message }} </strong>
                    </span>
                @enderror
            </div>
            <div class="wrap-input" data-validate="Valid email is required: ex@abc.xyz">
                <span class="label-input">Email</span>
                <input class="input1" type="email" name="email" required placeholder="Email address..."
                    @if (session('user')) value="{{ session('user')->email }}" @endif>
                @error('email')
                    <span class="alert-error" role="alert">
                        <strong> {{ $message }} </strong>
                    </span>
                @enderror
            </div>
            <div class="wrap-input" data-validate="Password is required">
                <span class="label-input">Password</span>
                <input class="input1" type="password" name="password" minlength="8" required
                    placeholder="*************">
                @error('password')
                    <span class="alert-error" role="alert">
                        <strong> {{ $message }} </strong>
                    </span>
                @enderror
            </div>
            <div class="wrap-input" data-validate="Repeat Password is required">
                <span class="label-input">Repeat Password</span>
                <input class="input1" type="password" name="password_confirmation" minlength="8" required
                    placeholder="*************">
            </div>
            <div class="container-login-form-btn">
                <div class="login-btn-confirm">
                    <button type="submit" class="login-form-btn">Sign Up</button>
                </div>
                <div class="container-asq">
                    <span class="asq">Already have account ?</span>
                    <a href="{{ route('login') }}" class="lin">
                        Sign in
                        <i class="fa fa-long-arrow-right m-l-5"></i>
                    </a>
                </div>

            </div>
        </form>
    </div>

    </div> --}}


</body>

</html>
