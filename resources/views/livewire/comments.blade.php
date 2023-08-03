<div>
    <div class="offcanvas-body small">

        @forelse  ($comments as $comment)
            <div class="border rounded-5 my-3 px-3 pt-2">
                <div class="d-flex" style="justify-content :space-between; align-items: baseline;">

                    <!-- if user does not have photo display icon -->

                    {{-- <div class="profile-icon-post mb-3" style="text-align: center;">

            <span class="user-name-post">user name</span>
            <span class="time-post">posted from 3h</span>

            <span>
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                    style="color: #5e1155; left: 0%; position: relative; top: -40px;"
                    fill="currentColor" class="bi bi-person-circle" viewBox="3 3 10 10">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                    <path fill-rule="evenodd"
                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                </svg>
            </span>
          </div> --}}

                    <!-- here put the image if user have one already -->

                    <div class="profile-image-post rounded-circle d-block m-3">

                        <span class="user-name-post">{{ $comment->user->user_name }}</span>
                        <span class="time-post">{{ $comment->created_at }}</span>

                    </div>

                    {{-- Menu --}}
                    <div class="menu-post">
                        <!-- Default dropstart button -->
                        <div class="btn-group dropstart">

                            <button type="button" class="btn btn-secondary rounded p-1"
                                style="color: #ab6f6f; background-color: #5e1155;" data-bs-toggle="dropdown"
                                aria-expanded="false">

                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-list-ul" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm-3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                                </svg>
                            </button>

                            <ul class="dropdown-menu">
                                <li>
                                    <button class="dropdown-item bold" type="button">
                                        Copy text
                                    </button>
                                </li>
                                <li>
                                    <button class="dropdown-item disabled" type="button">Report comment
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-megaphone" viewBox="0 0 16 16">
                                            <path
                                                d="M13 2.5a1.5 1.5 0 0 1 3 0v11a1.5 1.5 0 0 1-3 0v-.214c-2.162-1.241-4.49-1.843-6.912-2.083l.405 2.712A1 1 0 0 1 5.51 15.1h-.548a1 1 0 0 1-.916-.599l-1.85-3.49a68.14 68.14 0 0 0-.202-.003A2.014 2.014 0 0 1 0 9V7a2.02 2.02 0 0 1 1.992-2.013 74.663 74.663 0 0 0 2.483-.075c3.043-.154 6.148-.849 8.525-2.199V2.5zm1 0v11a.5.5 0 0 0 1 0v-11a.5.5 0 0 0-1 0zm-1 1.35c-2.344 1.205-5.209 1.842-8 2.033v4.233c.18.01.359.022.537.036 2.568.189 5.093.744 7.463 1.993V3.85zm-9 6.215v-4.13a95.09 95.09 0 0 1-1.992.052A1.02 1.02 0 0 0 1 7v2c0 .55.448 1.002 1.006 1.009A60.49 60.49 0 0 1 4 10.065zm-.657.975 1.609 3.037.01.024h.548l-.002-.014-.443-2.966a68.019 68.019 0 0 0-1.722-.082z" />
                                        </svg>
                                    </button>
                                </li>

                                <li>
                                    <button class="dropdown-item" type="button" style="font-size: 12px;">Sexual
                                        violent </button>
                                </li>

                                <li>
                                    <button class="dropdown-item" type="button" style="font-size: 12px;">wrong
                                        information </button>
                                </li>

                                <li>
                                    <hr class="dropdown-divider">
                                </li>

                                <li>
                                    <button class="dropdown-item" type="button">
                                        Delete comment
                                    </button>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>

                <div class="m-3 text-break">
                    {{ $comment->text }}
                </div>
            </div>
        @empty

            <div>
                There is no comments here
            </div>
        @endforelse





    </div>
</div>
