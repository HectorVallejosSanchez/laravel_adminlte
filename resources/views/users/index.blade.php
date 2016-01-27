@extends('admin.admin_template')

@section('title','Lista de Usuarios')
@section('content')
	<a href="{{ route('admin.users.create') }}" class="btn btn-info">Registrar nuevo usuario</a>
	<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>Name</th>
			<th>Email</th>
			<th>Type</th>
			<th>Action</th>
		</thead>
		@foreach($users as $user)
		<tbody>
			<td>{{ $user->id }}</td>
			<td>{{ $user->name }}</td>
			<td>{{ $user->email }}</td>
			<td>
				@if($user->type == "admin")
					<span class="label label-primary">{{ $user->type }}</span>
				@else
					<span class="label label-info">{{ $user->type }}</span>
				@endif	
			</td>
			<td>
			<a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-warning glyphicon glyphicon-wrench" style="width: 30%; margin:3px "></a>
			<a href="{{ route('admin.users.destroy', $user->id) }}" onclick="return confirm('¿Seguro que deseas eliminar este usuario?')" class="btn btn-danger glyphicon glyphicon-remove-circle" style="width: 30%; margin: 3px"></a>
			</td>			
		</tbody>
		@endforeach	
	</table>
	{!! $users->render() !!}
@endsection