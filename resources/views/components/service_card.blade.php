<div class="card text-light h-100 bg-001b24">
    <!-- <div class="container">

         <-- add image or icon here ----------

            <div class="d-inline-grid">
                <span class="card-title">
                    <a href="#" class="navbar-brand text-light name-of-user-hover">
                        name of user
                    </a>
                </span>
                <span class="card-title">
                    user name
                </span>
            </div>
        </div> -->
    <div class="card-body text-centerd-flex align-items-center justify-content-center">

        <!-- descreption of the service -->

        <div class="card-text">
            <div class="container">
                <div class="col color-f5ff9f">
                    <!-- category belong to the service -->
                    <div class="row justify-content-center font-size-18">
                        {{-- <span class="for-size span-number-1 ">Title:</span> --}}
                        <span class="for-size span-number-2 title-des">{{ $service->title }}</span>
                    </div>
                    <div class="row justify-content-center">
                        <span class="for-size span-number-1 font-ar">{{ __('main_pages.category') }} </span>
                        <span class="for-size span-number-2">{{ "\n" . $service->category->title }}</span>
                    </div>
                    <div class="row justify-content-center">
                        <span class="for-size span-number-1 font-ar">{{ __('main_pages.freelancer') }}</span>
                        <span class="for-size span-number-2">{{ $service->freelancer->user->full_name }}</span>
                    </div>
                    <div class="text-nowrap">
                        <span class="for-size span-number-1 font-ar">{{ __('main_pages.rating') }}</span>
                        @if ($service->freelancer->rate > 0)
                            <span class="fa fa-star checked font-awesome"></span>
                            {{-- star one --}}
                        @else
                            <span class="fa fa-star not-checked font-awesome"></span>
                            {{-- star one --}}
                        @endif
                        @if ($service->freelancer->rate > 1)
                            <span class="fa fa-star checked font-awesome"></span>
                            {{-- star two --}}
                        @else
                            <span class="fa fa-star not-checked font-awesome"></span>
                            {{-- star two --}}
                        @endif
                        @if ($service->freelancer->rate > 2)
                            <span class="fa fa-star checked font-awesome"></span>
                            {{-- star three --}}
                        @else
                            <span class="fa fa-star not-checked font-awesome"></span>
                            {{-- star three --}}
                        @endif
                        @if ($service->freelancer->rate > 3)
                            <span class="fa fa-star checked font-awesome"></span>
                            {{-- star four --}}
                        @else
                            <span class="fa fa-star not-checked font-awesome"></span>
                            {{-- star four --}}
                        @endif
                        @if ($service->freelancer->rate > 4)
                            <span class="fa fa-star checked font-awesome"></span>
                            {{-- star five --}}
                        @else
                            <span class="fa fa-star not-checked font-awesome"></span>
                            {{-- star five --}}
                        @endif

                    </div>
                    <div class="row justify-content-center">
                        <span class="for-size span-number-1 font-ar font-ar">{{ __('main_pages.price') }}</span>
                        <span class="for-size span-number-2">{{ $service->price }}</span>
                    </div>
                    <div class="row justify-content-center mt-3 d-block">
                        <span class="for-size span-number-1 font-ar">{{ __('main_pages.description') }}</span>
                        <span class="for-size span-number-2 text-descri">{{ $service->description }}</span>
                        {{-- <button class="border-0 bg-inherit d-content text-secondary"">Show More</button> --}}
                    </div>
                    <!-- Profile of the user -->
                    <a href="{{ route('more_information', $service) }}"
                        class="btn btn-info mt-2 btn-font-size font-ar">
                        {{ __('main_pages.see-more') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
