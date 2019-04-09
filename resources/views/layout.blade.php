<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Travel Adventure</title>
        <link rel="stylesheet" href=" {{ asset('css/app.css') }} ">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
 		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link rel="stylesheet" href="{{ asset('css/style.css')}}">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </head>
    <body>
        <header>
		<nav class="header nav nav-pills nav-fill" id="main">
  			<a class="nav-item nav-link " href="/projetTravelAdventure/public/">ACCUEIL</a>
  			<a class="nav-item nav-link" href="{{ url('/randonne') }}">RANDONNÉE</a>
  			<a class="nav-item nav-link" href="{{ url('/sejour') }}">SEJOUR</a>
  			<a class="nav-item nav-link" href="{{ url('/avis') }}" ><img src="{{ asset('img/LOGO.svg') }}" id="logo"></a>
  			<a class="nav-item nav-link" href="{{ url('/weekend') }}">WEEK-END</a>
  			
  			
  			 @guest
  			<a class="nav-item nav-link" href="{{ url('/compte') }}">MON COMPTE</a>
  			@else
  				 <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
            @endguest
  			<a class="openbtn nav-item nav-link" onclick="openNav()"><i class="small material-icons">card_travel</i></a>
		</nav>

    <div id="mySidepanel" class="sidepanel">
          <a href="#" class="monpanier">MON PANIER</a>
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
      <div>
      <div class="card" >
				<div class="card-image waves-effect waves-block waves-light">
					<img class="activator" src="{{ asset('img/rando1.svg') }}">
				</div>
				<div class="card-content">
					<span class="card-title activator grey-text text-darken-4">test<i class="material-icons right">more_vert</i>
					</span>

				</div>
				<div class="card-reveal">
					<span class="card-title grey-text text-darken-4">test<i class="material-icons right">close</i>
					</span>
					<p>blablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablabla</p>
				</div>
			</div>

      </div>
      <a class="validerPanier" name="button" href="{{ url('/cart') }}">Je Commande !</a>


    </div>

	</header>

        <div>
            @yield('content')

		</div>





		<footer>
			<span id="copyright">© 2019 Mémé & Lisnou</span>

            <div class="icons">
            	<img src="{{ asset('img/facebook.svg') }}" class="reseau">
            	<img src="{{ asset('img/twitter.svg') }}" class="reseau">
            	<img src="{{ asset('img/insta.svg') }}" class="reseau">
           </div>
		</footer>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <script type="text/javascript" src=" {{ asset('js/app.js') }} "></script>
        <script type="text/javascript" src="{{ asset('js/script.js') }}"></script>

      </body>
</html>
