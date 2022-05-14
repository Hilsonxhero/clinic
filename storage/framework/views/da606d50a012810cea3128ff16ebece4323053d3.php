<input  <?php echo e($disabled ? 'disabled' : ''); ?> <?php echo $attributes->merge(['class' => 'form-control mb-2 js-tags-input']); ?>

    type="<?php echo e($type); ?>" name="<?php echo e($name); ?>" placeholder="<?php echo e($placeholder); ?>" value="<?php echo e($value); ?>"
    data-blacklist='PHP' />

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
<?php /**PATH C:\wamp64\www\clinic\resources\views/components/tag-input.blade.php ENDPATH**/ ?>