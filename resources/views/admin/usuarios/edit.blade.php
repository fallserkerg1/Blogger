@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-lg-8 col-md-10 mx-auto">
			<div class="card-body">
			<div class="panel-heading">
				<h2>Editar Usuario</h2><br>				
			</div>
		  		<div class="panel-body">
					<form method="POST" action="{{ route('updateUser', $usuarios)}}">
						@csrf @method('PATCH')
					  <div class="form-group">
					    <label for="exampleInputEmail1">Name</label>
					    <input type="text" class="form-control" id="name" name="name" value="{{ $usuarios->name}}">
					  </div>
					  <div class="form-group">
					    <label for="exampleInputPassword1">Email</label>
					    <input type="text" class="form-control" id="email" name="email" value="{{ $usuarios->email}}">
					  </div>
					  <div class="form-group">
					    <label for="exampleInputPassword1">Password</label>
					    <input type="password" class="form-control" id="password" name="password" value="{{ $usuarios->password}}">
					  </div>
					  <input type="submit" value ="Enviar" name="" class="btn btn-primary">
					</form>
					<br>
					<div>
						<a href="{{ route('usuarios')}}" style ="float:right;" class="btn btn-outline-info pull-right">Volver</a>
					</div>
      			</div>
		</div>
	</div>
</div>

@endsection
