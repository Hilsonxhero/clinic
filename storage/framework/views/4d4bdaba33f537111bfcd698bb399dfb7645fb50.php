<?php $__env->startSection('breadcrumb'); ?>
    <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">
        ایجاد کاربر
        <span class="h-20px border-gray-200 border-start ms-3 mx-2"></span>
    </h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <form id="kt_ecommerce_add_category_form" action="<?php echo e(route('panel.users.store')); ?>" method="post"
        class="form d-flex flex-column flex-lg-row" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">
            <div class="card card-flush py-4">
                <div class="card-header">
                    <div class="card-title">
                        <h2>پروفایل</h2>
                    </div>
                </div>
                <div class="card-body text-center pt-0">
                    <?php if (isset($component)) { $__componentOriginal416a17d2c66f25d791bdd67acb3339275a19dc17 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\FileUpload::class, ['name' => 'profile']); ?>
<?php $component->withName('file-upload'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal416a17d2c66f25d791bdd67acb3339275a19dc17)): ?>
<?php $component = $__componentOriginal416a17d2c66f25d791bdd67acb3339275a19dc17; ?>
<?php unset($__componentOriginal416a17d2c66f25d791bdd67acb3339275a19dc17); ?>
<?php endif; ?>
                    <div class="text-muted fs-7">
                        پروفایل کاربر را تنظیم کنید. فقط فایل های تصویری *.png، *.jpg و *.jpeg پذیرفته می شوند
                    </div>
                </div>
            </div>
            <div class="card card-flush py-4">
                <div class="card-header">
                    <div class="card-title">
                        <h2>وضعیت</h2>
                    </div>
                    <div class="card-toolbar">
                        <div class="rounded-circle bg-success w-15px h-15px" id="kt_ecommerce_add_category_status"></div>
                    </div>
                </div>
                <div class="card-body pt-0">

                    <?php if (isset($component)) { $__componentOriginal9664ac210be45add4be058f3177c16028511e71a = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Select::class, ['name' => 'status','placeholder' => 'وضعیت']); ?>
<?php $component->withName('select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
                        <?php $__currentLoopData = \App\Models\User::$statuses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $status): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($status); ?>"><?php echo app('translator')->get($status); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9664ac210be45add4be058f3177c16028511e71a)): ?>
<?php $component = $__componentOriginal9664ac210be45add4be058f3177c16028511e71a; ?>
<?php unset($__componentOriginal9664ac210be45add4be058f3177c16028511e71a); ?>
<?php endif; ?>

                </div>

            </div>

        </div>

        <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
            <div class="card card-flush py-4">
                <div class="card-header">
                    <div class="card-title">
                        <h2>اطلاعات کاربری</h2>
                    </div>
                </div>
                <div class="card-body pt-0">
                    <div class="mb-10 fv-row row">

                        <?php if (isset($component)) { $__componentOriginal897ff558ef59e5b6b49218ff56fe3f7bd49c347b = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\InputGroup::class, ['label' => 'نام کاربری']); ?>
<?php $component->withName('input-group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'col-md-6']); ?>
                            <?php if (isset($component)) { $__componentOriginal11c02d5af8eef3b9ca8b54c54983d5cb581e68d7 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Input::class, ['name' => 'username','placeholder' => 'نام کاربری']); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal11c02d5af8eef3b9ca8b54c54983d5cb581e68d7)): ?>
<?php $component = $__componentOriginal11c02d5af8eef3b9ca8b54c54983d5cb581e68d7; ?>
<?php unset($__componentOriginal11c02d5af8eef3b9ca8b54c54983d5cb581e68d7); ?>
<?php endif; ?>
                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal897ff558ef59e5b6b49218ff56fe3f7bd49c347b)): ?>
<?php $component = $__componentOriginal897ff558ef59e5b6b49218ff56fe3f7bd49c347b; ?>
<?php unset($__componentOriginal897ff558ef59e5b6b49218ff56fe3f7bd49c347b); ?>
<?php endif; ?>

                        <?php if (isset($component)) { $__componentOriginal897ff558ef59e5b6b49218ff56fe3f7bd49c347b = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\InputGroup::class, ['label' => 'ایمیل']); ?>
<?php $component->withName('input-group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'col-md-6']); ?>
                            <?php if (isset($component)) { $__componentOriginal11c02d5af8eef3b9ca8b54c54983d5cb581e68d7 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Input::class, ['name' => 'email','placeholder' => 'ایمیل']); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal11c02d5af8eef3b9ca8b54c54983d5cb581e68d7)): ?>
<?php $component = $__componentOriginal11c02d5af8eef3b9ca8b54c54983d5cb581e68d7; ?>
<?php unset($__componentOriginal11c02d5af8eef3b9ca8b54c54983d5cb581e68d7); ?>
<?php endif; ?>
                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal897ff558ef59e5b6b49218ff56fe3f7bd49c347b)): ?>
