<?php $__env->startSection('htmlheader_title'); ?>
	Order Detail
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_title'); ?>
Order Detail
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main-content'); ?>
	<div class="container-fluid spark-screen" style="background-color: white; padding-top: 15px">
		<div class="row">
			<div class="col-md-12">
				<form method="post" action="<?php echo e(route('postO')); ?>">
					<?php echo e(csrf_field()); ?>

					<div class="form-group">
						<label>Id_Order</label>
						<select class="form-control" name="id_o">
							<?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<option value="<?php echo e($item->id); ?>"><?php echo e($item->id); ?></option>	
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
						
					</div>
					<div class="form-group">
						<label>Id_Product</label>
						<select class="form-control" name="id_p">
							<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<option value="<?php echo e($item->id); ?>"><?php echo e($item->id); ?></option>	
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
					</div>
					<div class="form-group">
						<label>Number</label>
						<input type="text" name="number" class="form-control" placeholder="Enter number" required>
					</div>
					<div class="form-group">
						<label>Table_number</label>
						<input type="text" name="table_number" class="form-control" placeholder="Enter table_number" required>
					</div>

					<div class="form-group">
						<label>Customer_request</label>
						<input type="text" name="customer_request" class="form-control" placeholder="Enter customer_request" required>
					</div>
					<button class="btn btn-success">Submit</button>
				</form>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hadtt\project\jcoffee\resources\views/order_detail/productInput.blade.php ENDPATH**/ ?>