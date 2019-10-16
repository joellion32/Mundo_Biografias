<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mundo de Biografias</title>
    <link rel="shortcut icon" href="https://scontent-mia3-2.xx.fbcdn.net/v/t1.15752-9/42138939_1513143202119687_3313076156533571584_n.png?_nc_cat=101&oh=024407128813fdb123cbd4dfe6a90c52&oe=5C2F75BC" type="image/x-icon">
<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.10/css/mdb.min.css" rel="stylesheet">
<meta name="google-site-verification" content="PViuKarHAoCiNzC3V0F2er6FcWy2O4v95OnumvS6sqQ" />
</head>
<body class="grey lighten-3">
<!--Plugin de Facebook-->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v3.1&appId=188054185183895&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!---------------------->
    
    <!--Main Navigation-->
    <header>

        <!-- Navbar -->
        <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
            <div class="container">

                <!-- Brand -->
                <a class="navbar-brand waves-effect" href="/">
                    <strong style="font-size:30px; text-decoration:bold; font-family:cooper black;">MB</strong>
                </a>

                <!-- Collapse -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Links -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <!-- Left -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link waves-effect" href="/">Inicio
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-effect" href="/">Biografias</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-effect" href="/AcercadeNosotros">Acerca de Nosotros</a>
                        </li>
                    </ul>

                    <!-- Right -->
            <form class="form-inline" action="{{route('blog')}}" method="GET">
            <div class="md-form my-0">
            <i class="fas fa-search" style="color:black;"></i>
			<input class="form-control mr-sm-2" name="name" type="search" placeholder="Buscar" aria-label="Search">
            </div>
            </form>

                </div><!--Cierre de Links-->
            </div>
        </nav>
        <!-- Navbar -->     

     <div>
    @yield('contenido')
    </div>   
      

<!--Footer-->
    <footer class="page-footer text-center font-small mdb-color darken-2 mt-4 wow fadeIn">

        <!--Call to action-->
    <div class="pt-4">
        <a class="btn btn-outline-white" href="#"  style="font-size:20px;" role="button"><i class="fas fa-globe-asia" style="font-size:20px;"></i>  Mundo de Biografias V.1.1
          </a>
        </div>
        <!--/.Call to action-->
    
        <hr class="my-4">
    <p>Siguenos en Nuestras Redes Sociales</p>
        <!-- Social icons -->
        <div class="pb-4">
          <a href="#" target="_blank" style="margin-left:5px;">
            <i class="fab fa-facebook" style="font-size:30px;"></i>
          </a>
    
          <a href="#" target="_blank" style="margin-left:5px;">
            <i class="fab fa-twitter-square" style="font-size:30px;"></i>
          </a>
    
          <a href="#" target="_blank" style="margin-left:5px;">
          <i class="fab fa-instagram" style="font-size:30px;"></i>
          </a>
        </div>
        <!-- Social icons -->
        <!--Copyright-->
        <div class="footer-copyright py-3">
          © 2018 Copyright:<p style="color:white;">MundodeBiografias.es</p> 
                  <!--/.Copyright-->
<a rel="license" href="http://creativecommons.org/licenses/by-nc/4.0/"><img alt="Licencia de Creative Commons" style="border-width:0" src="https://i.creativecommons.org/l/by-nc/4.0/88x31.png" /></a><br />Este obra está bajo una <a rel="license" href="http://creativecommons.org/licenses/by-nc/4.0/">licencia de Creative Commons Reconocimiento-NoComercial 4.0 Internacional</a>.
        </div>
    </footer>
    <!--/.Footer-->

      
<!--Scripts-->
<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.10/js/mdb.min.js"></script>    
    <script>
    // Animations initialization
    new WOW().init();
    </script>
    
  </script>      
</body>
</html>