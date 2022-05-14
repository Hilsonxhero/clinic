<?php $__env->startSection('breadcrumb'); ?>
    <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">
        ایجاد مقاله
        <span class="h-20px border-gray-200 border-start ms-3 mx-2"></span>
    </h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <form id="kt_ecommerce_add_category_form" action="<?php echo e(route('panel.articles.store')); ?>" method="post"
        class="form d-flex flex-column flex-lg-row" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">
            <div class="card card-flush py-4">
                <div class="card-header">
                    <div class="card-title">
                        <h2>تصویر</h2>
                    </div>
                </div>
                <div class="card-body text-center pt-0">
                    <?php if (isset($component)) { $__componentOriginal416a17d2c66f25d791bdd67acb3339275a19dc17 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\FileUpload::class, ['name' => 'banner']); ?>
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
                        تصویر مقاله را تنظیم کنید. فقط فایل های تصویری *.png، *.jpg و *.jpeg پذیرفته می شوند
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
                        <?php $__currentLoopData = \App\Models\Category::$statuses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $status): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
                        <h2>اطلاعات کلی</h2>
                    </div>
                </div>
                <div class="card-body pt-0">
                    <div class="mb-10 fv-row row">

                        <?php if (isset($component)) { $__componentOriginal897ff558ef59e5b6b49218ff56fe3f7bd49c347b = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\InputGroup::class, ['label' => 'عنوان']); ?>
<?php $component->withName('input-group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'col-md-6']); ?>
                            <?php if (isset($component)) { $__componentOriginal11c02d5af8eef3b9ca8b54c54983d5cb581e68d7 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Input::class, ['name' => 'title','placeholder' => 'عنوان']); ?>
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
<?php $component = $__env->getContainer()->make(App\View\Components\InputGroup::class, ['label' => 'انتخاب  دسته بندی']); ?>
<?php $component->withName('input-group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'fv-row col-md-6']); ?>
                            <?php if (isset($component)) { $__componentOriginal9664ac210be45add4be058f3177c16028511e71a = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Select::class, ['name' => 'category_id','placeholder' => 'انتخاب  دسته بندی']); ?>
<?php $component->withName('select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
                                <option value="">ندارد</option>
                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($category->id); ?>"><?php echo e($category->title); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9664ac210be45add4be058f3177c16028511e71a)): ?>
<?php $component = $__componentOriginal9664ac210be45add4be058f3177c16028511e71a; ?>
<?php unset($__componentOriginal9664ac210be45add4be058f3177c16028511e71a); ?>
<?php endif; ?>
                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal897ff558ef59e5b6b49218ff56fe3f7bd49c347b)): ?>
<?php $component = $__componentOriginal897ff558ef59e5b6b49218ff56fe3f7bd49c347b; ?>
<?php unset($__componentOriginal897ff558ef59e5b6b49218ff56fe3f7bd49c347b); ?>
<?php endif; ?>

                    </div>



                    <div>
                        <?php if (isset($component)) { $__componentOriginal897ff558ef59e5b6b49218ff56fe3f7bd49c347b = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\InputGroup::class, ['label' => 'متن ']); ?>
<?php $component->withName('input-group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
                            <?php if (isset($component)) { $__componentOriginale4968bc968a058a50863c9580dc898047fa9532a = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\TextEditor::class, ['name' => 'body']); ?>
<?php $component->withName('text-editor'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale4968bc968a058a50863c9580dc898047fa9532a)): ?>
<?php $component = $__componentOriginale4968bc968a058a50863c9580dc898047fa9532a; ?>
<?php unset($__componentOriginale4968bc968a058a50863c9580dc898047fa9532a); ?>
<?php endif; ?>
                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal897ff558ef59e5b6b49218ff56fe3f7bd49c347b)): ?>
<?php $component = $__componentOriginal897ff558ef59e5b6b49218ff56fe3f7bd49c347b; ?>
<?php unset($__componentOriginal897ff558ef59e5b6b49218ff56fe3f7bd49c347b); ?>
<?php endif; ?>
                    </div>

                    <div>
                        <?php if (isset($component)) { $__componentOriginal897ff558ef59e5b6b49218ff56fe3f7bd49c347b = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\InputGroup::class, ['label' => 'توضیحات ']); ?>
<?php $component->withName('input-group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
                            <?php if (isset($component)) { $__componentOriginal3d2c91b5536e3d54aed1822705c324a24f801405 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\TextArea::class, ['name' => 'description']); ?>
<?php $component->withName('text-area'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3d2c91b5536e3d54aed1822705c324a24f801405)): ?>
<?php $component = $__componentOriginal3d2c91b5536e3d54aed1822705c324a24f801405; ?>
<?php unset($__componentOriginal3d2c91b5536e3d54aed1822705c324a24f801405); ?>
<?php endif; ?>
                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal897ff558ef59e5b6b49218ff56fe3f7bd49c347b)): ?>
