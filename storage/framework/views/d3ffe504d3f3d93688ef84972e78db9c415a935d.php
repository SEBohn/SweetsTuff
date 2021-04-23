<?php $__env->startSection('content'); ?>

<div class="flex">
    <div>
        <?php echo $__env->make('_sidebar-links', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    <div class="flex-1 mx-10">
       <?php echo $__env->make('_publish-sweets', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

<div class="border border-green-300 rounded-lg">

    <div class="flex">

        <div>
            <?php $__currentLoopData = $sweets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sweet): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php echo $__env->make('_sweet', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>

    </div>

</div>

    <div>
        <?php echo $__env->make('_friends-list', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Workspace\sweets\resources\views/home.blade.php ENDPATH**/ ?>