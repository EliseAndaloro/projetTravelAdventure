@extends ('layout')

@section ('content')
<link rel="stylesheet" href="css/ficheproduit.css">
<div id="body">
<div class="diagonale"></div>
<div class="contenu">

	<div class="row">

		<div class="col s1"id="separateur">
			<img class="materialboxed" width="450" src="img/desertTravel.jpg">
		</div>

		<div class="col s1">
			<h5 class="font1">SEJOUR A LA PLAGE EN FAMILLE</h5>
			<div id="price">150€/pers</div>
			<p class="font">Post emensos insuperabilis expeditionis eventus languentibus
				partium animis, quas periculorum varietas fregerat et laborum,
				nondum tubarum cessante clangore vel milite.
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
		</div>

	</div>

</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script type="text/javascript" src=" {{ asset('js/app.js') }} "></script>
<script type="text/javascript" src="js/script.js"></script>
<script src="script.js"></script>
@endsection
