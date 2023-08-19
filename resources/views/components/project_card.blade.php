<div class="card text-light h-100 bg-c031232">
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

    <div class="card-body text-center d-flex align-items-center justify-content-center">

        <!-- descreption of the project -->

        <div class="card-text">
            <div class="container">
                <div class="col color-f5ff9f">
                    <!-- category belong to the profession -->
                    <div class="row justify-content-center font-size-18">
                        <span class="for-size span-number-2 title-des">
                            {{ $project->title }}
                        </span>
                    </div>
                    <div class="row justify-content-center">
                        <span class="for-size span-number-1 font-ar">{{ __('main_pages.category') }}</span>
                        <span class="for-size span-number-2">
                            {{ "\n" . $project->category->title }}
                        </span>
                    </div>
                    <div class="row justify-content-center">
                        <span class="for-size span-number-1 font-ar">{{ __('main_pages.client') }}</span>
                        <span class="for-size span-number-2">
                            {{ $project->user->full_name }}

                        </span>
                    </div>
                    <div class="row justify-content-center mt-3 d-block">
                        <span class="for-size span-number-1 font-ar">{{ __('main_pages.description') }}</span>
                        <span class="text-descri for-size-span span-number-2"> {{ $project->description }}</span>
                        {{-- <button class="border-0 bg-inherit d-content text-secondary">Show More</button> --}}
                    </div>

                    <div class="mt-2 text-align-last-justify">
                        {{-- Deadline --}}
                        <span>
                            <span class="text-start d-inline-block">
                                {{ $project->deadline }}
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-calendar-check" viewBox="0 0 16 16">
                                    <path
                                        d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                                    <path
                                        d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
                                </svg>
                            </span>
                        </span>

                        {{-- Price --}}
                        <span class="text-end text-dark bg-light rounded px-2 py-1 tooltipssss d-inline-block">
                            {{ $project->price . ' Sp' }}
                            <span class="tooltiptext font-ar">{{ __('main_pages.price-1') }}</span>
                        </span>
                    </div>
                    <a href="{{ route('get_project', $project->id) }}"
                        class="text-center mt-4 bg-light btn text-dark h6 font-ar">{{ __('main_pages.see-more') }}</a>
                </div>
            </div>
        </div>
    </div>
</div>
