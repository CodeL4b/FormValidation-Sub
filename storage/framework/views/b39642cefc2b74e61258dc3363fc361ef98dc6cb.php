<?php $__env->startSection('content'); ?>
<?php echo $__env->make('pages.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h3>Edit Post</h3>	
			</div>
		</div>

		<?php if($errors->any()): ?>
			<div class="alart alart-danger">
				<strong>Whoops! </strong> there are some problems in your input <br>
				<ul>
					<?php $__currentLoopData = $errors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<li><?php echo e($error); ?></li>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</ul>
			</div>
		<?php endif; ?>

		<form action="<?php echo e(route('post.update', $post->id)); ?>" method="post">
			<?php echo csrf_field(); ?>
			<?php echo method_field('PUT'); ?>
			<div class="row">
				<div class="col-md-12">
					<strong>Post Title :</strong>
					<input type="text" name="post_title" class="form-control" value="<?php echo e($post->post_title); ?>">
				</div>

				<div class="col-md-12">
					<strong>Post Description :</strong>
					<textarea class="form-control" placeholder="Post Description" name="post_des" rows="8" cols="80"><?php echo e($post->post_des); ?>></textarea>
				</div>

				<div class="col-md-12">
					<a href="<?php echo e(route('post.index')); ?>" class="btn btn-sm btn-success">Back</a>
					<button type="submit" class="btn btn-sm btn-primary">Submit</button>
				</div>
			</div>
		</form>
	</div>
<?php echo $__env->make('pages.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\SubProjectUp\resources\views/post/edit.blade.php ENDPATH**/ ?>