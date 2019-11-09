<?php $__env->startSection('content'); ?>
<?php echo $__env->make('pages.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
	<div class="container">
		<div class="row">
			<div class="col md 10">
				<h3>Post List</h3>	
			</div>			
		</div>

		<?php if($message = Session::get('success')): ?>
			<div class="alert alert-success">
				<p><?php echo e($message); ?></p>
			</div>

		<?php endif; ?>

		<table class="table table-hover table-sm">
			<tr>
				<th width="50px"><b>No.</b></th>
				<th width="300px">Post Title</th>
				<th>Post Description</th>	
			</tr>
			
			<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<tr>
					<td><b><?php echo e(++$i); ?>.</b></td>
					<td><?php echo e($post->post_title); ?></td>
					<td style="text-align: justify;"><?php echo e($post->post_des); ?></td>	
				</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</table>
<?php echo $posts->links(); ?>

	</div>
<?php echo $__env->make('pages.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\SubProject\resources\views/post/show.blade.php ENDPATH**/ ?>