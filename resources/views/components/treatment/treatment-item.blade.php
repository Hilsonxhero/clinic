@foreach ($treatments as $treatment)
    <article class="card border-0 bg-transparent  mb-4">
        <div class="row g-0">
            <div class="col-sm-5 position-relative bg-position-center bg-repeat-0 bg-size-cover rounded-3"
                style="background-image: url({{ $treatment->banner }}); min-height: 15rem;">
            </div>
            <div class="col-sm-7">
                <div class="card-body px-0 pt-sm-0 pe-sm-4 pb-0 pb-sm-4">
                    <a href="#"
                        class="badge me-2 fs-sm text-white bg-info shadow-info text-decoration-none mb-3">{{ $treatment->category->title }}</a>
                    <h3 class="h4">
                        <a
                            href="{{ route('application.treatments.show', $treatment->slug) }}">{{ $treatment->title }}</a>
                    </h3>
                    <p class="mb-4">
                        {{ truncate($treatment->description, 150) }}
                    </p>
                    <div class="d-flex align-items-center text-muted">
                        <div class="fs-sm border-end pe-3 me-3">{{ $treatment->created }}</div>
                    </div>
                </div>
            </div>
        </div>
    </article>
@endforeach
