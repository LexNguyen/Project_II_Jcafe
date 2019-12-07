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
						<label>Id Employee</label>
						<!-- <input type="text" name="id_o" class="form-control" placeholder="Enter Id_order"> -->
						<select class="form-control" name="id_e">
							<?php $__currentLoopData = $employee; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<option value="<?php echo e($item->id); ?>"><?php echo e($item->id); ?></option>	
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
						
					</div>
					<div class="form-group">
						<label>Order date</label>
						<input type="text" name="order_date" class="form-control" placeholder="Enter order date(y-m-d)" required>
					</div>
					<button class="btn btn-success">Add</button>
				</form>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hadtt\project\jcoffee\resources\views/order/inputOrder.blade.php ENDPATH**/ ?>