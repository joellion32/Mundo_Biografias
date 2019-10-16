@extends('layouts.web')

@section('contenido')
<!--Panel de Biografias-->
<main>
    <br>
    <div class="container">
<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark indigo mb-4">

    <!-- Navbar brand -->
    <a class="navbar-brand" href="#"><i class="fas fa-sort-alpha-up"></i> Busqueda por Abecedario</a>
  
    <!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
  
      <form class="form-inline ml-auto" action="{{route('buscar')}}" method="GET">
        <div class="md-form my-0">
            <select class="browser-default custom-select" name="letra" style="cursor:pointer;">
                <option disabled>Buscar Por Abecedario</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
                <option value="E">E</option>
                <option value="F">F</option>
                <option value="G">G</option>
                <option value="H">H</option>
                <option value="I">I</option>
                <option value="J">J</option>
                <option value="K">K</option>
                <option value="L">L</option>
                <option value="M">M</option>
                <option value="N">N</option>
                <option value="Ñ">Ñ</option>
                <option value="O">O</option>
                <option value="P">P</option>
                <option value="Q">Q</option>
                <option value="R">R</option>
                <option value="S">S</option>
                <option value="T">T</option>
                <option value="U">U</option>
                <option value="V">V</option>
                <option value="W">W</option>
                <option value="Y">Y</option>
                <option value="Z">Z</option>
              </select>
        </div>
        <button type="submit" class="btn btn-outline-white btn-md my-0 ml-sm-2" type="submit">Buscar</button>
      </form>
  
    </div>
    <!-- Collapsible content -->
  
  </nav>
  <!--/.Navbar-->

      <hr class="my-5">

      <!--Section: Not enough-->
      <section id="biografias">

        <h2 class="my-5 h3 text-center">Resultados de la Busqueda</h2>
@if(count($buscar))
        <!--First row-->
        <div class="row features-small mb-5 mt-3 wow fadeIn">
        <!--Grid column-->
        @foreach ($buscar as $buscadas)
        <div class="col-lg-3 col-md-6 mb-4">

            <!--Card-->
            <div class="card">

              <!--Card image-->
              <div class="view overlay">
                <img src="{{$buscadas->file}}" class="card-img-top" alt="">
                <a href="/vista{{$buscadas->slug}}">
                  <div class="mask rgba-white-slight" ></div>
                </a>
              </div>
              <!--Card image-->

              <!--Card content-->
              <div class="card-body text-center">
                <!--Category & Title-->
                <a href="/vista{{$buscadas->slug}}" style="color:black;">
                  <h5>{{$buscadas->name}}</h5>
                </a>

              </div>
              <!--Card content-->
            </div>
            <!--Card-->
          </div>
          <!--Grid column-->
          @endforeach
          @else
          <center><h4>No hay Biografias relacionadas</h4></center>
          @endif
		</div><!--Cierre del Row-->
        {{ $buscar->links() }}  
		  
      </section>
      <!--Section: Not enough-->
	  </div><!--cierre del container-->
  </main>
  <!--Cierre de Panel de Biografias-->
    
@endsection