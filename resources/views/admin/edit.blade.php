@extends('admin.home')
@section('content')
<div class="col-md-8" style="margin-left:175px;">
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif    
<div class="box box-warning">
    <div class="box-header with-border">
      <h3 class="box-title"><i class="fas fa-sync-alt"></i> Actualizar Entrada</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <form role="form" action="/entradas/{{$entrada->id}}" method="POST">
       @method('PUT')
        @csrf
        <!-- text input -->
        <div class="form-group">
          <label>Nombre</label>
          <input type="text" name="name" class="form-control" placeholder="Nombre" value="{{$entrada->name}}">
        </div>
        
        <div class="form-group">
          <label>Slug</label>
          <input type="text" name="slug" class="form-control" placeholder="Slug" value="{{$entrada->slug}}">
        </div>

            <div class="form-group">
            <label>URL</label>
            <input type="text" name="file" class="form-control" placeholder="Url de Imagen" value="{{$entrada->file}}">
          </div>
          
          <div class="form-group">
            <label>Letra Para Busqueda</label>
            <input type="text" name="letra" class="form-control" value="{{$entrada->letra}}">
          </div>

        <!-- textarea -->
        <div class="form-group">
          <label>Contenido</label>
          <textarea id="parrafo1" name="parrafo1" class="form-control" rows="4" placeholder="contenido">{{$entrada->body}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Actualizar</button>
      </form>
    </div>
    <!-- /.box-body -->
  </div>
@endsection