{{ Form::hidden ('user_id', auth()->user()->id) }}
<div class="form-group">
  {{ Form::label('category_id', 'Categorías') }}
  {{ Form::select('category_id', $categories, null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
  {{ Form::label('name', 'Nombre de la Entrada') }}
  {{ Form::text('name', '', ['class' => 'form-control', 'id' => 'name']) }}
</div>
<div class="form-group">
  {{ Form::label('slug', 'URL Amigable') }}
  {{ Form::text('slug', '', ['class' => 'form-control', 'id' => 'slug']) }}
</div>
<div class="form-group">
  {{ Form::label('body', 'Descripción') }}
  {{ Form::textarea('body', '', ['class' => 'form-control']) }}
</div>
<div class="form-group">
  {{ Form::submit('Guardar', ['class' => 'btn btn-primary']) }}
</div>


<!--
<form method="POST" action="{{ route('guardar')}}">
	@csrf

  <div class="form-group">
    <label for="exampleInputEmail1">Nombre de la Entrada</label>
    <input type="text" class="form-control" id="name" name="name">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">URL Amigable</label>
    <input type="text" class="form-control" id="slug" name="slug">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Contenido</label>
    <textarea type="text" class="form-control" rows="10" id="body" name="body"></textarea>
  </div>
  <input type="submit" value ="Enviar" name="" class="btn btn-primary">
</form>
-->
<br>
<div>
	<a href="{{ route('posts.index')}}" style ="float:right;" class="btn btn-success">Volver</a>
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