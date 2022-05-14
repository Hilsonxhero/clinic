<?php $__errorArgs = [$field];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
    <div class="fv-plugins-message-container invalid-feedback">
        <div data-field="product_name" data-validator="notEmpty"><?php echo e($message); ?></div>
    </div>
<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
<?php /**PATH C:\wamp64\www\clinic\resources\views/components/validation-error.blade.php ENDPATH**/ ?>