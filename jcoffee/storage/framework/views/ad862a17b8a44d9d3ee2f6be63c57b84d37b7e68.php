<?php $__env->startSection('htmlheader_title'); ?>
	Sua San Pham
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_title'); ?>
	Sua San Pham
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main-content'); ?>
	<div class="container-fluid spark-screen" style="background-color: white; padding-top: 15px">
		<div class="row">
			<div class="col-md-12">
				<form method="get" action="<?php echo e(route('showOrder')); ?>">
					<?php echo e(csrf_field()); ?>

					<div class="form-group">
						<!-- <label>Id</label> -->
						<input type="text" name="id" class="form-control" 
                        value="<?php echo e(($order != null)?$order->id:''); ?>" style="display: none;">
					</div>
					<div class="form-group">
						<label>Order_date</label>
						<input type="text" name="name" class="form-control"
                        value="<?php echo e(($order != null)?$order->order_date:''); ?>">
					</div>
					<button class="btn btn-success">Edit</button>
				</form>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project\jcoffee\resources\views/order/edit.blade.php ENDPATH**/ ?>