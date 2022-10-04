<div class="col-md-6 col-lg-4 mb-2 ar">
    <div class="card text-light" style="background-color: #031232; height: 100%;">

        <div class="container">
            <!-- if user set a pic -->
            <!-- <img src="/files/pic-1.jpg" class="card-img-top"
                                        style="width: 55px; height: 55px; border-radius: 50%; margin: 12px 2px 0px 2px;"
                                        alt="..."> -->
            <!-- if it does not set a pic yet -->
            <span class="span-photo">
                <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor"
                    class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                    <path fill-rule="evenodd"
                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                </svg>
            </span>
            <div style="display: inline-grid;">
                <span class="card-title">
                    <a href="{{ route('profile_user', $freelancer->user->id) }}"
                        class="navbar-brand text-light name-of-user-hover me-4">
                        {{ $freelancer->user->full_name }}
                    </a>
                </span>
            </div>
        </div>
        <div class="card-body text-center"
            style="display: flex !important; align-items: center; justify-content: center;">
            <!-- descreption of the user info -->
            <div class="card-text">
                <div class="container">
                    <div class="col" style="color: #f5ff9f;">
                        <div class="row justify-content-center font-ar">{{ __('main_pages.projects-done') }}
                            {{ $freelancer->number_of_projects }}</div>
                        <div class="row justify-content-center font-ar">{{ __('main_pages.number-of-professions') }}
                            {{ $freelancer->number_of_professions }}</div>
                        <div class="row justify-content-center">
                            <div class="font-ar" style="white-space: nowrap;">
                                {{ __('main_pages.rating') }}
                                @if ($freelancer->rate > 0)
                                    <span class="fa fa-star checked"
                                        style="font: normal normal normal 14px/1 FontAwesome !important;"></span>
                                    {{-- star one --}}
                                @else
                                    <span class="fa fa-star not-checked"
                                        style="font: normal normal normal 14px/1 FontAwesome !important;"></span>
                                    {{-- star one --}}
                                @endif
                                @if ($freelancer->rate > 1)
                                    <span class="fa fa-star checked"
                                        style="font: normal normal normal 14px/1 FontAwesome !important;"></span>
                                    {{-- star two --}}
                                @else
                                    <span class="fa fa-star not-checked"
                                        style="font: normal normal normal 14px/1 FontAwesome !important;"></span>
                                    {{-- star two --}}
                                @endif
                                @if ($freelancer->rate > 2)
                                    <span class="fa fa-star checked"
                                        style="font: normal normal normal 14px/1 FontAwesome !important;"></span>
                                    {{-- star three --}}
                                @else
                                    <span class="fa fa-star not-checked"
                                        style="font: normal normal normal 14px/1 FontAwesome !important;"></span>
                                    {{-- star three --}}
                                @endif
                                @if ($freelancer->rate > 3)
                                    <span class="fa fa-star checked"
                                        style="font: normal normal normal 14px/1 FontAwesome !important;"></span>
                                    {{-- star four --}}
                                @else
                                    <span class="fa fa-star not-checked"
                                        style="font: normal normal normal 14px/1 FontAwesome !important;"></span>
                                    {{-- star four --}}
                                @endif
                                @if ($freelancer->rate > 4)
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

                        {{-- skills --}}
                        <div class="row justify-content-center font-ar">
                            {{ __('main_pages.skills') }}
                            @foreach ($freelancer->user->skills as $skill)
                                {{ $skill->title }} ,
                            @endforeach
                        </div>

                        <!-- email of the user -->
                        <a href="{{ route('contact_me', $freelancer->user->id) }}"
                            class="btn btn-info mt-2 btn-font-size font-ar">
                            {{ __('main_pages.contact') }}
                            {{ $freelancer->user->full_name }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
