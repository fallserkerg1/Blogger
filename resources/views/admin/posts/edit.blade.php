@extends('layouts.app')

@section('content')

{{ Form::hidden ('user_id', auth()->user()->id) }}

<div class="container">
	<div class="row">
		<div class="col-lg-8 col-md-10 mx-auto">
			<div class="card-body">
			<div class="panel-heading">
				<h2>Editar Entrada</h2><br>				
			</div>
		  		<div class="panel-body">
					<form method="POST" action="{{ route('updatePost', $posts)}}">
						@csrf @method('PATCH')
					<div class="form-group">
						{{ Form::label('category_id', 'Categorías') }}
						{{ Form::select('category_id', $categories, null, ['class' => 'form-control']) }}
					</div>
					  <div class="form-group">
					    <label for="exampleInputEmail1">Nombre del Post</label>
					    <input type="text" class="form-control" id="name" name="name" value="{{ $posts->name}}">
					  </div>
					  <div class="form-group">
					    <label for="exampleInputPassword1">URL Amigable</label>
					    <input type="text" class="form-control" id="slug" name="slug" value="{{ $posts->slug}}">
					  </div>
						<div class="form-group">
						    <label for="exampleInputPassword1">Descripción</label>
						    <input type="text" class="form-control" id="excerpt" name="excerpt" value="{{ $posts->excerpt}}">
						  </div>
						<div class="form-group">
					    <label for="exampleInputPassword1">Contenido</label>
					    <textarea type="text" class="form-control" rows="10" id="body" name="body">{{ $posts->body}}</textarea>
					  </div>
					  <input type="submit" value ="Enviar" name="" class="btn btn-primary">
					</form>
					<br>
					<div>
						<a href="{{ route('posts.index')}}" style ="float:right;" class="btn btn-success">Volver</a>
					</div>
      			</div>
		</div>
	</div>
</div>

@section('scripts')
	<script type="text/javascript" src="{{ asset('vendor/stringToSlug/jquery.stringToSlug.min.js')}}"></script>
	<script>
		$(document).ready(function(){
			$("#name,#slug").stringToSlug({
				callback:function(text){
					$("#slug").val(text);
				}
			});
		});
	</script>
@endsection

@endsection