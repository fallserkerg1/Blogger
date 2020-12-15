@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-lg-8 col-md-10 mx-auto">
			<div class="card-body">
			<div class="panel-heading">
				<h2>Lista de Etiquetas</h2><br>
				<a href="{{ route('tags.create')}}" class="btn btn-sm btn-primary pull-right">
					Crear
				</a>				
			</div>
		<div class="panel-body">
				<div class="card-body">
                <table class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th width="10px">ID</th>
                    <th>Nombre</th>
                    <th colspan="3">&nbsp;</th>
                  </tr>
                  </thead>
                  <tbody>
                  	@foreach ($tags as $tag)
                  <tr>
                    <td>{{ $tag->id }}</td>
                    <td>{{ $tag->name }}</td>
                    <td width="10px">
                    	<a href="{{ route('tags.show', $tag->id )}}" class="btn btn-primary">
                    		Ver
                    	</a>
                    </td>
                    <td width="10px">
                    	<a href="{{ route('tags.edit', $tag->id )}}" class="btn btn-success">
                    		Editar
                    	</a>
                    </td>
                    <td width="10px">
                    	<a href="{{ route('tags.show', $tag->id )}}" class="btn btn-danger">
                    		Eliminar
                    	</a>
                    </td>
                  </tr>
                  	@endforeach
                  </tbody>
                </table>
                {{ $tags->render() }}
              </div>
             </div>
		</div>
	</div>
</div>

@endsection