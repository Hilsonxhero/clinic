@props(['services'])

@if (count($services) > 0)
    <section class="container pb-5 mt-5 pt-5 mb-md-2 mb-lg-5">

        <h2 class="h1 text-center pt-1 pb-4 mb-1 mb-lg-3">خدمات ما</h2>
        <div class="row gy-4">
            {{-- <div class="col-lg-4 text-center text-lg-end pb-3 pb-lg-0 mb-4 mb-lg-0">
            <h2 class="h1 mb-lg-4">لورم ایپسوم متن ساختگی &amp; خدمات</h2>
            <p class="pb-4 mb-0 mb-lg-3">
                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است،
                چاپگرها و

            </p>

            <a href="#" class="btn btn-primary shadow-primary btn-lg">مشاهده کامل</a>
        </div> --}}
            @foreach ($services as $service)
                <div class="col-lg-3">
                    <div class="card card-hover bg-secondary border-0 mb-4 d-flex flex-col h-100">
                        <div class="card-body d-flex flex-grow-1 flex-col ">
                            <div class="d-flex align-items-start">
                                <div class="flex-shrink-0 bg-light rounded-3 p-3">
                                    <img src="{{ $service->icon }}" width="28" alt="Icon">
                                </div>
                                <div class="pe-4">
                                    <h5 class="h6 pb-2 mb-1">{{ $service->title }}</h3>
                                        <p class="pb-2 mb-1 text-justify">
                                            {!! truncate($service->description, 55) !!}
                                        </p>
                                        <a href="" class="btn btn-link stretched-link px-0">
                                            اطلاعات بیشتر
                                            <i class="bx bx-left-arrow-alt fs-xl ms-2"></i>
                                        </a>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@else
@endif
