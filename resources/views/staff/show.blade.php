

@extends('plantillas.estructura')

@section('title', 'Staff')

@section('menu')
	@include('plantillas.navSegundario')
@endsection

@section('content')
	<div class="container">
		<div class="bg-white p-5 shadow rounded">
			<h1>Empleados registrados</h1>

			<table class="table table-dark">
				<tr>
					<th>Nombre</th>
					<th>Apellido</th>
					<th>Empresa</th>
					<th>Email</th>
					<th>Telefono</th>
				</tr>
				<br>
			  	<tr>
			  		<td>{{ $inf->name  }}</td>
			  		<td>{{ $inf->surname  }}</td>
			  		<td>{{ $inf->company  }}</td>
			  		<td>{{ $inf->email  }}</td>
			  		<td>{{ $inf->phone  }}</td>
			  	</tr>
			 </table>

			 <div class="d-flex justify-content-between align-items-center">
				<a href="{{ route ('staff.index') }}">Retornar</a>
				<div class="btn-group btn-group-sm">
					<a class="btn btn-primary" href="{{route('staff.edit', $inf)}}">Editar</a>

					<a class="btn btn-danger" href="#" onclick="document.getElementById('delete-company').submit()">Eliminar</a> 
				</div>
				<form class="d-none" id="delete-company" method="post" action="{{route('staff.destroy', $inf)}}">
					@csrf @method('DELETE')
					

				</form>
				
			</div>
		</div>
	</div>



@endsection