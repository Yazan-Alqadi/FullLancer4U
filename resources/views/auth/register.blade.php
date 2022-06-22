<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;500&family=Roboto+Slab&display=swap"
        rel="stylesheet">
    <title>Sign-up</title>
</head>

<body>

    <div class="pic"></div>

    <div class="form-login-div">
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

    </div>
</body>

</html>
