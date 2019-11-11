<?php $__env->startSection('htmlheader_title'); ?>
	Them Don Hang
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_title'); ?>
	Them Don Hang
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main-content'); ?>
	<div class="container-fluid spark-screen" style="background-color: white; padding-top: 15px">
		<div class="row">
			<div class="col-md-12">
				<form method="post" action="<?php echo e(route('postOrder')); ?>">
					<?php echo e(csrf_field()); ?>

					<div class="form-group">
						<label>Id</label>
						<input type="text" name="id" class="form-control" placeholder="Enter Id order">
					</div>
					<div class="form-group">
						<label>Order date</label>
						<input type="text" name="order_date" class="form-control" placeholder="Enter order date(y-m-d)">
					</div>
					<button class="btn btn-success">Add</button>
				</form>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project\jcoffee\resources\views/order/inputOrder.blade.php ENDPATH**/ ?>