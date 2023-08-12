<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" style="background-color: lightgrey;">

<head>

    @include('layouts.head')

    <!-- CSS only -->
    <link href="{{ asset('css/fl.css') }}" rel="stylesheet">
    @livewireStyles

    {{-- for font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,400;1,200;1,300&display=swap"
        rel="stylesheet">

    <title>Jobs_gallery</title>

</head>

<body style="background-color: #ab6f6f;">

    @include('layouts.nav-bar-gallery')

    <div class="row mx-1">
        <div class="container col-lg-9 col-md-10">
            <section class="bg-light text-dark p-3 rounded mgg">
                <div class="border-bottom border-dark px-3 h5 py-1"
                    style="display: flex;justify-content: space-between;">
                    <span class="text-start" style="font-family: 'Josefin Sans', sans-serif;">
                        Jobs Gallery
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                            class="bi bi-stars" viewBox="0 0 16 16">
                            <path
                                d="M7.657 6.247c.11-.33.576-.33.686 0l.645 1.937a2.89 2.89 0 0 0 1.829 1.828l1.936.645c.33.11.33.576 0 .686l-1.937.645a2.89 2.89 0 0 0-1.828 1.829l-.645 1.936a.361.361 0 0 1-.686 0l-.645-1.937a2.89 2.89 0 0 0-1.828-1.828l-1.937-.645a.361.361 0 0 1 0-.686l1.937-.645a2.89 2.89 0 0 0 1.828-1.828l.645-1.937zM3.794 1.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387A1.734 1.734 0 0 0 4.593 5.69l-.387 1.162a.217.217 0 0 1-.412 0L3.407 5.69A1.734 1.734 0 0 0 2.31 4.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387A1.734 1.734 0 0 0 3.407 2.31l.387-1.162zM10.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732L9.1 2.137a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L10.863.1z" />
                        </svg>
                    </span>
                    <span class="text-end fs-6">
                        <a href="{{ route('edit_gallery_info') }}" style="color: #5e1155;">Edit info profile
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path
                                    d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                <path fill-rule="evenodd"
                                    d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                            </svg>
                        </a>
                    </span>
                </div>

                <div class="div-profile-image">
                    <!-- if user does not have photo display icon -->

                    @if (Auth::user()->image === null)
                        <div class="container my-5" style="text-align: center;">

                            <label class="btn" for="file-upload" style="border-radius: 23%;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100"
                                    style="    color: #5e1155;" fill="currentColor" class="bi bi-person-circle"
                                    viewBox="3 3 10 10">
                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                    <path fill-rule="evenodd"
                                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />

                                </svg>
                            </label>
                            <input type="file" id="file-upload" class="d-none">
                        </div>


                        <!-- here put the image if user have one already -->
                    @else
                        <div class="profile-image rounded-circle mx-auto d-block m-3"
                            style="background-image: url({{ Auth::user()->image }});">
                        </div>
                    @endif

                    {{-- name of the user --}}
                    <div class="text-center">{{ Auth::user()->full_name }}</div>
                    {{-- BIO --}}
                    <div class="text-center py-1">{{ Auth::user()->bio }}</div>

                    <div class="border-bottom border-dark px-3"></div>

                    {{-- Links --}}
                    @forelse ($accounts as $acc)
                        @if ($acc['account'] == 'facebook')
                            <div style="display: flex; align-items: baseline; justify-content: space-between;"
                                class="my-2">
                                {{-- Facebook account --}}
                                <span class="text-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        style="color: #5e1155;" fill="currentColor" class="bi bi-facebook"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                                    </svg>
                                    <a href="{{ $acc['link'] }}"
                                        class="ms-1 text-decoration-none fst-italic text-secondary" target='_blank'>
                                        {{ $acc['user_name'] }}
                                    </a>
                                </span>
                            </div>
                        @elseif ($acc['account'] == 'linkedIn')
                            {{-- LinkedIn account --}}
                            <div class="text-start my-2"
                                style="display: flex; align-items: baseline; justify-content: space-between;">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" style="color: #5e1155;" class="bi bi-linkedin"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
                                    </svg>
                                    <a href="{{ $acc['link'] }}"
                                        class="ms-1 text-decoration-none fst-italic text-secondary" target='_blank'>
                                        {{ $acc['user_name'] }}
                                    </a>
                                </span>
                            </div>

                            {{-- Instagram account --}}
                        @elseif ($acc['account'] == 'instagram')
                            <div class="text-start my-2"
                                style="display: flex; align-items: baseline; justify-content: space-between;">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" style="color: #5e1155;" class="bi bi-instagram"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                                    </svg>
                                    <a href="{{ $acc['link'] }}"
                                        class="ms-1 text-decoration-none fst-italic text-secondary" target='_blank'>
                                        {{ $acc['user_name'] }}
                                    </a>
                                </span>
                            </div>
                            {{-- Twitter account --}}
                        @elseif ($acc['account'] == 'twitter')
                            <div class="text-start my-2"
                                style="display: flex; align-items: baseline; justify-content: space-between;">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" style="color: #5e1155;" class="bi bi-twitter"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                                    </svg>
                                    <a href="{{ $acc['link'] }}"
                                        class="ms-1 text-decoration-none fst-italic text-secondary" target='_blank'>
                                        {{ $acc['user_name'] }}
                                    </a>
                                </span>
                            </div>
                        @endif
                    @empty
                        <p>There is no accounts for this user</p>
                    @endforelse

                    <div class="border-bottom border-dark px-3 pt-3"></div>

                    {{-- create post --}}
                    <div>
                        <span>Do you have any thoghts..?</span>
                        <button class="btn text-secondary m-3" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasBottom-1" aria-controls="offcanvasWithBothOptions">
                            create post
                        </button>
                    </div>

                    <div class="offcanvas offcanvas-bottom rounded-3" tabindex="-1" id="offcanvasBottom-1"
                        aria-labelledby="offcanvasWithBothOptionsLabel"
                        style="right: 18%;left: 18%;bottom: 35%;height: 50%;overflow: auto;">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasBottomLabel">Create post</h5>
                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                        </div>
                        <form action="{{ route('addpost') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            {{-- Add text to the post --}}
                            <div class="offcanvas-body small">
                                <div class="mb-2">Type text here</div>
                                <textarea name="text" type="text" class="form-control font-ar" style="height: 100px !important;"
                                    aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" id="exampleFormControlInput100"
                                    placeholder="Type here..."></textarea>
                            </div>
                            {{-- Add photo --}}
                            <div>
                                <label class="mx-3 btn" for="photo-upload"> Add photo </label>
                                <div class="input-group">
                                    <input type="file" name="image" class="form-control d-none"
                                        id="photo-upload" aria-describedby="inputGroupFileAddon04"
                                        aria-label="Upload" onchange="setphoto(event)">
                                </div>
                                <img src="" alt="choose photo" id="num1"
                                    style="width: 80%;margin-left: 10%;"> </img>
                            </div>
                            {{-- Submit button --}}
                            <div class="text-center">
                                <button class="btn p-1 my-2" type="submit"
                                    style="background-color: #5e1155;border-color: #5e1155; color: antiquewhite;">submit</button>
                            </div>
                        </form>

                    </div>



                    {{-- posts --}}

                    @forelse ($posts as $post)
                        <section class="my-4">
                            <div class="border my-4 p-3 border-dark rounded" style="--bs-border-opacity: .5;">



                                {{-- head of the post --}}
                                <div class="d-flex" style="justify-content :space-between; align-items: baseline;">


                                    <!-- if user does not have photo display icon -->

                                    @if ($post->user->image === null)
                                        <div class="profile-icon-post mb-3" style="text-align: center; ">

                                            <span class="user-name-post">{{ $post->user->full_name }}</span>
                                            <span class="time-post">{{ $post->created_at->diffForHumans() }}</span>

                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                                    style="color: #5e1155; left: 0%; position: relative; top: -40px;"
                                                    fill="currentColor" class="bi bi-person-circle"
                                                    viewBox="3 3 10 10">
                                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                                    <path fill-rule="evenodd"
                                                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                                </svg>
                                            </span>
                                        </div>
                                    @else
                                        <!-- here put the image if user have one already -->

                                        <div class="profile-image-post rounded-circle d-block m-3"
                                            style="background-image: url({{ asset($post->user->image) }}); ">

                                            <span class="user-name-post">{{ $post->user->full_name }}</span>
                                            <span class="time-post">{{ $post->created_at->diffForHumans() }}</span>

                                        </div>
                                    @endif

                                    {{-- Menu --}}
                                    <div class="menu-post">
                                        <!-- Default dropstart button -->
                                        <div class="btn-group dropstart">

                                            <button type="button" class="btn btn-secondary rounded"
                                                style="color: #ab6f6f; background-color: #5e1155;"
                                                data-bs-toggle="dropdown" aria-expanded="false">

                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-list-ul" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd"
                                                        d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm-3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                                                </svg>
                                            </button>

                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item" href="{{ route('delete_post',$post->id) }}" type="button">Delete Post
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" fill="currentColor" class="bi bi-save2"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M2 1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H9.5a1 1 0 0 0-1 1v4.5h2a.5.5 0 0 1 .354.854l-2.5 2.5a.5.5 0 0 1-.708 0l-2.5-2.5A.5.5 0 0 1 5.5 6.5h2V2a2 2 0 0 1 2-2H14a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h2.5a.5.5 0 0 1 0 1H2z" />
                                                        </svg>
                                                    </a>
                                                </li>

                                                <li>
                                                    <button class="dropdown-item disabled" type="button">Report post
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" fill="currentColor"
                                                            class="bi bi-megaphone" viewBox="0 0 16 16">
                                                            <path
                                                                d="M13 2.5a1.5 1.5 0 0 1 3 0v11a1.5 1.5 0 0 1-3 0v-.214c-2.162-1.241-4.49-1.843-6.912-2.083l.405 2.712A1 1 0 0 1 5.51 15.1h-.548a1 1 0 0 1-.916-.599l-1.85-3.49a68.14 68.14 0 0 0-.202-.003A2.014 2.014 0 0 1 0 9V7a2.02 2.02 0 0 1 1.992-2.013 74.663 74.663 0 0 0 2.483-.075c3.043-.154 6.148-.849 8.525-2.199V2.5zm1 0v11a.5.5 0 0 0 1 0v-11a.5.5 0 0 0-1 0zm-1 1.35c-2.344 1.205-5.209 1.842-8 2.033v4.233c.18.01.359.022.537.036 2.568.189 5.093.744 7.463 1.993V3.85zm-9 6.215v-4.13a95.09 95.09 0 0 1-1.992.052A1.02 1.02 0 0 0 1 7v2c0 .55.448 1.002 1.006 1.009A60.49 60.49 0 0 1 4 10.065zm-.657.975 1.609 3.037.01.024h.548l-.002-.014-.443-2.966a68.019 68.019 0 0 0-1.722-.082z" />
                                                        </svg>
                                                    </button>
                                                </li>

                                                <li>
                                                    <button class="dropdown-item" type="button"
                                                        style="font-size: 12px;">Sexual violent </button>
                                                </li>

                                                <li>
                                                    <button class="dropdown-item" type="button"
                                                        style="font-size: 12px;">wrong information </button>
                                                </li>

                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>

                                                <li>
                                                    <button class="dropdown-item" type="button">
                                                        Copy link
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>




                                </div>

                                {{-- body of the post --}}
                                <div>
                                    {{ $post->text }}
                                </div>

                                {{-- image of the post if existis --}}
                                <div class="d-inline-block mt-3" style="width: 100%;height: 400px;">
                                    <img src="{{ $post->image }}" style="width: 100%;height: 100%;">
                                </div>

                                {{-- reactions section --}}
                                @livewire('reactions', ['post_id' => $post->id])

                                <div class="my-1 text-center">
                                    <button class="btn" type="button" data-bs-toggle="offcanvas"
                                        data-bs-target="#offcanvasRight-1" aria-controls="offcanvasRight"
                                        style="background-color: #5e1155;border-color: #5e1155; color: antiquewhite;">Write
                                        Comment</button>

                                </div>
                                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight-1"
                                    aria-labelledby="offcanvasRightLabel">
                                    <div class="offcanvas-header">
                                        <h5 class="offcanvas-title" id="offcanvasRightLabel">Write Comment in this
                                            post</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="offcanvas-body">
                                        <form action="#" method="POST" enctype="multipart/form-data">
                                            {{-- Add text to the post --}}
                                            <div class="offcanvas-body small">
                                                <div class="mb-2">Type text here</div>
                                                <textarea name="text" type="text" class="form-control font-ar" style="height: 100px !important;"
                                                    aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" id="exampleFormControlInput100"
                                                    placeholder="Type here..."></textarea>
                                            </div>
                                            {{-- Add photo --}}
                                            <div>
                                                <label class="mx-3 btn" for="photo-upload"> Add photo </label>
                                                <div class="input-group">
                                                    <input type="file" name="image" class="form-control d-none"
                                                        id="photo-upload" aria-describedby="inputGroupFileAddon04"
                                                        aria-label="Upload" onchange="setphoto(event)">
                                                </div>
                                                <img src="" alt="choose photo" id="num1"
                                                    style="width: 80%;margin-left: 10%;">
                                                </img>
                                            </div>
                                            {{-- Submit button --}}
                                            <div class="text-center">
                                                <button class="btn p-1 my-2" type="submit"
                                                    style="background-color: #5e1155;border-color: #5e1155; color: antiquewhite;">submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>


                        </section>
                    @empty
                        <p>There is no posts</p>
                    @endforelse

            </section>
        </div>
    </div>

    {{-- Footer here --}}
    @include('layouts.footer')

    @livewireScripts

</body>

</html>
