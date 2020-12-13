@extends('layouts.header')

@section('content')
  <!-- Post Content -->
  <article>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <h1>{{ $post->name}}</h1>
            <br>
            @if ($post->file)
            <img src="{{ $post->file }}" class="img-fluid" alt="">
            <br>
            <br>
            @endif
            {{ $post->excerpt }}
            <br>
            <p>{!! $post->body !!}</p>
            <br>
            Etiquetas
            @foreach($post->tags as $tag)
            <a href="{{ route('tag', $tag->slug)}}">
              {{ $tag->name}}
            </a>
            @endforeach
        <div class="panel-heading">
        Categoria
        <a href="{{ route('category', $post->category->slug)}}">{{ $post->category->name}}</a>
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
@endsection