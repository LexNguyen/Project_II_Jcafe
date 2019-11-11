<?php $__env->startSection('main-content'); ?>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>STT</th>
            <th>Roll No</th>
            <th>Full Name</th>
            <th>Age</th>
            <th>Email</th>
            <th>Address</th>
            <th width="80px"></th>
            <th width="80px"></th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $studentList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <th><?php echo e($index++); ?></th>
                <td><?php echo e($item->rollno); ?></td>
                <td><?php echo e($item->fullname); ?></td>
                <td><?php echo e($item->age); ?></td>
                <td><?php echo e($item->email); ?></td>
                <td><?php echo e($item->address); ?></td>
                <td>
                    <a href="<?php echo e(route('viewAdd')); ?>?id=<?php echo e($item->id); ?>"><button class="btn btn-warning">Edit</button></a>
                </td>
                <td>
                    <button class="btn btn-danger" onclick="deleteStudent(<?php echo e($item->id); ?>)">Delete</button>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php echo e($studentList->links()); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script type="text/javascript">
    function deleteStudent(id) {
        $.post('<?php echo e(route('deleteStudent')); ?>', {
            "_token": "<?php echo e(csrf_token()); ?>",
            id: id
        }, function(data, status) {
            location.reload()
        })
    }
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.student', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project\jcoffee\resources\views/student/index.blade.php ENDPATH**/ ?>