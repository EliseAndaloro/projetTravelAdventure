@extends ('layout')

@section ('content')
<link rel="stylesheet" href="css/sejour.css">
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
<!-- 	<div class="col s3"> -->
<!-- 		<div class="contenu"> -->
<!-- 			<div class="card"> -->
<!-- 		    <div class="card-image waves-effect waves-block waves-light"> -->
<!-- 		      <img class="activator" src="img/desertTravel.jpg"> -->
<!-- 		    </div> -->
<!-- 		    <div class="card-content"> -->
<!-- 		      <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span> -->
<!-- 		      <p><a href="#">This is a link</a></p> -->
<!-- 		    </div> -->
<!-- 		    <div class="card-reveal"> -->
<!-- 		      <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span> -->
<!-- 		      <p>Here is some more information about this product that is only revealed once clicked on.</p> -->
<!-- 		    </div> -->
<!-- 		  </div> -->
<!-- 		</div> -->
<!-- 	</div> -->
<!-- 	<div class="col s3"> -->
<!-- 		<div class="contenu"> -->
<!-- 			<div class="card"> -->
<!-- 		    <div class="card-image waves-effect waves-block waves-light"> -->
<!-- 		      <img class="activator" src="img/desertTravel.jpg"> -->
<!-- 		    </div> -->
<!-- 		    <div class="card-content"> -->
<!-- 		      <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span> -->
<!-- 		      <p><a href="#">This is a link</a></p> -->
<!-- 		    </div> -->
<!-- 		    <div class="card-reveal"> -->
<!-- 		      <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span> -->
<!-- 		      <p>Here is some more information about this product that is only revealed once clicked on.</p> -->
<!-- 		    </div> -->
<!-- 		  </div> -->
<!-- 		</div> -->
<!-- 	</div> -->
<!-- 	<div class="col s3 offset-s3"> -->
<!-- 		<div class="contenu"> -->
<!-- 			<div class="card"> -->
<!-- 		    <div class="card-image waves-effect waves-block waves-light"> -->
<!-- 		      <img class="activator" src="img/desertTravel.jpg"> -->
<!-- 		    </div> -->
<!-- 		    <div class="card-content"> -->
<!-- 		      <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span> -->
<!-- 		      <p><a href="#">This is a link</a></p> -->
<!-- 		    </div> -->
<!-- 		    <div class="card-reveal"> -->
<!-- 		      <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span> -->
<!-- 		      <p>Here is some more information about this product that is only revealed once clicked on.</p> -->
<!-- 		    </div> -->
<!-- 		  </div> -->
<!-- 		</div> -->
<!-- 	</div> -->
<!-- 	<div class="col s3"> -->
<!-- 		<div class="contenu"> -->
<!-- 			<div class="card"> -->
<!-- 		    <div class="card-image waves-effect waves-block waves-light"> -->
<!-- 		      <img class="activator" src="img/desertTravel.jpg"> -->
<!-- 		    </div> -->
<!-- 		    <div class="card-content"> -->
<!-- 		      <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span> -->
<!-- 		      <p><a href="#">This is a link</a></p> -->
<!-- 		    </div> -->
<!-- 		    <div class="card-reveal"> -->
<!-- 		      <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span> -->
<!-- 		      <p>Here is some more information about this product that is only revealed once clicked on.</p> -->
<!-- 		    </div> -->
<!-- 		  </div> -->
<!-- 		</div> -->
<!-- 	</div> -->
<!-- 	<div class="col s3"> -->
<!-- 		<div class="contenu"> -->
<!-- 			<div class="card"> -->
<!-- 		    <div class="card-image waves-effect waves-block waves-light"> -->
<!-- 		      <img class="activator" src="img/desertTravel.jpg"> -->
<!-- 		    </div> -->
<!-- 		    <div class="card-content"> -->
<!-- 		      <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span> -->
<!-- 		      <p><a href="#">This is a link</a></p> -->
<!-- 		    </div> -->
<!-- 		    <div class="card-reveal"> -->
<!-- 		      <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span> -->
<!-- 		      <p>Here is some more information about this product that is only revealed once clicked on.</p> -->
<!-- 		    </div> -->
<!-- 		  </div> -->
<!-- 		</div> -->
<!-- 	</div> -->
</div>



<!-- <div class="contenu">
<div class="card-deck">
	<div class="card">
		<img src="img/facebook.svg" class="card-img-top" alt="...">
		<div class="card-body">
			<h5 class="card-title">Card title</h5>
			<p class="card-text">This is a longer card with supporting text below
				as a natural lead-in to additional content. This content is a little
				bit longer.</p>
			<p class="card-text">
				<small class="text-muted">Last updated 3 mins ago</small>
			</p>
		</div>
	</div>
	<div class="card">
		<img src="img/facebook.svg" class="card-img-top" alt="...">
		<div class="card-body">
			<h5 class="card-title">Card title</h5>
			<p class="card-text">This card has supporting text below as a natural
				lead-in to additional content.</p>
			<p class="card-text">
				<small class="text-muted">Last updated 3 mins ago</small>
			</p>
		</div>
	</div>
	<div class="card">
		<img src="img/facebook.svg" class="card-img-top" alt="...">
		<div class="card-body">
			<h5 class="card-title">Card title</h5>
			<p class="card-text">This is a wider card with supporting text below
				as a natural lead-in to additional content. This card has even
				longer content than the first to show that equal height action.</p>
			<p class="card-text">
				<small class="text-muted">Last updated 3 mins ago</small>
			</p>
		</div>
	</div>
</div>
</div> -->

@endsection
