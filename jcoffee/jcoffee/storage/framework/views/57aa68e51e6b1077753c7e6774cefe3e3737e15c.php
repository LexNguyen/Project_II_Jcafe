<?php $__env->startSection('main-content'); ?>
<form method="post" action="<?php echo e(route('postStudent')); ?>">
	<?php echo e(csrf_field()); ?>

	<input type="text" name="id" value="<?php echo e(($student != null)?$student->id:''); ?>" style="display: none;">
	<div class="table-wrapper">
		<div class="form-group">
        	<label>Roll No</label>
        	<input type="text" name="rollno" class="form-control" placeholder="Enter rollno" value="<?php echo e(($student != null)?$student->rollno:''); ?>">
        </div>
        <div class="form-group">
        	<label>Full Name</label>
        	<input type="text" name="fullname" class="form-control" placeholder="Enter full name" value="<?php echo e(($student != null)?$student->fullname:''); ?>">
        </div>
        <div class="form-group">
        	<label>Age</label>
        	<input type="number" name="age" class="form-control" placeholder="Enter age" value="<?php echo e(($student != null)?$student->age:''); ?>">
        </div>
        <div class="form-group">
        	<label>Email</label>
        	<input type="email" name="email" class="form-control" placeholder="Enter email" value="<?php echo e(($student != null)?$student->email:''); ?>">
        </div>
        <div class="form-group">
        	<label>Address</label>
        	<input type="text" name="address" class="form-control" placeholder="Enter address" value="<?php echo e(($student != null)?$student->address:''); ?>">
        </div>
        <button class="btn btn-success">Add</button>
    </div>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.student', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project\jcoffee\resources\views/student/view_add.blade.php ENDPATH**/ ?>