@extends ('layout')

@section ('content')
<link rel="stylesheet" href="css/avis.css">

<div class="monMenuTropCool">
 <ul class="collapsible popout">
    <li>
      <div class="title collapsible-header"><i class="material-icons">favorite_border</i><p class="titre">Laisse ton avis</p></div>
      <div class="collapsible-body">
        <div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <input id="first_name" type="text" class="validate">
          <label for="first_name">Nom / Prénom</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">textsms</i>
          <input  id="disabled" type="text" class="validate">
          <label for="disabled">Avis</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="password" class="validate">
          <label for="password">Je poste une photo</label>
          <input class="input" type="file" id="file" name="img" multiple>
        </div>
      </div>
      </div>
    </form>
    <button class="laissezAvis">Je poste mon avis !</button>
  </div>

      </div>
    </li>
  </ul>
</div>

<div class="wrap">
<div class="tile" style="background-image: url(img/sejour1.svg)">
  <div class="chip">
    <img class="profil" src="img/insta.svg" width="5px" height="10px;">
    Jane Doe
  </div>
  <!-- <img src='img/rando2.svg'/> -->
  <div class="text">

  <p class="animate-text">"Trop cool je me suis éclatéTrop cool je me suis éclaté
    Trop cool je me suis éclaté
    Trop cool je me suis éclaté
    Trop cool je me suis éclaté
    Trop cool je me suis éclaté"</p>

<div class="dots">
    <span></span>
    <span></span>
    <span></span>
  </div>
  </div>
 </div>


  <!-- <div class="chip">
    <img src="images/yuna.jpg" alt="Contact Person">
    Jane Doe
  </div> -->
<script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
@endsection
