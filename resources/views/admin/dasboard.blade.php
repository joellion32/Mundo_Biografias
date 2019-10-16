@extends('admin.home')
@section('content')
@include('flash::message')
 <!-- Content Header (Page header) -->
 <section class="content-header">
    <h1>
        <i class="fas fa-tachometer-alt"></i> DASHBOARD
    </h1>
  </section>
<br>
<div class="row">
<div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red">
          <div class="inner">
            <h3>{{$entrada->count()}}</h3>

            <p>Entradas</p>
          </div>
          <div class="icon">
            <i class="fas fa-chart-pie"></i>
          </div>
          <a href="/home" class="small-box-footer">Mas Informacion <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!--Caja 2-->
      <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-yellow">
              <div class="inner">
                <h3>{{$usuario->count()}}</h3>
    
                <p>Usuarios</p>
              </div>
              <div class="icon">
                <i class="fas fa-user"></i>
              </div>
              <a href="/home" class="small-box-footer">Mas Informacion <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!--Cierre de Caja 2-->

          <!--Caja 3-->
      <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-green">
              <div class="inner">
                <h3>{{$mensaje->count()}}</h3>
    
                <p>Mensajes</p>
              </div>
              <div class="icon">
                <i class="fas fa-envelope"></i>
              </div>
              <a href="/home" class="small-box-footer">Mas Informacion <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!--Cierre de Caja 3-->
    </div>
<div class="box">
<div class="box-header">Entradas</div>    
<div class="box-body">  
<table id="example" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Fecha de Creacion</th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($entrada as $entradas)
        <tr>
            <td>{{$entradas->id}}</td>
            <td>{{$entradas->name}}</td>
            <td>{{$entradas->created_at}}</td>
            <td><a href="/show/{{$entradas->id}}" class="btn btn-primary" title="ver"><i class="fas fa-eye"></i></a></td>
            <td><a href="/edit/{{$entradas->id}}" class="btn btn-warning" title="editar"><i class="fas fa-edit"></i></td>
            <td><a href="/delete/{{$entradas->id}}" class="btn btn-danger" title="eliminar" onclick="return confirm('estas seguro que quieres eliminar');"><i class="fas fa-trash-alt"></i></td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>        
</div><!--Cierre del Box-->
@endsection