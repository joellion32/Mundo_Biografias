<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Panel Login</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
  </head>
<body>
<body id="LoginForm">
<div class="container">
<br><br><br>
<div class="login-form">
<div class="main-div">
    <div class="panel">
   <h2>MB Login</h2>
   <p>Porfavor Introducir tu Email y Contraseña</p>
   </div>
<form id="Login" action="{{ route('login') }}" method="POST">
 @csrf
      <div class="form-group">
        <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus>
        @if ($errors->has('email'))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('email') }}</strong>
        </span>
    @endif  
      </div>

<!--Password-->
<div class="form-group has-feedback">
        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="password">
    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
    @if ($errors->has('password'))
    <span class="invalid-feedback" role="alert">
        <strong>{{ $errors->first('password') }}</strong>
    </span>
@endif
</div>

<div class="forgot">
<a href="{{ route('password.request') }}">Has Olvidado tu Contraseña</a>
</div>

<button type="submit" class="btn btn-primary">Iniciar</button>

</form>
</div><!--Cierre del Main-->
<p class="botto-text"> Desarrollado por MundodeBiografias.es</p>
</div>
</div><!--Cierre del Container-->
 
<style>
body#LoginForm{ background:url("https://k30.kn3.net/taringa/3/C/9/B/0/2/arispc/336.jpg"); background-repeat:no-repeat;  background-size:cover;}

.form-heading { color:#fff; font-size:23px;}
.panel h2{ color:#444444; font-size:18px; margin:0 0 8px 0;}
.panel p { color:#777777; font-size:14px; margin-bottom:30px; line-height:24px;}
.login-form .form-control {
  background: #f7f7f7 none repeat scroll 0 0;
  border: 1px solid #d4d4d4;
  border-radius: 4px;
  font-size: 14px;
  height: 50px;
  line-height: 50px;
}
.main-div {
  background: #ffffff none repeat scroll 0 0;
  border-radius: 2px;
  margin: 10px auto 30px;
  max-width: 38%;
  padding: 50px 70px 70px 71px;
}

.login-form .form-group {
  margin-bottom:10px;
}
.login-form{ text-align:center;}
.forgot a {
  color: #777777;
  font-size: 14px;
  text-decoration: underline;
}
.login-form  .btn.btn-primary {
  background: #f0ad4e none repeat scroll 0 0;
  border-color: #f0ad4e;
  color: #ffffff;
  font-size: 14px;
  width: 100%;
  height: 50px;
  line-height: 50px;
  padding: 0;
}
.forgot {
  text-align: left; margin-bottom:30px;
}
.botto-text {
  color: #ffffff;
  font-size: 14px;
  margin: auto;
}
.login-form .btn.btn-primary.reset {
  background: #ff9900 none repeat scroll 0 0;
}
.back { text-align: left; margin-top:10px;}    
</style>

</body>
</html>