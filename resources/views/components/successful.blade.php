@if (session('message'))
    <div class="alert alert-success d-flex align-items-center mgg" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
            <use xlink:href="#check-circle-fill"/>
        </svg>
        <div>
            {{ session('message') }}
        </div>
    </div>
@endif
