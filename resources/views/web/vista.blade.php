@extends('layouts.show')
@section('contenido')  
<!--Informacion Principal-->
<!--Main layout-->
<main class="mt-5 pt-5">
<div class="container">
<!--Section: Post-->
<section class="mt-4">
<!--Grid row-->
<div class="row">
<!--Grid column-->
<div class="col-md-8 mb-4">
<!--Card-->
<div class="card mb-4 wow fadeIn">

        <!--Card content-->
        <div class="card-body">

            <center><p class="h5 my-3">{{$entrada->name}}</p>
            <img src="{{$entrada->file}}" style="width: 190px; height: 200px; border-radius:2px;"></center>
            <br>
            <span style="text-align:justify;"><p>{!!$entrada->body!!}</p></span>
            <a href="/descarga{{$entrada->id}}" class="btn btn-danger"><i class="fas fa-file-pdf"></i> Descargar PDF</a>
        </div>
    </div>
    <!--/.Card-->
<!--Comments-->
<div class="card card-comments mb-3 wow fadeIn">
<div class="card-header font-weight-bold">Dejanos Tu Comentario</div>
<div class="card-body">
    <div class="fb-comments" data-href="https://www.facebook.com/joelagustin.polanco" data-numposts="5"></div>
<!--Para los comentarios-->
</div>
</div>
<!--/.Comments-->    
</div><!--Ciere de la columna-->

<!--COlumna de Publicidad y Formulario de Dudas-->
 <!--Grid column-->
 <div class="col-md-4 mb-4">     
<!--Card: Jumbotron-->
<div class="card gradient-custom mb-4 wow">
<div class="card-header">Publicidad</div>    
<!-- Content -->
<div class="card-body">
<script data-cfasync='false' type='text/javascript' src='//p322742.clksite.com/adServe/banners?tid=322742_628921_6'></script>

</div>
<!-- Content -->
</div>
<!--Card: Jumbotron-->

<!----Formulario de Dudas---------->
  <!--Card : Dynamic content wrapper-->
  <div class="card mb-4 text-center wow fadeIn">

        <div class="card-header">Twets</div>

        <!--Card content-->
        <div class="card-body">
        <a class="twitter-timeline" href="https://twitter.com/MBiografias?ref_src=twsrc%5Etfw">Tweets by MBiografias</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

        </div>

    </div>
    <!--/.Card : Dynamic content wrapper-->

</div><!--Cierre del Row-->
</section><!--Cierre de la Seccion-->    
</div><!--Cierre del Container-->    
</main>    
@endsection 
