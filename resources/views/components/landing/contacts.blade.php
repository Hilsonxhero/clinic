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

                <li class="d-flex mb-3">
                    <i class="bx bx-envelope text-muted fs-xl mt-1 me-2"></i>
                    {{ $setting->email }}
                </li>
            </ul>
            <a href="#" class="btn btn-primary shadow-primary btn-lg">ارتباط با ما</a>
        </div>
        <div class="col-md-6 pb-2 pb-md-0 mb-4 mb-md-0">
            {{-- <iframe src=" {{ $setting->map }}" width="600" height="450" style="border:0;" allowfullscreen=""
                loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> --}}

            <iframe loading="lazy"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d207371.97794097709!2d51.20973147937285!3d35.69701178782946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f8e00491ff3dcd9%3A0xf0b3697c567024bc!2sTehran%2C+Tehran+Province%2C+Iran!5e0!3m2!1sen!2s!4v1583234381278!5m2!1sen!2s"
                style="border:0;" allowfullscreen="" width="100%" height="100%" frameborder="0"></iframe>
        </div>

    </div>
</section>
