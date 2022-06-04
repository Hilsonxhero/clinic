@extends('layouts.panel')

@section('breadcrumb')
    <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">
        پیام های ارسال شده
        <span class="h-20px border-gray-200 border-start ms-3 mx-2"></span>
    </h1>
@endsection

@section('content')
    <div class="card card-flush">

        <div class="card-header align-items-center py-5 gap-2 gap-md-5">

            <div class="card-title">

                <div class="d-flex align-items-center position-relative my-1">

                    <span class="svg-icon svg-icon-1 position-absolute ms-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1"
                                transform="rotate(45 17.0365 15.1223)" fill="black" />
                            <path
                                d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                fill="black" />
                        </svg>
                    </span>

                    <input type="text" data-kt-ecommerce-contact-filter="search"
                        class="form-control form-control-solid w-250px ps-14" placeholder="جستجو پیام" />
                </div>

            </div>

        </div>

        <div class="card-body pt-0">
            <!--begin::Table-->
            <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_contact_table">

                <thead>

                    <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                        <th class="w-10px pe-2">
                            <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                <input class="form-check-input" type="checkbox" data-kt-check="true"
                                    data-kt-check-target="#kt_ecommerce_contact_table .form-check-input" value="1" />
                            </div>
                        </th>
                        <th class="">عنوان </th>
                        <th class="">نام</th>
                        <th class="">ایمیل</th>
                        <th class=""> وضعیت </th>
                        <th class="max-w-100px">عملیات</th>
                    </tr>
                    <!--end::Table row-->
                </thead>
                <!--end::Table head-->
                <!--begin::Table body-->
                <tbody class="fw-bold text-gray-600">
                    @foreach ($contacts as $contact)
                        <tr>
                            <!--begin::Checkbox-->
                            <td>
                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="1" />
                                </div>
                            </td>
                            <!--end::Checkbox-->
                            <!--begin::contact=-->

                            <td>{{ $contact->title }}</td>
                            <td>{{ $contact->name }}</td>
                            <td><a href="mailto:{{ $contact->email }}">{{ $contact->email }}</a></td>

                            <td>
                                @if ($contact->is_read)
                                    <div class="badge badge-light-success">
                                        بررسی شده
                                    </div>
                                @else
                                    <div class="badge badge-light-danger">
                                        بررسی نشده
                                    </div>
                                @endif

                            </td>
                            <td>

                                <div class="d-flex justify-content-end flex-shrink-0">
                                    <button data-contact="{{ $contact }}" href=""
                                        class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1 js-show-contact-info-btn"
                                        data-bs-toggle="modal" data-bs-target="#kt_modal_contact_info">
                                        <span class="svg-icon svg-icon-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <path opacity="0.3"
                                                    d="M20 3H4C2.89543 3 2 3.89543 2 5V16C2 17.1046 2.89543 18 4 18H4.5C5.05228 18 5.5 18.4477 5.5 19V21.5052C5.5 22.1441 6.21212 22.5253 6.74376 22.1708L11.4885 19.0077C12.4741 18.3506 13.6321 18 14.8167 18H20C21.1046 18 22 17.1046 22 16V5C22 3.89543 21.1046 3 20 3Z"
                                                    fill="black"></path>
                                                <rect x="6" y="12" width="7" height="2" rx="1" fill="black"></rect>
                                                <rect x="6" y="7" width="12" height="2" rx="1" fill="black"></rect>
                                            </svg>
                                        </span>
                                    </button>
                                </div>
                            </td>
                            <!--end::Action=-->
                        </tr>
                    @endforeach


                </tbody>
                <!--end::Table body-->
            </table>
            <!--end::Table-->
        </div>
        <!--end::Card body-->


    </div>

    <div class="modal fade" id="kt_modal_contact_info" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-scrollable ">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header">

                    <h2>پاسخ به پیام </h2>

                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                        <span class="svg-icon svg-icon-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                    transform="rotate(-45 6 17.3137)" fill="black" />
                                <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)"
                                    fill="black" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </div>

                </div>


                <div class="modal-body py-lg-10 px-lg-10">
                    <!--begin::Stepper-->
                    <div class="stepper stepper-pills stepper-column d-flex flex-column flex-xl-row flex-row-fluid"
                        id="kt_modal_create_app_stepper">
                        <!--begin::Aside-->

                        <!--begin::Aside-->
                        <!--begin::Content-->
                        <div class="flex-row-fluid py-lg-5 px-lg-15">
                            <!--begin::Form-->
                            <form action="{{ route('panel.contacts.store') }}" method="POST" enctype="multipart/form-data"
                                class="form" id="js-contant-form">

                                @csrf


                                <input type="hidden" name="id" id="js-contact-id">

                                <div class="current" data-kt-stepper-element="content">
                                    <div class="w-100">

                                        <div class="fv-row mb-10">

                                            <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                                                <span class="required">عنوان</span>
                                            </label>

                                            <input type="text" class="form-control form-control-lg form-control-solid"
                                                name="title" id="js-contact-title" placeholder="" value="" />

                                        </div>


                                        <div class="fv-row mb-10">

                                            <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                                                <span class="required">نام</span>
                                            </label>

                                            <input type="text" class="form-control form-control-lg form-control-solid"
                                                name="name" id="js-contact-name" placeholder="" value="" />

                                        </div>

                                        <div class="fv-row mb-10">

                                            <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                                                <span class="required">ایمیل</span>
                                            </label>

                                            <input type="text" class="form-control form-control-lg form-control-solid"
                                                name="email" id="js-contact-email" placeholder="" value="" />

                                        </div>

                                        <div class="fv-row mb-10">

                                            <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                                                <span class="required">متن پیام</span>
                                            </label>

                                            <textarea name="content" id="js-contact-content" rows="10"
                                                class="form-control form-control-lg form-control-solid"></textarea>

                                        </div>

                                        <div class="fv-row mb-10">

                                            <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                                                <span class="required">پاسخ شما</span>
                                            </label>

                                            <textarea name="answer" id="js-contact-answer" rows="10"
                                                class="form-control form-control-lg form-control-solid"></textarea>

                                        </div>

                                    </div>
                                </div>

                            </form>
                            <!--end::Form-->
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Stepper-->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">لغو</button>
                    <button type="button" class="btn btn-primary" id="js-submit-contant-btn">ارسال پاسخ</button>
                </div>
            </div>

        </div>
        <!--end::Modal dialog-->
    </div>
