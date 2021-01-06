<!--
<div class="form-group">
	{{ Form::label('name', 'Nombre de la etiqueta') }}
	{{ Form::text('name', 'null', ['class' => 'form-control', 'id' => 'name']) }}
</div>
<div class="form-group">
	{{ Form::label('slug', 'URL Amigable') }}
	{{ Form::text('slug', 'null', ['class' => 'form-control', 'id' => 'slug']) }}
</div>
<div class="form-group">
	{{ Form::submit('Guardar', ['class' => 'btn btn-success']) }}
</div>
-->
<form method="POST" action="{{ route('store')}}">
	@csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Nombre de la Etiqueta</label>
    <input type="text" class="form-control" id="name" name="name">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">URL Amigable</label>
    <input type="text" class="form-control" id="slug" name="slug">
  </div>
  <input type="submit" value ="Enviar" name="" class="btn btn-primary">
</form>
<br>
<div>
	<a href="{{ route('tags.index')}}" style ="float:right;" class="btn btn-success">Volver</a>
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