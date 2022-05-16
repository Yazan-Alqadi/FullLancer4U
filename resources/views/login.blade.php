<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="CSS/main_login.css">
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
            <form class="form-login-1">
                <div class="form-title">Sign in</div>
                <div class="wrap-input" data-validate="Valid email is required: ex@abc.xyz">
                    <span class="label-input">Email</span>
                    <input class="input1" type="email" name="email" required placeholder="Email address...">
                </div>
                <div class="wrap-input" data-validate="Password is required">
                    <span class="label-input">Password</span>
                    <input class="input1" type="password" name="password" minlength="8" required
                        placeholder="*************">
                </div>
                <div class="login-btn-confirm">
                    <button type=" submit" class="login-form-btn">Sign In</button>
                </div>
                <div class="have-account">
                    <span>Alreay have account ?</span>
                    <a href="#" class="lin">Sign in</a>
                </div>
            </form>
        </div>
        </div>
        <div>
            @if($errors->any())
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger" role="alert">
                        {{$error}}
                    </div>
                @endforeach
            @endif
        </div>
    </body>

</html>