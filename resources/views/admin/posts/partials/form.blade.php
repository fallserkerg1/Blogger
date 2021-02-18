{{ Form::hidden ('user_id', auth()->user()->id) }}
<div class="form-group">
  {{ Form::label('category_id', 'Categorías') }}
  {{ Form::select('category_id', $categories, null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
  <label for="exampleInputEmail1">Nombre de la Entrada</label>
  <input type="text" class="form-control" id="name" name="name" required>
</div>
<div class="form-group">
   <label for="exampleInputPassword1">URL Amigable</label>
   <input type="text" class="form-control" id="slug" name="slug" required>
</div>
<div class="form-group">
  <label for="exampleInputPassword1">Direccion de Imagen</label>
  <input type="text" class="form-control" id="file" name="file" required>
</div>
<!--
<div class="form-group">
  {{ Form::label('file', 'Imagen') }}
  {{ Form::file('file') }}
</div>
-->
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
<!--
<div class="form-group">
  <label>Estatus</label>
    <select class="form-control" name="status" id="status">
      <option value="PUBLISHED">Publicado</option>
      <option value="DRAFT">Borrador</option>
    </select>
</div>
-->
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
    <textarea type="text" class="form-control" rows="2" id="excerpt" name="excerpt" required></textarea>
</div>
<div class="form-group">
    <label for="exampleInputPassword1">Contenido</label>
    <textarea type="text" class="form-control" rows="10" id="body" name="body" required></textarea>
</div>
<div class="form-group">
  {{ Form::submit('Publicar', ['class' => 'btn btn-primary btn-lg btn-block']) }}
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
	<a href="{{ route('posts.index')}}" style ="float:right;" class="btn btn-outline-secondary">Volver</a>
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