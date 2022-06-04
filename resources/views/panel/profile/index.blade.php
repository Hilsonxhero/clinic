@extends('layouts.panel')

@section('breadcrumb')
    <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">
        اطلاعات کاربری
        <span class="h-20px border-gray-200 border-start ms-3 mx-2"></span>
    </h1>
@endsection
@section('content')
    <div class="card">

        <div class="card-header">

            <div class="card-title fs-3 fw-bolder">اطلاعات کاربری</div>

        </div>

        <form id="kt_project_settings_form" action="{{ route('panel.profile.update') }}" method="post"
            class="form" enctype="multipart/form-data">
            @csrf



            <div class="card-body p-9">

                {{-- <div class="row mb-5">

                    <div class="col-xl-3">
                        <div class="fs-6 fw-bold mt-2 mb-3">لوگوی سایت</div>
                    </div>


                    <div class="col-lg-8">
                        <x-file-upload name="logo" value="{{ '/storage/' . $settings->logo }}"></x-file-upload>

                        <div class="form-text">فرمت های فایل : png, jpg, jpeg.</div>

                    </div>

                </div> --}}


                <div class="row mb-8">

                    <div class="col-xl-3">
                        <div class="fs-6 fw-bold mt-2 mb-3">نام کاربری</div>
                    </div>


                    <div class="col-xl-9 fv-row">
                        <input type="text" class="form-control form-control-solid" name="username"
                            value="{{ auth()->user()->username }}" />
                    </div>
                </div>

                <div class="row mb-8">

                    <div class="col-xl-3">
                        <div class="fs-6 fw-bold mt-2 mb-3">ایمیل</div>
                    </div>


                    <div class="col-xl-9 fv-row">
                        <input type="email" class="form-control form-control-solid" name="email"
                            value="{{ auth()->user()->email }}" />
                    </div>
                </div>

                <div class="row mb-8">

                    <div class="col-xl-3">
                        <div class="fs-6 fw-bold mt-2 mb-3">شماره همراه</div>
                    </div>


                    <div class="col-xl-9 fv-row">
                        <input type="text" class="form-control form-control-solid" name="phone"
                            value="{{ auth()->user()->phone }}" />
                    </div>
                </div>

                <div class="row mb-8">

                    <div class="col-xl-3">
                        <div class="fs-6 fw-bold mt-2 mb-3">رمز عبور</div>
                    </div>


                    <div class="col-xl-9 fv-row">
                        <input type="password" class="form-control form-control-solid" name="password" value="" />
                    </div>
                </div>


                <div class="row mb-8 d-none">

                    <div class="col-xl-3">
                        <div class="fs-6 fw-bold mt-2 mb-3">Notifications</div>
                    </div>


                    <div class="col-xl-9">
                        <div class="d-flex fw-bold h-100">
                            <div class="form-check form-check-custom form-check-solid me-9">
                                <input class="form-check-input" type="checkbox" value="" id="email" />
                                <label class="form-check-label ms-3" for="email">Email</label>
                            </div>
                            <div class="form-check form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="" id="phone" checked="checked" />
                                <label class="form-check-label ms-3" for="phone">Phone</label>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row d-none">

                    <div class="col-xl-3">
                        <div class="fs-6 fw-bold mt-2 mb-3">Status</div>
                    </div>


                    <div class="col-xl-9">
                        <div class="form-check form-switch form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="" id="status" name="status"
                                checked="checked" />
                            <label class="form-check-label fw-bold text-gray-400 ms-3" for="status">Active</label>
                        </div>
                    </div>

                </div>

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
