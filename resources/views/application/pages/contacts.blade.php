@extends('layouts.app')

@section('content')
    <!-- Page content -->
    <section class="container">

        <!-- Breadcrumb -->
        {{-- <nav class="pt-4 mt-lg-3" aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item">
                    <a href="index.html"><i class="bx bx-home-alt fs-lg me-1"></i>Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Contacts v.2</li>
            </ol>
        </nav> --}}

        <!-- Page title -->
        <h1 class="pt-4 mt-lg-3 pb-3 pb-lg-4">ارتباط با ما</h1>

        <div class="row pb-5 mb-md-2 mb-lg-4 mb-xl-5">

            <!-- Contact details -->
            <div class="col-xl-5 col-md-6 mb-4 mb-md-0 offset-xl-1">
                <div class="card card-hover mb-3">
                    <div class="card-body d-flex align-items-start">
                        <i class="bx bx-envelope fs-3 bg-secondary text-primary d-inline-block rounded-circle p-3"></i>
                        <div class="pe-4">
                            <h3 class="h4 pb-1 mb-2">ایمیل</h3>
                            <p class="pb-1 mb-2">
                                ارسال ایمیل به کادر فنی کلینیک
                            </p>
                            <a href="mailto:{{ $setting->email }}" class="btn btn-link stretched-link fs-base px-0">
                                پیام بگذارید
                                <i class="bx bx-left-arrow-alt fs-4 me-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card card-hover mb-3">
                    <div class="card-body d-flex align-items-start">
                        <i class="bx bx-phone-call fs-3 bg-secondary text-primary d-inline-block rounded-circle p-3"></i>
                        <div class="pe-4">
                            <h3 class="h4 pb-1 mb-2">تماس با کلینیک</h3>
                            <p class="pb-1 mb-2">تماس با مدیریت و کادر فنی</p>
                            <a href="{{ $setting->phone_1 }}"
                                class="btn btn-link stretched-link fs-base px-0">{{ $setting->phone_1 }}</a>
                        </div>
                    </div>
                </div>
                <div class="card card-hover">
                    <div class="card-body d-flex align-items-start">
                        <i class="bx bx-map fs-3 bg-secondary text-primary d-inline-block rounded-circle p-3"></i>
                        <div class="pe-4">
                            <h3 class="h4 pb-1 mb-2">ارتباط حضوری</h3>
                            <p class="pb-1 mb-2">{{ $setting->address }}</p>
                            <a href="#" class="btn btn-link stretched-link fs-base px-0">
                                دریافت مسیر
                                <i class="bx bx-left-arrow-alt fs-4 ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Map -->
            <div class="col-md-6 ">
                <div class="d-flex flex-column h-100 shadow-sm rounded-3 overflow-hidden">
                    <iframe class="d-block h-100" src="{{ $setting->map }}" style="border: 0; min-height: 300px;"
                        allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>

        <!-- Contact form -->
        <div class="bg-secondary rounded-3 py-5 px-3 px-sm-0 mb-xl-4">
            <form action="{{ route('application.page.contacts.store') }}" method="POST"
                class=" row justify-content-center py-lg-3 py-xl-4">
                @csrf
                <div class="col-xl-8 col-lg-9 col-md-10 col-sm-11">
                    <h2 class="h1 pb-lg-1 mb-4">تماس با ما</h2>
                    <p class="fs-lg text-muted pb-lg-1 mb-4">
                        لطفاً پیش از ارسال ایمیل یا تماس تلفنی، ابتداپرسش‌‌های متداولرا مشاهده کنید.
                    </p>
                    <div class="row">
                        <div class="col-sm-6 mb-4">
                            <label for="name" class="form-label fs-base">نام</label>
                            <input type="text" name="name" id="name" class="form-control form-control-lg" required>
                            <div class="invalid-feedback">لطفا نام خود را وارد کنید</div>
                        </div>
                        <div class="col-sm-6 mb-4">
                            <label for="email" class="form-label fs-base">ایمیل</label>
                            <input type="email" name="email" id="email" class="form-control form-control-lg" required>
                            <div class="invalid-feedback">لطفا ایمیل خود را وارد کنید</div>
                        </div>
                        <div class="col-12 mb-4">
                            <label for="message" class="form-label fs-base">متن پیام</label>
                            <textarea id="message" name="content" class="form-control form-control-lg" rows="4" required></textarea>
                            <div class="invalid-feedback">لطفا متن پیام خود را بنویسید</div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary btn-lg shadow-primary">ارسال پیام</button>
                </div>
            </form>
        </div>
    </section>
@endsection
