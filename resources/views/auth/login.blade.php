@extends('admin.admin_template')

@section('title','Login')
@section('content')
	
	{!! Form::open(['route' =>'auth.login', 'method' => 'POST']) !!}
		<div class="form-group">
			{!! Form::label('email', 'Email') !!}
			{!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Ingrese Email', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('password', 'Password') !!}
			{!! Form::password('password',['class' => 'form-control', 'placeholder' => '********', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::submit('Ingresar', ['class' => 'btn btn-primary']) !!}
		</div>

	{!! Form::close() !!}

@endsection