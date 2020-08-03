

@extends('plantillas.estructura')

@section('title', 'Company')


@section('content')
<div class="container">
	@include('plantillas.session')
	<div class="d-flex justify-content-between align-items-center mb-4">
		<h1 class="display-4 mb-0">Empresas registradas</h1>
		@auth
			<a class = "btn btn-primary" href="{{ route('company.create') }}">
				crear empresa
			</a>
		@endauth
	</div>

	<ul class="list-group">
	@forelse ($companys as $comp)
		<li class="list-group-item border-0 mb-3 shadow-sm">
			<a class="d-flex text-secondary justify-content-between align-items-center" href="{{route('company.show', $comp)}}">{{ $comp->name  }}</a>
		</li>
	@empty
		<li class="list-group-item border-0 mb-3 shadow-sm">
			No hay servicios para mostrar
		</li>
	@endforelse
	</ul>
</div>
@endsection
