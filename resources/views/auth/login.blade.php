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



    <div class="form-login-div">
        @if (session('status'))
            <div class="alert alert-danger" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <form class="form-login-1" method="POST" action="{{ route('login.store') }}">
            @csrf
            <div class="form-title">Sign in</div>
            <div class="wrap-input" data-validate="Valid email is required: ex@abc.xyz">
                <span class="label-input">Email</span>
                <input class="input1" type="email" name="email" required placeholder="Email address...">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="wrap-input" data-validate="Password is required">
                <span class="label-input">Password</span>
                <input class="input1" type="password" name="password" minlength="8" required
                    placeholder="*************">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="login-btn-confirm">
                <button type=" submit" class="login-form-btn">Sign In</button>
            </div>
            <div class="have-account">
                <span>Don't have account ?</span>
                <a href="{{ route('register.show') }}" class="lin">Sign in</a>
            </div>
        </form>
    </div>

    </div>
</body>

</html>
