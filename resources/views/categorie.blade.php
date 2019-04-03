@extends ('layout')

@section ('content')
<link rel="stylesheet" href="css/categorie.css">
@foreach($products as $product)
<div class="row">
  <div class="col s3 offset-s3">
		<div class="contenu">
			<div class="card">
		    <div class="card-image waves-effect waves-block waves-light">
		      <img class="activator" src="img/desertTravel.jpg">
		    </div>
		    <div class="card-content">
		      <span class="card-title activator grey-text text-darken-4">{{ $product->name }}<i class="material-icons right">more_vert</i></span>
		      <p><a href="#">En savoir plus</a></p>
		    </div>
		    <div class="card-reveal">
		      <span class="card-title grey-text text-darken-4">{{ $product->name }}<i class="material-icons right">close</i></span>
		      <p>{{ $product->description }} </p>
		    </div>
		  </div>
		</div>
	</div>
@endforeach

@endsection