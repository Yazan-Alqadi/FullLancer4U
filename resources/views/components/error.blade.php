@if (session('errors'))
    <div class="alert alert-primary d-flex align-items-center mgg" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:">
            <use xlink:href="#info-fill"/>
        </svg>
        <div>
            {{ session('errors') }}
        </div>
    </div>
@endif
