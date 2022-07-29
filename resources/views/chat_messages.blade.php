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
    <link href="{{ asset('css/fl.css') }}" rel="stylesheet">
    <link href="{{ asset('css/fll.css') }}" rel="stylesheet">
    <!-- CSS only -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <title>Chat</title>
</head>

<body style="background-color: lightgrey;">

    @include('layouts.nav-bar')


    <div class="container-fluid px-4">
        <!-- For demo purpose-->

        <div class="row rounded-lg overflow-hidden shadow mgg mx-2 mb-5">
            <!-- Users box-->
            <div class="col-5 px-0 " style="height: 100% !important;">
                <div class="bg-white">

                    <div class="bg-gray px-4 py-2 bg-light">
                        <p class="h5 mb-0 py-1">My chats
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                class="bi bi-chat-left-dots" viewBox="0 0 16 16">
                                <path
                                    d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                                <path
                                    d="M5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                            </svg>
                        </p>
                    </div>

                    <div class="messages-box" style="height: 534px;">
                        <div class="list-group rounded-0">
                            <a href="#" class="list-group-item list-group-item-action list-group-item-light rounded-0">
                                <div class="media">
                                    {{-- here is the image --}}
                                    <img src="https://bootstrapious.com/i/snippets/sn-chat/avatar.svg" alt="user"
                                        width="50" class="rounded-circle">

                                    <div class="media-body ml-4">
                                        <div class="d-flex align-items-center justify-content-between mb-1">
                                            {{-- name of the user chat --}}
                                            <h6 class="mb-0">ason Doe</h6>
                                            {{-- last date --}}
                                            <small class="small font-weight-bold">

                                                25 Dec
                                            </small>
                                        </div>
                                        {{-- last message --}}
                                        <p class="font-italic mb-0 text-small">Lorem ipsum dolor sit amet, consectetur
                                            adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                                    </div>
                                </div>
                            </a>

                            <a href="#"
                                class="list-group-item list-group-item-action list-group-item-light rounded-0">
                                <div class="media"><img src="https://bootstrapious.com/i/snippets/sn-chat/avatar.svg"
                                        alt="user" width="50" class="rounded-circle">
                                    <div class="media-body ml-4">
                                        <div class="d-flex align-items-center justify-content-between mb-1">
                                            <h6 class="mb-0">Jason Doe</h6><small class="small font-weight-bold">14
                                                Dec</small>
                                        </div>
                                        <p class="font-italic text-muted mb-0 text-small">Lorem ipsum dolor sit amet,
                                            consectetur. incididunt ut labore.</p>
                                    </div>
                                </div>
                            </a>

                            <a href="#"
                                class="list-group-item list-group-item-action list-group-item-light rounded-0">
                                <div class="media"><img src="https://bootstrapious.com/i/snippets/sn-chat/avatar.svg"
                                        alt="user" width="50" class="rounded-circle">
                                    <div class="media-body ml-4">
                                        <div class="d-flex align-items-center justify-content-between mb-1">
                                            <h6 class="mb-0">Jason Doe</h6><small class="small font-weight-bold">9
                                                Nov</small>
                                        </div>
                                        <p class="font-italic text-muted mb-0 text-small">consectetur adipisicing elit,
                                            sed do eiusmod tempor incididunt ut labore.</p>
                                    </div>
                                </div>
                            </a>

                            <a href="#"
                                class="list-group-item list-group-item-action list-group-item-light rounded-0">
                                <div class="media"><img src="https://bootstrapious.com/i/snippets/sn-chat/avatar.svg"
                                        alt="user" width="50" class="rounded-circle">
                                    <div class="media-body ml-4">
                                        <div class="d-flex align-items-center justify-content-between mb-1">
                                            <h6 class="mb-0">Jason Doe</h6><small class="small font-weight-bold">18
                                                Oct</small>
                                        </div>
                                        <p class="font-italic text-muted mb-0 text-small">Lorem ipsum dolor sit amet,
                                            consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.
                                        </p>
                                    </div>
                                </div>
                            </a>

                            <a href="#"
                                class="list-group-item list-group-item-action list-group-item-light rounded-0">
                                <div class="media"><img src="https://bootstrapious.com/i/snippets/sn-chat/avatar.svg"
                                        alt="user" width="50" class="rounded-circle">
                                    <div class="media-body ml-4">
                                        <div class="d-flex align-items-center justify-content-between mb-1">
                                            <h6 class="mb-0">Jason Doe</h6><small class="small font-weight-bold">17
                                                Oct</small>
                                        </div>
                                        <p class="font-italic text-muted mb-0 text-small">consectetur adipisicing elit,
                                            sed do eiusmod tempor incididunt ut labore.</p>
                                    </div>
                                </div>
                            </a>

                            <a href="#"
                                class="list-group-item list-group-item-action list-group-item-light rounded-0">
                                <div class="media"><img src="https://bootstrapious.com/i/snippets/sn-chat/avatar.svg"
                                        alt="user" width="50" class="rounded-circle">
                                    <div class="media-body ml-4">
                                        <div class="d-flex align-items-center justify-content-between mb-1">
                                            <h6 class="mb-0">Jason Doe</h6><small class="small font-weight-bold">2
                                                Sep</small>
                                        </div>
                                        <p class="font-italic text-muted mb-0 text-small">Quis nostrud exercitation
                                            ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    </div>
                                </div>
                            </a>

                            <a href="#"
                                class="list-group-item list-group-item-action list-group-item-light rounded-0">
                                <div class="media"><img src="https://bootstrapious.com/i/snippets/sn-chat/avatar.svg"
                                        alt="user" width="50" class="rounded-circle">
                                    <div class="media-body ml-4">
                                        <div class="d-flex align-items-center justify-content-between mb-1">
                                            <h6 class="mb-0">Jason Doe</h6><small class="small font-weight-bold">30
                                                Aug</small>
                                        </div>
                                        <p class="font-italic text-muted mb-0 text-small">Lorem ipsum dolor sit amet,
                                            consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.
                                        </p>
                                    </div>
                                </div>
                            </a>

                            <a href="#"
                                class="list-group-item list-group-item-action list-group-item-light rounded-0">
                                <div class="media"><img src="https://bootstrapious.com/i/snippets/sn-chat/avatar.svg"
                                        alt="user" width="50" class="rounded-circle">
                                    <div class="media-body ml-4">
                                        <div class="d-flex align-items-center justify-content-between mb-3">
                                            <h6 class="mb-0">Jason Doe</h6><small class="small font-weight-bold">21
                                                Aug</small>
                                        </div>
                                        <p class="font-italic text-muted mb-0 text-small">Lorem ipsum dolor sit amet,
                                            consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.
                                        </p>
                                    </div>
                                </div>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
            <!-- Chat Box-->
            <div class="col-7 px-0">
                <div class="px-4 py-5 chat-box bg-white">
                    <!-- Sender Message-->
                    <div class="media w-50 mb-3"><img src="https://bootstrapious.com/i/snippets/sn-chat/avatar.svg"
                            alt="user" width="50" class="rounded-circle">
                        <div class="media-body ml-3">
                            <div class="bg-light rounded py-2 px-3 mb-2">
                                <p class="text-small mb-0 text-muted">Test which is a new approach all solutions</p>
                            </div>
                            <p class="small text-muted">12:00 PM | Aug 13</p>
                        </div>
                    </div>

                    <!-- Reciever Message-->
                    <div class="media w-50 ml-auto mb-3">
                        <div class="media-body">
                            <div class="bg-primary rounded py-2 px-3 mb-2">
                                <p class="text-small mb-0 text-white">Test which is a new approach to have all
                                    solutions</p>
                            </div>
                            <p class="small text-muted">12:00 PM | Aug 13</p>
                        </div>
                    </div>

                    <!-- Sender Message-->
                    <div class="media w-50 mb-3"><img src="https://bootstrapious.com/i/snippets/sn-chat/avatar.svg"
                            alt="user" width="50" class="rounded-circle">
                        <div class="media-body ml-3">
                            <div class="bg-light rounded py-2 px-3 mb-2">
                                <p class="text-small mb-0 text-muted">Test, which is a new approach to have</p>
                            </div>
                            <p class="small text-muted">12:00 PM | Aug 13</p>
                        </div>
                    </div>

                    <!-- Reciever Message-->
                    <div class="media w-50 ml-auto mb-3">
                        <div class="media-body">
                            <div class="bg-primary rounded py-2 px-3 mb-2">
                                <p class="text-small mb-0 text-white">Apollo University, Delhi, India Test</p>
                            </div>
                            <p class="small text-muted">12:00 PM | Aug 13</p>
                        </div>
                    </div>

                    <!-- Sender Message-->
                    <div class="media w-50 mb-3"><img src="https://bootstrapious.com/i/snippets/sn-chat/avatar.svg"
                            alt="user" width="50" class="rounded-circle">
                        <div class="media-body ml-3">
                            <div class="bg-light rounded py-2 px-3 mb-2">
                                <p class="text-small mb-0 text-muted">Test, which is a new approach</p>
                            </div>
                            <p class="small text-muted">12:00 PM | Aug 13</p>
                        </div>
                    </div>

                    <!-- Reciever Message-->
                    <div class="media w-50 ml-auto mb-3">
                        <div class="media-body">
                            <div class="bg-primary rounded py-2 px-3 mb-2">
                                <p class="text-small mb-0 text-white">Apollo University, Delhi, India Test</p>
                            </div>
                            <p class="small text-muted">12:00 PM | Aug 13</p>
                        </div>
                    </div>

                </div>

                <!-- Typing area -->
                <form action="#" class="bg-light">
                    <div class="input-group">
                        <input type="text" placeholder="Type a message" aria-describedby="button-addon2"
                            class="form-control rounded-0 border-0 py-4 bg-light">
                        <div class="input-group-append d-flex px-3">
                            <button id="button-addon2" type="submit" class="btn btn-link">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                    fill="currentColor" class="bi bi-send-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 3.178 4.995.002.002.26.41a.5.5 0 0 0 .886-.083l6-15Zm-1.833 1.89L6.637 10.07l-.215-.338a.5.5 0 0 0-.154-.154l-.338-.215 7.494-7.494 1.178-.471-.47 1.178Z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>


    {{-- <div class="page-content page-container" id="page-content">
        <div class="padding">
            <div class="row container d-flex justify-content-center">
                <div class="col-md-6">
                    <div class="card card-bordered">
                        <div class="card-header">
                            <h4 class="card-title"><strong>Chat</strong></h4>
                            <a class="btn btn-xs btn-secondary" href="#" data-abc="true">Let's Chat App</a>
                        </div>


                        <div class="ps-container ps-theme-default ps-active-y" id="chat-content"
                            style="overflow-y: scroll !important; height:400px !important;">
                            <div class="media media-chat">
                                <img class="avatar"
                                    src="https://img.icons8.com/color/36/000000/administrator-male.png"
                                    alt="...">
                                <div class="media-body">
                                    <p>Hi</p>
                                    <p>How are you ...???</p>
                                    <p>What are you doing tomorrow?<br> Can we come up a bar?</p>
                                    <p class="meta"><time datetime="2018">23:58</time></p>
                                </div>
                            </div>

                            <div class="media media-meta-day">Today</div>

                            <div class="media media-chat media-chat-reverse">
                                <div class="media-body">
                                    <p>Hiii, I'm good.</p>
                                    <p>How are you doing?</p>
                                    <p>Long time no see! Tomorrow office. will be free on sunday.</p>
                                    <p class="meta"><time datetime="2018">00:06</time></p>
                                </div>
                            </div>

                            <div class="media media-chat">
                                <img class="avatar"
                                    src="https://img.icons8.com/color/36/000000/administrator-male.png"
                                    alt="...">
                                <div class="media-body">
                                    <p>Okay</p>
                                    <p>We will go on sunday? </p>
                                    <p class="meta"><time datetime="2018">00:07</time></p>
                                </div>
                            </div>

                            <div class="media media-chat media-chat-reverse">
                                <div class="media-body">
                                    <p>That's awesome!</p>
                                    <p>I will meet you Sandon Square sharp at 10 AM</p>
                                    <p>Is that okay?</p>
                                    <p class="meta"><time datetime="2018">00:09</time></p>
                                </div>
                            </div>

                            <div class="media media-chat">
                                <img class="avatar"
                                    src="https://img.icons8.com/color/36/000000/administrator-male.png"
                                    alt="...">
                                <div class="media-body">
                                    <p>Okay i will meet you on Sandon Square </p>
                                    <p class="meta"><time datetime="2018">00:10</time></p>
                                </div>
                            </div>

                            <div class="media media-chat media-chat-reverse">
                                <div class="media-body">
                                    <p>Do you have pictures of Matley Marriage?</p>
                                    <p class="meta"><time datetime="2018">00:10</time></p>
                                </div>
                            </div>

                            <div class="media media-chat">
                                <img class="avatar"
                                    src="https://img.icons8.com/color/36/000000/administrator-male.png"
                                    alt="...">
                                <div class="media-body">
                                    <p>Sorry I don't have. i changed my phone.</p>
                                    <p class="meta"><time datetime="2018">00:12</time></p>
                                </div>
                            </div>

                            <div class="media media-chat media-chat-reverse">
                                <div class="media-body">
                                    <p>Okay then see you on sunday!!</p>
                                    <p class="meta"><time datetime="2018">00:12</time></p>
                                </div>
                            </div>

                            <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;">
                                <div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                            </div>
                            <div class="ps-scrollbar-y-rail" style="top: 0px; height: 0px; right: 2px;">
                                <div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 2px;"></div>
                            </div>
                        </div>

                        <div class="publisher bt-1 border-light">
                            <img class="avatar avatar-xs"
                                src="https://img.icons8.com/color/36/000000/administrator-male.png" alt="...">
                            <input class="publisher-input" type="text" placeholder="Write something">
                            <span class="publisher-btn file-group">
                                <i class="fa fa-paperclip file-browser"></i>
                                <input type="file">
                            </span>
                            <a class="publisher-btn" href="#" data-abc="true"><i class="fa fa-smile"></i></a>
                            <a class="publisher-btn text-info" href="#" data-abc="true"><i
                                    class="fa fa-paper-plane"></i></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div> --}}



    <!-- JavaScript Bundle with Popper -->
    <script src=" /js/bootstrap.bundle.min.js"></script>

</body>

</html>
