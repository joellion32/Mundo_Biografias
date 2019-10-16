@extends('admin.home')
@section('content')
<!-- Main content -->
<section class="content">
        <div class="row">
          <div class="col-md-3">
            <a href="/correo" class="btn btn-primary btn-block margin-bottom">Volver</a>
  
            <div class="box box-solid">
              <div class="box-header with-border">
                <h3 class="box-title">Mensajes</h3>
  
                <div class="box-tools">
                  <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                  </button>
                </div>
              </div>
              <div class="box-body no-padding">
                <ul class="nav nav-pills nav-stacked">
                  <li class="active"><a href="/correo"><i class="fa fa-inbox"></i> Recibidos
                    <span class="label label-primary pull-right">{{$notificacion->count()}}</span></a></li>
                </ul>
              </div>
              <!-- /.box-body -->
            </div>
          </div>
<!-- /.col -->
<div class="col-md-9">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Leer Mensaje</h3>

            <div class="box-tools pull-right">
              <a href="#" class="btn btn-box-tool" data-toggle="tooltip" title="Previous"><i class="fa fa-chevron-left"></i></a>
              <a href="#" class="btn btn-box-tool" data-toggle="tooltip" title="Next"><i class="fa fa-chevron-right"></i></a>
            </div>
          </div>
          <!-- /.box-header -->
          <div class="box-body no-padding">
            <div class="mailbox-read-info">
              <h3>Mundo de Biografias.es</h3>
              <h5>De: {{$mensaje->email}}
                <span class="mailbox-read-time pull-right">{{$mensaje->created_at}}</span></h5>
            </div>
            <!-- /.mailbox-read-info -->
            <div class="mailbox-controls with-border text-center">
              <div class="btn-group">
                <a href="/eliminar/{{$mensaje->id}}" onclick="return confirm('estas seguro de que quieres eliminar');" class="btn btn-default btn-sm" data-toggle="tooltip" data-container="body" title="Eliminar">
                  <i class="fa fa-trash"></i></a>
                <a href="/enviar" class="btn btn-default btn-sm" data-toggle="tooltip" data-container="body" title="Enviar Mensaje">
                  <i class="fa fa-share"></i></a>
              </div>
            </div>
            <!-- /.mailbox-controls -->
            <div class="mailbox-read-message">
              <p>{{$mensaje->comentario}}</p>

              
            </div>    
          <div class="box-footer">
            <a href="/eliminar/{{$mensaje->id}}" onclick="return confirm('estas seguro de que quieres eliminar');" class="btn btn-danger"><i class="fa fa-trash"></i> Eliminar</a>
          </div>
          <!-- /.box-footer -->
        </div>
        <!-- /. box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
          
@endsection