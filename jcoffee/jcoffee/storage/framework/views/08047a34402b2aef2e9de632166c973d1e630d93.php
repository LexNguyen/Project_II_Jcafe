<?php $__env->startSection('htmlheader_title'); ?>
	Quan Ly San Pham
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_title'); ?>
	Danh Sách San Pham
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main-content'); ?>
	<div class="container-fluid spark-screen" style="background-color: white; padding-top: 15px">
		<div class="row">
			<div class="col-md-12">
				<table class="table table-bordered">
					<tr>
						<th>No</th>
						<th>Id_order</th>
						<th>Id_product</th>
                        <th>Table_number</th>
						<th>Number</th>
                        <th>Name product</th>
						<th>Price</th>
						<th>Customer_request</th>
					</tr>
					<?php $__currentLoopData = $productList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<tr>
							<td><?php echo e($index++); ?></td>
							<td><?php echo e($item->id_o); ?></td>
							<td><?php echo e($item->id_p); ?></td>
							<td><?php echo e($item->table_number); ?></td>
                            <td><?php echo e($item->number); ?></td>
							<td><?php echo e($item->name); ?></td>
							<td><?php echo e($item->price_detail); ?></td>
							<td><?php echo e($item->customer_request); ?></td>
						</tr>
						
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</table>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project\jcoffee\resources\views/order_detail/showProduct.blade.php ENDPATH**/ ?>