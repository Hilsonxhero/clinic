@extends('layouts.app')

@section('content')
    <!-- Breadcrumb -->
    {{-- <nav class="container mt-lg-4 pt-5" aria-label="breadcrumb">
        <ol class="breadcrumb mb-0 pt-5">
            <li class="breadcrumb-item">
                <a href="index.html"><i class="bx bx-home-alt fs-lg me-1"></i>Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Blog List with Sidebar</li>
        </ol>
    </nav> --}}


    <!-- Page content -->
    <section class="container mt-4  mb-2 mb-md-4 mb-lg-5 pt-lg-2 pb-5">

        <!-- Page title + Layout switcher -->
        <div class="d-flex align-items-center justify-content-between mb-4 pb-1 pb-md-3">
            <h1 class="mb-0">نمونه کارها</h1>

        </div>

        <div class="row">
            <div class="col-xl-9 col-lg-8">

                <div id="js-articles-items">
                    <x-portfolio.portfolio-item :portfolios="$portfolios"></x-portfolio.portfolio-item>
                </div>



                {{-- <div class="pb-2 pb-lg-3"></div> --}}

                {{-- <article class="card me-xl-5 mb-4">
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-3">
                            <a href="#"
                                class="badge fs-sm text-white bg-warning shadow-warning text-decoration-none">Business</a>
                            <a href="#"
                                class="btn btn-icon btn-secondary btn-sm rounded-circle position-absolute top-0 end-0 zindex-5 me-3 mt-3"
                                data-bs-toggle="tooltip" data-bs-placement="left" title="Read later">
                                <i class="bx bx-bookmark"></i>
                            </a>
                        </div>
                        <h3 class="h4">
                            <a href="blog-single.html">A Study on Smartwatch Design Qualities and People’s Preferences</a>
                        </h3>
                        <p class="mb-4">Sed parturient in faucibus porttitor morbi rutrum in. Amet fermentum,
                            scelerisque suspendisse nisi faucibus quis lacus. Convallis eget pretium leo, egestas nisl,
                            congue quam et ultrices. Pharetra, elementum pulvinar massa mattis sapien, sit. Id sollicitudin
                            viverra morbi vitae ac tempor bibendum pulvinar vel. Integer non mattis ultrices est morbi
                            ullamcorper scelerisque hac mi. Id semper ut dui sit magna.</p>
                        <div class="d-flex align-items-center text-muted">
                            <div class="fs-sm border-end pe-3 me-3">Sep 3, 2021</div>
                            <div class="d-flex align-items-center me-3">
                                <i class="bx bx-like fs-lg me-1"></i>
                                <span class="fs-sm">8</span>
                            </div>
                            <div class="d-flex align-items-center me-3">
                                <i class="bx bx-comment fs-lg me-1"></i>
                                <span class="fs-sm">7</span>
                            </div>
                            <div class="d-flex align-items-center">
                                <i class="bx bx-share-alt fs-lg me-1"></i>
                                <span class="fs-sm">3</span>
                            </div>
                        </div>
                    </div>
                </article> --}}

                <div class="pb-2 pb-lg-3"></div>



                <button class="btn btn-lg btn-outline-primary w-100 mt-4" id="js-show-more-btn">
                    مشاهده بیشتر
                    <i class="bx bx-down-arrow-alt fs-xl me-2"></i>
                </button>
            </div>


            <!-- Sidebar (Offcanvas below lg breakpoint) -->
            <aside class="col-xl-3 col-lg-4">
                <div class="offcanvas offcanvas-end offcanvas-expand-lg" id="blog-sidebar" tabindex="-1">

                    <!-- Header -->
                    <div class="offcanvas-header border-bottom">
                        <h3 class="offcanvas-title fs-lg">Sidebar</h3>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
                    </div>

                    <!-- Body -->
                    <div class="offcanvas-body">

                        <!-- Search form -->
                        <form class="input-group mb-4">
                            <input type="text" placeholder="جستجو .." class="form-control rounded pe-5">
                            <i
                                class='bx bx-search position-absolute top-50 end-0 translate-middle-y me-3 fs-lg zindex-5'></i>
                        </form>

                        <!-- Categories -->
                        {{-- <div class="card card-body mb-4">
                            <h3 class="h5">Categories</h3>
                            <ul class="nav flex-column fs-sm">
                                <li class="nav-item mb-1">
                                    <a href="#" class="nav-link py-1 px-0 active">All topics <span
                                            class="fw-normal opacity-60 ms-1">(48)</span></a>
                                </li>
                                <li class="nav-item mb-1">
                                    <a href="#" class="nav-link py-1 px-0">Digital <span
                                            class="fw-normal opacity-60 ms-1">(12)</span></a>
                                </li>
                                <li class="nav-item mb-1">
                                    <a href="#" class="nav-link py-1 px-0">Marketing <span
                                            class="fw-normal opacity-60 ms-1">(5)</span></a>
                                </li>
                                <li class="nav-item mb-1">
                                    <a href="#" class="nav-link py-1 px-0">Startups <span
                                            class="fw-normal opacity-60 ms-1">(10)</span></a>
                                </li>
                                <li class="nav-item mb-1">
                                    <a href="#" class="nav-link py-1 px-0">Technology <span
                                            class="fw-normal opacity-60 ms-1">(9)</span></a>
                                </li>
                                <li class="nav-item mb-1">
                                    <a href="#" class="nav-link py-1 px-0">Business <span
                                            class="fw-normal opacity-60 ms-1">(4)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link py-1 px-0">Processes & Tools <span
                                            class="fw-normal opacity-60 ms-1">(3)</span></a>
                                </li>
                            </ul>
                        </div> --}}

                        <!-- Popular posts -->

                        <div class="card card-body border-0 position-relative mb-4">
                            <span class="position-absolute top-0 start-0 w-100 h-100 bg-gray-light rounded-3"></span>
                            <div class="position-relative zindex-2">
                                <h3 class="h5">نمونه کار های پر بازدید</h3>
                                <ul class="list-unstyled p-0 mb-0">
                                    @foreach ($popular_portfolios as $popular_portfolio)
                                        <li class="border-bottom pb-3 ">
                                            <h4 class="h6  article-title ">
                                                <a href="#" class="">{{ $popular_portfolio->title }}</a>
                                            </h4>

                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                        <!-- Tags -->
                        {{-- <div class="card card-body mb-4">
                            <h3 class="h5">Tags</h3>
                            <div class="d-flex flex-wrap">
                                <a href="#" class="btn btn-outline-secondary btn-sm px-3 my-1 me-2">#lifestyle</a>
                                <a href="#" class="btn btn-outline-secondary btn-sm px-3 my-1 me-2">#ux</a>
                                <a href="#" class="btn btn-outline-secondary btn-sm px-3 my-1 me-2">#tech</a>
                                <a href="#" class="btn btn-outline-secondary btn-sm px-3 my-1 me-2">#user</a>
                                <a href="#" class="btn btn-outline-secondary btn-sm px-3 my-1 me-2">#software</a>
                                <a href="#" class="btn btn-outline-secondary btn-sm px-3 my-1 me-2">#it</a>
                                <a href="#" class="btn btn-outline-secondary btn-sm px-3 my-1 me-2">#network</a>
                                <a href="#" class="btn btn-outline-secondary btn-sm px-3 my-1 me-2">#engineering</a>
                            </div>
                        </div> --}}

                        <!-- Follow Us -->
                        {{-- <div class="card mb-4">
                            <div class="card-body">
                                <h5 class="mb-4">Follow Us</h5>
                                <a href="#" class="btn btn-icon btn-sm btn-secondary btn-linkedin me-2 mb-2">
                                    <i class="bx bxl-linkedin"></i>
                                </a>
                                <a href="#" class="btn btn-icon btn-sm btn-secondary btn-facebook me-2 mb-2">
                                    <i class="bx bxl-facebook"></i>
                                </a>
                                <a href="#" class="btn btn-icon btn-sm btn-secondary btn-twitter me-2 mb-2">
                                    <i class="bx bxl-twitter"></i>
                                </a>
                                <a href="#" class="btn btn-icon btn-sm btn-secondary btn-instagram me-2 mb-2">
                                    <i class="bx bxl-instagram"></i>
                                </a>
                            </div>
                        </div> --}}

                        <!-- Advertising -->
                        {{-- <div class="card border-0 bg-faded-primary bg-repeat-0 bg-size-cover"
                            style="min-height: 25rem; background-image: url(assets/img/blog/banner.png);">
                            <div class="card-body">
                                <h5 class="h3 mb-4 pb-2 text-center">Ad Banner</h5>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </aside>
        </div>
    </section>
@endsection

@section('js')
    <script>
        var page = 1;
        var moreData = true

        // loadData(page)

        var show_more = document.getElementById("js-show-more-btn")

        show_more.addEventListener("click", function() {
            page++;
            if (moreData) {
                loadData(page)
            }
        })

        function loadData(page) {
            axios.get(`?page=${page}`).then(({
                data
            }) => {
                if (!data.has_more) {
                    show_more.classList.add("d-none")
                    moreData = false
                }
                document.getElementById("js-articles-items").insertAdjacentHTML('beforeend', data.html)

            }).catch(() => {

            })
        }
    </script>
@endsection
