
            <div class="content">
                <div class="title m-b-md">
                    
                </div>     
            </div>

            <?php if(Route::has('login')): ?>
                <div class="top-right links">
                    <?php if(auth()->guard()->check()): ?>
                        <a href="<?php echo e(url('/home')); ?>">Home</a>
                    <?php else: ?>
                        <a href="<?php echo e(route('login')); ?>">Login</a>

                        <?php if(Route::has('register')): ?>
                            <a href="<?php echo e(route('register')); ?>">Register</a>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
            <?php endif; ?>


            <div class="content">
                <div class="links">
                    <a href="<?php echo e(url('showpost')); ?>">Post</a>
                    <a href= "<?php echo e(url('showcat')); ?>" >Category</a>
                </div>
            </div>
  
<?php echo $__env->make('pages.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>   
<?php echo $__env->make('pages.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\SubProjectUp\resources\views/welcome.blade.php ENDPATH**/ ?>