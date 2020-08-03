
<div class="container">
	<nav class = "navbar bg-white shadow-sm">
		<ul class ="nav nav-pills">
			<li class = "nav-item">
				<a class ="nav-link" href="{{ request()->is('staff/*') ? route('staff.create') : route('company.create') }}" >Crear</a>
			</li>
			<li class = "nav-item">
				<a class ="nav-link" href="{{ request()->is('staff/*') ? route('staff.index') : route('company.index') }}">Leer</a>
			</li>
		</ul>

	</nav>
</div>
