@extends('admin.home')
@section('content')
<br>
<div class="col-md-8" style="margin-left:150px;">
    <div class="box">
    <div class="box-header">
    <h3 class="box-title"><i class="fas fa-eye"></i> Ver Entrada</h3> 
    </div>

        <div class="box-body">
        <b>Nombre:</b><p>{{$entrada->name}}</p> 
        <b>Slug:</b><p>{{$entrada->slug}}</p>
        <b>Url de la Imagen:</b><p>{{$entrada->file}}</p>
        <b>Orden Alfabetico:</b><p>{{$entrada->letra}}</p>
        <b>Parrafo1:</b><span style="text-align:justify;"><p>{!!$entrada->body!!}</p></span>
        <br> 
        <center><a href="/home" class="btn btn-primary">Volver</a></center>
        </div>
        </div>
    </div>     
@endsection