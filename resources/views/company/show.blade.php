

@extends('plantillas.estructura')

@section('title', 'Company')



@section('content')
	<div class="container">
		<div class="bg-white p-5 shadow rounded">
			<h1>Empresas registradas</h1>

			<table class="table table-dark">
				<tr>
					<th>Nombre</th>
					<th>Email</th>
					<th>Sitio Web</th>
				</tr>
				<br>
			  	<tr>
			  		<td>{{ $inf ->name  }}</td>
			  		<td>{{ $inf ->email  }}</td>
			  		<td>{{ $inf ->url  }}</td>
			  	</tr>

			</table>
			<div class="d-flex justify-content-between align-items-center">
				<a href="{{ route ('company.index') }}">Retornar</a>
				<div class="btn-group btn-group-sm">
					<a class="btn btn-primary" href="{{route('company.edit', $inf)}}">Editar</a>

					<a class="btn btn-danger" href="#" onclick="document.getElementById('delete-company').submit()">Eliminar</a> 
				</div>
				<form class="d-none" id="delete-company" method="post" action="{{route('company.destroy', $inf)}}">
					@csrf @method('DELETE')
					

				</form>
				
			</div>
			
		</div>
	</div>
	

@endsection