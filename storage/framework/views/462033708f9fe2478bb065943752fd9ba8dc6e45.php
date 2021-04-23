<h3 class="font-bold text-xl mb-4 flex">Friends<h3>


<ul>
    <?php $__currentLoopData = range(1, 8); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


    <li class="mb-4">
        <div class="flex">
            <img src="" alt="" class="rounded-full mr-2" >

            Billy
        </div>
    </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
<?php /**PATH C:\Workspace\sweets\resources\views/_friends-list.blade.php ENDPATH**/ ?>