<?php $component = $__componentOriginal897ff558ef59e5b6b49218ff56fe3f7bd49c347b; ?>
<?php unset($__componentOriginal897ff558ef59e5b6b49218ff56fe3f7bd49c347b); ?>
<?php endif; ?>

                        <?php if (isset($component)) { $__componentOriginal897ff558ef59e5b6b49218ff56fe3f7bd49c347b = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\InputGroup::class, ['label' => 'شماره همراه']); ?>
<?php $component->withName('input-group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'col-md-6']); ?>
                            <?php if (isset($component)) { $__componentOriginal11c02d5af8eef3b9ca8b54c54983d5cb581e68d7 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Input::class, ['name' => 'phone','placeholder' => 'شماره همراه']); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal11c02d5af8eef3b9ca8b54c54983d5cb581e68d7)): ?>
<?php $component = $__componentOriginal11c02d5af8eef3b9ca8b54c54983d5cb581e68d7; ?>
<?php unset($__componentOriginal11c02d5af8eef3b9ca8b54c54983d5cb581e68d7); ?>
<?php endif; ?>
                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal897ff558ef59e5b6b49218ff56fe3f7bd49c347b)): ?>
<?php $component = $__componentOriginal897ff558ef59e5b6b49218ff56fe3f7bd49c347b; ?>
<?php unset($__componentOriginal897ff558ef59e5b6b49218ff56fe3f7bd49c347b); ?>
<?php endif; ?>

                    </div>

                </div>

            </div>



            <div class="card card-flush py-4">
                <!--begin::Card header-->
                <div class="card-header">
                    <div class="card-title">
                        <h2>دسترسی کاربر</h2>
                    </div>
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-0">
                    <!--begin::Input group-->
                    <div>
                        <!--begin::Label-->
                        <label class="form-label mb-5">انتخاب سطح دسترسی کاربر</label>
                        <!--end::Label-->
                        <!--begin::Methods-->
                        <!--begin::Input row-->
                        <div class="d-flex fv-row">
                            <!--begin::Radio-->
                            <div class="form-check form-check-custom form-check-solid">
                                <!--begin::Input-->
                                <input class="form-check-input me-3" name="is_superuser" type="radio" value="0"
                                    id="kt_ecommerce_add_category_automation_0" checked="true">
                                <!--end::Input-->
                                <!--begin::Label-->
                                <label class="form-check-label" for="kt_ecommerce_add_category_automation_0">
                                    <div class="fw-bolder text-gray-800">کاربر عادی</div>
                                    <div class="text-gray-600">دسترسی های یک کاربر عادی را خواهد داشت</div>
                                </label>
                                <!--end::Label-->
                            </div>
                            <!--end::Radio-->
                        </div>
                        <div class="separator separator-dashed my-5"></div>
                        <div class="d-flex fv-row">
                            <!--begin::Radio-->
                            <div class="form-check form-check-custom form-check-solid">
                                <!--begin::Input-->
                                <input class="form-check-input me-3" name="is_superuser" type="radio" value="1"
                                    id="kt_ecommerce_add_category_automation_1">
                                <!--end::Input-->
                                <!--begin::Label-->
                                <label class="form-check-label" for="kt_ecommerce_add_category_automation_1">
                                    <div class="fw-bolder text-gray-800">کاربر ادمین</div>
                                    <div class="text-gray-600">تمام دسترسی ها را به پنل ادمین خواهد داشت</div>
                                </label>
                                <!--end::Label-->
                            </div>
                            <!--end::Radio-->
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-end">
                <!--begin::Button-->
                <a href="<?php echo e(route('panel.articles.index')); ?>" id="kt_ecommerce_add_product_cancel"
                    class="btn btn-light me-5">لغو</a>
                <!--end::Button-->
                <!--begin::Button-->
                <button type="submit" id="kt_ecommerce_add_category_submit" class="btn btn-primary">
                    <span class="indicator-label">ذخیره تغییرات</span>
                    <span class="indicator-progress">Please wait...
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                </button>
                <!--end::Button-->
            </div>
        </div>
        <!--end::Main column-->
    </form>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script src="<?php echo e(asset('panel/plugins/custom/ckeditor/ckeditor-classic.bundle.js')); ?>"></script>

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
                    $("#kt_ecommerce_add_category_conditions").repeater({
                        initEmpty: !1,
                        defaultValues: {
                            "text-input": "foo"
                        },
                        show: function() {
                            $(this).slideDown(), t();
                        },
                        hide: function(e) {
                            $(this).slideUp(e);
                        },
                    });
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\clinic\resources\views/panel/users/create.blade.php ENDPATH**/ ?>