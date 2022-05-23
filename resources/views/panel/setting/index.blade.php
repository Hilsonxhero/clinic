@extends('layouts.panel')


@section('content')
    <div class="card">
        <!--begin::Card header-->
        <div class="card-header">
            <!--begin::Card title-->
            <div class="card-title fs-3 fw-bolder">تنظیمات اپلیکیشن</div>
            <!--end::Card title-->
        </div>
        <!--end::Card header-->
        <!--begin::Form-->
        <form id="kt_project_settings_form" action="{{ route('panel.page.setting.update') }}" method="post"
            class="form" enctype="multipart/form-data">
            @csrf
            <!--begin::Card body-->
            <div class="card-body p-9">
                <!--begin::Row-->
                <div class="row mb-5">
                    <!--begin::Col-->
                    <div class="col-xl-3">
                        <div class="fs-6 fw-bold mt-2 mb-3">لوگوی سایت</div>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-lg-8">
                        <x-file-upload name="logo" value="{{ '/storage/' . $settings->logo }}"></x-file-upload>
                        <!--begin::Hint-->
                        <div class="form-text">فرمت های فایل : png, jpg, jpeg.</div>
                        <!--end::Hint-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->
                <!--begin::Row-->
                <div class="row mb-8">
                    <!--begin::Col-->
                    <div class="col-xl-3">
                        <div class="fs-6 fw-bold mt-2 mb-3">نام پروژه</div>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-xl-9 fv-row">
                        <input type="text" class="form-control form-control-solid" name="project_name"
                            value="{{ $settings->project_name }}" />
                    </div>
                </div>

                <div class="row mb-8">
                    <!--begin::Col-->
                    <div class="col-xl-3">
                        <div class="fs-6 fw-bold mt-2 mb-3">متن کپی رایت</div>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-xl-9 fv-row">
                        <input type="text" class="form-control form-control-solid" name="copyright"
                            value="{{ $settings->copyright }}" />
                    </div>
                </div>

                <div class="row mb-8">
                    <!--begin::Col-->
                    <div class="col-xl-3">
                        <div class="fs-6 fw-bold mt-2 mb-3">اینستاگرام</div>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-xl-9 fv-row">
                        <input type="text" class="form-control form-control-solid" name="social_media[instagram]"
                            value="{{ $settings->social_media['instagram'] }}" />
                    </div>
                </div>


                <div class="row mb-8">
                    <!--begin::Col-->
                    <div class="col-xl-3">
                        <div class="fs-6 fw-bold mt-2 mb-3">واتساپ</div>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-xl-9 fv-row">
                        <input type="text" class="form-control form-control-solid" name="social_media[whatsapp]"
                            value="{{ $settings->social_media['whatsapp'] }}" />
                    </div>
                </div>

                <div class="row mb-8">
                    <!--begin::Col-->
                    <div class="col-xl-3">
                        <div class="fs-6 fw-bold mt-2 mb-3">ایمیل</div>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-xl-9 fv-row">
                        <input type="text" class="form-control form-control-solid" name="email"
                            value="{{ $settings->email }}" />
                    </div>
                </div>

                <div class="row mb-8">
                    <!--begin::Col-->
                    <div class="col-xl-3">
                        <div class="fs-6 fw-bold mt-2 mb-3">شماره همراه 1</div>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-xl-9 fv-row">
                        <input type="text" class="form-control form-control-solid" name="mobile_1"
                            value="{{ $settings->mobile_1 }}" />
                    </div>
                </div>

                <div class="row mb-8">
                    <!--begin::Col-->
                    <div class="col-xl-3">
                        <div class="fs-6 fw-bold mt-2 mb-3">شماره همراه 2</div>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-xl-9 fv-row">
                        <input type="text" class="form-control form-control-solid" name="mobile_2"
                            value="{{ $settings->mobile_2 }}" />
                    </div>
                </div>

                <div class="row mb-8">
                    <!--begin::Col-->
                    <div class="col-xl-3">
                        <div class="fs-6 fw-bold mt-2 mb-3">شماره تلفن ثابت 1 </div>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-xl-9 fv-row">
                        <input type="text" class="form-control form-control-solid" name="phone_1"
                            value="{{ $settings->phone_1 }}" />
                    </div>
                </div>

                <div class="row mb-8">
                    <!--begin::Col-->
                    <div class="col-xl-3">
                        <div class="fs-6 fw-bold mt-2 mb-3">شماره تلفن ثابت 2 </div>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-xl-9 fv-row">
                        <input type="text" class="form-control form-control-solid" name="phone_2"
                            value="{{ $settings->phone_2 }}" />
                    </div>
                </div>

                <div class="row mb-8">
                    <!--begin::Col-->
                    <div class="col-xl-3">
                        <div class="fs-6 fw-bold mt-2 mb-3">لینک آدرس روی نقشه</div>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-xl-9 fv-row">
                        <input type="text" class="form-control form-control-solid" name="map"
                            value="{{ $settings->map }}" />
                    </div>
                </div>



                <div class="row mb-8">

                    <div class="col-xl-3">
                        <div class="fs-6 fw-bold mt-2 mb-3">توضیحات اپلکیشن</div>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-xl-9 fv-row">
                        <textarea name="project_description"
                            class="form-control form-control-solid h-100px">{{ $settings->project_description }}</textarea>
                    </div>
                    <!--begin::Col-->
                </div>

                <div class="row mb-8">

                    <div class="col-xl-3">
                        <div class="fs-6 fw-bold mt-2 mb-3"> آدرس</div>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-xl-9 fv-row">
                        <textarea name="address" class="form-control form-control-solid h-100px">{{ $settings->address }}</textarea>
                    </div>
                    <!--begin::Col-->
                </div>

                <div class="row mb-8 d-none">
                    <!--begin::Col-->
                    <div class="col-xl-3">
                        <div class="fs-6 fw-bold mt-2 mb-3">Notifications</div>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-xl-9">
                        <div class="d-flex fw-bold h-100">
                            <div class="form-check form-check-custom form-check-solid me-9">
                                <input class="form-check-input" type="checkbox" value="{{ $settings->project_name }}"
                                    id="email" />
                                <label class="form-check-label ms-3" for="email">Email</label>
                            </div>
                            <div class="form-check form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="{{ $settings->project_name }}"
                                    id="phone" checked="checked" />
                                <label class="form-check-label ms-3" for="phone">Phone</label>
                            </div>
                        </div>
                    </div>
                    <!--end::Col-->
                </div>

                <div class="row d-none">
                    <!--begin::Col-->
                    <div class="col-xl-3">
                        <div class="fs-6 fw-bold mt-2 mb-3">Status</div>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-xl-9">
                        <div class="form-check form-switch form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="{{ $settings->project_name }}"
                                id="status" name="status" checked="checked" />
                            <label class="form-check-label fw-bold text-gray-400 ms-3" for="status">Active</label>
                        </div>
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->
            </div>
            <!--end::Card body-->
            <!--begin::Card footer-->
            <div class="card-footer d-flex justify-content-end py-6 px-9">

                <button type="submit" class="btn btn-primary" id="kt_project_settings_submit">ذخیره تغییرات</button>
            </div>
            <!--end::Card footer-->
        </form>
        <!--end:Form-->
    </div>
@endsection
