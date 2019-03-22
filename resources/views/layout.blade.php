<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>App Name - @yield('title')</title>
        <link rel="stylesheet" href=" {{ asset('css/app.css') }} ">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <header>
		<nav class="nav nav-pills nav-fill">
  			<a class="nav-item nav-link " href="#">ACCUEIL</a>
  			<a class="nav-item nav-link" href="#">SEJOUR</a>
  			<a class="nav-item nav-link" href="#">WEEK-END</a>
  			<a class="nav-item nav-link" href="#">LOGO</a>
  			<a class="nav-item nav-link" href="#">RANDONNÉE</a>
  			<a class="nav-item nav-link" href="#">CONTACT</a>
  			<a class="nav-item nav-link" href="#">V</a>
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