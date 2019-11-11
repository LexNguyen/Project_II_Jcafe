<?php $__env->startSection('htmlheader_title'); ?>
	Quản Lý Lớp Học
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_title'); ?>
	Danh Sách Lớp Học
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main-content'); ?>
	<div class="container-fluid spark-screen" style="background-color: white; padding-top: 15px">
		<div class="row">
			<div class="col-md-12">
				<button class="btn btn-success" style="margin-bottom: 15px;">Add Student</button>
				<table class="table table-bordered">
					<tr>
						<th>No</th>
						<th>Class Name</th>
						<th width="80px"></th>
						<th width="80px"></th>
					</tr>
					<?php $__currentLoopData = $classList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<tr>
							<td><?php echo e($index++); ?></td>
							<td><a href="<?php echo e(route('group_show_all')); ?>?id=<?php echo e($item->id); ?>"><?php echo e($item->class_name); ?></a></td>
							<td><button class="btn btn-warning">Edit</button></td>
							<td><button class="btn btn-danger">Delete</button></td>
						</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</table>
				<?php echo e($classList->links()); ?>

			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project\jcoffee\resources\views/admin/class/index.blade.php ENDPATH**/ ?>