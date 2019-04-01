<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>App Name - @yield('title')</title>
        <link rel="stylesheet" href=" {{ asset('css/app.css') }} ">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <header>
		<nav class="nav nav-pills nav-fill">
  			<a class="nav-item nav-link " href="#">ACCUEIL</a>
  			<a class="nav-item nav-link" href="#">SEJOUR</a>
  			<a class="nav-item nav-link" href="#">WEEK-END</a>
  			<a class="nav-item nav-link" href="#"><img src="img/LOGO.svg"></a>
  			<a class="nav-item nav-link" href="#">RANDONNÉE</a>
  			<a class="nav-item nav-link" href="#">CONTACT</a>
  			<a class="nav-item nav-link" href="#"><i class="small material-icons">card_travel</i></a>
		</nav>
	</header>
        
        <div>
            @yield('content')
        </div>
        
        <script type="text/javascript" src=" {{ asset('js/app.js') }} "></script>
        
    </body>
    <footer>
    	FOOTER
    </footer>
</html>