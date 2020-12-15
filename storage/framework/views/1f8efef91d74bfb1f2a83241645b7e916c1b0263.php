

<?php $__env->startSection('content'); ?>

<div class="container">
	<div class="row">
		<div class="col-lg-8 col-md-10 mx-auto">
			<div class="card-body">
			<div class="panel-heading">
				<h2>Lista de Etiquetas</h2><br>
				<a href="<?php echo e(route('tags.create')); ?>" class="btn btn-sm btn-primary pull-right">
					Crear
				</a>				
			</div>
		<div class="panel-body">
				<div class="card-body">
                <table class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th width="10px">ID</th>
                    <th>Nombre</th>
                    <th colspan="3">&nbsp;</th>
                  </tr>
                  </thead>
                  <tbody>
                  	<?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <td><?php echo e($tag->id); ?></td>
                    <td><?php echo e($tag->name); ?></td>
                    <td width="10px">
                    	<a href="<?php echo e(route('tags.show', $tag->id )); ?>" class="btn btn-primary">
                    		Ver
                    	</a>
                    </td>
                    <td width="10px">
                    	<a href="<?php echo e(route('tags.edit', $tag->id )); ?>" class="btn btn-success">
                    		Editar
                    	</a>
                    </td>
                    <td width="10px">
                    	<a href="<?php echo e(route('tags.show', $tag->id )); ?>" class="btn btn-danger">
                    		Eliminar
                    	</a>
                    </td>
                  </tr>
                  	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tbody>
                </table>
                <?php echo e($tags->render()); ?>

              </div>
             </div>
		</div>
	</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Blogger\resources\views/admin/tags/index.blade.php ENDPATH**/ ?>