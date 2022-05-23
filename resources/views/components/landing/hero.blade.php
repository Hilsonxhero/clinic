@props(['landing'])
<section class="position-relative pt-md-3 pt-lg-5 mb-md-3 mb-lg-5">
    <div class="container position-relative zindex-5 pt-5">
        <div class="row mt-4 pt-5">
            <div class="col-xl-4 col-lg-5 text-center text-lg-end pb-3 pb-md-4 pb-lg-0">
                <h1 class="fs-xl text-uppercase">{{ $landing->subtitle }}</h1>
                <h3 class="display-4 pb-md-2 pb-lg-4">{{ $landing->title }}</h3>
                {{-- <p class="fs-lg">Don't have insurance? <a href="#" class="fw-medium">Click here.</a></p> --}}
            </div>
            <div class="col-xl-5 col-lg-6 offset-xl-1 position-relative zindex-5 mb-5 mb-lg-0">
                <div class="rellax card bg-primary border-0 shadow-primary py-2 p-sm-4 p-lg-5" data-rellax-speed="-1"
                    data-disable-parallax-down="lg">
                    <div class="card-body p-lg-3">
                        <h2 class="text-light pb-1 pb-md-3">{{ $landing->about_title }}</h2>
                        <p class="fs-lg text-light pb-2 pb-md-0 mb-4 mb-md-5">
                            {{ $landing->about_body }}
                        </p>
                        <div class="d-flex justify-content-end">
                            <a href="{{ route('application.page.about') }}" class="btn btn-light btn-lg">
                                درباره ما
                                <i class="bx bx-left-arrow-alt lh-1 fs-4 me-2 ms-n2"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-none d-lg-block" style="margin-top: -165px;"></div>
        <div class="row align-items-end">
            <div class="col-lg-6 d-none d-lg-block">
                <img src="{{ '/storage/' . $landing->pic1 }}" class="rellax rounded-3" alt="Image"
                    data-rellax-speed="1.35" data-disable-parallax-down="md">
            </div>
            <div class="col-lg-6 d-flex flex-column flex-md-row align-items-center justify-content-between">
                {{-- <div class="d-flex align-items-center ps-xl-5 mb-4 mb-md-0">
                    <div class="btn btn-icon btn-secondary btn-lg pe-none rounded d-lg-none d-xl-inline-flex">
                        <i class="bx bx-time text-primary fs-3"></i>
                    </div>
                    <ul class="list-unstyled ps-3 ps-lg-0 ps-xl-3 mb-0">
                        <li><strong class="text-dark">Mon – Fri:</strong> 9:00 am – 22:00 pm</li>
                        <li><strong class="text-dark">Sat – Sun:</strong> 9:00 am – 20:00 pm</li>
                    </ul>
                </div>
                <a href="#" class="btn btn-primary btn-lg shadow-primary">Make an appointment</a> --}}
            </div>
        </div>
    </div>
    <div class="d-none d-lg-block position-absolute top-0 start-0 w-50 d-flex flex-column pe-3"
        style="height: calc(100% - 108px);">
        <div class="w-100 h-100 overflow-hidden bg-position-center bg-repeat-0 bg-size-cover"
            style="background-image: url({{ '/storage/' . $landing->pic2 }}); border-bottom-left-radius: .5rem;">
        </div>
    </div>
</section>
