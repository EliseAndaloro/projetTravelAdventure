@extends ('layout')

@section ('content')
<link rel="stylesheet" href="{{asset('css/categorie.css') }} ">


<div>
	@foreach($products as $product)
	@if ($product->categorie == 'randonne')
	<img class="logoCat fixed-action-btn" src="{{asset('img/randon.svg')}}" width="230px;" height="230px;"">
	@elseif ($product->categorie == 'weekend' )
	<img class="logoCat fixed-action-btn" src="{{asset('img/weekend.svg')}}"width="230px;" height="230px;">
	@elseif($product->categorie == 'sejour')
	<img class="logoCat fixed-action-btn" src="{{asset('img/sej.svg')}}" width="230px;" height="230px;">
	@endif
	@endforeach
	<div class="logoSociaux fixed-action-btn">
	  <a class="btn-floating btn-large">
	    <i class="large material-icons">share</i>
	  </a>
	  <ul>
	    <li><a class="btn-floating"><img class="" src="{{ asset('img/insta.svg') }}"></a></li>
	    <li><a class="btn-floating"><img class="" src="{{ asset('img/facebook.svg') }}"></a></li>
	    <li><a class="btn-floating"><img class="" src="{{ asset('img/twitter.svg') }}"></a></li>
	  </ul>
	</div>
</div>

<div class="b row" style="width:1000px;">

<div class="col">

	@if(isset($user))
	@if($user->is_admin == 1 )
	<div class="add">
		<p>
			<a class="btn-floating btn-large waves-effect waves-light" href="{{ url('/addproduct') }}"><i class="material-icons">add</i></a>
		</p>

	</div>
	@endif
	@endif
	@foreach($products as $product)

<div class="col s4">

			<div class="card" >
				<div class="card-image waves-effect waves-block waves-light">
					<img class="activator" src="{{ asset($product->img) }}">
				</div>
				<div class="card-content">
					<span class="test card-title activator grey-text text-darken-4">{{
						$product->product_name }}<i class="material-icons right">more_vert</i>
					</span>
					<p>

					<a class="waves-effect waves-light btn plus" href="produit/{{ $product->id }}">Plus de détails</a>
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


<script type="text/javascript" src="{{asset('js/script.js')}}"></script>
 @endsection
