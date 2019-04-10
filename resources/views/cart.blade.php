@extends ('layout')

@section ('content')
<link rel="stylesheet" href="{{ asset('css/cart.css') }}">
<div class="row">

   <div class="col s4">
     <div class="card1 card-panel">
       <img src="../{{ $cart->img }}" alt="">
       <span class="info"> {{ $cart->product_name }}
       </span>
       <span class="info2">
       </span>
       <br>
       <span class="info"> Date de départ : 
       </span>
       <span class="info2"> {{ $cart->trip_start }}
       </span>
       <br>
       <span class="info"> Prix/personne:
       </span>
       <span class="info2"> {{ $cart->price }} &euro;
       </span>
       <br>
       <span class="info"> Nombre de personne :
       </span>
       <span class="info2"> {{ $cart->nbpers }}
       </span>
       <div class="ligne">
       </div>
       <span class="total"> Total à régler:
       </span>
       <span class="prixtotal"> {{ $cart->total }} &euro;
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
         {{ $cart->name }} {{ $cart->firstname }} 
        </p>
        <br>
        <p class="userInfo">
          adresse: {{ $cart->address }}
        </p>
        <br>
        <p class="userInfo">
          ville: {{ $cart->city }}
        </p>
        <br>
        <p class="userInfo">
          pays: {{ $cart->country }}
        </p>

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
