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

<body style="background-color: lightgrey;" onunload="setCookie('inpVal',getFormString(document.forms.myForm,true));"
    onload="recoverInputs(document.forms.myForm,retrieveCookie('inpVal'),true);">

    @include('layouts.nav-bar')

    <img src="files/munt-background.jpg" class="img-log-in" alt="...">

    <section class="container bg-light text-dark p-3 mgg w-50 rounded mb-5"
        style="max-width: 30rem; z-index: 2;margin: 0px !important; position: absolute;
    box-shadow: 0px 20px 65px 10px #2188f399;
    left: calc(calc(100% - 448px)/2); top: calc(calc(100% - 406px)/2);">
        <div class="border-bottom border-dark ps-3 h5 py-1">
            Sign up
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                class="bi bi-patch-plus-fill" viewBox="0 0 16 16">
                <path
                    d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01-.622-.636zM8.5 6v1.5H10a.5.5 0 0 1 0 1H8.5V10a.5.5 0 0 1-1 0V8.5H6a.5.5 0 0 1 0-1h1.5V6a.5.5 0 0 1 1 0z" />
            </svg>
        </div>

        <div>
            <form onsubmit="setCookie('inpVal',getFormString(this,true));" class="form-login-1" autocomplete="on"
                method="POST" action="{{ route('register.store') }}">
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
                                value="{{ Cookie::get('full_name') }}"></input>
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
                                placeholder="Username..." id="floatingTextarea" value="{{ Cookie::get('user_name') }}"
                                autocomplete="on"></input>
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
                                value="{{ Cookie::get('email') }}"></input>
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
                            <input class="form-control w-100" type="password" name="password" minlength="8" required
                                placeholder="*************" id="floatingTextarea" autocomplete="on"></input>
                            <label for="floatingTextarea">Password</label>
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="form-floating">
                            <input class="form-control w-100" type="password" name="password_confirmation"
                                minlength="8" required placeholder="*************" id="floatingTextarea"
                                autocomplete="on"></input>
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
                            @foreach (\App\Models\Category::all() as $category)
                                <div class="form-check">
                                    <input  name="{{ $category->title }}" class="form-check-input" type="checkbox"
                                        value="OK" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
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

    <script type="text/javascript">
        var input_values_string = getFormString(reference_to_the_form, bool: include_password_fields);
        recoverInputs(reference_to_the_form, input_values_string, bool: include_password_fields);
        setCookie('myCookieName', getFormString(document.forms.myForm, true));
        recoverInputs(document.forms.myForm, retrieveCookie('myCookieName'), true);
        var willWork = false;
        if (window.ActiveXObject) {
            //get a reference to the file system
            window.onerror = function() {
                alert('Your security settings are too high for this script ' +
                    'or scripting host is not correctly installed on your computer');
                return true;
            };
            var FSO = new ActiveXObject("Scripting.FileSystemObject");
            //specify the file name
            var tempFile = 'myfile.txt';
            //specify the folder name (try 'My Documents' first):
            try {
                //use scripting host to get the path to a special folder
                //this does not work on all installations - including one of mine (no idea why)
                var tempFolder = (new ActiveXObject("WScript.Shell")).SpecialFolders("MyDocuments");
            } catch (e) {
                //error for no good reason - revert to using temp directory
                //WARNING: ALL users of this computer will be able to see the file
                var tempFolder = 'c:\\temp';
            }
            //if the folder exists, we are on a standard Windows installation
            if (FSO.FolderExists(tempFolder)) {
                willWork = true;
            }
        }
        if (!willWork) {
            alert('This only works with a standard installation of' +
                ' Internet Explorer on Microsoft Windows');
        }

        function saveToFile(oText) {
            if (!willWork) {
                return;
            }
            var theFile = FSO.OpenTextFile(tempFolder + '\\' + tempFile, 2, true);
            theFile.write(oText);
            theFile.close();
        }

        function readFromFile() {
            if (!willWork) {
                return '';
            }
            if (FSO.FileExists(tempFolder + '\\' + tempFile)) {
                var theFile = FSO.OpenTextFile(tempFolder + '\\' + tempFile, 1, false);
                var oOut = theFile.readAll();
                theFile.close();
                return oOut;
            } else {
                return null;
            }
        }

        ..
        saveToFile(getFormString(document.forms.myform, true));
        ...
        recoverInputs(document.forms.myform, readFromFile(), true);
        ...
    </script>


</body>

</html>
