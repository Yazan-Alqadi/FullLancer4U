<div>
    <div class="mggg">
        <div class="h3 ms-3 pt-2 text-light"></div>

        <div class="row justify-content-between m-0">
            <div class="col-lg-4 col-md-5 mb-3">
                <select wire:model='category' name="category" class="form-select" aria-label="Default select example">
                    <option selected value="">Choose Category</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-lg-4 col-md-5">
                <div class="input-group w-100">
                    <input wire:model.defer="searchText" label="Title" name="title" type="text"
                        class="form-control" id="inputTitle" placeholder="Search by title or price or client name ">

                    <button wire:click="search" class="btn btn-info">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-search" viewBox="0 0 16 16">
                            <path
                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>



    <section class="py-5 section-style">
        <div class="container">
            <div class="row text-center">
                @foreach ($services as $service)
                    @include('components.service_card')
                @endforeach
            </div>
            {{ $services->onEachSide(1)->links('pagination::liveware-page') }}

        </div>
    </section>

</div>
