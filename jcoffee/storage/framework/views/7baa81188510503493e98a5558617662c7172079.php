<?php $__env->startSection('htmlheader_title'); ?>
	Nhap San Pham
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_title'); ?>
	Nhap San Pham
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main-content'); ?>
	<div class="container-fluid spark-screen" style="background-color: white; padding-top: 15px">
		<div class="row">
			<div class="col-md-12">
				<form method="post" action="<?php echo e(route('postP')); ?>">
					<?php echo e(csrf_field()); ?>

					<div class="form-group">
						<label>Id_Order</label>
						<input type="text" name="id_o" class="form-control" placeholder="Enter Id_order">
					</div>
					<div class="form-group">
						<label>Id_Product</label>
						<input type="text" name="id_p" class="form-control" placeholder="Enter Id_product">
					</div>
					<div class="form-group">
						<label>Number</label>
						<input type="text" name="number" class="form-control" placeholder="Enter number">
					</div>
					<div class="form-group">
						<label>Table_number</label>
						<input type="text" name="table_number" class="form-control" placeholder="Enter table_number">
					</div>
					<!-- <div class="form-group">
						<label>Price_detail</label>
						<input type="text" name="price_detail" class="form-control" placeholder="Enter price_detail">
					</div> -->
					<div class="form-group">
						<label>Customer_request</label>
						<input type="text" name="customer_request" class="form-control" placeholder="Enter customer_request">
					</div>
					<button class="btn btn-success">Submit</button>
				</form>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project\jcoffee\resources\views/order_detail/productInput.blade.php ENDPATH**/ ?>