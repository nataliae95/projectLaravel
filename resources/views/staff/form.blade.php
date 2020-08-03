		@csrf
		<div class="form-group">
			<label>
				Nombre
				<input class = "form-control border-0 bg-light shadow-sm" type="text" name="nombre" placeholder="Nombre..." value = "{{ old('nombre',  $inf->name) }}">
			</label>
		</div>
		
		<div class="form-group">
			<label>
				Apellido
				<input  class = "form-control border-0 bg-light shadow-sm" type="text" name="apellido" placeholder="Apellido..." value = "{{ old('apellido',  $inf->surname) }}">
				
			</label>
		</div>

		<div class="form-group">
			<label>
				Empresa
				<input class = "form-control border-0 bg-light shadow-sm" type="text" name="empresa" placeholder="Empresa..." value = "{{ old('empresa',  $inf->company) }}">
			</label>
		</div>
		
		<div class="form-group">
			<label>
				Email
				<input class = "form-control border-0 bg-light shadow-sm" type="email" name="email" placeholder="Email..." value = "{{ old('email',  $inf->email) }}">
			</label>
		</div>
		
		<div class="form-group">
			<label>
				Telefono
				<input class = "form-control border-0 bg-light shadow-sm" type="text" name="telefono" placeholder="Telefono..." value = "{{ old('telefono',  $inf->phone) }}">
			</label>
		</div>

		<button class="btn btn-primary btn-lg btn-block">{{ $btn }}</button>