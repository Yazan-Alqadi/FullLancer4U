<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/main_login.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;500&family=Roboto+Slab&display=swap"
            rel="stylesheet">
        <title>Log-in</title>
    </head>

    <body>

        <div class="pic"></div>

        @if (session('status'))
        <div class="alert-error-state">
            {{ session('status') }}
        </div>
        @endif

        <div class="form-login-div">
            <form class="form-login-1" method="POST" action="{{ route('login.store') }}">
                @csrf
                <div class="form-login-title">Sign in</div>
                <div class="wrap-input" data-validate="Valid email is required: ex@abc.xyz">
                    <span class="label-input">Email</span>
                    <input class="input1" type="email" name="email" required placeholder="Email address...">
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
                <!-- Remember Me -->
                <div class="txt1">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox"
                            class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                            name="remember">
                        <span class="ml-2 text-sm text-gray-600">Remember me</span>
                    </label>
                </div>
                <div class="container-login-form-btn">
                    <div class="login-btn-confirm">
                        <button type="submit" class="login-form-btn">Sign up</button>
                    </div>
                    <div class="container-asq">
                        <span class="asq">Don't have account ?</span>
                        <a href="{{ route('register.show') }}" class="lin">
                            Sign up
                            <i class="fa fa-long-arrow-right m-l-5"></i>
                        </a>
                    </div>
                </div>
            </form>
        </div>

        </div>
    </body>

</html>