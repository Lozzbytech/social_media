<?php if($errors->any()): ?>
    <div <?php echo e($attributes); ?>>
        <div class="bg-red-100 text-center border border-red-400 text-red-700 px-4 py-3 rounded relative"><?php echo e(__('Whoops! Something went wrong.')); ?></div>

        <ul class="mt-3 list-disc list-inside text-sm text-red-600">
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>
<?php /**PATH F:\social_media\simple-social-media-main\resources\views/vendor/jetstream/components/validation-errors.blade.php ENDPATH**/ ?>