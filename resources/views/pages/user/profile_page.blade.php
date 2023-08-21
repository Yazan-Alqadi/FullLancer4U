@php use App\Models\Category; @endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" style="background-color: lightgrey;">

<head>

    @include('layouts.head')

    <!-- CSS only -->
    <link href="{{ asset('css/fl.css') }}" rel="stylesheet">

    @livewireStyles

    <title>Profile</title>

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
    <!-- Error alert -->
    @include('components.error')
    <!-- successful alert -->
    @include('components.successful')


    <div class="h3 text-dark ms-3 me-3 mgg ar font-ar">
        {{ __('profile_page.account') }}
    </div>

    <section class="py-2">
        <div class="mx-3">
            <div class="row ar">
                {{-- Info --}}
                <div class="col-lg-8 mb-5">
                    <section class="bg-light text-dark rounded p-3">
                        <div class="border-bottom border-dark ps-3 h5 py-1 font-ar">
                            {{ __('profile_page.info') }}
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                class="bi bi-pencil-square" viewBox="0 0 20 20">
                                <path
                                    d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                <path fill-rule="evenodd"
                                    d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                            </svg>
                        </div>
                        <form action="{{ route('user.update', Auth::user()) }}">
                            @csrf
                            <div class="container">

                                <!-- if user does not have photo display icon -->

                                <div class="container my-5" style="text-align: center;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100"
                                        fill="currentColor" class="bi bi-person-circle" viewBox="3 3 10 10">
                                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                        <path fill-rule="evenodd"
                                            d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                    </svg>
                                </div>
                                <!-- here put the image if user have one already -->
                                <!-- <img src="/files/pic-1.jpg" class="rounded-circle mx-auto d-block m-3" style="width: 30%;"
                    alt="..."> -->

                                {{-- Full Name --}}
                                @if (app()->getLocale() == 'ar')
                                    <div class="input-group mb-3 en">
                                        <input name="full_name" type="text" class="form-control text-end"
                                            aria-label="Sizing example input" placeholder="Full Name"
                                            aria-label="Fullname" aria-describedby="inputGroup-sizing-default"
                                            value="{{ Auth::user()->full_name }}">
                                        <span class="input-group-text font-ar"
                                            id="inputGroup-sizing-default">{{ __('profile_page.fu-name') }}</span>
                                    </div>
                                @else
                                    <div class="input-group mb-3">
                                        <span class="input-group-text font-ar"
                                            id="inputGroup-sizing-default">{{ __('profile_page.fu-name') }}</span>
                                        <input name="full_name" type="text" class="form-control"
                                            aria-label="Sizing example input" placeholder="Full Name"
                                            aria-label="Fullname" aria-describedby="inputGroup-sizing-default"
                                            value="{{ Auth::user()->full_name }}">
                                    </div>
                                @endif

                                {{-- User Name --}}
                                @if (app()->getLocale() == 'ar')
                                    <div class="input-group mb-3 en">
                                        <input name="user_name" type="text" class="form-control text-end"
                                            aria-label="Sizing example input" placeholder="User Name"
                                            aria-label="Username" aria-describedby="inputGroup-sizing-default"
                                            value="{{ Auth::user()->user_name }}">
                                        <span class="input-group-text font-ar"
                                            id="inputGroup-sizing-default">{{ __('profile_page.us-name') }}</span>
                                    </div>
                                @else
                                    <div class="input-group mb-3">
                                        <span class="input-group-text font-ar"
                                            id="inputGroup-sizing-default">{{ __('profile_page.us-name') }}</span>
                                        <input name="user_name" type="text" class="form-control"
                                            aria-label="Sizing example input" placeholder="User Name"
                                            aria-label="Username" aria-describedby="inputGroup-sizing-default"
                                            value="{{ Auth::user()->user_name }}">
                                    </div>
                                @endif


                                <div class="mb-3">
                                    <label for="exampleFormControlInput1"
                                        class="form-label font-ar">{{ __('profile_page.E-mail') }}</label>
                                    <input name="email" type="email" class="form-control"
                                        id="exampleFormControlInput1" placeholder="name@example.com"
                                        value="{{ Auth::user()->email }}">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleFormControlInput2"
                                        class="form-label font-ar">{{ __('profile_page.pass') }}</label>
                                    <input name="password" type="password" class="form-control"
                                        id="exampleFormControlInput2" placeholder="**************">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleFormControlInput3"
                                        class="form-label font-ar">{{ __('profile_page.con-pass') }}</label>
                                    <input name="password_confirmation" type="password" class="form-control"
                                        id="exampleFormControlInput3" placeholder="**************">
                                </div>

                                <div class="mb-3 form-floating">
                                    <input name="phone" type="text" class="form-control"
                                        id="exampleFormControlInput4" placeholder="Phone Number"
                                        value="{{ Auth::user()->phone }}">
                                    <label for="exampleFormControlInput4"
                                        class="form-label font-ar">{{ __('profile_page.phone') }}</label>
                                </div>

                                <div class="mb-3 form-floating">
                                    <input name="address" type="text" class="form-control"
                                        id="exampleFormControlInput5" placeholder="Address"
                                        value="{{ Auth::user()->address }}">
                                    <label for="exampleFormControlInput5"
                                        class="form-label font-ar">{{ __('profile_page.address') }}</label>

                                </div>

                                <p>
                                    <button class="btn btn-primary text-dark bg-light border border-opacity-10 font-ar"
                                        type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample"
                                        aria-expanded="false" aria-controls="collapseExample">
                                        {{ __('profile_page.interests') }}
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                        </svg>
                                    </button>
                                </p>
                                <div class="collapse" id="collapseExample">
                                    <div class="card card-body">
                                        @foreach (Category::all() as $category)
                                            <div class="form-check">
                                                <input name="{{ $category->id }}" class="form-check-input"
                                                    type="checkbox" value=""
                                                    @if (Auth::user()->category->contains($category)) checked @endif
                                                    id="{{ $category->id }}">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    {{ $category->title }}
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor" class="bi bi-qr-code"
                                                        viewBox="0 0 16 16">
                                                        <path d="M2 2h2v2H2V2Z" />
                                                        <path d="M6 0v6H0V0h6ZM5 1H1v4h4V1ZM4 12H2v2h2v-2Z" />
                                                        <path d="M6 10v6H0v-6h6Zm-5 1v4h4v-4H1Zm11-9h2v2h-2V2Z" />
                                                        <path
                                                            d="M10 0v6h6V0h-6Zm5 1v4h-4V1h4ZM8 1V0h1v2H8v2H7V1h1Zm0 5V4h1v2H8ZM6 8V7h1V6h1v2h1V7h5v1h-4v1H7V8H6Zm0 0v1H2V8H1v1H0V7h3v1h3Zm10 1h-1V7h1v2Zm-1 0h-1v2h2v-1h-1V9Zm-4 0h2v1h-1v1h-1V9Zm2 3v-1h-1v1h-1v1H9v1h3v-2h1Zm0 0h3v1h-2v1h-1v-2Zm-4-1v1h1v-2H7v1h2Z" />
                                                        <path d="M7 12h1v3h4v1H7v-4Zm9 2v2h-3v-1h2v-1h1Z" />
                                                    </svg>
                                                </label>
                                            </div>
                                        @endforeach


                                    </div>
                                </div>

                            </div>

                            {{-- My BIO --}}
                            <br>
                            <div class="card bg-light text-dark rounded">
                                <div class="card-body">
                                    <h5 class="card-title"><label for="exampleFormControlInput100"
                                            class="font-ar">{{ __('profile_page.bio') }}</label></h5>


                                    <textarea name="bio" type="text" class="form-control font-ar"
                                        style="height: 200px !important; direction: rtl;" aria-label="Sizing example input"
                                        aria-describedby="inputGroup-sizing-default" id="exampleFormControlInput100"
                                        placeholder="{{ __('profile_page.add-bio') }}">{{ Auth::user()->bio }}</textarea>

                                </div>
                            </div>


                            <div class="d-grid gap-2 d-md-flex justify-content-md mt-3">
                                <button type="submit"
                                    class="btn btn-info font-ar">{{ __('profile_page.con-edit') }}</button>
                            </div>
                        </form>
                    </section>
                </div>

                {{-- services section --}}
                <div class="col-lg-4 mb-4">


                    @livewire('user-services', ['services' => $services])

                    <br>

                    @livewire('user-projects', ['projects' => $projects])
                    <br>

                    @livewire('user-skills', ['skills' => $skills])

                    <br>
                    <div class="card bg-light text-dark rounded">
                        <div class="card-body">
                            <h5 class="card-title font-ar"> {{ __('profile_page.rate') }} </h5>

                            {{-- if user are freelancer --}}
                            @if (Auth::user()->is_freelancer)
                                <div class="row justify-content-center">
                                    <div style="white-space: nowrap;" class="font-ar">
                                        {{ __('profile_page.rating') }}
                                        @if (Auth::user()->freelancer->rate > 0)
                                            <span class="fa fa-star checked"
                                                style="font: normal normal normal 14px/1 FontAwesome !important;"></span>
                                            {{-- star one --}}
                                        @else
                                            <span class="fa fa-star not-checked"
                                                style="font: normal normal normal 14px/1 FontAwesome !important;"></span>
                                            {{-- star one --}}
                                        @endif
                                        @if (Auth::user()->freelancer->rate > 1)
                                            <span class="fa fa-star checked"
                                                style="font: normal normal normal 14px/1 FontAwesome !important;"></span>
                                            {{-- star two --}}
                                        @else
                                            <span class="fa fa-star not-checked"
                                                style="font: normal normal normal 14px/1 FontAwesome !important;"></span>
                                            {{-- star two --}}
                                        @endif
                                        @if (Auth::user()->freelancer->rate > 2)
                                            <span class="fa fa-star checked"
                                                style="font: normal normal normal 14px/1 FontAwesome !important;"></span>
                                            {{-- star three --}}
                                        @else
                                            <span class="fa fa-star not-checked"
                                                style="font: normal normal normal 14px/1 FontAwesome !important;"></span>
                                            {{-- star three --}}
                                        @endif
                                        @if (Auth::user()->freelancer->rate > 3)
                                            <span class="fa fa-star checked"
                                                style="font: normal normal normal 14px/1 FontAwesome !important;"></span>
                                            {{-- star four --}}
                                        @else
                                            <span class="fa fa-star not-checked"
                                                style="font: normal normal normal 14px/1 FontAwesome !important;"></span>
                                            {{-- star four --}}
                                        @endif
                                        @if (Auth::user()->freelancer->rate > 4)
                                            <span class="fa fa-star checked"
                                                style="font: normal normal normal 14px/1 FontAwesome !important;"></span>
                                            {{-- star five --}}
                                        @else
                                            <span class="fa fa-star not-checked"
                                                style="font: normal normal normal 14px/1 FontAwesome !important;"></span>
                                            {{-- star five --}}
                                        @endif

                                    </div>
                                </div>
                                {{-- if not --}}
                            @else
                                <div class="text-center fw-bold h5 text-dark font-ar">
                                    {{ __('profile_page.not-freelancer') }}</div>
                            @endif
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>

    {{-- Footer here --}}
    @include('layouts.footer')


    @livewireScripts




    <!-- JavaScript Bundle with Popper -->
    <script src="{{ asset('/js/popper.min.js') }}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function deleteF(id) {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to delete this service!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    Livewire.emit('delete', id)
                }
            })
        }

        function deleteP(id) {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to delete this project!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    Livewire.emit('deleteP', id)
                }
            })
        }

        function deleteS(id) {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to delete this skill!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    Livewire.emit('deleteS', id)
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
