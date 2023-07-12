<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" style="background-color: lightgrey;">

<head>

    @include('layouts.head')

    <!-- CSS only -->
    <link href="{{ asset('css/fl.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    {{-- for font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,400;1,200;1,300&display=swap"
        rel="stylesheet">

    @livewireStyles
    <title>Edit information</title>

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
                </div>

                <form action="{{ route('addImage', Auth::id()) }}" method="POST" enctype="multipart/form-data">

                    @csrf
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
                                <input type="file" id="file-upload" name="image" class="d-none"
                                    onchange="this.form.submit()">
                                <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">

                            </div>
                        @else
                            <!-- here put the image if user have one already -->
                            <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                            <div class="profile-image rounded-circle mx-auto d-block m-3"
                                style="background-image: url({{ Auth::user()->image }});">
                                <label class="btn" for="file-upload"
                                    style="position: relative; top: 75%; left: 70%; border-color: #ffdead00;">
                                    <input type="file" id="file-upload" name="image" class="d-none"
                                        onchange="this.form.submit()">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34"
                                        class="border rounded-circle"
                                        style="    color: #5e1155;border-color: #ab6f6f!important;background-color: #ab6f6f;"
                                        fill="currentColor" class="bi bi-person-fill-up" viewBox="0 0 16 16">
                                        <path
                                            d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm.354-5.854 1.5 1.5a.5.5 0 0 1-.708.708L13 11.707V14.5a.5.5 0 0 1-1 0v-2.793l-.646.647a.5.5 0 0 1-.708-.708l1.5-1.5a.5.5 0 0 1 .708 0ZM11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                        <path
                                            d="M2 13c0 1 1 1 1 1h5.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.544-3.393C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4Z" />
                                    </svg>
                                </label>
                            </div>
                        @endif
                </form>

                {{-- <form id="outer" action=""> --}}

                {{-- BIO --}}
                <div class="input-group mb-3">
                    <textarea class="form-control" name="bio" aria-label="With textarea" placeholder="My BIO"></textarea>
                </div>

                <div class="border-bottom border-dark px-3">

                </div>

                {{-- Links --}}



                @livewire('user-accounts', ['accounts' => $accounts])




                {{-- Add links --}}
                <button class="btn btn-outline-secondary mb-3" data-bs-target="#collapseExample" aria-expanded="false"
                    aria-controls="collapseExample" type="button" data-bs-toggle="collapse">
                    + Add social link
                </button>

                <form id="accounts" action="{{ route('add_account') }}" method="POST">

                    @csrf
                    <div class="collapse" id="collapseExample">

                        <div class="card card-body" style="background-color: #ffefef;">

                            <div class="mb-2" style="color: #5e1155;">
                                Choose a platform:
                            </div>
                            <select class="form-select mb-2" aria-label="Default select example" name="account"
                                style="color: #ab6f6f;">
                                <option value="facebook" selected>Facebook</option>
                                <option value="linkedIn">LinkedIn</option>
                                <option value="instagram">Instagram</option>
                                <option value="twitter">Twitter</option>
                            </select>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1" style="color: #5e1155;">Name
                                    of
                                    your account:</span>
                                <input name="user_name" type="text" class="form-control" placeholder="Username"
                                    aria-label="Username" aria-describedby="basic-addon1" required>
                            </div>



                            <div class="mb-3">
                                <label for="basic-url" class="form-label" style="color: #5e1155;">Your
                                    Account
                                    URL:</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon3"
                                        style="color: #5e1155;">https:</span>
                                    <input type="text" class="form-control" id="basic-url"
                                        aria-describedby="basic-addon3 basic-addon4" name="link" required>
                                </div>
                                <div class="text-center mx-auto mt-4">
                                    <button class="btn p-1" type="submit"
                                        style="background-color: #5e1155;border-color: #5e1155; color: antiquewhite;">submit</button>
                                    <button class="btn p-1" data-bs-target="#collapseExample"aria-expanded="false"
                                        aria-controls="collapseExample" type="button"data-bs-toggle="collapse"
                                        style="background-color: #5e1155;border-color: #5e1155; color: antiquewhite;">
                                        Cancel
                                    </button>
                                </div>

                            </div>
                        </div>
                </form>


        </div>
        <div class="border-bottom border-dark px-3 pt-3"></div>

        <button class="btn p-1 my-3" type="submit" form="outer"
            style="background-color: #5e1155;border-color: #5e1155; color: antiquewhite;">submit</button>
        {{-- </form> --}}

        </section>
    </div>

    {{-- Footer here --}}
    @include('layouts.footer')


    @livewireScripts

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function deleteAccount(o) {
            var id = o.id;
            console.log(id);
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to delete this Account!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    Livewire.emit('deleteAccount', id)
                }
            })
        }



        window.addEventListener('message', event => {
            Swal.fire({
                title: event.detail.message,
                icon: event.detail.type,
            });
        });
    </script>

</body>

</html>
