<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" style="background-color: lightgrey;">

<head>

    @include('layouts.head')

    <!-- CSS only -->
    <link href="{{ asset('css/fl.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <title>My_notifications</title>

</head>

<body style="background-color: lightgrey;">

    @include('layouts.nav-bar')


    <section class="mgg container mb-3" id="general">

        <div class="h2 rounded border border-3 bg-light p-2 m-0">
            Notifications
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                class="bi bi-bell-fill" viewBox="0 0 16 16">
                <path
                    d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z" />
            </svg>
        </div>
        <section class="bg-light rounded border border-1">

            {{-- if there is no nots yet --}}
            {{-- <div class="text-uppercase h1 p-5 text-center">No notifications yet</div> --}}

            {{-- else there is 1 or more nots --}}


            {{-- this is the new one --}}



            {{-- if there is more than 5 nots then collapse them here --}}
            @foreach ($notifications as $notification)
                @if ($notification->type != 'message')
                    <div class="px-3 pt-3 m-2 border border-secondary p-2 mb-2 border-opacity-25 " id="rr">
                        {{-- message from who ? --}}

                        <div class="d-flex" style="justify-content: space-between; align-items: center;">
                            <span class="h4 text-danger">{{ $notification->title }}</span>
                            <span
                                class="h6 rounded-2 p-1 text-secondary">{{ \Carbon\Carbon::parse($notification->created_at)->diffForHumans() }}</span>
                        </div>
                        <div class="h6 border-bottom border-secondary pb-3"
                            style="word-break: break-word; --bs-border-opacity: .5;">
                            {{ $notification->content }} </div>

                        {{-- if reject the applay --}}
                        @if ($notification->status == 1)
                            <div class="h5 text-info">You reject the applay</div>
                            {{-- if accept the applay --}}
                        @elseif ($notification->status == 2)
                            <div class="h5 text-info">You accept the applay</div>
                        @else
                            <div class="text-start">
                                Do you want to Accept this Apply ?
                            </div>
                            <div class="text-end">
                                <form action="{{ route('confirm', $notification->id) }}">
                                    <input id="no{{ $notification->id }}" type="radio" class="btn-check"
                                        name="options_outlined" autocomplete="no" value="no">
                                    <label class="btn btn-outline-danger" for="no{{ $notification->id }}">No</label>

                                    <input id="yes{{ $notification->id }}" type="radio" class="btn-check"
                                        name="options_outlined" autocomplete="yes" value="yes">
                                    <label class="btn btn-outline-success" for="yes{{ $notification->id }}">Yes</label>
                                    <button type="submit" class="px-4 mx-2 mt-2 btn btn-danger">Confirm</button>
                                </form>
                            </div>
                        @endif

                    </div>
                @else
                    <div class="px-3 pt-3 m-2 border border-secondary p-2 mb-2 border-opacity-25 @if ($loop->iteration > 3) collapse @endif"
                        @if ($loop->iteration > 3) id = "collapseExample1" @endif>
                        <a class="text-decoration-none" href="{{ route('contact_me', $notification->reciver_id) }}">
                            {{-- message from who ? --}}
                            <div class="d-flex " style="justify-content: space-between; align-items: center;">
                                <span class="h4 text-danger">{{ $notification->title }}</span>
                                <span
                                    class="h6 rounded-2 p-1 text-secondary">{{ \Carbon\Carbon::parse($notification->created_at)->diffForHumans() }}</span>
                            </div>
                            <div class="h6 text-dark" style="word-break: break-word;">
                                {{ $notification->content }}
                            </div>
                        </a>
                    </div>
                @endif
            @endforeach


            <button class="btn btn-link text-end" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample">
                View more
            </button>


        </section>


    </section>

    {{-- Footer here --}}
    @include('layouts.footer')


</body>

</html>
