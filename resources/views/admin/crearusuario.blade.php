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
              <h3 class="box-title"><i class="fas fa-user"></i> Crear Usuario</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form" action="{{ route('register') }}" method="POST">
                @csrf
                <!-- text input -->
                <div class="form-group">
                  <label>Nombre</label>
                  <input type="text" name="name" class="form-control" placeholder="Nombre" required>
                </div>
                
                <div class="form-group">
                  <label>Email</label>
                  <input type="text" name="email" class="form-control" placeholder="Email" required>
                </div>
        
                    <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                  </div>

                  <div class="form-group">
                      <label>Confirmar Password</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirmar Password" required>   
                  </div>
    
                <button type="submit" class="btn btn-primary btn-block">Crear</button>
              </form>
            </div>
            <!-- /.box-body -->
          </div>
@endsection