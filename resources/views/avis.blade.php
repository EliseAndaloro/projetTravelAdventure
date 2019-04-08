@extends ('layout')

@section ('content')
<link rel="stylesheet" href="css/avis.css">

<div class="monMenuTropCool">
 <ul class="collapsible popout">
    <li>
      <div class="title collapsible-header"><i class="material-icons">favorite_border</i><p class="titre">Laisse ton avis</p></div>
      <div class="collapsible-body">
        <div class="row">
    <form class="col s12" method="POST" action="{{ route('avis.store') }}">
        {{ csrf_field() }}
      <div class="row">
        <div class="input-field col s6">
          <input name="name" id="first_name" type="text" class="validate">
          <label for="first_name">Nom / Prénom</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">textsms</i>
          <input  name="avis" id="disabled" type="text" class="validate">
          <label for="disabled">Avis</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input name="img" id="password" class="validate">
          <label for="password">Je poste une photo</label>
          <input class="input" type="file" id="file" name="img" multiple>
        </div>
      </div>
    </div>
    <input name="add" type="submit" class="laissezAvis" value="Je poste un avis"></input>
  </form>
  </div>

      </div>
    </li>
  </ul>
</div>

<div class="row" style="width:95%;">

	@foreach($avis as $avis)

<div class="col s12">
<div class="wrap">
<div class="tile" style="background-image: url({{ $avis->img }})">
  <div class="chip">
    <img class="profil" src="img/insta.svg">
    {{ $avis-> name}}
  </div>

  <div class="text">

  <p class="animate-text">" {{ $avis->avis }}"</p>

<div class="dots">
    <span></span>
    <span></span>
    <span></span>
  </div>
  </div>
 </div>
</div>
</div>
 @endforeach
</div>
</div>


<script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
@endsection
