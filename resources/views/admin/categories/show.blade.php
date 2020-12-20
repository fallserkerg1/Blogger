@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-lg-8 col-md-10 mx-auto">
			<div class="card-body">
			<div class="panel-heading">
				<h2>Ver Categoria</h2><br>				
			</div>
		  	<div class="panel-body">
				<p><strong>Nombre</strong> {{ $category->name }}</p>
				<p><strong>Slug</strong> {{ $category->slug }}</p>
				<p><strong>Body</strong> {{ $category->body }}</p>
      		</div>
		</div>
		<div>
		<a href="{{ route('categories.index')}}" class="btn btn-primary">Volver</a>
		</div>
	</div>
</div>



@endsection