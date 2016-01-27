@extends('admin.admin_template')

@section('title','Users')
@section('content')
	
	@if(count($errors) > 0)
		<div class="alert alert-danger" role="alert">
			<ul>
				@foreach($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif
	{!! Form::open(['route' => 'admin.users.store', 'method'=> 'POST']) !!}
		<div class="form-group">
			{!! Form::label('name','Nombre:') !!}
			{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre Completo', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('email','Email:') !!}
			{!! Form::email('email', null, ['class' => 'form-control','placeholder' => 'Email', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('password','Password:') !!}
			{!! Form::password('password', ['class' => 'form-control','placeholder' => '********', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('type','Tipo de Usuario:') !!}
			{!! Form::select('type', ['' => 'Seleccione Tipo','member' => 'Miembro', 'admin' => 'Administrador'], null,['class' => 'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
		</div>
	{!! Form::close() !!}

@endsection