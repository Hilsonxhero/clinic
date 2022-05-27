<div>
    <footer class="footer bg-light border-top border-light pt-5 pb-4 pb-lg-5">
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
    </footer>
</div>