@endsection

@section('js')
    <!--begin::Page Vendors Javascript(used by this page)-->
    <script src="{{ asset('panel/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <!--end::Page Vendors Javascript-->

    <script>
        on('click', '.js-show-contact-info-btn', function(e) {
            let contact = JSON.parse(e.target.closest("button").getAttribute("data-contact"))
            let id = document.getElementById("js-contact-id").value = contact.id
            let title = document.getElementById("js-contact-title").value = contact.title
            let name = document.getElementById("js-contact-name").value = contact.name
            let email = document.getElementById("js-contact-email").value = contact.email
            let content = document.getElementById("js-contact-content").value = contact.content
            let answer = document.getElementById("js-contact-answer").value = contact.answer

        }, true)

        on("click", '#js-submit-contant-btn', function() {
            select("#js-contant-form").submit()
        })
    </script>

    <script>
        "use strict";
        var KTAppEcommercecontacts = (function() {
            var t,
                e,
                n = () => {
                    t.querySelectorAll(
                        '[data-kt-ecommerce-contact-filter="delete_row"]'
                    ).forEach((t) => {
                        t.addEventListener("click", function(t) {

                            let id = $(t.target).closest("a").data('id')

                            console.log("id", id);

                            t.preventDefault();
                            const n = t.target.closest("tr"),
                                o = n.querySelector(
                                    '[data-kt-ecommerce-contact-filter="contact_name"]'
                                ).innerText;
                            Swal.fire({
                                text: "آیا از حذف پیام " + o +
                                    " اطمینان دارید ؟ ",
                                icon: "warning",
                                showCancelButton: !0,
                                buttonsStyling: !1,
                                confirmButtonText: "بله",
                                cancelButtonText: "لغو",
                                customClass: {
                                    confirmButton: "btn fw-bold btn-danger",
                                    cancelButton: "btn fw-bold btn-active-light-primary",
                                },
                            }).then(function(t) {
                                if (!t.value) {
                                    t.dismiss
                                } else {
                                    $("#js-delete-form").attr('action',
                                        `/panel/admin/contacts/${id}`)
                                    $("#js-delete-form").submit()
                                }
                            });
                        });
                    });
                };
            return {
                init: function() {
                    (t = document.querySelector("#kt_ecommerce_contact_table")) &&
                    ((e = $(t).DataTable({
                            info: !1,
                            order: [],
                            pageLength: 10,
                            "language": {
                                "emptyTable": "داده ای برای نمایش وجود ندارد",
                                "zeroRecords": "داده ای برای نمایش وجود ندارد",
                            },
                            columnDefs: [{
                                    orderable: !1,
                                    targets: 0
                                },
                                {
                                    orderable: !1,
                                    targets: 3
                                },
                            ],
                        })).on("draw", function() {
                            n();
                        }),
                        document
                        .querySelector('[data-kt-ecommerce-contact-filter="search"]')
                        .addEventListener("keyup", function(t) {
                            e.search(t.target.value).draw();
                        }),
                        n());
                },
            };
        })();
        KTUtil.onDOMContentLoaded(function() {
            KTAppEcommercecontacts.init();
        });
    </script>
@endsection
