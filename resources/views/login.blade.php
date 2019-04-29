
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SISPACKLIST | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  {{-- App css --}}
  <link rel="stylesheet" href="css/app.css" > 

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body id="loginpage"     class="hold-transition login-page ">
<div id ="app" class="login-box">
  <div class="login-logo">
    <a href="{{ route('login')}}"><b>SIS</b>PACKLIST</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Controle e Gestao de Estoque</p>
     {{-- Erros alerts --}}
      @if (session('error'))
         <login-alert :errormesagem = "{{ json_encode(session('error')) }}" ></login-alert>
      @endif

    <form id = "frmlogin"action="{{ route('logarUsuario')}}" method="post">
      @csrf
       <div class="form-group has-feedback">
        <input required name='email' value="{{ old('email') }}" type="email" class="form-control input-peq " placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input required name='password' type="password" class="form-control input-peq " placeholder="Senha">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Entrar</button>
        </div>
      </div>
     </form>
    <a href="#">Esqueceu senha ?</a><br>
  </div>
</div>
</body>
<script src="/js/app.js"></script>
</html>
