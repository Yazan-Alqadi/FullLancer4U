<link rel="stylesheet" type="text/css" href="/css/bootstrap-notifications.min.css">

<div class="navbar navbar-expand-lg bg-dark navbar-dark text-light fixed-top">
    <div class="container justify-content-between">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#search-par"
            aria-expanded="true">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a href="{{ route('home') }}" class="navbar-brand text-info navbar-title-hover">Fullancer4U</a>


        <form class="form-inline collapse navbar-collapse" id="search-par">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-info my-2 my-sm-0" type="submit"><svg xmlns="http://www.w3.org/2000/svg"
                    width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path
                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                </svg></button>
        </form>



        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainmenu"
            aria-expanded="true">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="mainmenu">
            <ul class="navbar-nav ms-1">

                <li class="nav-item h6"><a href="{{ route('professions.index') }}"
                        class="nav-link in-hover">Services</a>
                </li>
                <li class="nav-item h6"><a href="{{ route('freelancers.index') }}"
                        class="nav-link in-hover">Freealncers</a></li>
                <li class="nav-item h6"><a href="{{ route('projects.index') }}" class="nav-link in-hover">Projects</a>
                </li>
                {{-- Bacome freelancer --}}

                @php
                    $tmp = \App\Models\Freelancer::all()->where('user_id', Auth::id());
                @endphp

                @if (count($tmp) < 1)
                    <li> <a href="{{ route('become_freelancer') }}"
                            class="nav-link in-hover-t text-warning fw-bold">Become Freelancer</a></li>
                @endif

                @auth
                    {{-- Notification --}}
                    <li>
                        <div class="btn-group">
                            <button type="button" class="btn btn-dark dropdown-toggle py-1 px-2" data-bs-toggle="dropdown"
                                data-bs-display="static" aria-expanded="false">
                                {{-- number of nots --}}
                                {{-- if there is no nots yet --}}
                                {{-- <span class="text-dark border rounded-pill bg-light m-1 p-1 h4">0 <svg
                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-bell-slash-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M5.164 14H15c-1.5-1-2-5.902-2-7 0-.264-.02-.523-.06-.776L5.164 14zm6.288-10.617A4.988 4.988 0 0 0 8.995 2.1a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 7c0 .898-.335 4.342-1.278 6.113l9.73-9.73zM10 15a2 2 0 1 1-4 0h4zm-9.375.625a.53.53 0 0 0 .75.75l14.75-14.75a.53.53 0 0 0-.75-.75L.625 15.625z" />
                                    </svg></span> --}}
                                {{-- if there is 1 or more nots --}}
                                <span class="text-dark border rounded-pill bg-danger py-1 px-2 h4">1 <svg
                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-bell-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z" />
                                    </svg></span>

                            </button>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start-end ">
                                {{-- if there is no nots yet --}}
                                {{-- <li><div class="text-uppercase h6 p-2 text-center" style="width: 300px">No notifications yet</div></li> --}}

                                {{-- else there is 1 or more nots --}}
                                <li class="text-end"> <button type="" class="btn btn-link f-s-li-nots"> mark all as readed</button></li>
                                <li>
                                    <div class="px-3 pt-3 m-2 border border-secondary p-2 mb-2 border-opacity-25 fs-6" style="width: 450px">
                                    {{-- message from who ? --}}
                                    <div class="d-flex" style="justify-content: space-between; align-items: center;">
                                        <span class="fs-5 text-danger">Message from Admin</span>
                                        <span class=" rounded-2 p-1 text-secondary">From 4min ago</span>
                                    </div>
                                    <div class="">
                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deserunt quasi magni
                                        consequatur unde
                                        deleniti sint possimus architecto totam corporis, quidem modi explicabo! Praesentium
                                        reprehenderit,
                                        saepe odio aperiam pariatur id a?
                                    </div>
                                </div>
                                </li>
                                <br>
                                <li><a class="btn btn-link f-s-li-nots" href="{{ route('my_notification') }}">show all
                                        notifications</a></li>
                            </ul>
                        </div>
                    </li>
                @endauth


            </ul>
            @auth
                <div class="navbar-nav ms-auto dropdown">

                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                            <path fill-rule="evenodd"
                                d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                        </svg>
                        <span class="containar">{{ Auth::user()->full_name }}</span>
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="#navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="{{ route('profile') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-person-badge" viewBox="0 0 16 16">
                                    <path
                                        d="M6.5 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3zM11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                    <path
                                        d="M4.5 0A2.5 2.5 0 0 0 2 2.5V14a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2.5A2.5 2.5 0 0 0 11.5 0h-7zM3 2.5A1.5 1.5 0 0 1 4.5 1h7A1.5 1.5 0 0 1 13 2.5v10.795a4.2 4.2 0 0 0-.776-.492C11.392 12.387 10.063 12 8 12s-3.392.387-4.224.803a4.2 4.2 0 0 0-.776.492V2.5z" />
                                </svg>
                                Profile
                            </a>
                        </li>
                        @if (count($tmp) > 0)
                            <li><a class="dropdown-item" href="{{ route('become_freelancer') }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-patch-plus-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01-.622-.636zM8.5 6v1.5H10a.5.5 0 0 1 0 1H8.5V10a.5.5 0 0 1-1 0V8.5H6a.5.5 0 0 1 0-1h1.5V6a.5.5 0 0 1 1 0z" />
                                    </svg>
                                    Add new service
                                </a>
                            </li>
                        @endif
                        <li><a class="dropdown-item" href="{{ route('contact') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-chat-dots-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M16 8c0 3.866-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7zM5 8a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                                </svg>
                                My Contacts
                            </a>
                        </li>
                        <li><a class="dropdown-item" href="{{ route('logout') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-arrow-left-square-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M16 14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12zm-4.5-6.5H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5a.5.5 0 0 0 0-1z" />
                                </svg>
                                Log out
                            </a>
                        </li>
                    </ul>
                </div>
            @else
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a href="{{ route('register.show') }}" class="nav-link">Sign
                            Up</a></li>
                    <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Log
                            in</a></li>
                </ul>
            @endauth


        </div>
    </div>
</div>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://js.pusher.com/7.1/pusher.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
    integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
</script>


<script type="text/javascript">
    var notificationsWrapper = $('.dropdown-notifications');
    var notificationsToggle = notificationsWrapper.find('a[data-toggle]');
    var notificationsCountElem = notificationsToggle.find('i[data-count]');
    var notificationsCount = parseInt(notificationsCountElem.data('count'));
    var notifications = notificationsWrapper.find('ul.dropdown-menu');

    if (notificationsCount <= 0) {
        // notificationsWrapper.hide();
    }

    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('c8e5a10ba21a1531fe1f', {
        cluster: 'ap2'
    });

    // Subscribe to the channel we specified in our Laravel Event
    var channel = pusher.subscribe('new-message' + {{ Auth::user()->id ?? ' ' }});

    // Bind a function to a Event (the full Laravel class)
    channel.bind('my', function(data) {
        var existingNotifications = notifications.html();
        var avatar = Math.floor(Math.random() * (71 - 20 + 1)) + 20;
        var newNotificationHtml = `
          <li class="notification active">
              <div class="media">
                <div class="media-left">
                  <div class="media-object">
                    <img src="https://api.adorable.io/avatars/71/` + avatar + `.png" class="img-circle" alt="50x50" style="width: 50px; height: 50px;">
                  </div>
                </div>
                <div class="media-body">
                  <strong class="notification-title"> message from ` + data.username + `</strong>
                  <!--p class="notification-desc">Extra description can go here</p-->
                  <div class="notification-meta">
                    <small class="timestamp">about a minute ago</small>
                  </div>
                </div>
              </div>
          </li>
        `;
        notifications.html(newNotificationHtml + existingNotifications);
        notificationsCount += 1;
        notificationsCountElem.attr('data-count', notificationsCount);
        notificationsWrapper.find('.notif-count').text(notificationsCount);
        notificationsWrapper.show();
    });
</script>
