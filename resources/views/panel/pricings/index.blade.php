@extends('layouts.panel')
@section('breadcrumb')
    <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">
        تعرفه ها
        <span class="h-20px border-gray-200 border-start ms-3 mx-2"></span>
    </h1>
@endsection

@section('content')
    <div class="card card-flush">
        <!--begin::Card header-->
        <div class="card-header align-items-center py-5 gap-2 gap-md-5">
            <!--begin::Card title-->
            <div class="card-title">
                <!--begin::Search-->
                <div class="d-flex align-items-center position-relative my-1">
                    <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                    <span class="svg-icon svg-icon-1 position-absolute ms-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1"
                                transform="rotate(45 17.0365 15.1223)" fill="black" />
                            <path
                                d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                fill="black" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                    <input type="text" data-kt-ecommerce-pricing-filter="search"
                        class="form-control form-control-solid w-250px ps-14" placeholder="جستجو تعرفه" />
                </div>
                <!--end::Search-->
            </div>
            <!--end::Card title-->
            <!--begin::Card toolbar-->
            <div class="card-toolbar">
                <!--begin::Add customer-->
                <a href="{{ route('panel.pricings.create') }}" class="btn btn-primary">تعرفه جدید</a>
                <!--end::Add customer-->
            </div>
            <!--end::Card toolbar-->
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body pt-0">
            <!--begin::Table-->
            <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_pricing_table">
                <!--begin::Table head-->
                <thead>
                    <!--begin::Table row-->
                    <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                        <th class="w-10px pe-2">
                            <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                <input class="form-check-input" type="checkbox" data-kt-check="true"
                                    data-kt-check-target="#kt_ecommerce_pricing_table .form-check-input" value="1" />
                            </div>
                        </th>
                        <th class="">سرویس </th>
                        <th class="">توضیحات </th>
                        <th class="">ناحیه</th>
                        <th class="">قیمت</th>
                        <th class="max-w-100px">عملیات</th>
                    </tr>
                    <!--end::Table row-->
                </thead>
                <!--end::Table head-->
                <!--begin::Table body-->
                <tbody class="fw-bold text-gray-600">
                    @foreach ($pricings as $pricing)
                        <tr>
                            <!--begin::Checkbox-->
                            <td>
                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="1" />
                                </div>
                            </td>


                            <td data-kt-ecommerce-pricing-filter="pricing_name">
                                {{ $pricing->service ? $pricing->service->title : 'ندارد' }}
                            </td>

                            <td>
                                <div class="text-muted fs-7 fw-bolder">
                                    {!! truncate($pricing->description, 90) !!}
                                </div>
                            </td>

                            <td>
                                {{ $pricing->area }}
                            </td>

                            <td>
                                {{ number_format($pricing->price) }}
                            </td>


                            <td>
                                <div class="d-flex justify-content-end flex-shrink-0">

                                    <a href="{{ route('panel.pricings.edit', $pricing->id) }}"
                                        class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                        <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                        <span class="svg-icon svg-icon-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <path opacity="0.3"
                                                    d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z"
                                                    fill="black"></path>
                                                <path
                                                    d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z"
                                                    fill="black"></path>
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </a>


                                    <form class="d-inline-block" method="post" action="" id="js-delete-form">
                                        @csrf
                                        @method('delete')
                                    </form>


                                    <a data-id="{{ json_encode($pricing->id) }}"
                                        data-kt-ecommerce-pricing-filter="delete_row" href="#"
                                        class="btn btn-icon btn-bg-light btn-active-color-danger btn-sm">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                                        <span class="svg-icon svg-icon-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <path
                                                    d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z"
                                                    fill="black"></path>
                                                <path opacity="0.5"
                                                    d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z"
                                                    fill="black"></path>
                                                <path opacity="0.5"
                                                    d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z"
                                                    fill="black"></path>
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </a>
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
@endsection

@section('js')
    <!--begin::Page Vendors Javascript(used by this page)-->
    <script src="{{ asset('panel/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <!--end::Page Vendors Javascript-->

    <script>
        "use strict";
        var KTAppEcommercepricings = (function() {
            var t,
                e,
                n = () => {
                    t.querySelectorAll(
                        '[data-kt-ecommerce-pricing-filter="delete_row"]'
                    ).forEach((t) => {
                        t.addEventListener("click", function(t) {

                            let id = $(t.target).closest("a").data('id')

                            console.log("id", id);

                            t.preventDefault();
                            const n = t.target.closest("tr"),
                                o = n.querySelector(
                                    '[data-kt-ecommerce-pricing-filter="pricing_name"]'
                                ).innerText;
                            Swal.fire({
                                text: "آیا از حذف تعرفه سرویس " + o +
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
                                        `/panel/admin/pricings/${id}`)
                                    $("#js-delete-form").submit()
                                }
                            });
                        });
                    });
                };
            return {
                init: function() {
                    (t = document.querySelector("#kt_ecommerce_pricing_table")) &&
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
                        .querySelector('[data-kt-ecommerce-pricing-filter="search"]')
                        .addEventListener("keyup", function(t) {
                            e.search(t.target.value).draw();
                        }),
                        n());
                },
            };
        })();
        KTUtil.onDOMContentLoaded(function() {
            KTAppEcommercepricings.init();
        });
    </script>
@endsection
