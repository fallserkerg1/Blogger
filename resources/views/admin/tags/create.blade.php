@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-lg-8 col-md-10 mx-auto">
			<div class="card-body">
			<div class="panel-heading">
				<h2>Crear Etiqueta</h2><br>				
			</div>
		  <div class="panel-body">
				{!! Form::open(['route' => 'tags.store'])!!}

            @include('admin.tags.partials.form')
            
        {!! Form::close()!!}
      </div>
		</div>
	</div>
</div>

@endsection