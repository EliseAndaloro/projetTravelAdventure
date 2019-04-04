@extends ('layout')

@section ('content')
<link rel="stylesheet" href="{{ asset('css/ficheproduit.css')}}">
<div id="body">
<div class="diagonale"></div>
<div class="contenu">

	<div class="row" style="z-index:2;">

		<div class="col s1"id="separateur">
			<img class="materialboxed" width="450" src="{{ asset('img/desertTravel.jpg') }}">
		</div>

		<div class="col s1">
		@foreach($product as $product)
			<h5 class="font1">{{ $product->name }}</h5>
			<div id="price">{{ $product->price }} €</div>
			<p class="font">{{ $product->description }}
			</p>
			<label>Choisissez le nombre de personnes : </label> <select
				class="browser-default">
				<option class="taille" value="">Plus on est de fous, plus on rit :)</option>
				<option class="taille" value="1">1 personne</option>
				<option class="taille" value="2">2 personnes</option>
				<option class="taille" value="3">3 personnes</option>
				<option class="taille" value="3">4 personnes</option>
				<option class="taille" value="3">5 personnes</option>
				<option class="taille" value="3">6 personnes</option>
			</select>
			 <button class="basket">Je pars en voyage</button>
			 @endforeach
		</div>

	</div>

</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script type="text/javascript" src=" {{ asset('js/app.js') }} "></script>
<script type="text/javascript" src="js/script.js"></script>
<script src="script.js"></script>
@endsection
