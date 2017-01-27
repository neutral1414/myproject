<?php $__env->startSection('content'); ?>

	<h1> All Cards </h1>

	<?php $__currentLoopData = $cards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $card): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>

		<?php echo e($card->title); ?> <br>

	<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('pages.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>