<?php $__env->startSection('content'); ?>
    
    <h1>Welcome page goes here</h1>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('pages.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>