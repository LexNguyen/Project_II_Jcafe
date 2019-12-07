<?php $__env->startSection('htmlheader_title'); ?>
	Quản Lý Sản Phẩm
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_title'); ?>
Quản Lý Sản Phẩm
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main-content'); ?>
	<div class="container-fluid spark-screen" style="background-color: white; padding-top: 15px">
		<div class="row">
			<div class="col-md-12">
				<form method="post" action="<?php echo e(route('postProduct')); ?>">
					<?php echo e(csrf_field()); ?>

					<div class="form-group">
						<label>Name Category</label>
						<!-- <input type="text" name="id_o" class="form-control" placeholder="Enter Id_order"> -->
						<select class="form-control" name="id_cg">
							<?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>	
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
						
					</div>
					<div class="form-group">
						<label>Name</label>
						<input type="text" name="name" class="form-control" placeholder="Enter name" required>
					</div>
					<div class="form-group">
						<label>Sale</label>
						<input type="text" name="sale" class="form-control" placeholder="Enter sale( % )" required>
					</div>
					<div class="form-group">
						<label>Price</label>
						<input type="text" name="price" class="form-control" placeholder="Enter price" required>
					</div>
					<div class="form-group">
						<label>Thumbnail</label>
						<input type="text" name="thumbnail" class="form-control" placeholder="Enter thumbnail" required>
					</div>
					<button class="btn btn-success">Add</button>
				</form>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hadtt\project\jcoffee\resources\views/product/inputProduct.blade.php ENDPATH**/ ?>