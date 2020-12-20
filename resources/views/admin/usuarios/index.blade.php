@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-lg-8 col-md-10 mx-auto">
			<div class="card-body">
			<div class="panel-heading">
				<h2>Usuarios</h2>
				<a href="{{ route('register') }}" style ="float:right;" class="btn btn-outline-info pull-right">
					Crear
				</a>	
        <br>
        <br>			
			</div>
		<div class="panel-body">
				<div class="card-body">
                <table class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th width="10px">ID</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th colspan="3">&nbsp;Acciones</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                  @foreach ($usuarios as $usuario)
                    <td>{{ $usuario->id }}</td>
                    <td>{{ $usuario->name }}</td>
                    <td>{{ $usuario->email }}</td>
                    <td width="10px">
                    	<a href="{{ route('editarUser', $usuario)}}" class="btn btn-success">Editar</a>
                    </td>
                    <td width="10px">
                    	<form method="POST" action="{{ route('destroy',$usuario)}}">
				          @csrf @method('DELETE')
				            <button class="btn btn-danger">Eliminar</button>
				        </form>
                    </td>
                  </tr>
                  @endforeach
                  </tbody>
                </table>
                {{ $usuarios->render() }}
              </div>
             </div>
		</div>
	</div>
</div>


@endsection