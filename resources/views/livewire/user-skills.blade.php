<div>
    <div class="card bg-light text-dark rounded">
        <div class="card-body">
            <h5 class="card-title font-ar"> {{ __('profile_page.skills') }} </h5>

            {{-- if user has skills --}}
            @if (Auth::user()->is_freelancer)
                @forelse ($skills as $skill)
                    <div class="d-flex mb-1 border-bottom border-secondary pb-1" style="justify-content: space-between;">
                        {{-- here is the title of the service --}}
                        <span class="mt-1">{{ $skill->title }}</span>
                        <span>
                            <button class="p-1 border border-0 bg-light font-ar text-danger" data-bs-toggle="tooltip"
                                data-bs-placement="top" data-bs-title="{{ __('profile_page.delete') }}"
                                onclick="deleteS({{ $skill->id }})">

                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                    fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                    <path
                                        d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />
                                </svg>
                            </button>
                        </span>

                    </div>
                @empty
                    <div class="text-center fw-bold h5 text-dark font-ar">
                        {{ __('profile_page.no-skill') }}</div>
                @endforelse
                {{-- if not --}}
            @else
                <div class="text-center fw-bold h5 text-dark font-ar">
                    {{ __('profile_page.not-freelancer') }}</div>
            @endif
        </div>
    </div>

    <div class="card bg-light text-dark rounded text-center">
        <div class="card-body">

            @if (Auth::user()->is_freelancer)
                <button class="btn btn-primary font-ar" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">
                    {{ __('profile_page.add-skill') }}
                </button>
            @endif

            <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title font-ar" id="offcanvasTopLabel">
                        {{ __('profile_page.new-skill') }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    @if (app()->getLocale() == 'ar')
                        <div class="input-group mb-3 w-75 en">
                            <input wire:model.defer="input" type="text" name="title" class="form-control font-ar text-end"
                                placeholder="{{ __('profile_page.type-skill') }}" aria-label="text"
                                aria-describedby="basic-addon1">
                            <span class="input-group-text font-ar"
                                id="basic-addon1">{{ __('profile_page.skill') }}</span>
                        </div>
                    @else
                        <div class="input-group mb-3 w-75">
                            <span class="input-group-text font-ar"
                                id="basic-addon1">{{ __('profile_page.skill') }}</span>
                            <input wire:model.defer="input" type="text" name="title" class="form-control font-ar"
                                placeholder="{{ __('profile_page.type-skill') }}" aria-label="text"
                                aria-describedby="basic-addon1">
                        </div>
                    @endif
                    <div class="mx-auto @if (app()->getLocale() == 'ar') text-end @else text-start @endif">
                        <button class="btn btn-primary font-ar" wire:click="addSkill">
                            {{ __('profile_page.add') }}
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-plus-circle" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                <path
                                    d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