<?php $component = $__componentOriginal897ff558ef59e5b6b49218ff56fe3f7bd49c347b; ?>
<?php unset($__componentOriginal897ff558ef59e5b6b49218ff56fe3f7bd49c347b); ?>
<?php endif; ?>
                    </div>


                    <?php if (isset($component)) { $__componentOriginal897ff558ef59e5b6b49218ff56fe3f7bd49c347b = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\InputGroup::class, ['label' => 'کلمات کلیدی ']); ?>
<?php $component->withName('input-group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => '']); ?>
                        <?php if (isset($component)) { $__componentOriginal26cd0b5fd349a60abbafc132e9d087b7dc8e155d = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\TagInput::class, ['name' => 'tags','placeholder' => 'کلمات کلیدی ']); ?>
<?php $component->withName('tag-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'js-keywords']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal26cd0b5fd349a60abbafc132e9d087b7dc8e155d)): ?>
<?php $component = $__componentOriginal26cd0b5fd349a60abbafc132e9d087b7dc8e155d; ?>
<?php unset($__componentOriginal26cd0b5fd349a60abbafc132e9d087b7dc8e155d); ?>
<?php endif; ?>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal897ff558ef59e5b6b49218ff56fe3f7bd49c347b)): ?>
<?php $component = $__componentOriginal897ff558ef59e5b6b49218ff56fe3f7bd49c347b; ?>
<?php unset($__componentOriginal897ff558ef59e5b6b49218ff56fe3f7bd49c347b); ?>
<?php endif; ?>

                    <div class="text-muted fs-7">
                        فهرستی از کلمات کلیدی را تنظیم کنید که دسته به آنها مربوط می شود. کلمات کلیدی را با اضافه کردن
                        کاما یا <code>Enter</code> از هم جدا کنید
                        <code>,</code> بین هر کلمه کلیدی.
                    </div>

                </div>

            </div>

            <div class="card card-flush py-4">
                <!--begin::Card header-->
                <div class="card-header">
                    <div class="card-title">
                        <h2>مشخصات سئو</h2>
                    </div>
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-0">

                    <div class="mb-10">

                        <?php if (isset($component)) { $__componentOriginal897ff558ef59e5b6b49218ff56fe3f7bd49c347b = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\InputGroup::class, ['label' => 'عنوان متا']); ?>
<?php $component->withName('input-group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => '']); ?>
                            <?php if (isset($component)) { $__componentOriginal11c02d5af8eef3b9ca8b54c54983d5cb581e68d7 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Input::class, ['name' => 'meta_title','placeholder' => 'عنوان متا']); ?>
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

                        <div class="text-muted fs-7">
                            یک عنوان متا تگ تنظیم کنید. توصیه می شود کلمات کلیدی ساده و دقیق باشند.
                        </div>
                    </div>
                    <div class="mb-10">

                        <?php if (isset($component)) { $__componentOriginal897ff558ef59e5b6b49218ff56fe3f7bd49c347b = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\InputGroup::class, ['label' => 'توضیحات متا']); ?>
<?php $component->withName('input-group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => '']); ?>
                            <?php if (isset($component)) { $__componentOriginal11c02d5af8eef3b9ca8b54c54983d5cb581e68d7 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Input::class, ['name' => 'meta_description','placeholder' => 'توضیحات متا']); ?>
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

                        <div class="text-muted fs-7">
                            برای افزایش رتبه سئو، توضیحات متا تگ را برای مقاله تنظیم کنید.
                        </div>




                    </div>
                    <div>
                        <?php if (isset($component)) { $__componentOriginal897ff558ef59e5b6b49218ff56fe3f7bd49c347b = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\InputGroup::class, ['label' => 'کلمات کلیدی متا']); ?>
<?php $component->withName('input-group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => '']); ?>
                            <?php if (isset($component)) { $__componentOriginal26cd0b5fd349a60abbafc132e9d087b7dc8e155d = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\TagInput::class, ['name' => 'meta_keywords','placeholder' => 'کلمات کلیدی متا']); ?>
<?php $component->withName('tag-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'js-meta-keywords']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal26cd0b5fd349a60abbafc132e9d087b7dc8e155d)): ?>
<?php $component = $__componentOriginal26cd0b5fd349a60abbafc132e9d087b7dc8e155d; ?>
<?php unset($__componentOriginal26cd0b5fd349a60abbafc132e9d087b7dc8e155d); ?>
<?php endif; ?>
                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal897ff558ef59e5b6b49218ff56fe3f7bd49c347b)): ?>
<?php $component = $__componentOriginal897ff558ef59e5b6b49218ff56fe3f7bd49c347b; ?>
<?php unset($__componentOriginal897ff558ef59e5b6b49218ff56fe3f7bd49c347b); ?>
<?php endif; ?>

                        <div class="text-muted fs-7">
                            فهرستی از کلمات کلیدی را تنظیم کنید که دسته به آنها مربوط می شود. کلمات کلیدی را با اضافه کردن
                            کاما یا <code>Enter</code> از هم جدا کنید
                            <code>,</code> بین هر کلمه کلیدی.
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

<?php echo $__env->make('layouts.panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\clinic\resources\views/panel/articles/create.blade.php ENDPATH**/ ?>