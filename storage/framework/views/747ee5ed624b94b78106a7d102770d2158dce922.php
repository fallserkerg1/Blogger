

<?php $__env->startSection('content'); ?>
<div class="container">
	<div class="col-md-8 col-md-offser-2">
		<h1><?php echo e($post->name); ?></h1>

		<div class="panel panel-default">
			<div class="panel-heading">
				Categoria
				<a href="<?php echo e(route('category', $post->category->slug)); ?>"><?php echo e($post->category->name); ?></a>
			</div>
			<div class="panel-body">
				<?php if($post->file): ?>
				<img src="<?php echo e($post->file); ?>" class="img-responsive" alt="">
				<?php endif; ?>
				<?php echo e($post->excerpt); ?>

				<hr>
				<?php echo $post->body; ?>

				<hr>
				Etiquetas
				<?php $__currentLoopData = $post->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<a href="<?php echo e(route('tag', $tag->slug)); ?>">
					<?php echo e($tag->name); ?>

				</a>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</div>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Blogger\resources\views/web/post.blade.php ENDPATH**/ ?>