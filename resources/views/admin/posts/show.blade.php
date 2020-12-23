@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-lg-8 col-md-10 mx-auto">
			<div class="card-body">
			<div class="panel-heading">
				<h2>Ver Entrada</h2><br>				
			</div>
		  	<div class="panel-body">
				<p><strong>Nombre</strong> {{ $post->name }}</p>
				<p><strong>Slug</strong> {{ $post->slug }}</p>
				<p><strong>Slug</strong> {{ $post->excerpt }}</p>
				<p><strong>Contenido</strong> {{ $post->body }}</p>
      		</div>
		</div>
		<div>
		<a href="{{ route('tags.index')}}" class="btn btn-primary">Volver</a>
		</div>
	</div>
</div>



@endsection