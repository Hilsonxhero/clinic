@extends('layouts.app')

@section('content')
    <!-- Hero -->
    <section class="position-relative pt-5">

        <!-- Background -->
        <div class="position-absolute top-0 start-0 w-100 bg-position-bottom-center bg-size-cover bg-repeat-0"
            style="background-image: url({{ asset('assets/img/hero-bg.svg') }});">
            <div class="d-lg-none" style="height: 960px;"></div>
            <div class="d-none d-lg-block" style="height: 768px;"></div>
        </div>

        <!-- Content -->
        <div class="container position-relative zindex-5 pt-5">
            <div class="row">
                <div class="col-lg-6">



                    <!-- Text -->
                    <h1 class="pb-2 pb-md-3">درباره ما</h1>
                    <p class="fs-xl pb-4 mb-1 mb-md-2 mb-lg-3" style="max-width: 526px;">We are a dedicated team of
                        passionate product managers, full stack developers, UX/UI designers, QA engineers and marketing
                        experts helping businesses of every size — from new startups to public companies — launch their
                        projects using our software.</p>
                    <div class="row row-cols-3 pt-4 pt-md-5 mt-2 mt-xl-4">
                        <div class="col">
                            <h3 class="h2 mb-2">2,480</h3>
                            <p class="mb-0"><strong>Remote</strong> Sales Experts</p>
                        </div>
                        <div class="col">
                            <h3 class="h2 mb-2">760</h3>
                            <p class="mb-0"><strong>New Clients</strong> per Month</p>
                        </div>
                        <div class="col">
                            <h3 class="h2 mb-2">1,200</h3>
                            <p class="mb-0"><strong>Requests</strong> per Week</p>
                        </div>
                    </div>
                </div>

                <!-- Images -->
                <div class="col-lg-6 mt-xl-3 pt-5 pt-lg-4">
                    <div class="row row-cols-2 gx-3 gx-lg-4">
                        <div class="col pt-lg-5 mt-lg-1">
                            <img src="{{ asset('assets/img/570.jpg') }}" class="d-block rounded-3 mb-3 mb-lg-4"
                                alt="Image">
                            <img src="{{ asset('assets/img/570.jpg') }}" class="d-block rounded-3" alt="Image">
                        </div>
                        <div class="col">
                            <img src="{{ asset('assets/img/570.jpg') }}" class="d-block rounded-3 mb-3 mb-lg-4"
                                alt="Image">
                            <img src="{{ asset('assets/img/570.jpg') }}" class="d-block rounded-3" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Awards -->
    <section class="container mb-5 pb-3 pb-md-4 pb-lg-5 pt-5">
        <div class="row gy-4 py-xl-2">
            <div class="col-md-4">
                <h2 class="mb-0 text-md-start text-center">Award-winning designs featured by</h2>
            </div>
            <div class="col-lg-7 offset-lg-1 col-md-8">
                <div class="row row-cols-sm-4 row-cols-2 gy-4">
                    <div class="col">
                        <div class="position-relative text-center">
                            <img src="{{ asset('assets/img/10.svg') }}" width="100" alt="Webby"
                                class="d-block mx-auto mb-3">
                            <a href="#"
                                class="text-body justify-content-center fs-sm stretched-link text-decoration-none">4x mobile
                                of the day</a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="position-relative text-center">
                            <img src="{{ asset('assets/img/10.svg') }}" width="100" alt="CSSDA"
                                class="d-block mx-auto mb-3">
                            <a href="#"
                                class="text-body justify-content-center fs-sm stretched-link text-decoration-none">1x
                                Kudos</a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="position-relative text-center">
                            <img src="{{ asset('assets/img/10.svg') }}" width="100" alt="Awwwards"
                                class="d-block mx-auto mb-3">
                            <a href="#"
                                class="text-body justify-content-center fs-sm stretched-link text-decoration-none">3x
                                website of the day</a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="position-relative text-center">
                            <img src="{{ asset('assets/img/10.svg') }}" width="100" alt="FWA"
                                class="d-block mx-auto mb-3">
                            <a href="#"
                                class="text-body justify-content-center fs-sm stretched-link text-decoration-none">2x best
                                website</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>








    <!-- Contact CTA -->
    <section class="container mt-5">
        <div class="card border-0 bg-gradient-primary">
            <div class="card-body p-md-5 p-4 bg-size-cover"
                style="background-image: url({{ asset('assets/img/contact-bg.png') }});">
                <div class="py-md-5 py-4 text-center">
                    <h3 class="h4 fw-normal text-light opacity-75">Want to work with us? Let’s talk</h3>
                    <a href="mailto:email@example.com" class="display-6 text-light">email@example.com</a>
                    <div class="pt-md-5 pt-4 pb-md-2">
                        <a href="contacts-v1.html" class="btn btn-lg btn-light">Contact us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Social networks (Carousel on narrow screens) -->
    <section class="container text-center py-5 my-2 my-md-4 my-lg-5">
        <h2 class="h1 mb-4">We Have Social Networks</h2>
        <p class="fs-lg text-muted pb-2 mb-5">Follow us and keep up to date with the freshest news!</p>
        <div class="swiper" data-swiper-options='{
              "slidesPerView": 2,
              "pagination": {
                "el": ".swiper-pagination",
                "clickable": true
              },
              "breakpoints": {
                "500": {
                  "slidesPerView": 3
                },
                "650": {
                  "slidesPerView": 4
                },
                "900": {
                  "slidesPerView": 5
                },
                "1100": {
                  "slidesPerView": 6
                }
              }
            }'>
            <div class="swiper-wrapper">

                <!-- Item -->
                <div class="swiper-slide">
                    <div class="position-relative text-center border-end mx-n1">
                        <a href="#" class="btn btn-icon btn-secondary btn-facebook btn-lg stretched-link">
                            <i class="bx bxl-facebook"></i>
                        </a>
                        <div class="pt-4">
                            <h6 class="mb-1">Facebook</h6>
                            <p class="fs-sm text-muted mb-0">silicon</p>
                        </div>
                    </div>
                </div>

                <!-- Item -->
                <div class="swiper-slide">
                    <div class="position-relative text-center border-end mx-n1">
                        <a href="#" class="btn btn-icon btn-secondary btn-instagram btn-lg stretched-link">
                            <i class="bx bxl-instagram"></i>
                        </a>
                        <div class="pt-4">
                            <h6 class="mb-1">Instagram</h6>
                            <p class="fs-sm text-muted mb-0">@silicon</p>
                        </div>
                    </div>
                </div>

                <!-- Item -->
                <div class="swiper-slide">
                    <div class="position-relative text-center border-end mx-n1">
                        <a href="#" class="btn btn-icon btn-secondary btn-twitter btn-lg stretched-link">
                            <i class="bx bxl-twitter"></i>
                        </a>
                        <div class="pt-4">
                            <h6 class="mb-1">Twitter</h6>
                            <p class="fs-sm text-muted mb-0">@silicon</p>
                        </div>
                    </div>
                </div>

                <!-- Item -->
                <div class="swiper-slide">
                    <div class="position-relative text-center border-end mx-n1">
                        <a href="#" class="btn btn-icon btn-secondary btn-linkedin btn-lg stretched-link">
                            <i class="bx bxl-linkedin"></i>
                        </a>
                        <div class="pt-4">
                            <h6 class="mb-1">LinkedIn</h6>
                            <p class="fs-sm text-muted mb-0">Silicon Inc.</p>
                        </div>
                    </div>
                </div>

                <!-- Item -->
                <div class="swiper-slide">
                    <div class="position-relative text-center border-end mx-n1">
                        <a href="#" class="btn btn-icon btn-secondary btn-youtube btn-lg stretched-link">
                            <i class="bx bxl-youtube"></i>
                        </a>
                        <div class="pt-4">
                            <h6 class="mb-1">YouTube</h6>
                            <p class="fs-sm text-muted mb-0">Silicon</p>
                        </div>
                    </div>
                </div>

                <!-- Item -->
                <div class="swiper-slide">
                    <div class="position-relative text-center border-end mx-n1">
                        <a href="#" class="btn btn-icon btn-secondary btn-dribbble btn-lg stretched-link">
                            <i class="bx bxl-dribbble"></i>
                        </a>
                        <div class="pt-4">
                            <h6 class="mb-1">Dribbble</h6>
                            <p class="fs-sm text-muted mb-0">Silicon</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pagination (bullets) -->
            <div class="swiper-pagination position-relative bottom-0 pt-3 mt-4"></div>
        </div>
    </section>
@endsection
