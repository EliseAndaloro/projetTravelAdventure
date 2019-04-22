@extends ('layout') @section ('content')
<link rel="stylesheet" href="{{asset('css/compte.css')}}">
<div class="contenuCo">
	<div class="imageCo">
<img class="logoCo"src="{{ asset('img/connexion.svg') }}"
	style="margin-top: 100px; width: 300px; height: 250px; margin-left: 39%; margin-right: 39%;">
	</div>
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">- connecte toi -</div>

				<div class="card-body">
					<form method="POST" action="{{ route('login') }}">
						@csrf

						<div class="form-group row">
							<label for="email" class="col-md-4 col-form-label text-md-right">Adresse
								mail</label>

							<div class="col-md-6">
								<input id="email" type="email"
									class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
									name="email" value="{{ old('email') }}" required autofocus>
									@if ($errors->has('email'))
									<span class="invalid-feedback" role="alert"> <strong>{{ $errors->first('email') }}</strong></span>
								@endif
							</div>
						</div>

						<div class="form-group row">
							<label for="password"
								class="col-md-4 col-form-label text-md-right">Mot de passe</label>

							<div class="col-md-6">
								<input id="password" type="password"
									class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
									name="password" required> @if ($errors->has('password')) <span
									class="invalid-feedback" role="alert"> <strong>{{
										$errors->first('password') }}</strong>
								</span> @endif
							</div>
						</div>
						<div class="mesBoutons">
							<button type="submit" class="login" style="margin-bottom: 15px;">
								{{ __('Login') }}</button>
<!-- 							<button class="login"> -->
								<a class="inscrit" href="{{ url('/inscription') }}">Je m'inscris</a>
<!-- 							</button> -->
						</div>
					</form>
				</div>
			</div>

		</div>
	</div>
</div>
</div>



@endsection
