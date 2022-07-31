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

    <link href="{{ asset('css/fll3.css') }}" rel="stylesheet">
    <link href="{{ asset('css/fl.css') }}" rel="stylesheet">
    <!-- CSS only -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <title>Contact</title>
</head>

<body style="background-color: lightgrey;">

    @include('layouts.nav-bar')

    <!-- alerts Icons -->
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
            <path
                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
        </symbol>
        <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
            <path
                d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
        </symbol>
        <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
            <path
                d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
        </symbol>
    </svg>

    <!-- successful alert -->

    @if (session('message'))
        <div class="alert alert-success d-flex align-items-center mgg" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
                <use xlink:href="#check-circle-fill" />
            </svg>
            <div>
                {{ session('message') }}
            </div>
        </div>
    @endif

    <div class="container bootstrap snippets bootdey mgg">

        <!--=========================================================-->
        <!-- selected chat -->
        <div class="bg-white ">
            <div class="p-5" style="height: 500px !important; overflow: auto;">
                <ul class="chat">
                    {{-- messages's Sender --}}
                    <li class="left clearfix bg-secondary p-2" style="background-color: #5bff0045 !important;">
                        <span class="chat-img pull-left">
                            <img src="https://bootdey.com/img/Content/user_3.jpg" alt="User Avatar">
                        </span>
                        <div class="chat-body clearfix">
                            <div class="header">
                                {{-- name of the sender --}}
                                <strong class="primary-font h5">John Doe</strong>
                                {{-- messgae sent time --}}
                                <small class="pull-right text-muted"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="10" height="10" fill="currentColor" class="bi bi-clock"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                        <path
                                            d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                    </svg>
                                    {{-- here is the time --}}
                                    12 mins ago
                                </small>
                            </div>
                            {{-- the message body --}}
                            <p style="word-break: break-all;" class="h6">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            </p>
                        </div>
                    </li>
                    {{-- message's recever (you always) --}}
                    <li class="right clearfix p-2" style="background-color: #003cff59 !important;">
                        <span class="chat-img pull-right">
                            <img src="https://bootdey.com/img/Content/user_1.jpg" alt="User Avatar">
                        </span>
                        <div class="chat-body clearfix">
                            <div class="header">
                                {{-- Your name --}}
                                <strong class="primary-font h5">Sarah</strong>
                                {{-- messgae sent time --}}
                                <small class="pull-right text-muted"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="10" height="10" fill="currentColor" class="bi bi-clock"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                        <path
                                            d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                    </svg>
                                    {{-- here is the time --}}
                                    13 mins ago
                                </small>
                            </div>
                            {{-- the message body --}}
                            <p style="word-break: break-all;" class="h6">
                                wknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbt
                            </p>
                        </div>
                    </li>
                    {{-- messages's Sender --}}
                    <li class="left clearfix bg-secondary p-2" style="background-color: #5bff0045 !important;">
                        <span class="chat-img pull-left">
                            <img src="https://bootdey.com/img/Content/user_3.jpg" alt="User Avatar">
                        </span>
                        <div class="chat-body clearfix">
                            <div class="header">
                                <strong class="primary-font h5">John Doe</strong>
                                <small class="pull-right text-muted"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="10" height="10" fill="currentColor" class="bi bi-clock"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                        <path
                                            d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                    </svg> 12 mins
                                    ago</small>
                            </div>
                            <p style="word-break: break-all;" class="h6">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            </p>
                        </div>
                    </li>
                    {{-- message's recever (you always) --}}
                    <li class="right clearfix p-2" style="background-color: #003cff59 !important;">
                        <span class="chat-img pull-right">
                            <img src="https://bootdey.com/img/Content/user_1.jpg" alt="User Avatar">
                        </span>
                        <div class="chat-body clearfix">
                            <div class="header">
                                <strong class="primary-font h5">Sarah</strong>
                                <small class="pull-right text-muted"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="10" height="10" fill="currentColor" class="bi bi-clock"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                        <path
                                            d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                    </svg> 13 mins
                                    ago</small>
                            </div>
                            <p style="word-break: break-all;" class="h6">
                                wknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbt
                            </p>
                        </div>
                    </li>
                    {{-- messages's Sender --}}
                    <li class="left clearfix bg-secondary p-2" style="background-color: #5bff0045 !important;">
                        <span class="chat-img pull-left">
                            <img src="https://bootdey.com/img/Content/user_3.jpg" alt="User Avatar">
                        </span>
                        <div class="chat-body clearfix">
                            <div class="header">
                                <strong class="primary-font h5">John Doe</strong>
                                <small class="pull-right text-muted"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="10" height="10" fill="currentColor" class="bi bi-clock"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                        <path
                                            d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                    </svg> 12 mins
                                    ago</small>
                            </div>
                            <p style="word-break: break-all;" class="h6">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            </p>
                        </div>
                    </li>
                    {{-- message's recever (you always) --}}
                    <li class="right clearfix p-2" style="background-color: #003cff59 !important;">
                        <span class="chat-img pull-right">
                            <img src="https://bootdey.com/img/Content/user_1.jpg" alt="User Avatar">
                        </span>
                        <div class="chat-body clearfix">
                            <div class="header">
                                <strong class="primary-font h5">Sarah</strong>
                                <small class="pull-right text-muted"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="10" height="10" fill="currentColor" class="bi bi-clock"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                        <path
                                            d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                    </svg> 13 mins
                                    ago</small>
                            </div>
                            <p style="word-break: break-all;" class="h6">
                                wknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbt
                            </p>
                        </div>
                    </li>
                    {{-- message's recever (you always) --}}
                    <li class="right clearfix p-2" style="background-color: #003cff59 !important;">
                        <span class="chat-img pull-right">
                            <img src="https://bootdey.com/img/Content/user_1.jpg" alt="User Avatar">
                        </span>
                        <div class="chat-body clearfix">
                            <div class="header">
                                <strong class="primary-font h5">Sarah</strong>
                                <small class="pull-right text-muted"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="10" height="10" fill="currentColor" class="bi bi-clock"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                        <path
                                            d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                    </svg> 13 mins
                                    ago</small>
                            </div>
                            <p style="word-break: break-all;" class="h6">
                                wknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbtwknmtbojtnbotjnopenbt
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
            <form action="">
                <div class="bg-white p-3">
                    <div>
                        <textarea style="height: 200px !important;" class="form-control border no-shadow no-rounded"
                            placeholder="Type your message here"></textarea>
                    </div>
                    <div class="input-group-btn text-center my-3">
                        <button class="btn btn-info no-rounded" type="submit">Send
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
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



    <!-- JavaScript Bundle with Popper -->
    <script src=" /js/bootstrap.bundle.min.js"></script>
</body>

</html>
