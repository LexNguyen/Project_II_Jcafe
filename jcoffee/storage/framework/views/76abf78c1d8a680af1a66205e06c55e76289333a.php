<?php $__env->startSection('htmlheader_title'); ?>
	Edit Employee
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_title'); ?>
	Edit Employee
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main-content'); ?>
	<div class="container-fluid spark-screen" style="background-color: white; padding-top: 15px">
		<div class="row">
			<div class="col-md-12">
				<form method="post" action="<?php echo e(route('postEmployee')); ?>">
					<?php echo e(csrf_field()); ?>

					<div class="form-group">
						<!-- <label>Id</label> -->
						<input type="text" name="id" class="form-control" 
                        value="<?php echo e(($employee != null)?$employee->id:''); ?>" style="display: none;">
					</div>
                    <div class="form-group">
                    <label>Position</label>
						<select class="form-control"  name="position" value="<?php echo e(($employee != null)?$employee->position:''); ?>">
								<option>Quan Ly</option>
                                <option>Nhan Vien</option>	
                        </select>
                    </div>
					<div class="form-group">
						<label>Name</label>
						<input type="text" name="name" class="form-control"
                        value="<?php echo e(($employee != null)?$employee->name:''); ?>">
					</div>
					<div class="form-group">
						<label>Address</label>
						<input type="text" name="address" class="form-control"
                        value="<?php echo e(($employee != null)?$employee->address:''); ?>">
					</div>
					<div class="form-group">
						<label>Phone</label>
						<input type="text" name="phone" class="form-control"
                        value="<?php echo e(($employee != null)?$employee->phone:''); ?>">
					</div>
                    <div class="form-group">
						<label>Age</label>
						<input type="text" name="age" class="form-control"
                        value="<?php echo e(($employee != null)?$employee->age:''); ?>">
					</div>
					<button class="btn btn-success">Edit</button>
				</form>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hadtt\project\jcoffee\resources\views/employee/editEmployee.blade.php ENDPATH**/ ?>