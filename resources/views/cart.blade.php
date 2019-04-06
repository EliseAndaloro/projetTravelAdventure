@extends ('layout')

@section ('content')
<link rel="stylesheet" href="{{ asset('css/cart.css') }}">
<div class="row">
@foreach ($cart->slice(0,1) as $cart)
   <div class="col s4">
     <div class="card1 card-panel">
       <img src="{{ asset('img/rando1.svg') }}" alt="">
       <span class="info"> {{ $cart->users.name }}
       </span>
       <span class="info2">{{ $cart->price }}
       </span>
       <br>
       <span class="info"> {{ $cart->price }}
       </span>
       <span class="info2"> {{ $cart->price }}
       </span>
       <br>
       <span class="info"> Nombre de personne :
       </span>
       <span class="info2"> {{ $cart->price }}
       </span>
       <div class="ligne">
       </div>
       <span class="total"> Total à régler
       </span>
       <span class="prixtotal"> Total
       </span>
     </div>
   </div>
   <div class="col s8">

     <div class="card2 card-panel">
        <span class="livraison">
          addresse livraison
        </span>
        <br>
        
        <p class="userInfo">
          Nom prenom 
        </p>
        <br>
        <p class="userInfo">
          adresse {{ $cart->address }}
        </p>
        <br>
        <p class="userInfo">
          ville {{ $cart->price }}
        </p>
        <br>
        <p class="userInfo">
          pays {{ $cart->price }}
        </p>
@endforeach
        <div class="ligne2">
        </div>
        <span class="livraison">
          Nous acceptons
        </span>
        <img class="logoPayer"src="{{ asset('img/payer1.png') }}" alt="">
        <button class="commander">commander</button>
      </div>
   </div>
 </div>
@endsection
