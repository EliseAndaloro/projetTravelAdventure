@extends ('layout')

@section ('content')
<link rel="stylesheet" href="{{ asset('css/ficheproduit.css')}}">
<div id="body">
<div class="diagonale"></div>
<div class="contenu">

	<div class="row" style="z-index:2;">
	@foreach($product as $product)
	@guest
		<div class="col s1"id="separateur">
			<img class="materialboxed" width="450" src="../{{ $product->img }}">
		</div>

		<div class="col s1">

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
			 
			  
			 
		</div>

	</div>
		
		
@else
<div class="col s1"id="separateur">
			<img class="materialboxed" width="450" src="../{{ $product->img }}">
		</div>

		<div class="col s1">

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
			 
			  
			 
		</div>

	</div>
</div>
	<div class="edit">
		<p>
			<a class="btn btn-primary" data-toggle="collapse"
				href="#collapseExample" role="button" aria-expanded="false"
				aria-controls="collapseExample"><i class="small material-icons">border_color</i></a>
		</p>
		<div class="collapse" id="collapseExample">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="panel panel-default">
						<div class="panel-heading">Modifier un article</div>
						<div class="panel-body">
							<form class="form-horizontal" method="POST"
								action="{{ route('product.update', $product->id) }}">
								{{ csrf_field() }} {{ method_field('PUT') }}
								<div class="form-group">
									<label for="name" class="col-md-4 control-label">Name</label>
									<div class="col-md-6">
										<input id="name" type="text" class="form-control" name="name"
											value="{{ $product->name }}" required autofocus>
									</div>
								</div>
								<div class="form-group">
									<label for="description" class="col-md-4 control-label">Description</label>
									<div class="col-md-6">
										<input id="description" type="text" class="form-control"
											name="description" value="{{ $product->description }}"
											required>
									</div>
								</div>
								<div class="form-group">
									<label for="cat" class="col-md-4 control-label">Catégorie</label>
									<div class="col-md-6">
										<input id="cat" type="text" class="form-control"
											name="categorie" value="{{ $product->categorie }}" required>
									</div>
								</div>
								<div class="form-group">
									<label for="price" class="col-md-4 control-label">Prix</label>
									<div class="col-md-6">
										<input id="price" type="text" class="form-control"
											name="price" value="{{ $product->price }}" required>
									</div>
								</div>
								<div class="form-group">
									<div class="col-md-8 col-md-offset-4">
										<button type="submit" class="btn btn-primary">Enregistrer</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
</div>
@endguest
@endforeach
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script type="text/javascript" src=" {{ asset('js/app.js') }} "></script>
<script type="text/javascript" src="js/script.js"></script>
<script src="script.js"></script>
@endsection
