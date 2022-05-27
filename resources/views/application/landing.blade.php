@extends('layouts.app')

@section('content')
    <!-- Hero -->

    <x-landing.hero :landing="$landing"></x-landing.hero>

    <!-- Icon boxes (Features) -->
    <section class="container py-5 mb-2 mb-md-4 mb-lg-5 d-none">
        <div class="row row-cols-1 row-cols-md-3 g-4 pt-2 pt-md-4 pb-lg-2">

            <!-- Item -->
            <div class="col">
                <div
                    class="card flex-column flex-sm-row flex-md-column flex-xxl-row align-items-center card-hover border-primary h-100">
                    <img src="assets/img/icons/doctor.svg" width="168" alt="Doctor icon">
                    <div
                        class="card-body text-center text-sm-start text-md-center text-xxl-start pb-3 pb-sm-2 pb-md-3 pb-xxl-2">
                        <h3 class="h5 mb-2 mt-n4 mt-sm-0 mt-md-n4 mt-xxl-0">Find a Doctor</h3>
                        <p class="fs-sm mb-1">Search the right doctor by location and specialty.</p>
                        <a href="#" class="btn btn-link stretched-link px-0">
                            See all doctors
                            <i class="bx bx-right-arrow-alt fs-xl ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Item -->
            <div class="col">
                <div
                    class="card flex-column flex-sm-row flex-md-column flex-xxl-row align-items-center card-hover border-primary h-100">
                    <img src="assets/img/icons/ambulance.svg" width="168" alt="Ambulance icon">
                    <div
                        class="card-body text-center text-sm-start text-md-center text-xxl-start pb-3 pb-sm-2 pb-md-3 pb-xxl-2">
                        <h3 class="h5 mb-3 mt-n4 mt-sm-0 mt-md-n4 mt-xxl-0">Emergency Service</h3>
                        <p class="d-flex align-items-center text-nav fs-xl fw-medium mb-2">
                            <i class="bx bx-phone-call fs-4 text-muted me-1"></i>
                            (406) 555-0120
                        </p>
                        <a href="#" class="btn btn-link stretched-link px-0">
                            Contact us
                            <i class="bx bx-right-arrow-alt fs-xl ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Item -->
            <div class="col">
                <div
                    class="card flex-column flex-sm-row flex-md-column flex-xxl-row align-items-center card-hover border-primary h-100">
                    <img src="assets/img/icons/virus.svg" width="168" alt="Virus icon">
                    <div
                        class="card-body text-center text-sm-start text-md-center text-xxl-start pb-3 pb-sm-2 pb-md-3 pb-xxl-2">
                        <h3 class="h5 mb-2 mt-n4 mt-sm-0 mt-md-n4 mt-xxl-0">COVID-19 Info</h3>
                        <p class="fs-sm mb-1">We offer quick COVID-19 testing by appointment.</p>
                        <a href="#" class="btn btn-link stretched-link px-0">
                            Learn more
                            <i class="bx bx-right-arrow-alt fs-xl ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services -->
    <x-landing.service :services="$services"></x-landing.service>


    <!-- CTA carousel -->
    <x-landing.treatments :treatments="$treatments"></x-landing.treatments>


    <!-- Team -->
    {{-- <section class="container pt-xl-2 pb-5 mb-md-3 mb-lg-5">
        <div
            class="d-md-flex align-items-center justify-content-between text-center text-md-start pb-1 pb-lg-0 mb-4 mb-lg-5">
            <h2 class="h1 mb-md-0">Qualified Medical Specialists</h2>
            <a href="#" class="btn btn-outline-primary">
                See all doctors
                <i class="bx bx-left-arrow-alt fs-xl ms-2 me-n1"></i>
            </a>
        </div>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">

            <!-- Item -->
            <div class="col">
                <div class="card card-hover border-0 bg-transparent">
                    <div class="position-relative">
                        <img src="assets/img/team/16.jpg" class="rounded-3" alt="Dr. Ronald Richards">
                        <div
                            class="card-img-overlay d-flex flex-column align-items-center justify-content-center rounded-3">
                            <span
                                class="position-absolute top-0 start-0 w-100 h-100 bg-primary opacity-35 rounded-3"></span>
                            <div class="position-relative d-flex zindex-2">
                                <a href="#" class="btn btn-icon btn-secondary btn-facebook btn-sm bg-white me-2">
                                    <i class="bx bxl-facebook"></i>
                                </a>
                                <a href="#" class="btn btn-icon btn-secondary btn-linkedin btn-sm bg-white me-2">
                                    <i class="bx bxl-linkedin"></i>
                                </a>
                                <a href="#" class="btn btn-icon btn-secondary btn-twitter btn-sm bg-white">
                                    <i class="bx bxl-twitter"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body text-center p-3">
                        <h3 class="fs-lg fw-semibold pt-1 mb-2">Dr. Ronald Richards</h3>
                        <p class="fs-sm mb-2">Neurosurgeon</p>
                        <div class="d-flex align-items-center justify-content-center">
                            <div class="text-nowrap me-1">
                                <i class="bx bxs-star text-warning fs-sm"></i>
                                <i class="bx bxs-star text-warning fs-sm"></i>
                                <i class="bx bxs-star text-warning fs-sm"></i>
                                <i class="bx bxs-star text-warning fs-sm"></i>
                                <i class="bx bxs-star text-warning fs-sm"></i>
                            </div>
                            <span class="fs-xs text-muted">(19 reviews)</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Item -->
            <div class="col">
                <div class="card card-hover border-0 bg-transparent">
                    <div class="position-relative">
                        <img src="assets/img/team/17.jpg" class="rounded-3" alt="Dr. Esther Howard">
                        <div
                            class="card-img-overlay d-flex flex-column align-items-center justify-content-center rounded-3">
                            <span
                                class="position-absolute top-0 start-0 w-100 h-100 bg-primary opacity-35 rounded-3"></span>
                            <div class="position-relative d-flex zindex-2">
                                <a href="#" class="btn btn-icon btn-secondary btn-facebook btn-sm bg-white me-2">
                                    <i class="bx bxl-facebook"></i>
                                </a>
                                <a href="#" class="btn btn-icon btn-secondary btn-linkedin btn-sm bg-white me-2">
                                    <i class="bx bxl-linkedin"></i>
                                </a>
                                <a href="#" class="btn btn-icon btn-secondary btn-twitter btn-sm bg-white">
                                    <i class="bx bxl-twitter"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body text-center p-3">
                        <h3 class="fs-lg fw-semibold pt-1 mb-2">Dr. Esther Howard</h3>
                        <p class="fs-sm mb-2">Therapist</p>
                        <div class="d-flex align-items-center justify-content-center">
                            <div class="text-nowrap me-1">
                                <i class="bx bxs-star text-warning fs-sm"></i>
                                <i class="bx bxs-star text-warning fs-sm"></i>
                                <i class="bx bxs-star text-warning fs-sm"></i>
                                <i class="bx bxs-star text-warning fs-sm"></i>
                                <i class="bx bxs-star text-warning fs-sm"></i>
                            </div>
                            <span class="fs-xs text-muted">(4 reviews)</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Item -->
            <div class="col">
                <div class="card card-hover border-0 bg-transparent">
                    <div class="position-relative">
                        <img src="assets/img/team/18.jpg" class="rounded-3" alt="Dr. Jerome Bell">
                        <div
                            class="card-img-overlay d-flex flex-column align-items-center justify-content-center rounded-3">
                            <span
                                class="position-absolute top-0 start-0 w-100 h-100 bg-primary opacity-35 rounded-3"></span>
                            <div class="position-relative d-flex zindex-2">
                                <a href="#" class="btn btn-icon btn-secondary btn-facebook btn-sm bg-white me-2">
                                    <i class="bx bxl-facebook"></i>
                                </a>
                                <a href="#" class="btn btn-icon btn-secondary btn-linkedin btn-sm bg-white me-2">
                                    <i class="bx bxl-linkedin"></i>
                                </a>
                                <a href="#" class="btn btn-icon btn-secondary btn-twitter btn-sm bg-white">
                                    <i class="bx bxl-twitter"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body text-center p-3">
                        <h3 class="fs-lg fw-semibold pt-1 mb-2">Dr. Jerome Bell</h3>
                        <p class="fs-sm mb-2">Anesthesiologist</p>
                        <div class="d-flex align-items-center justify-content-center">
                            <div class="text-nowrap me-1">
                                <i class="bx bxs-star text-warning fs-sm"></i>
                                <i class="bx bxs-star text-warning fs-sm"></i>
                                <i class="bx bxs-star text-warning fs-sm"></i>
                                <i class="bx bxs-star text-warning fs-sm"></i>
                                <i class="bx bx-star text-muted fs-sm opacity-75"></i>
                            </div>
                            <span class="fs-xs text-muted">(12 reviews)</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Item -->
            <div class="col">
                <div class="card card-hover border-0 bg-transparent">
                    <div class="position-relative">
                        <img src="assets/img/team/19.jpg" class="rounded-3" alt="Dr. Ralph Edwards">
                        <div
                            class="card-img-overlay d-flex flex-column align-items-center justify-content-center rounded-3">
                            <span
                                class="position-absolute top-0 start-0 w-100 h-100 bg-primary opacity-35 rounded-3"></span>
                            <div class="position-relative d-flex zindex-2">
                                <a href="#" class="btn btn-icon btn-secondary btn-facebook btn-sm bg-white me-2">
                                    <i class="bx bxl-facebook"></i>
                                </a>
                                <a href="#" class="btn btn-icon btn-secondary btn-linkedin btn-sm bg-white me-2">
                                    <i class="bx bxl-linkedin"></i>
                                </a>
                                <a href="#" class="btn btn-icon btn-secondary btn-twitter btn-sm bg-white">
                                    <i class="bx bxl-twitter"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body text-center p-3">
                        <h3 class="fs-lg fw-semibold pt-1 mb-2">Dr. Ralph Edwards</h3>
                        <p class="fs-sm mb-2">Surgeon</p>
                        <div class="d-flex align-items-center justify-content-center">
                            <div class="text-nowrap me-1">
                                <i class="bx bxs-star text-warning fs-sm"></i>
                                <i class="bx bxs-star text-warning fs-sm"></i>
                                <i class="bx bxs-star text-warning fs-sm"></i>
                                <i class="bx bxs-star text-warning fs-sm"></i>
                                <i class="bx bxs-star text-warning fs-sm"></i>
                            </div>
                            <span class="fs-xs text-muted">(8 reviews)</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Item -->
            <div class="col">
                <div class="card card-hover border-0 bg-transparent">
                    <div class="position-relative">
                        <img src="assets/img/team/20.jpg" class="rounded-3" alt="Dr. Darrell Steward">
                        <div
                            class="card-img-overlay d-flex flex-column align-items-center justify-content-center rounded-3">
                            <span
                                class="position-absolute top-0 start-0 w-100 h-100 bg-primary opacity-35 rounded-3"></span>
                            <div class="position-relative d-flex zindex-2">
                                <a href="#" class="btn btn-icon btn-secondary btn-facebook btn-sm bg-white me-2">
                                    <i class="bx bxl-facebook"></i>
                                </a>
                                <a href="#" class="btn btn-icon btn-secondary btn-linkedin btn-sm bg-white me-2">
                                    <i class="bx bxl-linkedin"></i>
                                </a>
                                <a href="#" class="btn btn-icon btn-secondary btn-twitter btn-sm bg-white">
                                    <i class="bx bxl-twitter"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body text-center p-3">
                        <h3 class="fs-lg fw-semibold pt-1 mb-2">Dr. Darrell Steward</h3>
                        <p class="fs-sm mb-2">Cardiologist</p>
                        <div class="d-flex align-items-center justify-content-center">
                            <div class="text-nowrap me-1">
                                <i class="bx bxs-star text-warning fs-sm"></i>
                                <i class="bx bxs-star text-warning fs-sm"></i>
                                <i class="bx bxs-star text-warning fs-sm"></i>
                                <i class="bx bxs-star text-warning fs-sm"></i>
                                <i class="bx bx-star text-muted fs-sm opacity-75"></i>
                            </div>
                            <span class="fs-xs text-muted">(14 reviews)</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Item -->
            <div class="col">
                <div class="card card-hover border-0 bg-transparent">
                    <div class="position-relative">
                        <img src="assets/img/team/21.jpg" class="rounded-3" alt="Dr. Annette Black">
                        <div
                            class="card-img-overlay d-flex flex-column align-items-center justify-content-center rounded-3">
                            <span
                                class="position-absolute top-0 start-0 w-100 h-100 bg-primary opacity-35 rounded-3"></span>
                            <div class="position-relative d-flex zindex-2">
                                <a href="#" class="btn btn-icon btn-secondary btn-facebook btn-sm bg-white me-2">
                                    <i class="bx bxl-facebook"></i>
                                </a>
                                <a href="#" class="btn btn-icon btn-secondary btn-linkedin btn-sm bg-white me-2">
                                    <i class="bx bxl-linkedin"></i>
                                </a>
                                <a href="#" class="btn btn-icon btn-secondary btn-twitter btn-sm bg-white">
                                    <i class="bx bxl-twitter"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body text-center p-3">
                        <h3 class="fs-lg fw-semibold pt-1 mb-2">Dr. Annette Black</h3>
                        <p class="fs-sm mb-2">Pediatrician</p>
                        <div class="d-flex align-items-center justify-content-center">
                            <div class="text-nowrap me-1">
                                <i class="bx bxs-star text-warning fs-sm"></i>
                                <i class="bx bxs-star text-warning fs-sm"></i>
                                <i class="bx bxs-star text-warning fs-sm"></i>
                                <i class="bx bxs-star text-warning fs-sm"></i>
                                <i class="bx bx-star text-muted fs-sm opacity-75"></i>
                            </div>
                            <span class="fs-xs text-muted">(10 reviews)</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Item -->
            <div class="col">
                <div class="card card-hover border-0 bg-transparent">
                    <div class="position-relative">
                        <img src="assets/img/team/22.jpg" class="rounded-3" alt="Dr. Dianne Russell">
                        <div
                            class="card-img-overlay d-flex flex-column align-items-center justify-content-center rounded-3">
                            <span
                                class="position-absolute top-0 start-0 w-100 h-100 bg-primary opacity-35 rounded-3"></span>
                            <div class="position-relative d-flex zindex-2">
                                <a href="#" class="btn btn-icon btn-secondary btn-facebook btn-sm bg-white me-2">
                                    <i class="bx bxl-facebook"></i>
                                </a>
                                <a href="#" class="btn btn-icon btn-secondary btn-linkedin btn-sm bg-white me-2">
                                    <i class="bx bxl-linkedin"></i>
                                </a>
                                <a href="#" class="btn btn-icon btn-secondary btn-twitter btn-sm bg-white">
                                    <i class="bx bxl-twitter"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body text-center p-3">
                        <h3 class="fs-lg fw-semibold pt-1 mb-2">Dr. Dianne Russell</h3>
                        <p class="fs-sm mb-2">Dentist</p>
                        <div class="d-flex align-items-center justify-content-center">
                            <div class="text-nowrap me-1">
                                <i class="bx bxs-star text-warning fs-sm"></i>
                                <i class="bx bxs-star text-warning fs-sm"></i>
                                <i class="bx bxs-star text-warning fs-sm"></i>
                                <i class="bx bxs-star text-warning fs-sm"></i>
                                <i class="bx bxs-star text-warning fs-sm"></i>
                            </div>
                            <span class="fs-xs text-muted">(5 reviews)</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Item -->
            <div class="col">
                <div class="card card-hover border-0 bg-transparent">
                    <div class="position-relative">
                        <img src="assets/img/team/23.jpg" class="rounded-3" alt="Dr. Courtney Henry">
                        <div
                            class="card-img-overlay d-flex flex-column align-items-center justify-content-center rounded-3">
                            <span
                                class="position-absolute top-0 start-0 w-100 h-100 bg-primary opacity-35 rounded-3"></span>
                            <div class="position-relative d-flex zindex-2">
                                <a href="#" class="btn btn-icon btn-secondary btn-facebook btn-sm bg-white me-2">
                                    <i class="bx bxl-facebook"></i>
                                </a>
                                <a href="#" class="btn btn-icon btn-secondary btn-linkedin btn-sm bg-white me-2">
                                    <i class="bx bxl-linkedin"></i>
                                </a>
                                <a href="#" class="btn btn-icon btn-secondary btn-twitter btn-sm bg-white">
                                    <i class="bx bxl-twitter"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body text-center p-3">
                        <h3 class="fs-lg fw-semibold pt-1 mb-2">Dr. Courtney Henry</h3>
                        <p class="fs-sm mb-2">Gynecologist</p>
                        <div class="d-flex align-items-center justify-content-center">
                            <div class="text-nowrap me-1">
                                <i class="bx bxs-star text-warning fs-sm"></i>
                                <i class="bx bxs-star text-warning fs-sm"></i>
                                <i class="bx bxs-star text-warning fs-sm"></i>
                                <i class="bx bxs-star text-warning fs-sm"></i>
                                <i class="bx bxs-star text-warning fs-sm"></i>
                            </div>
                            <span class="fs-xs text-muted">(16 reviews)</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}


    <!-- Testimonials (Carousel) -->
    {{-- <section class="bg-secondary py-5 mb-2 mb-md-4 mb-lg-5">
        <div class="container pt-lg-4 mt-1">
            <h2 class="h1 text-center pb-3 pb-md-4 pb-xl-5">What Our Patients Say</h2>
        </div>
        <div class="pb-lg-3 px-2 px-sm-0">
            <div class="swiper" data-swiper-options='{
                                                                                    "slidesPerView": 1,
                                                                                    "centeredSlides": true,
                                                                                    "spaceBetween": 8,
                                                                                    "loop": true,
                                                                                    "pagination": {
                                                                                      "el": ".swiper-pagination",
                                                                                      "clickable": true
                                                                                    },
                                                                                    "breakpoints": {
                                                                                      "500": {
                                                                                        "slidesPerView": 2,
                                                                                        "spaceBetween": 24
                                                                                      },
                                                                                      "1000": {
                                                                                        "slidesPerView": 4,
                                                                                        "spaceBetween": 24
                                                                                      },
                                                                                      "1500": {
                                                                                        "slidesPerView": 6,
                                                                                        "spaceBetween": 24
                                                                                      }
                                                                                    }
                                                                                  }'>
                <div class="swiper-wrapper">

                    <!-- Item -->
                    <div class="swiper-slide h-auto pt-4">
                        <figure class="d-flex flex-column h-100 px-2 px-sm-0 mb-0">
                            <div class="card h-100 position-relative border-0 shadow-sm pt-4">
                                <span
                                    class="btn btn-icon btn-primary shadow-primary pe-none position-absolute top-0 start-0 translate-middle-y ms-4">
                                    <i class="bx bxs-quote-left"></i>
                                </span>
                                <blockquote class="card-body pb-3 mb-0">
                                    <p class="mb-0">Id mollis consectetur congue egestas egestas suspendisse
                                        blandit
                                        justo. Tellus augue
                                        commodo id quis tempus etiam pulvinar at maecenas.</p>
                                </blockquote>
                                <div class="card-footer border-0 text-nowrap pt-0">
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bx-star text-muted opacity-75"></i>
                                    <i class="bx bx-star text-muted opacity-75"></i>
                                </div>
                            </div>
                            <figcaption class="d-flex align-items-center ps-4 pt-4">
                                <img src="assets/img/avatar/30.jpg" width="48" class="rounded" alt="Fannie Summers">
                                <div class="ps-3">
                                    <h6 class="fs-sm fw-semibold mb-0">Fannie Summers</h6>
                                    <span class="fs-xs text-muted">Medical Center patient</span>
                                </div>
                            </figcaption>
                        </figure>
                    </div>

                    <!-- Item -->
                    <div class="swiper-slide h-auto pt-4">
                        <figure class="d-flex flex-column h-100 px-2 px-sm-0 mb-0">
                            <div class="card h-100 position-relative border-0 shadow-sm pt-4">
                                <span
                                    class="btn btn-icon btn-primary shadow-primary pe-none position-absolute top-0 start-0 translate-middle-y ms-4">
                                    <i class="bx bxs-quote-left"></i>
                                </span>
                                <blockquote class="card-body pb-3 mb-0">
                                    <p class="mb-0">Phasellus luctus nisi id orci condimentum, at cursus nisl
                                        vestibulum. Orci varius
                                        natoque penatibus et magnis dis parturient montes.</p>
                                </blockquote>
                                <div class="card-footer border-0 text-nowrap pt-0">
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                </div>
                            </div>
                            <figcaption class="d-flex align-items-center ps-4 pt-4">
                                <img src="assets/img/avatar/32.jpg" width="48" class="rounded" alt="Robert Fox">
                                <div class="ps-3">
                                    <h6 class="fs-sm fw-semibold mb-0">Robert Fox</h6>
                                    <span class="fs-xs text-muted">Medical Center patient</span>
                                </div>
                            </figcaption>
                        </figure>
                    </div>

                    <!-- Item -->
                    <div class="swiper-slide h-auto pt-4">
                        <figure class="d-flex flex-column h-100 px-2 px-sm-0 mb-0">
                            <div class="card h-100 position-relative border-0 shadow-sm pt-4">
                                <span
                                    class="btn btn-icon btn-primary shadow-primary pe-none position-absolute top-0 start-0 translate-middle-y ms-4">
                                    <i class="bx bxs-quote-left"></i>
                                </span>
                                <blockquote class="card-body pb-3 mb-0">
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Mauris
                                        ipsum odio, bibendum
                                        ornare mi at, efficitur urna.</p>
                                </blockquote>
                                <div class="card-footer border-0 text-nowrap pt-0">
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bx-star text-muted opacity-75"></i>
                                </div>
                            </div>
                            <figcaption class="d-flex align-items-center ps-4 pt-4">
                                <img src="assets/img/avatar/31.jpg" width="48" class="rounded" alt="Annette Black">
                                <div class="ps-3">
                                    <h6 class="fs-sm fw-semibold mb-0">Annette Black</h6>
                                    <span class="fs-xs text-muted">Medical Center patient</span>
                                </div>
                            </figcaption>
                        </figure>
                    </div>

                    <!-- Item -->
                    <div class="swiper-slide h-auto pt-4">
                        <figure class="d-flex flex-column h-100 px-2 px-sm-0 mb-0">
                            <div class="card h-100 position-relative border-0 shadow-sm pt-4">
                                <span
                                    class="btn btn-icon btn-primary shadow-primary pe-none position-absolute top-0 start-0 translate-middle-y ms-4">
                                    <i class="bx bxs-quote-left"></i>
                                </span>
                                <blockquote class="card-body pb-3 mb-0">
                                    <p class="mb-0">Etiam augue ante, imperdiet et nunc sed, bibendum faucibus
                                        est.
                                        Suspendisse egestas
                                        facilisis erat eu eleifend.</p>
                                </blockquote>
                                <div class="card-footer border-0 text-nowrap pt-0">
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bx-star text-muted opacity-75"></i>
                                    <i class="bx bx-star text-muted opacity-75"></i>
                                </div>
                            </div>
                            <figcaption class="d-flex align-items-center ps-4 pt-4">
                                <img src="assets/img/avatar/34.jpg" width="48" class="rounded" alt="Jerome Bell">
                                <div class="ps-3">
                                    <h6 class="fs-sm fw-semibold mb-0">Jerome Bell</h6>
                                    <span class="fs-xs text-muted">Medical Center patient</span>
                                </div>
                            </figcaption>
                        </figure>
                    </div>

                    <!-- Item -->
                    <div class="swiper-slide h-auto pt-4">
                        <figure class="d-flex flex-column h-100 px-2 px-sm-0 mb-0">
                            <div class="card h-100 position-relative border-0 shadow-sm pt-4">
                                <span
                                    class="btn btn-icon btn-primary shadow-primary pe-none position-absolute top-0 start-0 translate-middle-y ms-4">
                                    <i class="bx bxs-quote-left"></i>
                                </span>
                                <blockquote class="card-body pb-3 mb-0">
                                    <p class="mb-0">Pellentesque finibus congue egestas egestas suspendisse
                                        blandit
                                        justo. Tellus augue
                                        commodo id quis tempus etiam pulvinar at maecenas.</p>
                                </blockquote>
                                <div class="card-footer border-0 text-nowrap pt-0">
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bx-star text-muted opacity-75"></i>
                                </div>
                            </div>
                            <figcaption class="d-flex align-items-center ps-4 pt-4">
                                <img src="assets/img/avatar/35.jpg" width="48" class="rounded" alt="Albert Flores">
                                <div class="ps-3">
                                    <h6 class="fs-sm fw-semibold mb-0">Albert Flores</h6>
                                    <span class="fs-xs text-muted">Medical Center patient</span>
                                </div>
                            </figcaption>
                        </figure>
                    </div>

                    <!-- Item -->
                    <div class="swiper-slide h-auto pt-4">
                        <figure class="d-flex flex-column h-100 px-2 px-sm-0 mb-0">
                            <div class="card h-100 position-relative border-0 shadow-sm pt-4">
                                <span
                                    class="btn btn-icon btn-primary shadow-primary pe-none position-absolute top-0 start-0 translate-middle-y ms-4">
                                    <i class="bx bxs-quote-left"></i>
                                </span>
                                <blockquote class="card-body pb-3 mb-0">
                                    <p class="mb-0">Nulla volutpat consectetur congue egestas egestas uni
                                        suspendisse blandit
                                        parturient.</p>
                                </blockquote>
                                <div class="card-footer border-0 text-nowrap pt-0">
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                </div>
                            </div>
                            <figcaption class="d-flex align-items-center ps-4 pt-4">
                                <img src="assets/img/avatar/33.jpg" width="48" class="rounded" alt="Jenny Wilson">
                                <div class="ps-3">
                                    <h6 class="fs-sm fw-semibold mb-0">Jenny Wilson</h6>
                                    <span class="fs-xs text-muted">Medical Center patient</span>
                                </div>
                            </figcaption>
                        </figure>
                    </div>

                    <!-- Item -->
                    <div class="swiper-slide h-auto pt-4">
                        <figure class="d-flex flex-column h-100 px-2 px-sm-0 mb-0">
                            <div class="card h-100 position-relative border-0 shadow-sm pt-4">
                                <span
                                    class="btn btn-icon btn-primary shadow-primary pe-none position-absolute top-0 start-0 translate-middle-y ms-4">
                                    <i class="bx bxs-quote-left"></i>
                                </span>
                                <blockquote class="card-body pb-3 mb-0">
                                    <p class="mb-0">Vivamus iaculis facilisis pretium. Pellentesque vitae mi
                                        odio.
                                        Donec imperdiet
                                        pellentesque ipsum quis pharetra. Nullam dolor sem.</p>
                                </blockquote>
                                <div class="card-footer border-0 text-nowrap pt-0">
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bx-star text-muted opacity-75"></i>
                                </div>
                            </div>
                            <figcaption class="d-flex align-items-center ps-4 pt-4">
                                <img src="assets/img/avatar/37.jpg" width="48" class="rounded"
                                    alt="Cameron Williamson">
                                <div class="ps-3">
                                    <h6 class="fs-sm fw-semibold mb-0">Cameron Williamson</h6>
                                    <span class="fs-xs text-muted">Medical Center patient</span>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                </div>

                <!-- Pagination (bullets) -->
                <div class="swiper-pagination position-relative pt-1 pt-sm-3 mt-5"></div>
            </div>
        </div>
    </section> --}}


    <!-- Latest news -->
    <x-landing.articles :articles="$articles"></x-landing.articles>


    <!-- Contacts -->

    <x-landing.contacts :setting="$setting"></x-landing.contacts>
@endsection
