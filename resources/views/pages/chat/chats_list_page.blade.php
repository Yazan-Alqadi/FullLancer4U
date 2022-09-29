<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" style="background-color: lightgrey;">

<head>

    @include('layouts.head')

    <!-- CSS only -->

    <link href="{{ asset('css/fl.css') }}" rel="stylesheet">
    <link href="{{ asset('css/fll.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <title>Chat</title>

</head>

<body style="background-color: lightgrey;">

@include('layouts.nav-bar')


<div class="container-fluid px-4">
    <!-- For demo purpose-->

    <div class="rounded-lg overflow-hidden shadow mgg mx-2 mb-5">
        <!-- Users box-->
        <div class="5 px-0 " style="height: 100% !important;">
            <div class="bg-white">

                <div class="bg-gray px-4 py-2 bg-light d-flex" style="justify-content: space-between;">
                        <span class="h5 mb-0 py-1">
                            My chats
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                 class="bi bi-chat-left-dots" viewBox="0 0 16 16">
                                <path
                                    d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                                <path
                                    d="M5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                            </svg>
                        </span>

                    {{-- if there is no chat yet --}}
                    @if (count($threads) < 1)
                        <span class="text-warning"> No chats yet </span>
                    @endif

                </div>


                <div class="messages-box" style="height: 534px;">
                    <div class="list-group rounded-0">
                        @foreach ($threads as $thread)
                            <a href="{{ route('contact_me', $thread->reciever->id==Auth::id() ?
                                    $thread->sender->id : $thread->reciever->id
                                    ) }}"
                               class="list-group-item list-group-item-action list-group-item-light rounded-0">
                                <div class="media">
                                    {{-- here is the image --}}
                                    <img src="https://bootstrapious.com/i/snippets/sn-chat/avatar.svg"
                                         alt="user" width="50" class="rounded-circle">

                                    <div class="media-body ml-4">
                                        <div class="d-flex align-items-center justify-content-between mb-1">
                                            {{-- name of the user chat --}}
                                            <h6 class="mb-0">{{ $thread->reciever->id==Auth::id() ?
                                                    $thread->sender->full_name : $thread->reciever->full_name }}</h6>
                                            {{-- last date --}}
                                            <small class="small font-weight-bold">
                                                {{ \Carbon\Carbon::parse($thread->updated_at)->diffForHumans() }}
                                            </small>
                                        </div>
                                        {{-- last message --}}
                                        <p class="font-italic mb-0 text-small">{{ $thread->messages->last()->body }}
                                        </p>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

    </div>


</div>



{{-- Footer here --}}
@include('layouts.footer')



<!-- JavaScript Bundle with Popper -->
<script src="{{asset('/js/bootstrap.bundle.min.js')}}"></script>

</body>

</html>
