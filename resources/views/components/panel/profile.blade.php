<div class="d-flex align-items-center ms-1 ms-lg-3" id="kt_header_user_menu_toggle">
    <!--begin::Menu wrapper-->
    <div class="cursor-pointer symbol symbol-30px symbol-md-40px" data-kt-menu-trigger="click"
        data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
        <img src="{{ asset('panel/media/avatars/blank.png') }}" alt="user" />
    </div>
    <!--begin::User account menu-->
    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px"
        data-kt-menu="true">
        <!--begin::Menu item-->
        <div class="menu-item px-3">
            <div class="menu-content d-flex align-items-center px-3">
                <!--begin::Avatar-->
                <div class="symbol symbol-50px me-5">
                    <img alt="Logo" src="{{ asset('panel/media/avatars/blank.png') }}" />
                </div>
                <!--end::Avatar-->
                <!--begin::Username-->
                <div class="d-flex flex-column">
                    <div class="fw-bolder d-flex align-items-center fs-5">
                        {{ auth()->user()->username }}
                        <span class="badge badge-light-success fw-bolder fs-8 px-2 py-1 ms-2">
                            {{ auth()->user()->phone }}</span>
                    </div>
                    <a href="#" class="fw-bold text-muted text-hover-primary fs-7">
                        {{ auth()->user()->email }}
                    </a>
                </div>
                <!--end::Username-->
            </div>
        </div>
        <!--end::Menu item-->
        <!--begin::Menu separator-->
        <div class="separator my-2"></div>
        <!--end::Menu separator-->
        <!--begin::Menu item-->
        <div class="menu-item px-5">
            <a href="{{ route('panel.profile.index') }}" class="menu-link px-5">
                پروفایل من
            </a>
        </div>

        <div class="separator my-2"></div>

        <div class="menu-item px-5 my-1">
            <a href="{{ route('panel.page.setting.index') }}" class="menu-link px-5">
                تنظیمات
            </a>
        </div>
        <!--end::Menu item-->
        <!--begin::Menu item-->
        <div class="menu-item px-5">
            <form action="{{ route('logout') }}" method="POST" id="js-user-logout-form">
                @csrf
            </form>
            <a href="javascript:void(0)" id="js-user-logout-btn" class="menu-link px-5">خروج از حساب
                کاربری</a>
        </div>
        <!--end::Menu item-->
        <!--begin::Menu separator-->
        <div class="separator my-2"></div>
        <!--end::Menu separator-->
        <!--begin::Menu item-->
        {{-- <div class="menu-item px-5">
            <div class="menu-content px-5">
                <label class="form-check form-switch form-check-custom form-check-solid pulse pulse-success"
                    for="panel_menu_dark_mode_toggle">
                    <input class="form-check-input w-30px h-20px" type="checkbox" value="1" name="mode"
                        id="panel_menu_dark_mode_toggle" />
                    <span class="pulse-ring ms-n1"></span>
                    <span class="form-check-label text-gray-600 fs-7">Dark Mode</span>
                </label>
            </div>
        </div> --}}
        <!--end::Menu item-->
    </div>
    <!--end::User account menu-->
    <!--end::Menu wrapper-->
</div>
