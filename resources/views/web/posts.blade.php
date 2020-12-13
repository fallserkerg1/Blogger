@extends('layouts.app')

@section('content')
<div class="container">
	<div class="col-md-8 col-md-offser-2">
		<h1>Lista de articulos</h1>

		@foreach($posts as $post)
		<div class="panel panel-default">
			<div class="panel-heading">
				{{ $post->name }}
			</div>
			<div class="panel-body">
				@if ($post->file)
				<img src="{{ $post->file }}" class="img-responsive" alt="">
				@endif
				{{ $post->excerpt }}
				<a href="{{ route('post', $post->slug)}}" class="pull-right">Leer más</a>
			</div>
		</div>
		<br>
		@endforeach
		{{ $posts->render() }}
	</div>
</div>
@endsection