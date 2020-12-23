@extends('layouts.header')

@section('content')
  <!-- Main Content -->
<article>
  <br>
  <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
        @foreach($posts as $post)
        <div class="post-preview">
          <a href="{{ route('post', $post->slug)}}">
            <h2 align="center">{{ $post->name }}</h2>
            <br>
            @if ($post->file)
            <img src="{{ $post->file }}" class="img-fluid" align="center">
            <h3 class="post-subtitle">
              @endif
              {{ $post->excerpt }}
            </h3>
            </a>
          <p class="post-meta">Posted by
            <a href="#">Admin</a>
            on {{ $post->updated_at}}</p>
        </div>
        @endforeach
        {{ $posts->render() }}
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
  <script src="{{ asset('plantilla/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{ asset('plantilla/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Custom scripts for this template -->
  <script src="{{ asset('plantilla/js/clean-blog.min.js')}}"></script>
</body>

</html>

@endsection
