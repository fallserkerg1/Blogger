<?php $__env->startSection('content'); ?>
  <!-- Main Content -->
<article>
  <br>
  <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="post-preview">
          <a href="<?php echo e(route('post', $post->slug)); ?>">
            <h2 align="center"><?php echo e($post->name); ?></h2>
            <br>
            <?php if($post->file): ?>
            <img src="<?php echo e($post->file); ?>" class="img-fluid" align="center">
            <h3 class="post-subtitle">
              <?php endif; ?>
              <?php echo e($post->excerpt); ?>

            </h3>
            </a>
          <p class="post-meta">Posted by
            <a href="#">Admin</a>
            on September 24, 2019</p>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php echo e($posts->render()); ?>

        <hr>
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
  <script src="<?php echo e(asset('plantilla/vendor/jquery/jquery.min.js')); ?>"></script>
  <script src="<?php echo e(asset('plantilla/vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>

  <!-- Custom scripts for this template -->
  <script src="<?php echo e(asset('plantilla/js/clean-blog.min.js')); ?>"></script>
</body>

</html>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Blogger\resources\views/blogger/index.blade.php ENDPATH**/ ?>