@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-lg-8 col-md-10 mx-auto">
			<div class="card-body">
			<div class="panel-heading">
				<h2>Editar Categoria</h2><br>				
			</div>
		  		<div class="panel-body">
					<form method="POST" action="{{ route('actualizar', $tag)}}">
						@csrf @method('PATCH')
					  <div class="form-group">
					    <label for="exampleInputEmail1">Nombre de la Categoria</label>
					    <input type="text" class="form-control" id="name" name="name" value="{{ $tag->name}}">
					  </div>
					  <div class="form-group">
					    <label for="exampleInputPassword1">URL Amigable</label>
					    <input type="text" class="form-control" id="slug" name="slug" value="{{ $tag->slug}}">
					  </div>
					  <input type="submit" value ="Enviar" name="" class="btn btn-primary">
					</form>
					<br>
					<div>
						<a href="{{ route('tags.index')}}" style ="float:right;" class="btn btn-success">Volver</a>
					</div>
      			</div>
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