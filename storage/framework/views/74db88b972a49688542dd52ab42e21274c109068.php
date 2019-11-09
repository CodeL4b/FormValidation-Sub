<?php echo $__env->make('pages.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->startSection('content'); ?>
 
        
   

    <div class="content">
        <div class="links">
            <a href="<?php echo e(url('post')); ?>">Post</a>
            <a href= "<?php echo e(url('cat')); ?>" >Category</a>
        </div>
    </div>


<?php echo $__env->make('pages.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\SubProjectUp\resources\views/home.blade.php ENDPATH**/ ?>