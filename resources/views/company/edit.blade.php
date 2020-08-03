@extends('plantillas.estructura')
@section('title', 'Company')


@section('menu')
	@include('plantillas.navSegundario')
@endsection

@section ('content')
	<div class="container">
		<div class="row">
			<div class="col-12 col-sm-10 col-lg-6 mx-auto">
				<h1>Editar empresa</h1>
				@include('plantillas.validation-errors')


				<form method="POST" action="{{ route ('company.update', $inf) }}">
					@method('PATCH')
					@include('company.form', ['btn' => 'Actualizar'])
					<br><br>
				</form>
			</div>
		</div>
	</div>
@endsection