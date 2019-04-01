<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>App Name - @yield('title')</title>
        <link rel="stylesheet" href=" {{ asset('css/app.css') }} ">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link rel="stylesheet" href="css/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </head>
    <body>
        <header>
		<nav class="header nav nav-pills nav-fill">
  			<a class="nav-item nav-link " href="#">ACCUEIL</a>
  			<a class="nav-item nav-link" href="#">SEJOUR</a>
  			<a class="nav-item nav-link" href="#">WEEK-END</a>
  			<a class="nav-item nav-link" href="#" ><img src="img/LOGO.svg" id="logo"></a>
  			<a class="nav-item nav-link" href="#">RANDONNÉE</a>
  			<a class="nav-item nav-link" href="#">CONTACT</a>
  			<a class="nav-item nav-link" href="#"><i class="small material-icons">card_travel</i></a>
		</nav>

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
