@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-lg-8 col-md-10 mx-auto">
			<div class="card-body">
			<div class="panel-heading">
				<h2>Lista de Entradas</h2>
				<a href="{{ route('posts.create')}}" style ="float:right;" class="btn btn-outline-info pull-right">
					Crear
				</a>	
        <br>
        <br>			
			</div>
		<div class="panel-body">
				<div class="card-body">
                <table class="table table-bordered table-hover">
                  <thead class="thead-dark">
                  <tr>
                    <th width="10px">ID</th>
                    <th>Nombre</th>
                    <th colspan="3">&nbsp;Acciones</th>
                  </tr>
                  </thead>
                  <tbody>
                  	@foreach ($posts as $post)
                  <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->name }}</td>
                    <td width="10px">
                    	<a href="{{ route('posts.show', $post->id )}}" type="button" class="btn btn-primary">
                    		Ver
                    	</a>
                    </td>
                    <td width="10px">
                    	<a href="{{ route('posts.edit', $post->id )}}" class="btn btn-success">
                    		Editar
                    	</a>
                    </td>
                    <td width="10px">
                    	<form method="POST" action="{{ route('posts.destroy',$post->id)}}">
				          @csrf @method('DELETE')
				            <button class="btn btn-danger">Eliminar</button>
				        </form>	
                    </td>
                  </tr>
                  	@endforeach
                  </tbody>
                </table>
                {{ $posts->render() }}
              </div>
             </div>
		</div>
	</div>
</div>
@endsection