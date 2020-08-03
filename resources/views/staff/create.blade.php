@extends('plantillas.estructura')
@section('title', 'Staff')



@section ('content')
	<div class="container">
		<div class="row">
			<div class="col-12 col-sm-10 col-lg-6 mx-auto">
				<h1 class="display-4">Crear empleado</h1>
				@include("plantillas.validation-errors")

				<form class="bg-white py-3 px-4 shadow rounded" method="POST" action="{{ route ('staff.store') }}">
				
				<hr>
				@include('company.form', ['btn' => 'Crear'])
			</form>
			</div>
		</div>
		
	</div>
@endsection