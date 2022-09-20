<!DOCTYPE html>
<html lang="en" style="background-color: rgb(186, 195, 195);">

<head>

    <meta charset=" UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;500&family=Roboto+Slab&display=swap"
          rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;500&family=Roboto+Slab&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{ asset('css/fl.css') }}" rel="stylesheet">
    <link href="{{ asset('css/profession.css') }}" rel="stylesheet">
    <!-- CSS only -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <title>Services</title>
</head>

<body>

@include('layouts.nav-bar')


<div class="bg-secondary pb-3 mggg">
    <div class="h3 ms-3 pt-2 text-light"> Filters</div>

    <form class="pt-3" method="GET" action="{{ route('search_service') }}">
        @csrf
        <div class="row justify-content-between">
            <div class="col-lg-2 col-md-5 mb-3 me-4 ms-4">
                <select name="category" class="form-select" aria-label="Default select example">
                    <option selected>Filter category</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                    @endforeach

                </select>
            </div>
            <div class="col-lg-2 col-md-5 mb-3 me-4 ms-4">
                <input name="title" type="text" class="form-control" id="inputTitle" placeholder="Title">
            </div>
            <div class="col-lg-2 col-md-5 mb-3 me-4 ms-4">
                <input name="fName" type="text" class="form-control" id="inputName" placeholder="Freelancer name">
            </div>
            <div class="col-lg-2 col-md-5 mb-3 me-4 ms-4">
                <input name="price" type="text" class="form-control" id="inputPrice" placeholder="Price">
            </div>
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-info">Search
                <svg xmlns="http://www.w3.org/2000/svg"
                     width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path
                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                </svg>
            </button>
        </div>

    </form>
</div>

<!-- card is here -->
<section class="py-5 section-style">
    <div class="container">
        <div class="row text-center">
            @foreach ($professions as $profession)
                   @include('components.service_card')
            @endforeach

        </div>
        {{ $professions->links('vendor.pagination.bootstrap-4') }}

    </div>


</section>

{{-- Footer here --}}
@include('layouts.footer')

<!-- JavaScript Bundle with Popper -->
<script src="{{asset('/js/bootstrap.bundle.min.js')}}"></script>
</body>

</html>
