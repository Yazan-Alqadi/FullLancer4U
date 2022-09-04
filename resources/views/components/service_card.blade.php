<div class="col-md-6 col-lg-4 mb-2">
    <div class="card text-light" style="background-color: #001b24; height: 100%;">
        <!-- <div class="container">

         <-- add image or icon here ----------

            <div style="display: inline-grid;">
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
        <div class="card-body text-center" style="display: flex !important;align-items: center;justify-content: center;">

            <!-- descreption of the profession -->

            <div class="card-text">
                <div class="container">
                    <div class="col" style="color: #f5ff9f;">
                        <!-- category belong to the profession -->
                        <div class="row justify-content-center" style="font-size: 18px !important;">
                            {{-- <span class="for-size span-number-1 ">Title:</span> --}}
                            <span class="for-size span-number-2 title-des">{{ $profession->title }}</span>
                        </div>
                        <div class="row justify-content-center">
                            <span class="for-size span-number-1">Category:</span>
                            <span class="for-size span-number-2">{{ "\n" . $profession->category->title }}</span>
                        </div>
                        <div class="row justify-content-center">
                            <span class="for-size span-number-1">professional:</span>
                            <span class="for-size span-number-2">{{ $profession->freelancer->user->full_name }}</span>
                        </div>
                        <div style="white-space: nowrap;">
                            <span class="for-size span-number-1">Rating:</span>
                            @if ($profession->freelancer->rate > 0)
                                <span class="fa fa-star checked"
                                    style="font: normal normal normal 14px/1 FontAwesome !important;"></span>
                                {{-- star one --}}
                            @else
                                <span class="fa fa-star not-checked"
                                    style="font: normal normal normal 14px/1 FontAwesome !important;"></span>
                                {{-- star one --}}
                            @endif
                            @if ($profession->freelancer->rate > 1)
                                <span class="fa fa-star checked"
                                    style="font: normal normal normal 14px/1 FontAwesome !important;"></span>
                                {{-- star two --}}
                            @else
                                <span class="fa fa-star not-checked"
                                    style="font: normal normal normal 14px/1 FontAwesome !important;"></span>
                                {{-- star two --}}
                            @endif
                            @if ($profession->freelancer->rate > 2)
                                <span class="fa fa-star checked"
                                    style="font: normal normal normal 14px/1 FontAwesome !important;"></span>
                                {{-- star three --}}
                            @else
                                <span class="fa fa-star not-checked"
                                    style="font: normal normal normal 14px/1 FontAwesome !important;"></span>
                                {{-- star three --}}
                            @endif
                            @if ($profession->freelancer->rate > 3)
                                <span class="fa fa-star checked"
                                    style="font: normal normal normal 14px/1 FontAwesome !important;"></span>
                                {{-- star four --}}
                            @else
                                <span class="fa fa-star not-checked"
                                    style="font: normal normal normal 14px/1 FontAwesome !important;"></span>
                                {{-- star four --}}
                            @endif
                            @if ($profession->freelancer->rate > 4)
                                <span class="fa fa-star checked"
                                    style="font: normal normal normal 14px/1 FontAwesome !important;"></span>
                                {{-- star five --}}
                            @else
                                <span class="fa fa-star not-checked"
                                    style="font: normal normal normal 14px/1 FontAwesome !important;"></span>
                                {{-- star five --}}
                            @endif

                        </div>
                        <div class="row justify-content-center">
                            <span class="for-size span-number-1">Price:</span>
                            <span class="for-size span-number-2">{{ $profession->price }}</span>
                        </div>
                        <div class="row justify-content-center mt-3" style="display: block;">
                            <span class="for-size span-number-1">descreption:</span>
                            <span class="for-size span-number-2">{{ $profession->description }}</span>
                        </div>
                        <!-- Profile of the user -->
                        <a href="{{ route('more_information', $profession) }}" class="btn btn-info mt-2 btn-font-size">
                            See more information
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
