@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-lg-8 col-md-10 mx-auto">
			<div class="card-body">
			<div class="panel-heading">
				<h2>Lista de Categorias</h2>
				<a href="{{ route('categories.create')}}" style ="float:right;" class="btn btn-outline-info pull-right">
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
                  	@foreach ($categories as $category)
                  <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td width="10px">
                    	<a href="{{ route('categories.show', $category->id )}}" type="button" class="btn btn-primary">
                    		Ver
                    	</a>
                    </td>
                    <td width="10px">
                    	<a href="{{ route('categories.edit', $category->id )}}" class="btn btn-success">
                    		Editar
                    	</a>
                    </td>
                    <td width="10px">
                    	<form method="POST" action="{{ route('categories.destroy',$category->id)}}">
				          @csrf @method('DELETE')
				            <button class="btn btn-danger">Eliminar</button>
				        </form>	
                    </td>
                  </tr>
                  	@endforeach
                  </tbody>
                </table>
                {{ $categories->render() }}
              </div>
             </div>
		</div>
	</div>
</div>
@endsection