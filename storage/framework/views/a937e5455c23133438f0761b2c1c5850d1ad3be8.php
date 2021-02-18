<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Blog Anime</title>

  <!-- Bootstrap core CSS -->
  <link href="<?php echo e(asset('plantilla/vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">
  <link rel="icon" type="image/png" href="<?php echo e(asset('base/images/icons/favicon.ico')); ?>"/>
  <!-- Custom fonts for this template -->
  <link href="<?php echo e(asset('plantilla/vendor/fontawesome-free/css/all.min.css')); ?>" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="<?php echo e(asset('plantilla/css/clean-blog.min.css')); ?>" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="<?php echo e(route('index')); ?>">Blog Anime</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('index')); ?>">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('somos')); ?>">Quienes Somos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('contacto')); ?>">Contactame</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('donacion')); ?>">Dona Algo</a>
          </li>
      <?php if(auth()->guard()->guest()): ?>
          <li class="nav-item">
              <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
          </li>
          <?php if(Route::has('register')): ?>
              <!--<li class="nav-item">
                  <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
              </li> -->
          <?php endif; ?>
      <?php else: ?>
      <!-- <li class="nav-item"><a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a></li> -->
      <li class="nav-item dropdown"><a class="nav-link" href="<?php echo e(route('usuarios')); ?>">Usuarios</a></li>
      <li class="nav-item dropdown"><a class="nav-link" href="<?php echo e(route('tags.index')); ?>">Etiquetas</a></li>
      <li class="nav-item dropdown"><a class="nav-link" href="<?php echo e(route('categories.index')); ?>">Categorías</a></li>
      <li class="nav-item dropdown"><a class="nav-link" href="<?php echo e(route('posts.index')); ?>">Entradas</a></li>
      <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  <?php echo e(Auth::user()->name); ?>

              </a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                     onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                      <?php echo e(__('Logout')); ?>

                  </a>

                  <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                      <?php echo csrf_field(); ?>
                  </form>
              </div>
          </li>
      <?php endif; ?>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Header -->
 <!-- Carusel --> 
 <!--
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="plantilla/pic/first.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="plantilla/pic/second.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="plantilla/pic/third.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
-->
  <!-- Header One Pic-->
  <header class="masthead" style="background-image: url('https://3.bp.blogspot.com/-AZiS5SQ4Q4g/VKLiyksE9RI/AAAAAAAAA68/eigiEC9eWVs/s1600/463463_465736616797594_1697461976_o.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>Blog Anime</h1>
            <span class="subheading">Tu fuente gratuita de Anime</span>
          </div>
        </div>
      </div>
    </div>
  </header>

  
<?php echo $__env->yieldContent('content'); ?><?php /**PATH C:\xampp\htdocs\Blogger\resources\views/layouts/header.blade.php ENDPATH**/ ?>