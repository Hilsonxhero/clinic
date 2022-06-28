@props(['treatments'])

@section('css')
    <style>
        .treatment-cover {
            height: 650px !important;
            object-fit: cover
        }

        @media (min-width : 991px) {
            .treatment-content {
                margin-top: -80px;
            }

        }
    </style>
@endsection

<section class="pb-5 mb-2 mb-md-4 mb-lg-5" style="padding-top: 80px;">
    <div class="bg-secondary pb-lg-4 pb-xl-5">
        <div class="container pb-4 pb-md-5">
            <div class="row">

                <div class="col-xl-5 col-lg-6 offset-xl-1 pt-2 pt-md-4 pt-lg-5 mt-4">

                    <!-- Slider prev/next buttons -->
                    <div class="d-flex justify-content-center justify-content-lg-start pb-3 mb-3">

                        <button type="button" id="prev" class="btn btn-prev btn-icon btn-sm ms-2">
                            <i class="bx bx-chevron-right"></i>
                        </button>
                        <button type="button" id="next" class="btn btn-next btn-icon btn-sm me-2">
                            <i class="bx bx-chevron-left"></i>
                        </button>

                    </div>

                    <!-- Swiper slider -->
                    <div class="swiper mx-0 mb-md-n2 mb-xxl-n3"
                        data-swiper-options='{
                                                                                              "spaceBetween": 30,
                                                                                              "loop": true,
                                                                                              "tabs": true,
                                                                                              "navigation": {
                                                                                                "prevEl": "#prev",
                                                                                                "nextEl": "#next"
                                                                                              }
                                                                                            }'>
                        <div class="swiper-wrapper text-center text-lg-end">

                            @foreach ($treatments as $key => $treatment)
                                <div class="swiper-slide pb-4" data-swiper-tab="#image-{{ $key }}">
                                    <h2 class="h1 mb-4"> {{ $treatment->title }}</h2>
                                    <p class="pb-2 pb-xl-0 mb-4 mb-xl-5">
                                        {{ truncate($treatment->description, '120') }}

                                    </p>
                                    <a href="{{ route('application.treatments.show', $treatment->slug) }}"
                                        class="btn btn-success btn-lg shadow-success">مشاهده بیشتر</a>
                                </div>
                            @endforeach


                        </div>
                    </div>
                </div>

                <div class="col-xl-5 col-lg-6 treatment-content">
                    <div class="swiper-tabs mx-auto" style="max-width: 526px;">
                        @foreach ($treatments as $key => $treatment)
                            <div id="image-{{ $key }}"
                                class="swiper-tab  @if ($loop->first) active @endif ">
                                <img src="{{ $treatment->banner }}" class="rounded-3 treatment-cover " alt="Image"
                                    loading="lazy">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
