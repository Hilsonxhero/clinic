<div class="image-input image-input-empty image-input-outline mb-3" data-kt-image-input="true"
    style="background-image: url(<?php if(empty($value)): ?> <?php echo e(asset('panel/media/svg/files/blank-image.svg')); ?>  <?php else: ?> <?php echo e(asset($value)); ?> <?php endif; ?>)">

    

    <!--begin::Preview existing avatar-->
    <div class="image-input-wrapper w-150px h-150px"></div>
    <!--end::Preview existing avatar-->
    <!--begin::Label-->
    <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
        data-kt-image-input-action="change" data-bs-toggle="tooltip" title="تغییر تصویر">
        <!--begin::Icon-->
        <i class="bi bi-pencil-fill fs-7"></i>
        <!--end::Icon-->
        <!--begin::Inputs-->
        <input type="file" name="<?php echo e($name); ?>" accept=".png, .jpg, .jpeg,.gif" />
        <input type="hidden" name="avatar_remove" />
        <!--end::Inputs-->
    </label>
    <!--end::Label-->
    <!--begin::Cancel-->
    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
        data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
        <i class="bi bi-x fs-2"></i>
    </span>
    <!--end::Cancel-->
    <!--begin::Remove-->
    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
        data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
        <i class="bi bi-x fs-2"></i>
    </span>
    <!--end::Remove-->
</div>

<?php if (isset($component)) { $__componentOriginalc98491cb9bb70c86f130d42eb4cfbfb99411b399 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\ValidationError::class, ['field' => ''.e($name).'']); ?>
<?php $component->withName('validation-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc98491cb9bb70c86f130d42eb4cfbfb99411b399)): ?>
<?php $component = $__componentOriginalc98491cb9bb70c86f130d42eb4cfbfb99411b399; ?>
<?php unset($__componentOriginalc98491cb9bb70c86f130d42eb4cfbfb99411b399); ?>
<?php endif; ?>
<?php /**PATH C:\wamp64\www\clinic\resources\views/components/file-upload.blade.php ENDPATH**/ ?>