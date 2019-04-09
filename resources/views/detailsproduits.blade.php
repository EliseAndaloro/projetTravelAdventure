@extends ('layout')

@section ('content')
<link rel="stylesheet" href="{{ asset('css/ficheproduit.css')}}">
<div id="body">
<div class="diagonale"></div>
<div class="contenu">

	<div class="row" style="z-index:2;">
	@foreach($product as $product)
		<div class="col s1"id="separateur">
			<img class="materialboxed" width="450" src="../{{ $product->img }}">
		</div>

		<div class="col s1">

			<h5 class="font1">{{ $product->product_name }}</h5>
			<div id="price">{{ $product->price }} €</div>
			<p class="font">{{ $product->description }}
			</p>
			<form method="get" action="{{ action('CartController@create') }}">
			<label>Choisissez le nombre de personnes : </label> 
			<select class="browser-default" name="nbpers" id="nbpers">
				<option class="taille" value="">Plus on est de fous, plus on rit :)</option>
				<option class="taille" value="1">1 personne</option>
				<option class="taille" value="2">2 personnes</option>
				<option class="taille" value="3">3 personnes</option>
				<option class="taille" value="4">4 personnes</option>
				<option class="taille" value="5">5 personnes</option>
				<option class="taille" value="6">6 personnes</option>
			</select>
			
				<input id="prodId" name="prodId" type="hidden" value="{{ $product->id }}">
			 	<input type="submit" class="basket" value="Je Pars en voyage zge">
			</form>
			 
			  
			 
		</div>

	</div>
@if(isset($user))		
@if($user->is_admin == 1 )
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
@endif
@endif
	</div>
	


@endforeach
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script type="text/javascript" src=" {{ asset('js/app.js') }} "></script>
<script type="text/javascript" src="js/script.js"></script>
<script src="script.js"></script>
@endsection
