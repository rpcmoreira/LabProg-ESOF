
<?php $__env->startSection('content'); ?>
<form action="<?php echo e(url('/candidatos')); ?>" method="post" style="margin-top: 50px">
    <?php echo csrf_field(); ?> 
    First Name: <input type="text" name="firstName" value="<?php echo e(old('firstName')); ?>">
    Last Name: <input type="text" name="lastName" value="<?php echo e(old('lastName')); ?>">
    <button type="submit" class="btn btn-primary">Create</button>
</form>


<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Rui\Desktop\LabProg-ESOF-Ana\resources\views/candidato/create.blade.php ENDPATH**/ ?>