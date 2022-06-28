<!DOCTYPE html>

<html lang="en" direction="rtl" dir="rtl" style="direction: rtl">
<!--begin::Head-->

<head>
    <base href="">
    <title>کلینیک امید - پنل مدیریت</title>
    <meta charset="utf-8" />
    <link rel="shortcut icon" href="" />

    <link href="{{ asset('panel/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet"
        type="text/css" />
    <!--end::Page Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="{{ asset('panel/plugins/global/plugins.bundle.rtl.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('panel/css/style.bundle.rtl.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('panel/css/custom.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body"
    class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed aside-enabled aside-fixed"
    style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
    <!--begin::Main-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="page d-flex flex-row flex-column-fluid">
            <!--begin::Aside-->
            <x-panel.sidebar></x-panel.sidebar>
            <!--end::Aside-->
            <!--begin::Wrapper-->
            <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                <!--begin::Header-->
                <x-panel.header></x-panel.header>
                <!--end::Header-->
                <!--begin::Content-->
                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                    <!--begin::Toolbar-->
                    <x-panel.toolbar></x-panel.toolbar>
                    <!--end::Toolbar-->
                    <!--begin::Post-->
                    <div class="post d-flex flex-column-fluid" id="kt_post">
                        <!--begin::Container-->
                        <div id="kt_content_container" class="container-xxl">
                            @yield('content')
                        </div>
                        <!--end::Container-->
                    </div>
                    <!--end::Post-->
                </div>
                <!--end::Content-->
                <!--begin::Footer-->
                <x-panel.footer></x-panel.footer>
                <!--end::Footer-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>


    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
        <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
        <span class="svg-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1"
                    transform="rotate(90 13 6)" fill="black" />
                <path
                    d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                    fill="black" />
            </svg>
        </span>
        <!--end::Svg Icon-->
    </div>



    <!--begin::Javascript-->

    <!--begin::Global Javascript Bundle(used by all pages)-->
    <script src="{{ asset('panel/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('panel/js/scripts.bundle.js') }}"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Page Vendors Javascript(used by this page)-->
    {{-- <script src="{{ asset('panel/plugins/custom/datatables/datatables.bundle.js') }}"></script> --}}
    <!--end::Page Vendors Javascript-->
    <!--begin::Page Custom Javascript(used by this page)-->
    <script src="{{ asset('panel/js/widgets.bundle.js') }}"></script>
    <script src="{{ asset('panel/js/custom/widgets.js') }}"></script>
    <script src="{{ asset('panel/js/main.js') }}"></script>


    {{-- <script src="{{ asset('panel/js/custom/apps/chat/chat.js') }}"></script>
    <script src="{{ asset('panel/js/custom/utilities/modals/upgrade-plan.js') }}"></script>
    <script src="{{ asset('panel/js/custom/utilities/modals/create-app.js') }}"></script>
    <script src="{{ asset('panel/js/custom/utilities/modals/users-search.js') }}"></script> --}}
    <!--end::Page Custom Javascript-->
    <!--end::Javascript-->

    <script>
        const logout_btn = document.getElementById('js-user-logout-btn').addEventListener("click", () => {
            document.getElementById('js-user-logout-form').submit()
        })
    </script>


    @if (session()->has('success'))
        <script>
            Swal.fire({
                text: "{{ session()->get('success') }}",
                icon: "success",
                buttonsStyling: !1,
                confirmButtonText: "باشه",
                customClass: {
                    confirmButton: "btn btn-primary"
                }
            }).then((function(t) {
                // t.isConfirmed && n.hide()

            }))
        </script>
    @endif


    @yield('js')
</body>
<!--end::Body-->

</html>
