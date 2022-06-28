<div>
    {{-- <footer class="footer   border-top border-light pt-5 pb-4 pb-lg-5">
        <div class="container pt-lg-4">
            <div class="row pb-5">
                <div class="col-lg-4 col-md-6">
                    <div class="navbar-brand text-dark p-0 me-0 mb-3 mb-lg-4">
                        <img src="{{ '/storage/' . $setting->logo }}" width="140" alt="">

                    </div>
                    <p class="fs-sm pb-lg-3 mb-4">
                        {{ $setting->project_description }}
                    </p>

                </div>
                <div class="col-xl-6 col-lg-7 col-md-5 offset-xl-2 offset-md-1 pt-4 pt-md-1 pt-lg-0">
                    <div id="footer-links" class="row">
                        <div class="col-lg-4">
                            <h6 class="mb-2">
                                <a href="#useful-links" class="d-block text-dark dropdown-toggle d-lg-none py-2"
                                    data-bs-toggle="collapse">لینک های مفید</a>
                            </h6>
                            <div id="useful-links" class="collapse d-lg-block" data-bs-parent="#footer-links">
                                <ul class="nav flex-column pb-lg-1 mb-lg-3">
                                    <li class="nav-item"><a href="#"
                                            class="nav-link d-inline-block px-0 pt-1 pb-2">صفحه اصلی</a></li>
                                    <li class="nav-item"><a href="#"
                                            class="nav-link d-inline-block px-0 pt-1 pb-2">درباره ما</a></li>
                                    <li class="nav-item"><a href="#"
                                            class="nav-link d-inline-block px-0 pt-1 pb-2">ارتباط با ما</a></li>
                                    <li class="nav-item"><a href="#"
                                            class="nav-link d-inline-block px-0 pt-1 pb-2">مقالات</a></li>

                                </ul>

                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-3">
                            <h6 class="mb-2">
                                <a href="#social-links" class="d-block text-dark dropdown-toggle d-lg-none py-2"
                                    data-bs-toggle="collapse">شبکه های مجازی</a>
                            </h6>

                        </div>
                        <div class="col-xl-4 col-lg-5 pt-2 pt-lg-0">
                            <h6 class="mb-2">ارتباط با ما</h6>
                            <a href="mailto:email@example.com" class="fw-medium">{{ $setting->phone_1 }}</a>
                            <a href="mailto:email@example.com" class="fw-medium">{{ $setting->phone_2 }}</a>
                        </div>
                    </div>
                </div>
            </div>
            <p class="fs-xs text-center text-md-start pb-2 pb-lg-0 mb-0">
                &copy; {{ $setting->copyright }}
            </p>
        </div>
    </footer> --}}


    <footer class="bd-footer py-5 mt-5 bg-light">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-3 mb-3">
                    <a class="d-inline-flex align-items-center mb-2 link-dark text-decoration-none" href="/"
                        aria-label="Bootstrap">

                        <div class="navbar-brand text-dark p-0 me-0 mb-3 mb-lg-4">
                            <img src="{{ '/storage/' . $setting->logo }}" width="140" alt="">

                        </div>
                    </a>
                    <ul class="list-unstyled small text-muted">
                        <li class="mb-2">
                            {{ $setting->project_description }}
                        </li>


                        <li class="mb-2">
                            &copy; {{ $setting->copyright }}
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-lg-3 mb-3">
                    <h5>لینک های مفید</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="{{ route('application.page.landing') }}">صفحه اصلی</a></li>
                        <li class="mb-2"><a href="{{ route('application.page.about') }}">درباره ما</a></li>
                        <li class="mb-2"><a href="{{ route('application.page.contacts') }}">ارتباط با ما</a></li>
                        <li class="mb-2"><a href="{{ route('application.treatments.index') }}">روش های درمان</a>
                        </li>
                        <li class="mb-2"><a href="{{ route('application.articles.index') }}">مقالات</a></li>

                    </ul>
                </div>
                <div class="col-12 col-lg-3 mb-3">
                    <h5>ارتباط با ما</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <a href="tel:{{ $setting->phone_1 }}" class="d-flex align-items-center">
                                <span class="t-header-info__icon me-0 shadow "><i class='bx bx-phone'></i></span>
                                <span class="me-2">{{ $setting->phone_1 }}</span>
                            </a>
                        </li>

                        <li class="mb-2">
                            <a href="tel:{{ $setting->phone_2 }}" class="d-flex align-items-center">
                                <span class="t-header-info__icon me-0 shadow "><i class='bx bx-phone'></i></span>
                                <span class="me-2">{{ $setting->phone_2 }}</span>
                            </a>
                        </li>


                        <li class="mb-2">
                            <a href="mailto:{{ $setting->email }}" class="d-flex align-items-center">
                                <span class="t-header-info__icon me-0 shadow ">
                                    <i class='bx bx-envelope'></i>
                                </span>
                                <span class="me-2">{{ $setting->email }}</span>
                            </a>
                        </li>

                        <li class="mb-2">
                            <a href="{{ $setting->social_media['instagram'] }}" class="d-flex align-items-center">
                                <span class="t-header-info__icon me-0 shadow ">
                                    <i class='bx bxl-instagram'></i>
                                </span>
                                <span class="me-2">{{ $setting->social_media['instagram'] }}</span>
                            </a>
                        </li>


                        <li class="mb-2">
                            <a href="{{ $setting->social_media['whatsapp'] }}" class="d-flex align-items-center">
                                <span class="t-header-info__icon me-0 shadow ">
                                    <i class='bx bxl-whatsapp'></i>
                                </span>
                                <span class="me-2">{{ $setting->social_media['whatsapp'] }}</span>
                            </a>
                        </li>

                    </ul>
                </div>

                <div class="col-12 col-lg-3 mb-3 ">
                    <h5>خدمات ما</h5>
                    <ul class="list-unstyled">
                        @foreach ($services as $service)
                            <li class="mb-2">
                                <a href="">
                                    {{ $service->title }}
                                </a>
                            </li>
                        @endforeach

                        <li>...</li>



                    </ul>
                </div>

            </div>
        </div>
    </footer>
</div>
