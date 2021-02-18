@extends('layouts.app')

@section('content')

{{ Form::hidden ('user_id', auth()->user()->id) }}

<div class="container">
	<div class="row">
		<div class="col-lg-8 col-md-10 mx-auto">
			<div class="panel-heading">
				<h2>Editar Post</h2><br>				
			</div>
		  			<div class="panel-body">
						<form method="POST" action="{{ route('updatePost', $posts)}}">
						@csrf @method('PATCH')
						<div class="form-group">
							{{ Form::label('category_id', 'Categorías') }}
							{{ Form::select('category_id', $categories, null, ['class' => 'form-control']) }}
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Nombre de la Entrada</label>
						    <input type="text" class="form-control" id="name" name="name" value="{{ $posts->name}}" required>
						</div>
						<div class="form-group">
						   <label for="exampleInputPassword1">URL Amigable</label>
						   <input type="text" class="form-control" id="slug" name="slug" value="{{ $posts->slug}}" required>
						</div>
						<!--
						<div class="form-group">
						  {{ Form::label('file', 'Imagen') }}
						  {{ Form::file('file') }}
						</div>
						-->
						<div class="form-group">
						   <label for="exampleInputPassword1">Direccion de Imagen</label>
						   <input type="text" class="form-control" id="file" name="file" value="{{ $posts->file}}" required>
						</div>
						<!--
						<div class="form-group">
						  {{ Form::label('status', 'Estado') }}
						  <label>
						    {{ Form::radio('status','PUBLISH')}} Publicado
						  </label>
						<label>
						    {{ Form::radio('status','DRAFT')}} Borrador
						  </label>
						</div>
						-->
						<div class="form-group">
						  <div>
						    <label>Estatus</label>
						  </div>
						<div class="form-check">
						  <input class="form-check-input" type="radio" name="status" id="exampleRadios1" value="PUBLISHED" checked>
						  <label class="form-check-label" for="exampleRadios1">
						    Publicado
						  </label>
						</div>
						<div class="form-check">
						  <input class="form-check-input" type="radio" name="status" id="exampleRadios2" value="DRAFT">
						  <label class="form-check-label" for="exampleRadios2">
						    Borrador
						  </label>
						</div>
						</div>

						<div class="form-group">
						  {{ Form::label('tags', 'Etiquetas') }}
						  <div>
						    @foreach($tags as $tag)
						      <label>
						        {{ Form::checkbox('tags[]','$tag->id') }} {{ $tag->name}}
						      </label>
						    @endforeach
						  </div>
						</div>

						<div class="form-group">
						    <label for="exampleInputPassword1">Extracto</label>
						    <textarea type="text" class="form-control" rows="2" id="excerpt" name="excerpt" required>{{ $posts->excerpt}}</textarea>
						</div>
						<div class="form-group">
						    <label for="exampleInputPassword1">Contenido</label>
						    <textarea type="text" class="form-control" rows="10" id="body" name="body" required>{{ $posts->body}}</textarea>
						</div>
							<input type="submit" value ="Publicar" name="" class="btn btn-primary btn-lg btn-block">
							</form>
							<br>
							<a href="{{ route('posts.index')}}" style ="float:right;" class="btn btn-outline-secondary">Volver</a>
      		</div>
		</div>
	</div>

@section('scripts')
	<script type="text/javascript" src="{{ asset('java/stringToSlug/jquery.stringToSlug.min.js')}}"></script>
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