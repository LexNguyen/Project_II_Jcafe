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
						<th>Id</th>
                        <th>Name product</th>
						<th>Sale</th>
						<th>Price</th>
                        <th width="80px"></th>
                        <th width="80px"></th>
					</tr>
					<?php $__currentLoopData = $productList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<tr>
							<td><?php echo e($index++); ?></td>
							<td><?php echo e($item->id); ?></td>
                            <td><?php echo e($item->name); ?></td>
							<td><?php echo e($item->sale); ?></td>
							<td><?php echo e($item->price); ?></td>
                            <td><a href="<?php echo e(route('edit')); ?>?id=<?php echo e($item->id); ?>">
                            <button class="btn btn-warning">Edit</button></a></td>
                            <td>
                            <button class="btn btn-danger" onclick="deleteProduct(<?php echo e($item->id); ?>)">Delete</button>
                            </td>
						</tr>
						
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</table>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project\jcoffee\resources\views/showP.blade.php ENDPATH**/ ?>