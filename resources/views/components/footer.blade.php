<div>

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
                        @if ($setting->phone_1)
                            <li class="mb-2">
                                <a href="tel:{{ $setting->phone_1 }}" class="d-flex align-items-center">
                                    <span class="t-header-info__icon me-0 shadow "><i class='bx bx-phone'></i></span>
                                    <span class="me-2">{{ $setting->phone_1 }}</span>
                                </a>
                            </li>
                        @endif

                        @if ($setting->phone_2)
                            <li class="mb-2">
                                <a href="tel:{{ $setting->phone_2 }}" class="d-flex align-items-center">
                                    <span class="t-header-info__icon me-0 shadow "><i class='bx bx-phone'></i></span>
                                    <span class="me-2">{{ $setting->phone_2 }}</span>
                                </a>
                            </li>
                        @endif


                        @if ($setting->email)
                            <li class="mb-2">
                                <a href="mailto:{{ $setting->email }}" class="d-flex align-items-center">
                                    <span class="t-header-info__icon me-0 shadow ">
                                        <i class='bx bx-envelope'></i>
                                    </span>
                                    <span class="me-2">{{ $setting->email }}</span>
                                </a>
                            </li>
                        @endif


                        @if ($setting->social_media['instagram'])
                            <li class="mb-2">
                                <a href="{{ $setting->social_media['instagram'] }}"
                                    class="d-flex align-items-center">
                                    <span class="t-header-info__icon me-0 shadow ">
                                        <i class='bx bxl-instagram'></i>
                                    </span>
                                    <span class="me-2">{{ $setting->social_media['instagram'] }}</span>
                                </a>
                            </li>
                        @endif



                        @if ($setting->social_media['whatsapp'])
                            <li class="mb-2">
                                <a href="{{ $setting->social_media['whatsapp'] }}" class="d-flex align-items-center">
                                    <span class="t-header-info__icon me-0 shadow ">
                                        <i class='bx bxl-whatsapp'></i>
                                    </span>
                                    <span class="me-2">{{ $setting->social_media['whatsapp'] }}</span>
                                </a>
                            </li>
                        @endif

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
