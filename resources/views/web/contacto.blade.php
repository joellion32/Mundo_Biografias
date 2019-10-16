@extends('layouts.show')
@section('contenido')
<br><br>
@include('flash::message')
<div class="container">
<div class="col-md-12">
<!--Card-->
<div class="card mb-4 wow fadeIn">  
 <!-- Section: Blog v.2 -->
<section class="text-center my-5">
    <!-- Titulo  -->
    <h2 class="h1-responsive font-weight-bold my-5">¿Que es Mundo de Biografias?</h2>
    <!-- Section description -->
    <p class="dark-grey-text w-responsive mx-auto mb-5">Mundo de Biografías, es un sitio web  donde puedes encontrar miles de biografías de personajes famosos, históricos y actuales. En la barra de búsquedas puedes escribir el nombre y apellido del personaje para encontrar rápidamente la biografía que buscas.</p>
  
    <h2 class="h1-responsive font-weight-bold my-5">Creadores</h2>
    <div class="ml-12">
    <!-- Grid row para los Administradores-->
    <div class="row">
    <div style="margin-left:120px;"></div>
        <!-- Grid column -->
      <div class="col-lg-4 col-md-12 mb-lg-0  mb-4">
  
        <!-- Card -->
<div class="card">

  <!-- Card image -->
  <div class="view overlay">
    <img class="card-img-top" style="width:250px; margin:auto;" src="{{ asset('img/joel.png') }}" alt="Card image cap">
    <a href="#!">
      <div class="mask rgba-white-slight"></div>
    </a>
  </div>

  <!-- Card content -->
  <div class="card-body">

    <!-- Title -->
	<a href="#" class="pink-text"><h6 class="font-weight-bold mb-3"><i class="fa fa-desktop"></i> Desarrollador</h6></a>
    <h4 class="font-weight-bold mb-3"><strong>Joel A. Toribio</strong></h4>
    <!-- Text -->
    <p class="dark-grey-text">Desarrollador de Aplicaciones Web y Moviles, Emprededor, Actualmente estudiando la carrera de Lic. en Sistemas e Informacion en la Universidad Tecnologica de Santo Domingo.</p>
        <!-- Read more button -->
        <a href="https://www.facebook.com/joelagustin.polanco" class="btn btn-indigo" target="_blank"><i class="fab fa-facebook-f"></i></a>
        <a href="https://www.instagram.com/joelagustinpolanco/?hl=es-la" class="btn deep-purple"  target="_blank"><i class="fab fa-instagram"></i></a>

  </div>

</div>
<!-- Card -->
  
      </div>
      <!-- Grid column -->
  
      <!-- Grid column -->
      <div class="col-lg-4 col-md-6 mb-md-0 mb-4">
  <div class="card">

  <!-- Card image -->
  <div class="view overlay">
    <img class="card-img-top" style="width:250px; margin:auto;" src="{{ asset('img/neta.png') }}" alt="Card image cap">
    <a href="#!">
      <div class="mask rgba-white-slight"></div>
    </a>
  </div>

  <!-- Card content -->
  <div class="card-body">

    <!-- Title -->
	<a href="#" class="deep-orange-text"><h6 class="font-weight-bold mb-3"><i class="fa fa-desktop"></i> Desarrollador</h6></a>
    <h4 class="font-weight-bold mb-3"><strong>Neftali Guerrero</strong></h4>
    <!-- Text -->
    <p class="dark-grey-text">Desarrollador de Aplicaciones Web, Emprededor, Actualmente estudiando la carrera de Lic. en Sistemas e Informacion en la Universidad del Caribe en Santo Domingo.</p>
        <!-- Read more button -->
        <a href="https://www.facebook.com/neta.el1" class="btn btn-indigo" target="_blank"><i class="fab fa-facebook-f"></i></a>
        <a href="https://www.instagram.com/el.neta/?hl=es-la" class="btn deep-purple"  target="_blank"><i class="fab fa-instagram"></i></a>

  </div>

</div>
<!-- Card -->
       
      
      </div>
      <!-- Grid column -->
    <div style="margin-left:100px;"></div>
    </div><!--Cierre de la Fila-->
</div><!--Cierre de Columna-->
  
<div class="row">
<div class="col-md-12">
<!-- Section: Contact v.2 -->
<section class="my-5">

        <!-- Section heading -->
        <h2 class="h1-responsive font-weight-bold text-center my-5">Contactanos</h2>
        <!-- Section description -->
        <p class="text-center w-responsive mx-auto mb-5">Ademas de Ofrecerte Servicios con la mayor facilidad para tu busqueda de informacion tambien ofrecemos servicios para crear tu pagina o aplicacion web.</p>
      
        <!-- Grid row -->
        <div class="row">
      
          <!-- Grid column -->
          <div class="col-md-6 mb-md-0 mb-5 ml-5">
      
            <form action="/enviar" method="POST">
                @csrf
              <!-- Grid row -->
              <div class="row">
      
                <!-- Grid column -->
                <div class="col-md-6">
                  <div class="md-form mb-0">
                    <input type="text" id="contact-name" class="form-control" name="nombre" required>
                    <label for="contact-name" class="">Nombre</label>
                  </div>
                </div>
                <!-- Grid column -->
      
                <!-- Grid column -->
                <div class="col-md-6">
                  <div class="md-form mb-0">
                    <input type="text" id="contact-email" class="form-control" name="correo" required>
                    <label for="contact-email" class="">Correo</label>
                  </div>
                </div>
                <!-- Grid column -->
      
              </div>
              <!-- Grid row -->
      
              <!-- Grid row -->
              <div class="row">
      
                <!-- Grid column -->
                <div class="col-md-12">
                  <div class="md-form mb-0">
                    <input type="text" id="contact-Subject" class="form-control" name="telefono" required>
                    <label for="contact-Subject" class="">Telefono</label>
                  </div>
                </div>
                <!-- Grid column -->
      
              </div>
              <!-- Grid row -->
      
              <!-- Grid row -->
              <div class="row">
      
                <!-- Grid column -->
                <div class="col-md-8">
                  <div class="md-form">
                    <textarea type="text" id="contact-message" class="form-control md-textarea" rows="3" name="comentario" required></textarea>
                    <label for="contact-message">Mensaje</label>
                  </div>
                </div>
                <!-- Grid column -->
      
              </div>
              <!-- Grid row -->
              <div class="text-center text-md-left">
                    <button type="submit" class="btn btn-primary btn-md">Enviar</button>
                  </div>
            </form>
      
          </div>
          <!-- Grid column -->
      
          <!-- Grid column -->
          <div class="col-md-3 text-center">
            <ul class="list-unstyled mb-0">
              <li>
                <i class="fa fa-map-marker fa-2x blue-text"></i>
                <p>San Pedro de Macoris, RD</p>
              </li>
              <li>
                <i class="fa fa-phone fa-2x mt-4 blue-text"></i>
                <p>+1 809-512-2411</p>
              </li>
              <li>
                <i class="fa fa-envelope fa-2x mt-4 blue-text"></i>
                <p class="mb-0">Mundodebiografias@gmail.com</p>
              </li>
            </ul>
          </div>
          <!-- Grid column -->
      
        </div>
        <!-- Grid row -->
      
      </section>
      <!-- Section: Contact v.2 -->    
</div>        
</div>

  </section>
  <!-- Section: Blog v.2 -->
</div><!--Cierre de la Card-->
</div><!--cIERRE DE LA COLUMNA-->
</div><!--cIERRE DEL cONTAINER-->
@endsection