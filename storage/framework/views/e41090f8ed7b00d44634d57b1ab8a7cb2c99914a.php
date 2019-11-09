<?php $__env->startSection('content'); ?>
<?php echo $__env->make('pages.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	<div class="container">
		<div class="row">
			<div class="col md 10">
				<h3>Category List</h3>	
			</div>
			<div class="col-sm-2">
				<a class="btn btn-sm btn-success" href="<?php echo e(route('cat.create')); ?>">Create New Category</a>
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
				<th width="300px">Category Title</th>
				<th>Category Description</th>
				<th width="180px">Action</th>
			</tr>
			
			<?php $__currentLoopData = $cats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<tr>
					<td><b><?php echo e(++$i); ?>.</b></td>
					<td><?php echo e($cat->cat_title); ?></td>
					<td><?php echo e($cat->cat_des); ?></td>
					<td>
						<form action="<?php echo e(route ('cat.destroy', $cat->id)); ?>" method="post">
							<a class="btn btn-sm btn-success" href="<?php echo e(route ('cat.show', $cat->id)); ?>">Show</a>
							<a class="btn btn-sm btn-warning" href="<?php echo e(route ('cat.edit', $cat->id)); ?>">Edit</a>
							<?php echo csrf_field(); ?>
							<?php echo method_field('DELETE'); ?>
							<button type="submit" class="btn btn-sm btn-danger">Delete</button>
						</form>
					</td>
				</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</table>
<?php echo $cats->links(); ?>

	</div>
<?php echo $__env->make('pages.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\SubProjectUp\resources\views/cat/index.blade.php ENDPATH**/ ?>