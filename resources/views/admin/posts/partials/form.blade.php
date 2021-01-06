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
  {{ Form::label('file', 'Imagen') }}
  {{ Form::file('file') }}
</div>
<div class="form-group">
  {{ Form::label('status', 'Estado') }}
  <label>
    {{ Form::radio('status','PUBLISH')}} Publicado
  </label>
<label>
    {{ Form::radio('status','DRAFT')}} Borrador
  </label>
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
  {{ Form::label('excerpt', 'Extracto') }}
  {{ Form::textarea('excerpt', '', ['class' => 'form-control', 'id' => 'excerpt','rows' => '2']) }}
</div>
<div class="form-group">
  {{ Form::label('body', 'Contenido') }}
  {{ Form::textarea('body', '', ['class' => 'form-control']) }}
</div>
<div class="form-group">
  {{ Form::submit('Publicar', ['class' => 'btn btn-primary']) }}
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