<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Travel Adventure</title>
        <link rel="stylesheet" href=" {{ asset('css/app.css') }} ">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
 		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link rel="stylesheet" href="css/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </head>
    <body>
        <header>
		<nav class="header nav nav-pills nav-fill" id="main">
  			<a class="nav-item nav-link " href="/projetTravelAdventure/public/">ACCUEIL</a>
  			<a class="nav-item nav-link" href="sejour">SEJOUR</a>
  			<a class="nav-item nav-link" href="weekend">WEEK-END</a>
  			<a class="nav-item nav-link" href="" ><img src="img/LOGO.svg" id="logo"></a>
  			<a class="nav-item nav-link" href="randonne">RANDONNÉE</a>
  			 @guest
  			<a class="nav-item nav-link" href="compte">MON COMPTE</a>
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
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
      <a href="#" class="monpanier">MON PANIER</a>

        <a class="connexion waves-effect waves-light btn-small">connexion</a>
        <a class="inscription waves-effect waves-light btn-small">inscription</a>
    </div>

	</header>

        <div>
            @yield('content')
        </div>




        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <script type="text/javascript" src=" {{ asset('js/app.js') }} "></script>
        <script type="text/javascript" src="js/script.js"></script>
        <script src="script.js"></script>
    </body>

        <footer class="page-footer" id="footer_content">
          <div class="footer-copyright">
            <div class="container">
            <span class="footer_color">© 2019 Mémé & Lisnou</span>

            <div class="grey-text text-lighten-4 right" href="#">
            	<img src="img/facebook.svg" class="reseau">
            	<img src="img/twitter.svg" class="reseau">
            	<img src="img/insta.svg" class="reseau">
            </div>
            </div>
          </div>
        </footer>

</html>
