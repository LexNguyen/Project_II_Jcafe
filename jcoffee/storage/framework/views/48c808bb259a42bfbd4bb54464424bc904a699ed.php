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
				<a href="<?php echo e(route('viewAdd')); ?>"><button class="btn btn-success" style="margin-bottom: 15px;">Add Product</button></a>
				<table class="table table-bordered">
					<tr>
						<th>No</th>
						<th>Id_order</th>
						<th>Id_Product</th>
						<th>Number</th>
						<th>Table_number</th>
						<th>Price</th>
						<th>Customer_request</th>
					</tr>
					<?php $__currentLoopData = $studentList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<tr id="r_<?php echo e($item->id); ?>">
							<td><?php echo e($index++); ?></td>
							<td><?php echo e($item->id_o); ?></td>
							<td><?php echo e($item->id_p); ?></td>
							<td><?php echo e($item->number); ?></td>
							<td><?php echo e($item->table_number); ?></td>
							<td><?php echo e($item->price_detail); ?></td>
							<td><?php echo e($item->customer_detail); ?></td>
							<td><button class="btn btn-warning">Edit</button></td>
							<td><button onclick="deleteStudent(<?php echo e($item->id); ?>)" class="btn btn-danger">Delete</button></td>
						</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</table>
				<?php echo e($studentList->links()); ?>

			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script type="text/javascript">
	function deleteStudent(id) {
		$.post('<?php echo e(route('deleteStudent')); ?>', {
			_token: '<?php echo e(csrf_token()); ?>',
			id:id
		}, function(data, status) {
			// location.reload();
			$('#r_'+id).remove();
		})
	}
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project\jcoffee\resources\views/admin/student/index.blade.php ENDPATH**/ ?>