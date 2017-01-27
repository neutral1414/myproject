<?php if(!empty($card)): ?>

	

	<?php $__env->startSection('content'); ?>
		<h1><?php echo e($card->title); ?></h1>
	<?php $__env->stopSection(); ?>

<?php endif; ?>
<?php echo $__env->make('pages.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>