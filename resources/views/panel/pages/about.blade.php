@extends('layouts.panel')


@section('content')
    <form action="{{ route('panel.page.about.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card">
            <!--begin::Card header-->
            <div class="card-header">
                <!--begin::Card title-->
                <div class="card-title fs-3 fw-bolder">صفحه درباره ما</div>
                <!--end::Card title-->
            </div>
            <!--end::Card header-->
            <!--begin::Form-->
            <form id="kt_project_settings_form" class="form">
                <!--begin::Card body-->
                <div class="card-body p-9">



                    <div class="row mb-8">
                        <!--begin::Col-->
                        <div class="col-xl-3">
                            <div class="fs-6 fw-bold mt-2 mb-3">عنوان</div>
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-xl-9 fv-row">
                            <input name="title" type="text" class="form-control form-control-solid" name="title"
                                value="{{ $data->title }}" />
                        </div>
                    </div>

                    <div class="row mb-8">
                        <!--begin::Col-->
                        <div class="col-xl-3">
                            <div class="fs-6 fw-bold mt-2 mb-3">متن</div>
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-xl-9 fv-row">
                            <x-text-editor name="body" value="{{ $data->body }}">
                            </x-text-editor>
                        </div>
                        <!--begin::Col-->
                    </div>

                    <div class="row mb-5">
                        <!--begin::Col-->
                        <div class="col-xl-3">
                            <div class="fs-6 fw-bold mt-2 mb-3">تصویر اول</div>
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-lg-8">
                            <x-file-upload name="pic1" value="{{ '/storage/' . $data->pic1 }}"></x-file-upload>
                            <div class="text-muted fs-7">
                                تصویر را تنظیم کنید. فقط فایل های تصویری *.png، *.jpg و *.jpeg پذیرفته می شوند
                            </div>
                            <!--end::Hint-->
                        </div>
                        <!--end::Col-->
                    </div>

                    <div class="row mb-5">
                        <!--begin::Col-->
                        <div class="col-xl-3">
                            <div class="fs-6 fw-bold mt-2 mb-3">تصویر دوم</div>
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-lg-8">
                            <x-file-upload name="pic2" value="{{ '/storage/' . $data->pic2 }}"></x-file-upload>
                            <div class="text-muted fs-7">
                                تصویر را تنظیم کنید. فقط فایل های تصویری *.png، *.jpg و *.jpeg پذیرفته می شوند
                            </div>
                            <!--end::Hint-->
                        </div>
                        <!--end::Col-->
                    </div>

                    <div class="row mb-5">
                        <!--begin::Col-->
                        <div class="col-xl-3">
                            <div class="fs-6 fw-bold mt-2 mb-3">تصویر سوم</div>
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-lg-8">
                            <x-file-upload name="pic3" value="{{ '/storage/' . $data->pic3 }}"></x-file-upload>
                            <div class="text-muted fs-7">
                                تصویر را تنظیم کنید. فقط فایل های تصویری *.png، *.jpg و *.jpeg پذیرفته می شوند
                            </div>
                            <!--end::Hint-->
                        </div>
                        <!--end::Col-->
                    </div>

                    <div class="row mb-5">
                        <!--begin::Col-->
                        <div class="col-xl-3">
                            <div class="fs-6 fw-bold mt-2 mb-3">تصویر چهارم</div>
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-lg-8">
                            <x-file-upload name="pic4" value="{{ '/storage/' . $data->pic4 }}"></x-file-upload>
                            <div class="text-muted fs-7">
                                تصویر را تنظیم کنید. فقط فایل های تصویری *.png، *.jpg و *.jpeg پذیرفته می شوند
                            </div>
                            <!--end::Hint-->
                        </div>
                        <!--end::Col-->
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
    </form>
@endsection
@section('js')
    <script src="{{ asset('panel/plugins/custom/ckeditor/ckeditor.js') }}"></script>

    <script>
        ClassicEditor
            .create(document.querySelector('#editor'), {

                language: 'fa',
            })
            .then(editor => {
                window.editor = editor;
            })
            .catch(error => {

            });
    </script>
@endsection
