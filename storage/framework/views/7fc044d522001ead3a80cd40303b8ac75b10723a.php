

<?php $__env->startSection('content'); ?>

<div class="container">
	<div class="row">
		<div class="col-lg-8 col-md-10 mx-auto">
			<div class="card-body">
			<div class="panel-heading">
				<h2>Crear Etiqueta</h2><br>				
			</div>
		  <div class="panel-body">
				<?php echo Form::open(['route' => 'tags.store']); ?>


            <?php echo $__env->make('admin.tags.partials.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            
        <?php echo Form::close(); ?>

      	</div>
		</div>
	</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Blogger\resources\views/admin/tags/create.blade.php ENDPATH**/ ?>