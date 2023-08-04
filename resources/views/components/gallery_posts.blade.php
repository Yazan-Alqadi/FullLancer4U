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
                            <button class="dropdown-item" type="button">Save post
                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                    height="16" fill="currentColor" class="bi bi-save2"
                                    viewBox="0 0 16 16">
                                    <path
                                        d="M2 1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H9.5a1 1 0 0 0-1 1v4.5h2a.5.5 0 0 1 .354.854l-2.5 2.5a.5.5 0 0 1-.708 0l-2.5-2.5A.5.5 0 0 1 5.5 6.5h2V2a2 2 0 0 1 2-2H14a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h2.5a.5.5 0 0 1 0 1H2z" />
                                </svg>
                            </button>
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
                data-bs-target="#offcanvasRight-{{ $post->id }}" aria-controls="offcanvasRight"
                style="background-color: #5e1155;border-color: #5e1155; color: antiquewhite;">Write
                Comment</button>

        </div>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight-{{ $post->id }}"
            aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasRightLabel">Write Comment in this
                    post</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <form action="{{ route('add_comment',$post->id) }}" method="POST" enctype="multipart/form-data">
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
