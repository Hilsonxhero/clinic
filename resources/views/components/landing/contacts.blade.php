<section class="container pb-5 mb-1 mb-md-4 mb-lg-5">
    <div class="row pb-xl-3">
        <div class="col-xl-5 col-md-6 offset-xl-1">
            <h2 class="h1 pb-4 mb-1 mb-lg-3">ارتباط با ما</h2>
            <ul class="list-unstyled pb-3 mb-0 mb-lg-3 p-0">
                <li class="d-flex mb-3">
                    <i class="bx bx-map text-muted fs-xl mt-1 me-2"></i>
                    {{ $setting->address }}
                </li>
                <li class="d-flex mb-3">
                    <i class="bx bx-phone-call text-muted fs-xl mt-1 me-2"></i>
                    {{ $setting->phone_1 }}
                </li>

                <li class="d-flex mb-3">
                    <i class="bx bx-phone-call text-muted fs-xl mt-1 me-2"></i>
                    {{ $setting->phone_2 }}
                </li>
                {{-- <li class="d-flex mb-3">
                    <i class="bx bx-time text-muted fs-xl mt-1 me-2"></i>
                    <div>
                        <div><span class="text-dark fw-semibold me-1">Mon – Fri:</span>9:00 am – 22:00 pm</div>
                        <div><span class="text-dark fw-semibold me-1">Sat – Sun:</span>9:00 am – 20:00 pm</div>
                    </div>
                </li> --}}
                <li class="d-flex mb-3">
                    <i class="bx bx-envelope text-muted fs-xl mt-1 me-2"></i>
                    {{ $setting->email }}
                </li>
            </ul>
            <a href="#" class="btn btn-primary shadow-primary btn-lg">ارتباط با ما</a>
        </div>
        <div class="col-md-6 pb-2 pb-md-0 mb-4 mb-md-0">
            <iframe src=" {{ $setting->map }}" width="600" height="450" style="border:0;" allowfullscreen=""
                loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

    </div>
</section>
