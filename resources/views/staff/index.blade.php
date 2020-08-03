

@extends('plantillas.estructura')

@section('title', 'Company')





@section('content')
	<div class="container">
		@include('plantillas.session')
		<div class="d-flex justify-content-between align-items-center mb-4">
			<h1 class="display-4 mb-0">Empleados registrados</h1>
			@auth
				<a class = "btn btn-primary" href="{{ route('staff.create') }}">
					crear empleado
				</a>
			@endauth
		</div>
		<ul class="list-group">
			@forelse ($staffs as $comp)
				<li class="list-group-item border-0 mb-3 shadow-sm">
					<a class="d-flex text-secondary justify-content-between align-items-center" href="{{route('staff.show', $comp)}}">{{ $comp->name  }}</a>
				</li>
			@empty
				<li class="list-group-item border-0 mb-3 shadow-sm">
					No hay servicios para mostrar
				</li>
			@endforelse
		<ul>
	<div>

@endsection