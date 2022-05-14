<!DOCTYPE html>

<html lang="en" direction="rtl" dir="rtl" style="direction: rtl">
<!--begin::Head-->

<head>
    <base href="">
    <title>admin panel</title>
    <meta charset="utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <link rel="canonical" href="" />
    <link rel="shortcut icon" href="" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Page Vendor Stylesheets(used by this page)-->

    <link href="<?php echo e(asset('panel/plugins/custom/datatables/datatables.bundle.css')); ?>" rel="stylesheet"
        type="text/css" />
    <!--end::Page Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="<?php echo e(asset('panel/plugins/global/plugins.bundle.rtl.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('panel/css/style.bundle.rtl.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('panel/css/custom.css')); ?>" rel="stylesheet" type="text/css" />
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
            <?php if (isset($component)) { $__componentOriginal2308ffdd38ab55bd7111a7a58ce39ab1ec8e338a = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Panel\Sidebar::class, []); ?>
<?php $component->withName('panel.sidebar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2308ffdd38ab55bd7111a7a58ce39ab1ec8e338a)): ?>
<?php $component = $__componentOriginal2308ffdd38ab55bd7111a7a58ce39ab1ec8e338a; ?>
<?php unset($__componentOriginal2308ffdd38ab55bd7111a7a58ce39ab1ec8e338a); ?>
<?php endif; ?>
            <!--end::Aside-->
            <!--begin::Wrapper-->
            <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                <!--begin::Header-->
                <?php if (isset($component)) { $__componentOriginal532e8e13126df5d5a7def78cc80fcd6066f17ded = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Panel\Header::class, []); ?>
<?php $component->withName('panel.header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal532e8e13126df5d5a7def78cc80fcd6066f17ded)): ?>
<?php $component = $__componentOriginal532e8e13126df5d5a7def78cc80fcd6066f17ded; ?>
<?php unset($__componentOriginal532e8e13126df5d5a7def78cc80fcd6066f17ded); ?>
<?php endif; ?>
                <!--end::Header-->
                <!--begin::Content-->
                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                    <!--begin::Toolbar-->
                    <?php if (isset($component)) { $__componentOriginal4a9793b2009a912bd0648ad2db6bf8159271157e = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Panel\Toolbar::class, []); ?>
<?php $component->withName('panel.toolbar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4a9793b2009a912bd0648ad2db6bf8159271157e)): ?>
<?php $component = $__componentOriginal4a9793b2009a912bd0648ad2db6bf8159271157e; ?>
<?php unset($__componentOriginal4a9793b2009a912bd0648ad2db6bf8159271157e); ?>
<?php endif; ?>
                    <!--end::Toolbar-->
                    <!--begin::Post-->
                    <div class="post d-flex flex-column-fluid" id="kt_post">
                        <!--begin::Container-->
                        <div id="kt_content_container" class="container-xxl">
                            <?php echo $__env->yieldContent('content'); ?>
                        </div>
                        <!--end::Container-->
                    </div>
                    <!--end::Post-->
                </div>
                <!--end::Content-->
                <!--begin::Footer-->
                <?php if (isset($component)) { $__componentOriginalea940b7fa6569a729c0fa907382c9ed0b4daff71 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Panel\Footer::class, []); ?>
<?php $component->withName('panel.footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalea940b7fa6569a729c0fa907382c9ed0b4daff71)): ?>
<?php $component = $__componentOriginalea940b7fa6569a729c0fa907382c9ed0b4daff71; ?>
<?php unset($__componentOriginalea940b7fa6569a729c0fa907382c9ed0b4daff71); ?>
<?php endif; ?>
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
                <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)"
                    fill="black" />
                <path
                    d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                    fill="black" />
            </svg>
        </span>
        <!--end::Svg Icon-->
    </div>



    <!--begin::Javascript-->

    <!--begin::Global Javascript Bundle(used by all pages)-->
    <script src="<?php echo e(asset('panel/plugins/global/plugins.bundle.js')); ?>"></script>
    <script src="<?php echo e(asset('panel/js/scripts.bundle.js')); ?>"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Page Vendors Javascript(used by this page)-->
    
    <!--end::Page Vendors Javascript-->
    <!--begin::Page Custom Javascript(used by this page)-->
    <script src="<?php echo e(asset('panel/js/widgets.bundle.js')); ?>"></script>
    <script src="<?php echo e(asset('panel/js/custom/widgets.js')); ?>"></script>
    
    <!--end::Page Custom Javascript-->
    <!--end::Javascript-->


    <?php if(session()->has('success')): ?>
        <script>
            Swal.fire({
                text: "<?php echo e(session()->get('success')); ?>",
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
    <?php endif; ?>


    <?php echo $__env->yieldContent('js'); ?>
</body>
<!--end::Body-->

</html>
<?php /**PATH C:\wamp64\www\clinic\resources\views/layouts/panel.blade.php ENDPATH**/ ?>