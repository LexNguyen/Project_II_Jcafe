<?php $__env->startSection('htmlheader_title'); ?>
	Management's Employee
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_title'); ?>
Management's Employee
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main-content'); ?>

	<div class="container-fluid spark-screen" style="background-color: white; padding-top: 15px">
		<div class="row">
			<div class="col-md-12">
				<table class="table table-bordered">
					<tr>
						<th>No</th>
                        <th>Position</th>
                        <th>Name</th>
						<th>Address</th>
						<th>Phone</th>
                        <th>Age</th>
                        <th width="80px"></th>
                        <th width="80px"></th>
					</tr>
					<?php $__currentLoopData = $employeeList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<tr>
							<td><?php echo e($index++); ?></td>
                            <td><?php echo e($item->position); ?></td>
							<td><?php echo e($item->name); ?></td>
							<td><?php echo e($item->address); ?></td>
                            <td><?php echo e($item->phone); ?></td>
                            <td><?php echo e($item->age); ?></td>
                            <td><a href="<?php echo e(route('editEmployee')); ?>?id=<?php echo e($item->id); ?>">
                            <button class="btn btn-warning">Edit</button></a></td>
                            <td>
							<button class="btn btn-danger" onclick="deleteEmployee(<?php echo e($item->id); ?>)">Delete</button>
                            </td>
						</tr>
						
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</table>
				<?php echo e($employeeList->links()); ?>

			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script type="text/javascript">
    function deleteEmployee(id) {
        $.post('<?php echo e(route('deleteEmployee')); ?>', {
            "_token": "<?php echo e(csrf_token()); ?>",
            id: id
        }, function(data, status) {
            location.reload()
        })
    }
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hadtt\project\jcoffee\resources\views/employee/showEmployee.blade.php ENDPATH**/ ?>