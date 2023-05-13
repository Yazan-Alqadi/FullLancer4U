<div class="border my-4 p-3 border-dark rounded" style="--bs-border-opacity: .5;">



    {{-- head of the post --}}
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

        <div class="profile-image-post rounded-circle d-block m-3" style="background-image: url(#);">

            <span class="user-name-post">user name</span>
            <span class="time-post">posted from 3h</span>

        </div>

        {{-- Menu --}}
        <div class="menu-post">
            <!-- Default dropstart button -->
            <div class="btn-group dropstart">

                <button type="button" class="btn btn-secondary rounded"
                    style="color: #ab6f6f; background-color: #5e1155;" data-bs-toggle="dropdown" aria-expanded="false">

                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-list-ul" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm-3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                    </svg>
                </button>

                <ul class="dropdown-menu">
                    <li>
                        <button class="dropdown-item" type="button">Save post
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-save2" viewBox="0 0 16 16">
                                <path
                                    d="M2 1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H9.5a1 1 0 0 0-1 1v4.5h2a.5.5 0 0 1 .354.854l-2.5 2.5a.5.5 0 0 1-.708 0l-2.5-2.5A.5.5 0 0 1 5.5 6.5h2V2a2 2 0 0 1 2-2H14a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h2.5a.5.5 0 0 1 0 1H2z" />
                            </svg>
                        </button>
                    </li>

                    <li>
                        <button class="dropdown-item disabled" type="button">Report post
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-megaphone" viewBox="0 0 16 16">
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
                            Copy link
                        </button>
                    </li>
                </ul>
            </div>

        </div>




    </div>

    {{-- body of the post --}}
    <div>
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quod molestias ullam corporis
        at
        error eum laborum quaerat assumenda, unde, voluptates reiciendis? Consequatur cumque,
        voluptatum laudantium quae impedit asperiores facere perferendis.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos deserunt placeat autem
        veritatis asperiores qui inventore at sapiente sit, officia consectetur voluptatibus
        explicabo error tempora optio dolorum nostrum, fuga quod?
    </div>

    {{-- image of the post if existis --}}
    <div class="d-inline-block mt-3">
        <img src="/files/Freelancer-3.png" style="width: 100%;height: 100%;">
    </div>

    {{-- reactions section --}}
    <div class="border mt-2 d-flex p-0" style="align-items: baseline; justify-content: space-evenly;">
        {{-- number of likes --}}
        <span class="">
            <button class="btn border-end border-2 rounded-0" style="--bs-border-opacity: .5; border-color : #f0f8ff00">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" style="color: #5e1155;"
                    fill="currentColor" class="bi bi-hand-thumbs-up-fill" viewBox="0 0 16 16">
                    <path
                        d="M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a9.84 9.84 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733.058.119.103.242.138.363.077.27.113.567.113.856 0 .289-.036.586-.113.856-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.163 3.163 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16H8c-.605 0-1.07-.081-1.466-.218a4.82 4.82 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z" />
                </svg>
            </button>
        </span>
        <span class="me-1">
            945883
        </span>

        {{-- number of dislikes --}}
        <span class="">
            <button class="btn border-end border-start border-2 rounded-0"
                style="--bs-border-opacity: .5; border-color : #f0f8ff00">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" style="color: #5e1155;"
                    fill="currentColor" class="bi bi-hand-thumbs-down-fill" viewBox="0 0 16 16">
                    <path
                        d="M6.956 14.534c.065.936.952 1.659 1.908 1.42l.261-.065a1.378 1.378 0 0 0 1.012-.965c.22-.816.533-2.512.062-4.51.136.02.285.037.443.051.713.065 1.669.071 2.516-.211.518-.173.994-.68 1.2-1.272a1.896 1.896 0 0 0-.234-1.734c.058-.118.103-.242.138-.362.077-.27.113-.568.113-.856 0-.29-.036-.586-.113-.857a2.094 2.094 0 0 0-.16-.403c.169-.387.107-.82-.003-1.149a3.162 3.162 0 0 0-.488-.9c.054-.153.076-.313.076-.465a1.86 1.86 0 0 0-.253-.912C13.1.757 12.437.28 11.5.28H8c-.605 0-1.07.08-1.466.217a4.823 4.823 0 0 0-.97.485l-.048.029c-.504.308-.999.61-2.068.723C2.682 1.815 2 2.434 2 3.279v4c0 .851.685 1.433 1.357 1.616.849.232 1.574.787 2.132 1.41.56.626.914 1.28 1.039 1.638.199.575.356 1.54.428 2.591z" />
                </svg>
            </button>
        </span>
        <span class="me-1">
            945883
        </span>

        {{-- number of comments --}}
        <span class="">
            <button class="btn border-end border-start border-2 rounded-0"
                style="--bs-border-opacity: .5; border-color : #f0f8ff00" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasBottom" aria-controls="offcanvasWithBothOptions">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" style="color: #5e1155;"
                    fill="currentColor" class="bi bi-chat-square-text-fill" viewBox="0 0 16 16">
                    <path
                        d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2h-2.5a1 1 0 0 0-.8.4l-1.9 2.533a1 1 0 0 1-1.6 0L5.3 12.4a1 1 0 0 0-.8-.4H2a2 2 0 0 1-2-2V2zm3.5 1a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 2.5a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 2.5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5z" />
                </svg>
            </button>
        </span>
        <span class="me-1">
            945883
        </span>

        <div class="offcanvas offcanvas-bottom rounded-3" tabindex="-1" id="offcanvasBottom"
            aria-labelledby="offcanvasWithBothOptionsLabel" style="right: 18%;left: 18%;bottom: 20%;height: 70%;">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasBottomLabel">Comment section</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            {{-- comments --}}
            @include('components.gallery_comments')
        </div>

        {{-- number of share --}}
        <span class="">
            <button class="btn border-end border-start border-2 rounded-0"
                style="--bs-border-opacity: .5; border-color : #f0f8ff00">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" style="color: #5e1155;"
                    fill="currentColor" class="bi bi-share-fill" viewBox="0 0 16 16">
                    <path
                        d="M11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5z" />
                </svg>
            </button>
        </span>
        <span class="me-1">
            945883
        </span>

    </div>
    {{-- Add Comment --}}
    <div class="my-1 text-center">
        <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight-1"
            aria-controls="offcanvasRight"
            style="background-color: #5e1155;border-color: #5e1155; color: antiquewhite;">Write Comment</button>

    </div>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight-1" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasRightLabel">Write Comment in this post</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
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
                        <input type="file" name="image" class="form-control d-none" id="photo-upload"
                            aria-describedby="inputGroupFileAddon04" aria-label="Upload" onchange="setphoto(event)">
                    </div>
                    <img src="" alt="choose photo" id="num1" style="width: 80%;margin-left: 10%;">
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
