@extends('admin.home')
@section('content')
<section class="content-header">
        <h1>
        <i class="fas fa-envelope"></i> CORREO
        </h1>
      </section>
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-3">
              <a href="/home" class="btn btn-primary btn-block margin-bottom">Volver</a>
    
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
              <!-- /. box -->
              <div class="box box-solid">
                <div class="box-header with-border">
                  <h3 class="box-title">Redes Sociales</h3>
    
                  <div class="box-tools">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                  </div>
                </div>
                <div class="box-body no-padding">
                  <ul class="nav nav-pills nav-stacked">
                    <li><a href="#"><i class="fab fa-facebook" style="color:blue;"></i> Facebook</a></li>
                    <li><a href="#"><i class="fab fa-twitter-square" style="color:aqua;"></i> twiter</a></li>
                    <li><a href="#"><i class="fab fa-instagram" style="color:purple;"></i></i> Instagram</a></li>
                  </ul>
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->
            </div>
            <!-- /.col -->
            <div class="col-md-9">
              <div class="box box-primary">
                <div class="box-header with-border">
                        <h3 class="box-title">Inbox</h3>

                        <div class="box-tools pull-right">
                          <div class="has-feedback">
                            <form action="{{route('correo')}}" method="get">
                              @csrf
                            <input type="search" name="name" class="form-control input-sm" placeholder="Buscar Mensaje">
                            <span class="glyphicon glyphicon-search form-control-feedback"></span>
                            </form>
                          </div>
                        </div>
                        <!-- /.box-tools -->
                      </div>
                      <!-- /.box-header -->
                      <div class="box-body no-padding">
                        <div class="mailbox-controls">
                          <div class="btn-group">
                            <button type="button" class="btn btn-default btn-sm"><i class="fa fa-reply"></i></button>
                            <button type="button" class="btn btn-default btn-sm"><i class="fa fa-share"></i></button>
                          </div>
          
                          </div>
                          <!-- /.pull-right -->
                        </div>
                        <div class="table-responsive mailbox-messages">
                          <table class="table table-hover table-striped">
                            <tbody>
                              @foreach ($mensaje as $mensajes)
                              <tr style="cursor:pointer;">
                              <td class="mailbox-star"><i class="fa fa-star text-yellow"></i></td>
                              <td class="mailbox-name"><a href="/ver/{{$mensajes->id}}" style="color:black;">{{$mensajes->name}}</a></td>
                              <td class="mailbox-subject"><b><a href="/ver/{{$mensajes->id}}" style="color:black;">{{$mensajes->email}}</a></b>
                              </td>
                              <td class="mailbox-attachment"></td>
                              <td class="mailbox-date"><a href="/ver/{{$mensajes->id}}" style="color:black;">{{$mensajes->email}}</a></td>
                            </tr>
                            @endforeach
                            </tbody>
                          </table>
                        </div>
                          {{ $mensaje->links() }}                        
                      </div>
              </div>
            </div>
          </div>
        </section>
</div>

            

@endsection    

