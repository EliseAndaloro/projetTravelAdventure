@extends ('layout')

@section ('content')
<link rel="stylesheet" href="css/cart.css">
<div class="row">
   <div class="col s4">
     <div class="card1 card-panel">
       <img src="img/rando1.svg" alt="">
       <span class="info"> prix
       </span>
       <span class="info2"> prix
       </span>
       <br>
       <span class="info"> name
       </span>
       <span class="info2"> prix
       </span>
       <br>
       <span class="info"> Nombre de personne :
       </span>
       <span class="info2"> prix
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
          adresse
        </p>
        <br>
        <p class="userInfo">
          ville
        </p>
        <br>
        <p class="userInfo">
          pays
        </p>
        <div class="ligne2">
        </div>
        <span class="livraison">
          Nous acceptons
        </span>
        <img class="logoPayer"src="img/payer1.png" alt="">
        <button class="commander">commander</button>
      </div>
   </div>
 </div>
@endsection
