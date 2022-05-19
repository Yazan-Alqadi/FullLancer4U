<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main_page_css.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;500&family=Roboto+Slab&display=swap"
        rel="stylesheet">
    <title>Main_Page</title>
</head>

<body>

    <div class="pic"></div>

    <ul class="unor-li">
        <li class="for-inline"><a href="#" class="main-title">Fullancer4U </a></li>
        <li class="search-par for-inline"><input type="search" class="se-pa" placeholder="Search"></li>
        <li class="for-inline" style="margin-left: 5%;"><a href="#" class="categories">Categories</a></li>
        <li class="for-inline"><a href="#" class="professions">Professions</a></li>
        <li class="for-inline"><a href="#" class="freealncers">Freealncers</a></li>
        <li class="for-inline"><a href="#" class="projects">Projects</a></li>

        @if (session('user'))
            <li class="for-inline for-position" style=" position: absolute; right: 20px; top: 2.4%;">
                <nav class="container-menu">
                    <ul class="menu">
                        <li> <a class="name-of-user" href="#">{{ session('user') }}</a>
                            <ul class="sub-menu">
                                <li> <a href="#" class="botton-1"> Profile </a> </li>
                                <li> <a href="{{ route('logout') }}" class="botton-1"> Log out </a> </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </li>
        @else
            <li class="for-inline for-position" style=" position: absolute; right: 20px; top: 1.2%;">
                <div class="main-title">
                    <span> <a href="{{ route('register.show') }}" class="sign-up">Sign up</a> </span>
                    <span> <a href="{{ route('login.show') }}" class="log-in">Log in </a> </span>
            </li>
        @endif
    </ul>

    <span class="continer-top-fls">
        <a class="top-fls-title" href="#">Top Freelancers </a>
        @foreach ($freelancers as $counter => $freelancer)
            <span class="m-l-5 name-top-freelancer"><a href="#"> {{ ++$counter . ' - ' . $freelancer->user->full_name }} </a></span> <span
                class="m-l-5 rate-top-freelancer">4.8</span>
        @endforeach
    </span>


    <div class="pro">Professions</div>
    <div class="continer-professions">
        @foreach ($professions as $profession)
            <div class="pro-con"> {{ $profession->title }} </div>
        @endforeach
        <div class="pro-con"> one </div>
        <div class="pro-con"> one </div>
        <div class="pro-con"> one </div>
        <div class="pro-con"> one </div>
        <div class="pro-con"> one </div>
        <div class="pro-con"> one </div>
        <div class="pro-con"> one </div>
        <div class="pro-con"> one </div>
        <div class="pro-con"> one </div>
        <div class="pro-con"> one </div>
        <div class="pro-con"> one </div>
    </div>

    <div class="pro">Projects</div>
    <div class="continer-professions continer-projects">
        @foreach ($projects as $project)
            <div class="pro-con"> {{ $project->title }} </div>
        @endforeach
        <div class="pro-con"> one </div>
        <div class="pro-con"> one </div>
        <div class="pro-con"> one </div>
        <div class="pro-con"> one </div>
        <div class="pro-con"> one </div>
        <div class="pro-con"> one </div>
        <div class="pro-con"> one </div>
        <div class="pro-con"> one </div>
        <div class="pro-con"> one </div>
        <div class="pro-con"> one </div>
        <div class="pro-con"> one </div>
        <div class="pro-con"> one </div>
    </div>
</body>

</html>
