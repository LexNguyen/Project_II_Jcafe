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
                        <th>Table_number</th>
						<th>Number</th>
                        <th>Name product</th>
						<th>Price</th>
						<th>Customer_request</th>
						<th></th>
						<th></th>
					</tr>
                    <?php $__currentLoopData = $order_detail; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<tr>
							<td><?php echo e($index++); ?></td>
							<td><?php echo e($item->table_number); ?></td>
                            <td><?php echo e($item->number); ?></td>
							<td><?php echo e($item->name); ?></td>
							<td><?php echo e(number_format($item->price_detail)); ?>VND</td>
							<td><?php echo e($item->customer_request); ?></td>
							<td><a href="<?php echo e(route('editO')); ?>?id=<?php echo e($item->id); ?>">
                            <button class="btn btn-warning">Edit</button></a></td>
                            <td>
							<button class="btn btn-danger" onclick="deleteOrder_detail(<?php echo e($item->id); ?>)">Delete</button>
                            </td>
						</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</table>
				<?php echo e($order_detail->links()); ?>

			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script type="text/javascript">
    function deleteOrder_detail(id) {
        $.post('<?php echo e(route('deleteOrder_detail')); ?>', {
            "_token": "<?php echo e(csrf_token()); ?>",
            id: id
        }, function(data, status) {
            location.reload()
        })
    }
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hadtt\project\jcoffee\resources\views/order_detail/showOrder.blade.php ENDPATH**/ ?>