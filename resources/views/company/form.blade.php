		@csrf
		<div class="form-group">
			<label>
				Nombre
				<input class = "form-control border-0 bg-light shadow-sm" type="text" name="name" placeholder="Nombre..." value = "{{ old('title',  $inf->name) }}">

			</label>
		</div>
		
		<div class="form-group">
			<label>
				Email
				<input class = "form-control border-0 bg-light shadow-sm" type="email" name="email" placeholder="Email..." value = "{{ old('title',  $inf->email) }}">

			</label>
		</div>
		
		<div class="form-group">
			<label>
				Sitio web
				<input class = "form-control border-0 bg-light shadow-sm" type="text" name="url" placeholder="Url..." value = "{{ old('title',  $inf->url) }}">
			</label>
		</div>

		<button class="btn btn-primary btn-lg btn-block">{{ $btn }}</button>