<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mundo de Biografias @yield('title')</title>
    <link rel="shortcut icon" href="https://scontent-mia3-2.xx.fbcdn.net/v/t1.15752-9/42138939_1513143202119687_3313076156533571584_n.png?_nc_cat=101&oh=024407128813fdb123cbd4dfe6a90c52&oe=5C2F75BC" type="image/x-icon">
<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.10/css/mdb.min.css" rel="stylesheet">
<!--Google Adense-->
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-2656831040981155",
    enable_page_level_ads: true
  });
</script>
<meta name="google-site-verification" content="PViuKarHAoCiNzC3V0F2er6FcWy2O4v95OnumvS6sqQ" />
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-127111244-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-127111244-1');
</script>

</head>
<body>
<!-- Menu de Navegacion -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
    <div class="container">

      <!-- Brand -->
      <a class="navbar-brand" href="/">
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
          <li class="nav-item active">
            <a class="nav-link" href="/">Inicio
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#biografias"> Biografias</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/AcercadeNosotros">Acerca de Nosotros</a>
          </li>
        </ul>

        <!-- Buscador -->
        <form class="form-inline" action="{{route('blog')}}" method="GET">
          @csrf
            <div class="md-form my-0">
             <i class="fas fa-search" style="color:white;"></i>
			 <input class="form-control mr-sm-2" type="search" name="name" placeholder="Buscar" aria-label="Search">
            </div>
        </form>

      </div>

    </div>
  </nav>
  <!-- Cierre del menu de Navegacion --> 
   <!--Carousel Wrapper-->
   <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">

    <!--Indicators-->
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-1z" data-slide-to="1"></li>
      <li data-target="#carousel-example-1z" data-slide-to="2"></li>
    </ol>
    <!--/.Indicators-->

    <!--Slides-->
    <div class="carousel-inner" role="listbox">

      <!--Primer Slide-->
      <div class="carousel-item active">
        <div class="view" style="background-image: url('https://www.lifeder.com/wp-content/uploads/2016/11/cientificos-mas-famosos.jpg'); background-repeat: no-repeat; background-size: cover; width:100%;">

          <!-- Mask & flexbox options-->
          <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

            <!-- Content -->
            <div class="text-center white-text mx-5 wow fadeIn">
              <h1 class="mb-4">
                <strong>Mundo de Biografias</strong>
              </h1>

              <p>
                <strong>Tu sitio web de biografias</strong>
              </p>

              <p class="mb-4 d-none d-md-block">
                <strong>Es de gran ayuda tener un sitio donde poder encontrar muchos personajes historicos, rapido y sencillo. </strong>
              </p>

            </div>
            <!-- Content -->

          </div>
          <!-- Mask & flexbox options-->

        </div>
      </div>
      <!--/First slide-->

      <!--Segundo Slide-->
      <div class="carousel-item">
        <div class="view" style="background-image: url('https://images2.alphacoders.com/494/thumb-1920-494441.jpg'); background-repeat: no-repeat; background-size: cover;">

          <!-- Mask & flexbox options-->
          <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

            <!-- Content -->
            <div class="text-center white-text mx-5 wow fadeIn">
              <h1 class="mb-4">
                <strong>Mundo de Biografias</strong>
              </h1>

              <p>
                <strong>Tu sitio web de biografias</strong>
              </p>

              <p class="mb-4 d-none d-md-block">
                  <strong>Es de gran ayuda tener un sitio donde poder encontrar muchos personajes historicos, rapido y sencillo. </strong>
              </p>
			  
            </div>
            <!-- Content -->

          </div>
          <!-- Mask & flexbox options-->

        </div>
      </div>
      <!--/Second slide-->

      <!--Tercer slide-->
      <div class="carousel-item">
        <div class="view" style="background-image: url('https://cdn-images-1.medium.com/max/1600/1*e_WA53G6EW9V_r3bssLaAg.jpeg'); background-repeat: no-repeat; background-size: cover;">

          <!-- Mask & flexbox options-->
          <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

            <!-- Content -->
            <div class="text-center white-text mx-5 wow fadeIn">
              <h1 class="mb-4">
                <strong>Mundo de Biografias</strong>
              </h1>

              <p>
                <strong>Tu sitio web de biografias</strong>
              </p>

              <p class="mb-4 d-none d-md-block">
                  <strong>Es de gran ayuda tener un sitio donde poder encontrar muchos personajes historicos, rapido y sencillo. </strong>
              </p>

            </div>
            <!-- Content -->

          </div>
          <!-- Mask & flexbox options-->

        </div>
      </div>
      <!--/Third slide-->

    </div>
    <!--/.Slides-->

    <!--Controls-->
    <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
    <!--/.Controls-->

  </div>
  <!--/.Carousel Wrapper-->

  
  @yield('contenido')  



<!--Pie de la Pagina o Footer-->
<footer class="page-footer text-center font-small mt-4 wow fadeIn">

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






<style>
/*Navbar*/
 @media (min-width: 800px) and (max-width: 850px) {
              .navbar:not(.top-nav-collapse) {
                  background: #1C2331!important;
              }
          }

/* Required height of parents of the Full Page Carousel for proper displaying carousel itself */
html,
body,
.view {
  height: 100%; }

/* Full Page Carousel itself*/
.carousel {
  height: 100%; }
  .carousel .carousel-inner {
    height: 100%; }
    .carousel .carousel-inner .carousel-item,
    .carousel .carousel-inner .active {
      height: 100%; }

/* Navbar animation */
.navbar {
  background-color: rgba(0, 0, 0, 0.2); }

.top-nav-collapse {
  background-color: #1C2331; }

/* Adding color to the Navbar on mobile */
@media only screen and (max-width: 768px) {
  .navbar {
    background-color: #1C2331; } }

/* Footer color for sake of consistency with Navbar */
.page-footer {
  background-color: #1C2331; }
    
</style>



<!--Scripts-->
<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.10/js/mdb.min.js"></script>    
<!-- Initializations -->
<script type="text/javascript">
    // Animations initialization
    new WOW().init();
    
  </script>
  
</body>
</html>