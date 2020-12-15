

<?php $__env->startSection('content'); ?>
<div class="container">
	<div class="col-md-8 col-md-offser-2">
		<h1>Lista de articulos</h1>

		<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<div class="panel panel-default">
			<div class="panel-heading">
				<?php echo e($post->name); ?>

			</div>
			<div class="panel-body">
				<?php if($post->file): ?>
				<img src="<?php echo e($post->file); ?>" class="img-responsive" alt="">
				<?php endif; ?>
				<?php echo e($post->excerpt); ?>

				<a href="<?php echo e(route('post', $post->slug)); ?>" class="pull-right">Leer más</a>
			</div>
		</div>
		<br>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		<?php echo e($posts->render()); ?>

	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Blogger\resources\views/web/posts.blade.php ENDPATH**/ ?>