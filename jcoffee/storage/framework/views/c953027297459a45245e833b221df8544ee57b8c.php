<?php $__env->startSection('htmlheader_title'); ?>
	Edit Product
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_title'); ?>
	Edit product
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main-content'); ?>
	<div class="container-fluid spark-screen" style="background-color: white; padding-top: 15px">
		<div class="row">
			<div class="col-md-12">
				<form method="post" action="<?php echo e(route('postEditProducts')); ?>">
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
						<!-- <label>Id</label> -->
						<input type="text" name="id" class="form-control" 
                        value="<?php echo e(($product != null)?$product->id:''); ?>" style="display: none;">
					</div>
					<div class="form-group">
						<label>Name</label>
						<input type="text" name="name" class="form-control"
                        value="<?php echo e(($product != null)?$product->name:''); ?>">
					</div>
					<div class="form-group">
						<label>Sale</label>
						<input type="text" name="sale" class="form-control"
                        value="<?php echo e(($product != null)?$product->sale:''); ?>">
					</div>
					<div class="form-group">
						<label>Price</label>
						<input type="text" name="price" class="form-control"
                        value="<?php echo e(($product != null)?$product->price:''); ?>">
					</div>
					<button class="btn btn-success">Edit</button>
				</form>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hadtt\project\jcoffee\resources\views/product/edit.blade.php ENDPATH**/ ?>