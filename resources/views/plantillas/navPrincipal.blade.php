
<nav class = "navbar bg-white shadow-sm">
	<a class = "navbar-brand" href = "{{ route ('home') }}">
		{{ config('app.name') }}
	</a>
	<ul class ="nav nav-pills">
		<li class = "nav-item">
			<a class ="nav-link {{ request()->is('company/*') ? 'active' : '' }}" href="{{ route('company.index') }}" >Empresas</a>
		</li>
		<li class = "nav-item" >
			<a class ="nav-link {{ request()->is('staff/*') ? 'active' : '' }}" href="{{ route('staff.index') }}" >Personas<a>
		</li>
		@guest
			<li class = "nav-item">
				<a class ="nav-link" href="{{ route('login') }}">Login</a>
			</li>
		@else
			<li class = "nav-item">
				<a class ="nav-link" href="#" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">Cerrar Sesion</a>
            </li>
		@endguest
	</ul>

</nav>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
	   @csrf
</form>
	