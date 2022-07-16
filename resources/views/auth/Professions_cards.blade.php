<!DOCTYPE html>
<html lang="en" style="background-color: rgb(186, 195, 195);">

<head>

    <meta charset=" UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;500&family=Roboto+Slab&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;500&family=Roboto+Slab&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{ asset('css/fl.css') }}" rel="stylesheet">
    <link href="{{ asset('css/profession.css') }}" rel="stylesheet">
    <!-- CSS only -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <title>Professions</title>
</head>

<body>

    @include('layouts.nav-bar')

    <!-- card is here -->
    <section class="py-5 section-style mt-5">
        <div class="container">
            <div class="row text-center">
                @foreach ($professions as $profession)
                    <div class="col-md-6 col-lg-4 mb-2">
                        <div class="card text-light" style="background-color: #001b24; height: 100%;">
                            <!-- <div class="container">

                             <-- add image or icon here ----------

                                <div style="display: inline-grid;">
                                    <span class="card-title">
                                        <a href="#" class="navbar-brand text-light name-of-user-hover">
                                            name of user
                                        </a>
                                    </span>
                                    <span class="card-title">
                                        user name
                                    </span>
                                </div>
                            </div> -->
                            <div class="card-body text-center" style="display: flex !important; align-items: center;">

                                <!-- descreption of the profession -->

                                <div class="card-text">
                                    <div class="container">
                                        <div class="col" style="color: #f5ff9f;">
                                            <!-- category belong to the profession -->
                                            <div class="row justify-content-center" style="font-size: 18px !important;">
                                                {{-- <span class="for-size span-number-1 ">Title:</span> --}}
                                                <span
                                                    class="for-size span-number-2 title-des">{{ $profession->title }}</span>
                                            </div>
                                            <div class="row justify-content-center">
                                                <span class="for-size span-number-1">Category:</span>
                                                <span
                                                    class="for-size span-number-2">{{ "\n" . $profession->category->title }}</span>
                                            </div>
                                            <div class="row justify-content-center">
                                                <span class="for-size span-number-1">professional:</span>
                                                <span
                                                    class="for-size span-number-2">{{ $profession->freelancer->user->full_name }}</span>
                                            </div>
                                            <div style="white-space: nowrap;">
                                                <span class="for-size span-number-1">Rating:</span>
                                                @if ($profession->freelancer->rate > 0)
                                                    <span class="fa fa-star checked"
                                                        style="font: normal normal normal 14px/1 FontAwesome !important;"></span>
                                                    {{-- star one --}}
                                                @else
                                                    <span class="fa fa-star not-checked"
                                                        style="font: normal normal normal 14px/1 FontAwesome !important;"></span>
                                                    {{-- star one --}}
                                                @endif
                                                @if ($profession->freelancer->rate > 1)
                                                    <span class="fa fa-star checked"
                                                        style="font: normal normal normal 14px/1 FontAwesome !important;"></span>
                                                    {{-- star two --}}
                                                @else
                                                    <span class="fa fa-star not-checked"
                                                        style="font: normal normal normal 14px/1 FontAwesome !important;"></span>
                                                    {{-- star two --}}
                                                @endif
                                                @if ($profession->freelancer->rate > 2)
                                                    <span class="fa fa-star checked"
                                                        style="font: normal normal normal 14px/1 FontAwesome !important;"></span>
                                                    {{-- star three --}}
                                                @else
                                                    <span class="fa fa-star not-checked"
                                                        style="font: normal normal normal 14px/1 FontAwesome !important;"></span>
                                                    {{-- star three --}}
                                                @endif
                                                @if ($profession->freelancer->rate > 3)
                                                    <span class="fa fa-star checked"
                                                        style="font: normal normal normal 14px/1 FontAwesome !important;"></span>
                                                    {{-- star four --}}
                                                @else
                                                    <span class="fa fa-star not-checked"
                                                        style="font: normal normal normal 14px/1 FontAwesome !important;"></span>
                                                    {{-- star four --}}
                                                @endif
                                                @if ($profession->freelancer->rate > 4)
                                                    <span class="fa fa-star checked"
                                                        style="font: normal normal normal 14px/1 FontAwesome !important;"></span>
                                                    {{-- star five --}}
                                                @else
                                                    <span class="fa fa-star not-checked"
                                                        style="font: normal normal normal 14px/1 FontAwesome !important;"></span>
                                                    {{-- star five --}}
                                                @endif

                                            </div>
                                            <div class="row justify-content-center">
                                                <span class="for-size span-number-1">Price:</span>
                                                <span class="for-size span-number-2">{{ $profession->price }}</span>
                                            </div>
                                            <div class="row justify-content-center mt-3" style="display: block;">
                                                <span class="for-size span-number-1">descreption:</span>
                                                <span
                                                    class="for-size span-number-2">{{ $profession->description }}</span>
                                            </div>
                                            <!-- Profile of the user -->
                                            <a href="{{ route('more_information', $profession) }}"
                                                class="btn btn-info mt-2 btn-font-size">
                                                See more information
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- JavaScript Bundle with Popper -->
    <script src="/js/bootstrap.bundle.min.js"></script>
</body>

</html>
