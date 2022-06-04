@extends('layouts.panel')


@section('breadcrumb')
    <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">
        ویرایش سوال متداول
        <span class="h-20px border-gray-200 border-start ms-3 mx-2"></span>
    </h1>
@endsection

@section('content')
    <form id="kt_ecommerce_add_category_form" action="{{ route('panel.questions.update', $question->id) }}" method="post"
        class="form d-flex flex-column flex-lg-row" enctype="multipart/form-data">
        @csrf
        @method('put')


        <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
            <div class="card card-flush py-4">
                <div class="card-header">
                    <div class="card-title">
                        <h2>مشخصات کلی</h2>
                    </div>
                </div>
                <div class="card-body pt-0">
                    <div class="mb-10 fv-row row">
                        <x-input-group class="col-md-12" label="انتخاب   دسته بندی">
                            <x-select name="category_id" placeholder="انتخاب   دسته بندی">
                                <option value="">ندارد</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}"
                                        @if ($question->category_id == $category->id) selected="selected" @endif>
                                        {{ $category->title }}</option>
                                @endforeach
                            </x-select>
                        </x-input-group>

                        <x-input-group class="col-md-12" label="عنوان سوال ">
                            <x-input name="question" value="{{ $question->question }}"></x-input>
                        </x-input-group>



                    </div>


                    <div>
                        <x-input-group label="پاسخ ">
                            <x-text-editor name="answer" value="{{ $question->answer }}">
                            </x-text-editor>
                        </x-input-group>
                    </div>

                </div>

            </div>


            <div class="d-flex justify-content-end">
                <!--begin::Button-->
                <a href="{{ route('panel.questions.index') }}" id="kt_ecommerce_add_product_cancel"
                    class="btn btn-light me-5">لغو</a>
                <!--end::Button-->
                <!--begin::Button-->
                <button type="submit" class="btn btn-primary">
                    <span class="indicator-label">ذخیره تغییرات</span>
                    <span class="indicator-progress">Please wait...
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                </button>
                <!--end::Button-->
            </div>
        </div>
        <!--end::Main column-->
    </form>
@endsection

@section('js')
    <script src="{{ asset('panel/plugins/custom/ckeditor/ckeditor-classic.bundle.js') }}"></script>

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


    <script>
        "use strict";
        var KTAppEcommerceSaveCategory = (function() {
            const e = () => {

                },
                t = () => {
                    document
                        .querySelectorAll(
                            '[data-kt-ecommerce-catalog-add-category="condition_type"]'
                        )
                        .forEach((e) => {
                            $(e).hasClass("select2-hidden-accessible") ||
                                $(e).select2({
                                    minimumResultsForSearch: -1
                                });
                        });
                    document
                        .querySelectorAll(
                            '[data-kt-ecommerce-catalog-add-category="condition_equals"]'
                        )
                        .forEach((e) => {
                            $(e).hasClass("select2-hidden-accessible") ||
                                $(e).select2({
                                    minimumResultsForSearch: -1
                                });
                        });
                };
            return {
                init: function() {
                    [
                        "#kt_ecommerce_add_category_description",
                        "#kt_ecommerce_add_category_meta_description",
                    ].forEach((e) => {
                            let t = document.querySelector(e);
                            t &&
                                (t = new Quill(e, {
                                    modules: {
                                        toolbar: [
                                            [{
                                                header: [1, 2, !1]
                                            }],
                                            ["bold", "italic", "underline"],
                                            ["image", "code-block"],
                                        ],
                                    },
                                    placeholder: "Type your text here...",
                                    theme: "snow",
                                }));
                        }),
                        [".js-meta-keywords"].forEach((e) => {
                            const t = document.querySelector(e);
                            t && new Tagify(t);
                        }),
                        [".js-keywords"].forEach((e) => {
                            const t = document.querySelector(e);
                            t && new Tagify(t);
                        }),
                        e(),
                        t(),
                        (() => {
                            const e = document.getElementById("kt_ecommerce_add_category_status"),
                                t = document.getElementById(
                                    "kt_ecommerce_add_category_status_select"
                                ),
                                o = ["bg-success", "bg-warning", "bg-danger"];
                            $(t).on("change", function(t) {
                                switch (t.target.value) {
                                    case "published":
                                        e.classList.remove(...o), e.classList.add("bg-success"),
                                            r();
                                        break;
                                    case "scheduled":
                                        e.classList.remove(...o), e.classList.add("bg-warning"),
                                            c();
                                        break;
                                    case "unpublished":
                                        e.classList.remove(...o), e.classList.add("bg-danger"), r();
                                }
                            });
                            const a = document.getElementById(
                                "kt_ecommerce_add_category_status_datepicker"
                            );
                            $("#kt_ecommerce_add_category_status_datepicker").flatpickr({
                                enableTime: !0,
                                dateFormat: "Y-m-d H:i",
                            });
                            const c = () => {
                                    a.parentNode.classList.remove("d-none");
                                },
                                r = () => {
                                    a.parentNode.classList.add("d-none");
                                };
                        })(),
                        (() => {
                            const e = document.querySelectorAll('[name="method"][type="radio"]'),
                                t = document.querySelector(
                                    '[data-kt-ecommerce-catalog-add-category="auto-options"]'
                                );
                            e.forEach((e) => {
                                e.addEventListener("change", (e) => {
                                    "1" === e.target.value ?
                                        t.classList.remove("d-none") :
                                        t.classList.add("d-none");
                                });
                            });
                        })(),
                        (() => {
                            let e;
                            const t = document.getElementById("kt_ecommerce_add_category_form"),
                                o = document.getElementById("kt_ecommerce_add_category_submit");
                            (e = FormValidation.formValidation(t, {
                                fields: {
                                    category_name: {
                                        validators: {
                                            notEmpty: {
                                                message: "Category name is required"
                                            },
                                        },
                                    },
                                },
                                plugins: {
                                    trigger: new FormValidation.plugins.Trigger(),
                                    bootstrap: new FormValidation.plugins.Bootstrap5({
                                        rowSelector: ".fv-row",
                                        eleInvalidClass: "",
                                        eleValidClass: "",
                                    }),
                                },
                            })),
                            o.addEventListener("click", (a) => {
                                a.preventDefault(),
                                    e &&
                                    e.validate().then(function(e) {
                                        console.log("validated!"),
                                            "Valid" == e ?
                                            (o.setAttribute("data-kt-indicator", "on"),
                                                (o.disabled = !0),
                                                setTimeout(function() {
                                                    o.removeAttribute("data-kt-indicator"),
                                                        Swal.fire({
                                                            text: "Form has been successfully submitted!",
                                                            icon: "success",
                                                            buttonsStyling: !1,
                                                            confirmButtonText: "Ok, got it!",
                                                            customClass: {
                                                                confirmButton: "btn btn-primary",
                                                            },
                                                        }).then(function(e) {
                                                            e.isConfirmed &&
                                                                ((o.disabled = !1),
                                                                    (window.location =
                                                                        t.getAttribute(
                                                                            "data-kt-redirect"
                                                                        )));
                                                        });
                                                }, 2e3)) :
                                            Swal.fire({
                                                text: "Sorry, looks like there are some errors detected, please try again.",
                                                icon: "error",
                                                buttonsStyling: !1,
                                                confirmButtonText: "Ok, got it!",
                                                customClass: {
                                                    confirmButton: "btn btn-primary"
                                                },
                                            });
                                    });
                            });
                        })();
                },
            };
        })();
        KTUtil.onDOMContentLoaded(function() {
            KTAppEcommerceSaveCategory.init();
        });
    </script>
@endsection
