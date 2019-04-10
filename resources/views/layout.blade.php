<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width" />
<title>Travel Adventure</title>
<link rel="stylesheet" href=" {{ asset('css/app.css') }} ">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
	rel="stylesheet">
<link rel="stylesheet"
	href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<link rel="stylesheet" href="{{ asset('css/style.css')}}">
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>

	<header>
		<nav class="header nav nav-pills nav-fill" id="main">
			<a class="navlien nav-item nav-link "
				href="/projetTravelAdventure/public/">ACCUEIL</a> <a
				class="navlien nav-item nav-link" href="{{ url('/randonne') }}">RANDONNÉES</a>
			<a class="navlien nav-item nav-link" href="{{ url('/sejour') }}">SEJOURS</a>
			<a class="navlien nav-item nav-link" href="{{ url('/avis') }}"><img
				src="{{ asset('img/LOGO.svg') }}" id="logo"></a> <a
				class="navlien nav-item nav-link" href="{{ url('/weekend') }}">WEEK-ENDS</a>


			@guest <a class="navlien nav-item nav-link"
				href="{{ url('/compte') }}">MON COMPTE</a> @else <a
				id="navbarDropdown" class=" =navlien nav-link dropdown-toggle"
				href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
				aria-expanded="false" v-pre> {{ Auth::user()->name }} <span
				class="caret"></span>
			</a>

			<div class="dropdown-menu dropdown-menu-right" id="deconnexion"
				aria-labelledby="navbarDropdown">
				<a class="dropdown-item" id="deco" href="{{ route('logout') }}"
					onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
					{{ __('Se Deconnecter') }} </a>

				<form id="logout-form" action="{{ route('logout') }}" method="POST"
					style="display: none;">@csrf</form>
			</div>
			@endguest <a class="navlien openbtn nav-item nav-link"
				onclick="openNav()"><i class="small material-icons">card_travel</i></a>
		</nav>

		<div id="mySidepanel" class="sidepanel">
			<a href="#" class="monpanier">MON PANIER</a> <a
				href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
			<div>
				@if(isset($cart))

				<div class="card">
					<div class="card-image waves-effect waves-block waves-light">
						<img class="activator" src="{{ asset( $cart->img ) }}">
					</div>
					<div class="card-content">
						<span class="card-title activator grey-text text-darken-4">{{
							$cart->product_name }}<i class="material-icons right">more_vert</i>
						</span>

					</div>
					<div class="card-reveal">
						<span class="card-title grey-text text-darken-4">{{
							$cart->product_name }}<i class="material-icons right">close</i>
						</span>
						<p>{{ $cart->description }}</p>
					</div>
				</div>

			</div>
			<form method="get" id="carform"
				action="{{ action('CartController@show', $cart->cart_id) }}">

				<input type="submit" class="validerPanier"
					value="Je Pars en voyage ">
			</form>


			@endif

		</div>

	</header>

	<div>@yield('content')</div>





	<footer>
		<span id="copyright">© 2019 Mémé & Lisnou</span>

		<div class="icons">
			<img src="{{ asset('img/facebook.svg') }}" class="reseau"> <img
				src="{{ asset('img/twitter.svg') }}" class="reseau"> <img
				src="{{ asset('img/insta.svg') }}" class="reseau">
		</div>
	</footer>

	<script
		src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<script type="text/javascript" src=" {{ asset('js/app.js') }} "></script>
	<script type="text/javascript" src="{{ asset('js/script.js') }}"></script>

</body>
</html>
