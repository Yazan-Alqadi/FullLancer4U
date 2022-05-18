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
    <ul class="unor-li">
        <li class="for-inline"><a href="#" class="main-title">Fullancer4U </a></li>
        <li class="search-par for-inline"><input type="search" class="se-pa" placeholder="Search"></li>
        <li class="for-inline" style="margin-left: 5%;"><a href="#" class="categories">Categories</a></li>
        <li class="for-inline"><a href="#" class="professions">Professions</a></li>
        <li class="for-inline"><a href="#" class="freealncers">Freealncers</a></li>
        <li class="for-inline"><a href="#" class="projects">Projects</a></li>

        @if (session('user'))
            <li class="for-inline" style="margin-left: 13%;"><a class="sign-up"
                    href="#">{{ session('user') }}</a></li>
        @else
            <li class="for-inline" style="margin-left: 13%;"><a class="sign-up"
                    href="{{ route('register.show') }}"> Sign up</a></li>
            <li class="for-inline"><a href="{{ route('login.show') }}" class="log-in">Log in </a></li>
        @endif

    </ul>
    <span class="continer-top-fls">
        <a class="top-fls-title" href="#">Top Freelancers </a>
        @foreach ($freelancers as $counter => $freelancer)
            <div class="m-l-10">{{ ++$counter . ' - ' . $freelancer->user->full_name }}</div>
        @endforeach
    </span>

    <span class="continer-your-fav">
        <a class="your-fav-title" href="#">Your Favorits</a>
        <div class="m-l-10">1 .........</div>
        <div class="m-l-10">2 .........</div>
        <div class="m-l-10">3 .........</div>
        <div class="m-l-10">4 .........</div>
        <div class="m-l-10">5 .........</div>
        <div class="m-l-10">6 .........</div>
        <div class="m-l-10">7 .........</div>
        <div class="m-l-10">8 .........</div>
        <div class="m-l-10">9 .........</div>
        <div class="m-l-10">10 .........</div>
        <div class="m-l-10">11 .........</div>
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
