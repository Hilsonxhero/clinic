<div class="d-flex flex-col navbar-light position-relative navbar-sticky">

    <div class=" d-block w-100 p-3 t-header__info">
        <div class="container d-flex justify-content-between">
            <span></span>
            <div class="d-flex align-items-center">
                @if ($setting->phone_1)
                    <a href="tel:{{ $setting->phone_1 }}" class="d-flex align-items-center me-3">
                        <span class="">{{ $setting->phone_1 }}</span>
                        <span class="t-header-info__icon"><i class='bx bx-phone'></i></span>
                    </a>
                @endif

                @if ($setting->phone_2)
                    <a href="tel:{{ $setting->phone_2 }}" class="d-flex align-items-center  me-3">
                        <span class="">{{ $setting->phone_2 }}</span>
                        <span class="t-header-info__icon"><i class='bx bx-phone'></i></span>
                    </a>
                @endif


            </div>
        </div>
    </div>

    <header class="t-header header navbar navbar-expand-lg">
        <div class="container px-3">

            <div id="navbarNav" class="offcanvas offcanvas-start">
                <div class="offcanvas-header border-bottom">
                    {{-- <h5 class="offcanvas-title">منو</h5> --}}
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 p-0">

                        <li class="nav-item">
                            <a href="{{ route('application.page.landing') }}" class="nav-link">صفحه اصلی</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">خدمات ما</a>
                            <ul class="dropdown-menu">
                                @foreach ($services as $service)
                                    <li><a href="" class="dropdown-item text-start">{{ $service->title }}</a>
                                    </li>
                                @endforeach

                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('application.articles.index') }}" class="nav-link">مقالات</a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('application.treatments.index') }}" class="nav-link">روش های
                                درمان</a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('application.page.about') }}" class="nav-link">درباره ما</a>
                        </li>


                        <li class="nav-item">
                            <a href="{{ route('application.page.contacts') }}" class="nav-link">ارتباط با ما</a>
                        </li>




                        <li class="nav-item dropdown d-none">
                            <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown"
                                aria-current="page">صفحه اصلی</a>
                            <div class="dropdown-menu p-0">
                                <div class="d-lg-flex">
                                    <div class="mega-dropdown-column bg-position-center bg-repeat-0 bg-size-cover rounded-3 rounded-end-0"
                                        style="background-image: url(assets/imgs.jpg); margin: -1px;"></div>
                                    <div class="mega-dropdown-column pt-lg-3 pb-lg-4">
                                        <ul class="list-unstyled mb-0">
                                            <li><a href="index.html" class="dropdown-item">Template Intro Page</a></li>
                                            <li><a href="landing-mobile-app-showcase.html" class="dropdown-item">Mobile
                                                    App Showcase</a>
                                            </li>
                                            <li><a href="landing-saas-v1.html" class="dropdown-item">SaaS v.1</a></li>
                                            <li><a href="landing-saas-v2.html" class="dropdown-item">SaaS v.2</a></li>
                                            <li><a href="landing-financial.html" class="dropdown-item">Financial
                                                    Consulting</a></li>
                                            <li><a href="landing-online-courses.html" class="dropdown-item">Online
                                                    Courses</a></li>
                                            <li><a href="landing-medical.html" class="dropdown-item">Medical</a></li>
                                            <li><a href="landing-software-company.html" class="dropdown-item">IT
                                                    (Software) Company</a></li>
                                        </ul>
                                    </div>
                                    <div class="mega-dropdown-column pt-lg-3 pb-lg-4">
                                        <ul class="list-unstyled mb-0">
                                            <li><a href="landing-conference.html" class="dropdown-item">Conference</a>
                                            </li>
                                            <li><a href="landing-digital-agency.html" class="dropdown-item">Digital
                                                    Agency</a></li>
                                            <li><a href="landing-blog.html" class="dropdown-item">Blog Homepage</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown d-none">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu">
                                <div class="d-lg-flex pt-lg-3">
                                    <div class="mega-dropdown-column">
                                        <h6 class="px-3 mb-2">About</h6>
                                        <ul class="list-unstyled mb-3">
                                            <li><a href="about-v1.html" class="dropdown-item py-1">About v.1</a></li>
                                            <li><a href="about-v2.html" class="dropdown-item py-1">About v.2</a></li>
                                        </ul>
                                        <h6 class="px-3 mb-2">Blog</h6>
                                        <ul class="list-unstyled mb-3">
                                            <li><a href="blog-list-with-sidebar.html" class="dropdown-item py-1">List
                                                    View with Sidebar</a>
                                            </li>
                                            <li><a href="blog-grid-with-sidebar.html" class="dropdown-item py-1">Grid
                                                    View with Sidebar</a>
                                            </li>
                                            <li><a href="blog-list-no-sidebar.html" class="dropdown-item py-1">List
                                                    View
                                                    no Sidebar</a></li>
                                            <li><a href="blog-grid-no-sidebar.html" class="dropdown-item py-1">Grid
                                                    View
                                                    no Sidebar</a></li>
                                            <li><a href="blog-simple-feed.html" class="dropdown-item py-1">Simple
                                                    Feed</a></li>
                                            <li><a href="blog-single.html" class="dropdown-item py-1">Single Post</a>
                                            </li>
                                            <li><a href="blog-podcast.html" class="dropdown-item py-1">Podcast</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="mega-dropdown-column">
                                        <h6 class="px-3 mb-2">Portfolio</h6>
                                        <ul class="list-unstyled mb-3">
                                            <li><a href="portfolio-grid.html" class="dropdown-item py-1">Grid View</a>
                                            </li>
                                            <li><a href="portfolio-list.html" class="dropdown-item py-1">List View</a>
                                            </li>
                                            <li><a href="portfolio-slider.html" class="dropdown-item py-1">Slider
                                                    View</a></li>
                                            <li><a href="portfolio-courses.html"
                                                    class="dropdown-item py-1">Courses</a>
                                            </li>
                                            <li><a href="portfolio-single-project.html"
                                                    class="dropdown-item py-1">Single Project</a></li>
                                            <li><a href="portfolio-single-course.html"
                                                    class="dropdown-item py-1">Single
                                                    Course</a></li>
                                        </ul>
                                        <h6 class="px-3 mb-2">Services</h6>
                                        <ul class="list-unstyled mb-3">
                                            <li><a href="services-v1.html" class="dropdown-item py-1">Services v.1</a>
                                            </li>
                                            <li><a href="services-v2.html" class="dropdown-item py-1">Services v.2</a>
                                            </li>
                                            <li><a href="services-single-v1.html" class="dropdown-item py-1">Service
                                                    Details v.1</a></li>
                                            <li><a href="services-single-v2.html" class="dropdown-item py-1">Service
                                                    Details v.2</a></li>
                                        </ul>
                                    </div>
                                    <div class="mega-dropdown-column">
                                        <h6 class="px-3 mb-2">Pricing</h6>
                                        <ul class="list-unstyled mb-3">
                                            <li><a href="pricing.html" class="dropdown-item py-1">Pricing Page</a>
                                            </li>
                                        </ul>
                                        <h6 class="px-3 mb-2">Contacts</h6>
                                        <ul class="list-unstyled mb-3">
                                            <li><a href="contacts-v1.html" class="dropdown-item py-1">Contacts v.1</a>
                                            </li>
                                            <li><a href="contacts-v2.html" class="dropdown-item py-1">Contacts v.2</a>
                                            </li>
                                        </ul>
                                        <h6 class="px-3 mb-2">Specialty</h6>
                                        <ul class="list-unstyled">
                                            <li><a href="404-v1.html" class="dropdown-item py-1">404 Error v.1</a>
                                            </li>
                                            <li><a href="404-v2.html" class="dropdown-item py-1">404 Error v.2</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown d-none">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Account</a>
                            <ul class="dropdown-menu">
                                <li><a href="account-details.html" class="dropdown-item">Account Details</a></li>
                                <li><a href="account-security.html" class="dropdown-item">Security</a></li>
                                <li><a href="account-notifications.html" class="dropdown-item">Notifications</a></li>
                                <li><a href="account-messages.html" class="dropdown-item">Messages</a></li>
                                <li><a href="account-saved-items.html" class="dropdown-item">Saved Items</a></li>
                                <li><a href="account-collections.html" class="dropdown-item">My Collections</a></li>
                                <li><a href="account-payment.html" class="dropdown-item">Payment Details</a></li>
                                <li><a href="account-signin.html" class="dropdown-item">Sign In</a></li>
                                <li><a href="account-signup.html" class="dropdown-item">Sign Up</a></li>
                            </ul>
                        </li>

                    </ul>
                </div>

            </div>


            <div class="d-flex align-items-center">



                @auth
                    <div class="dropdown  me-4 d-none d-lg-block">
                        <a href="#" class="d-flex nav-link p-0" data-bs-toggle="dropdown">
                            <img src="{{ asset('panel/media/svg/avatars/blank.svg') }}" class="rounded-circle"
                                alt="Avatar" width="48">
                            <div class="d-none d-sm-block pe-2">
                                <div class="fs-xs lh-1 opacity-60">{{ auth()->user()->email }}</div>
                                <div class="fs-sm dropdown-toggle">{{ auth()->user()->username }}</div>
                            </div>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end my-1" style="width: 14rem;">
                            <li>
                                <a href="{{ route('panel.dashboard') }}"
                                    class="dropdown-item d-flex align-items-center">
                                    <i class="bx bxs-dashboard fs-base opacity-60 ms-2"></i>
                                    پنل مدیریت
                                </a>
                            </li>

                            <li class="dropdown-divider"></li>
                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <i class="bx bx-log-out fs-base opacity-60 ms-2"></i>
                                    خروج از حساب کاربری
                                </a>
                            </li>
                        </ul>
                    </div>
                @endauth




                <a href="{{ route('application.page.landing') }}" class="navbar-brand me-0 me-lg-4 ">
                    <img src="{{ '/storage/' . $setting->logo }}" width="140" alt="" class="me-0">
                </a>
            </div>



            <button type="button" class="navbar-toggler" data-bs-toggle="offcanvas" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </header>
</div>
