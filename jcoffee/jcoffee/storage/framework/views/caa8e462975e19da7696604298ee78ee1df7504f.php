<?php $__env->startSection('htmlheader_title'); ?>
	Them San Pham
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_title'); ?>
	Them San Pham
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main-content'); ?>
	<div class="container-fluid spark-screen" style="background-color: white; padding-top: 15px">
		<div class="row">
			<div class="col-md-12">
				<form method="post" action="<?php echo e(route('editStuden')); ?>">
					<?php echo e(csrf_field()); ?>

					<div class="form-group">
						<label>Id</label>
						<input type="text" name="id" id="id" class="form-control" value="<?php echo e($id); ?>">
					</div>
					<div class="form-group">
						<label>Name</label>
						<input type="text" name="name" id="name" class="form-control" value="<?php echo e($name); ?>">
					</div>
					<button class="btn btn-success">Edit</button>
				</form>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project\jcoffee\resources\views/editStudent.blade.php ENDPATH**/ ?>