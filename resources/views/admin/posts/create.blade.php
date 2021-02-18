@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-lg-10 col-md-12 mx-auto">
			<div class="card-body">
			<div class="panel-heading">
				<h2>Crear nuevo Post</h2><br>				
			</div>
		  <div class="panel-body">
				{!! Form::open(['route' => 'guardar'])!!}

            @include('admin.posts.partials.form')
            
        {!! Form::close()!!}
      </div>
		</div>
	</div>
</div>

@endsection