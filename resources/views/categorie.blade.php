@extends ('layout') 

@section ('content')
<link rel="stylesheet" href="css/categorie.css">


<div class="container">
<div class="row">

	<div class="col s3">coucou</div>
	@foreach($products as $product)
	<div class="col s4 ">

		
			<div class="card" id="carte">
				<div class="card-image waves-effect waves-block waves-light">
					<img class="activator" src="img/desertTravel.jpg">
				</div>
				<div class="card-content">
					<span class="card-title activator grey-text text-darken-4">{{
						$product->name }}<i class="material-icons right">more_vert</i>
					</span>
					<p>
						<a href="#">En savoir plus</a>
					</p>
				</div>
				<div class="card-reveal">
					<span class="card-title grey-text text-darken-4">{{ $product->name
						}}<i class="material-icons right">close</i>
					</span>
					<p>{{ $product->description }}</p>
				</div>
			</div>
		

	</div>
@endforeach
</div>

</div>

 @endsection
