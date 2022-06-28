@props(['articles'])

@if (count($articles) > 0)
    <section class="container py-5 mb-1 mb-md-4 mb-lg-5">
        <h2 class="h1 text-center pt-1 pb-4 mb-1 mb-lg-3">مقالات</h2>
        <div class="position-relative px-xl-5">

            <!-- Slider prev/next buttons -->
            <button type="button" id="next-news"
                class="btn btn-prev btn-icon btn-sm position-absolute top-50 start-0 translate-middle-y d-none d-xl-inline-flex">
                <i class="bx bx-chevron-left"></i>
            </button>
            <button type="button" id="prev-news"
                class="btn btn-next btn-icon btn-sm position-absolute top-50 end-0 translate-middle-y d-none d-xl-inline-flex">
                <i class="bx bx-chevron-right"></i>
            </button>

            <!-- Slider -->
            <div class="px-xl-2">
                <div dir="rtl" class="swiper mx-n2"
                    data-swiper-options='{
                                                                                  "slidesPerView": 1,

                                                                                  "loop": true,
                                                                                  "pagination": {
                                                                                    "el": ".swiper-pagination",
                                                                                    "clickable": true
                                                                                  },
                                                                                  "navigation": {
                                                                                    "prevEl": "#prev-news",
                                                                                    "nextEl": "#next-news"
                                                                                  },
                                                                                  "breakpoints": {
                                                                                    "500": {
                                                                                      "slidesPerView": 2
                                                                                    },
                                                                                    "1000": {
                                                                                      "slidesPerView": 3
                                                                                    }
                                                                                  }
                                                                                }'>
                    <div class="swiper-wrapper">

                        @foreach ($articles as $article)
                            <div class="swiper-slide h-auto pb-3">
                                <article class="card h-100 flex flex-col border-0 shadow-sm mx-2">
                                    <div class="position-relative article-cover">
                                        <a href="{{ route('application.articles.show', $article->slug) }}"
                                            class="position-absolute top-0 start-0 w-100 h-100"
                                            aria-label="Read more"></a>

                                        <img src="{{ $article->banner }}" class="card-img-top" alt="Image"
                                            loading="lazy">
                                    </div>
                                    <div class="card-body pb-4 article-content">
                                        <div class="d-flex align-items-center justify-content-between mb-3">
                                            <a href="#"
                                                class="badge fs-sm text-nav bg-secondary text-decoration-none">{{ $article->category->title }}</a>
                                            <span class="fs-sm text-muted">{{ $article->created_date }}</span>
                                        </div>
                                        <h3 class="h5 mb-0 article-title">
                                            <a
                                                href="{{ route('application.articles.show', $article->slug) }}">{{ $article->title }}</a>
                                        </h3>
                                        <p class="text-justify mt-3 ">
                                            {{ truncate($article->description, 90) }}
                                        </p>

                                    </div>

                                    {{-- <div class="article-dec">

                                </div> --}}

                                </article>
                            </div>
                        @endforeach

                    </div>

                    <!-- Pagination (bullets) -->
                    <div class="swiper-pagination position-relative pt-2 pt-sm-3 mt-4"></div>
                </div>
            </div>
        </div>
    </section>
@else
@endif
