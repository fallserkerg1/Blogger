<?php $__env->startSection('content'); ?>
  <!-- Post Content -->
  <article>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <h1><?php echo e($post->name); ?></h1>
            <br>
            <?php if($post->file): ?>
            <img src="<?php echo e($post->file); ?>" class="img-fluid" alt="">
            <br>
            <br>
            <?php endif; ?>
            <?php echo e($post->excerpt); ?>

            <br>
            <p><?php echo $post->body; ?></p>
            <br>
            Etiquetas
            <?php $__currentLoopData = $post->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a href="<?php echo e(route('tag', $tag->slug)); ?>">
              <?php echo e($tag->name); ?>

            </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <div class="panel-heading">
        Categoria
        <a href="<?php echo e(route('category', $post->category->slug)); ?>"><?php echo e($post->category->name); ?></a>
      </div>
        </div>
      </div>
    </div>
  </article>

  <hr>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <ul class="list-inline text-center">
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-paypal fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
          </ul>
          <p class="copyright text-muted">Desarrolado por Yoshua Soto & Moises Ramirez &copy; 2021</p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="plantilla/vendor/jquery/jquery.min.js"></script>
  <script src="plantilla/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="plantilla/js/clean-blog.min.js"></script>

</body>

</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Blogger\resources\views/blogger/post.blade.php ENDPATH**/ ?>