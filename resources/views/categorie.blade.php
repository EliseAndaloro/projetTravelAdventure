@extends ('layout') 

@section ('content')
<link rel="stylesheet" href="css/categorie.css">

<div>coucou</div>

<div class="row" style="width:1000px;">
<div class="col">
	@foreach($products as $product)
	
<div class="col s4">
		
			<div class="card" >
				<div class="card-image waves-effect waves-block waves-light">
					<img class="activator" src="img/desertTravel.jpg">
				</div>
				<div class="card-content">
					<span class="card-title activator grey-text text-darken-4">{{
						$product->name }}<i class="material-icons right">more_vert</i>
					</span>
					<p>
						
					<a class="waves-effect waves-light btn plus" href="produit/{{ $product->id }}">Plus de détails</a>
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
