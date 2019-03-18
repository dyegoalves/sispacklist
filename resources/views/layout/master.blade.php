<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>AdminLTE 2 | Blank Page</title>
      <!-- Tell the browser to be responsive to screen width -->
      <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <link rel="stylesheet" href="/css/app.css">
      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
      <!-- Google Font -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
      

   </head>
   <body class="hold-transition skin-blue sidebar-mini">
      <!-- Site wrapper -->
      <div id="app" class="wrapper">
         <header class="main-header">
            <!-- Logo -->
            <a href="../../index2.html" class="logo">
               <!-- mini logo for sidebar mini 50x50 pixels -->
               <span class="logo-mini"><b>S</b>PLT</span>
               <!-- logo for regular state and mobile devices -->
               <span class="logo-lg"><b><span class="fa fa-industry"></span> SIS</b>PKL </span>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top">
               <!-- Sidebar toggle button-->
               <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               </a>
               <div class="navbar-custom-menu">
                  <ul class="nav navbar-nav">
                     <!-- User Account: style can be found in dropdown.less -->
                     <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="/img/dy.jpg" class="user-image" alt="User Image">
                        <span class="hidden-xs"> Dyego Alves </span>
                        </a>
                        <ul class="dropdown-menu">
                           <!-- User image -->
                           <li class="user-header">
                              <img src="/img/dy.jpg" class="img-circle" alt="User Image">
                              <p>
                                 Dyego Alves - Web Developer
                                 <small>Jan 2016</small>
                              </p>
                           </li>
                           <!-- Menu Body -->
                           <li class="user-body">
                              <div class="row">
                                 <div class="col-xs-4 text-center">
                                    A
                                 </div>
                                 <div class="col-xs-4 text-center">
                                    B
                                 </div>
                                 <div class="col-xs-4 text-center">
                                    C
                                 </div>
                              </div>
                              <!-- /.row -->
                           </li>
                           <!-- Menu Footer-->
                           <li class="user-footer">
                              <div class="pull-left">
                                 <a href="perfil"> <button class="btn btn-success btn-flat" > Perfil </button> </a>
                              </div>
                              <div class="pull-right">
                                 <a href="sair"> <button class="btn btn-danger btn-flat" > Sair </button> </a>
                              </div>
                           </li>
                        </ul>
                     </li>
                     <!-- Control Sidebar Toggle Button -->
                     <li>
                        {{-- Aqw --}}
                        <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                     </li>
                  </ul>
               </div>
            </nav>
         </header>
         <!-- =============================================== -->
         <!-- Left side column. contains the sidebar -->
         <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
               <!-- Sidebar user panel -->
               <div class="user-panel">
                  <div class="pull-left image">
                     <img src="/img/dy.jpg" class="img-circle" alt="User Image">
                  </div>
                  <div class="pull-left info">
                     <p>Dyego Alves</p>
                     <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                  </div>
               </div>
               <!-- sidebar menu: : style can be found in sidebar.less -->
               <ul class="sidebar-menu" data-widget="tree">
                  {{-- Componente de pesquisar Operacao --}}
                  <pesquisar-operacoes></pesquisar-operacoes>
                  <li><a href="{{ url('/')}}"><i class="fa fa-book"></i> <span>Inicio</span></a></li>
                  <li class="treeview">
                     <a href="#">
                     <i class="fa fa-dashboard"></i> <span>Estoque</span>
                     <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                     </a>
                     <ul class="treeview-menu">
                        <li>
                           <a href="{{ route('estoque-cadastros-PKLECP')}}"><i class="fa fa-circle-o"></i> PKLECP
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li><a href="https://adminlte.io/docs"><i class="fa fa-book"></i> <span>Documentacão</span></a></li>
               </ul>
            </section>
            <!-- /.sidebar -->
         </aside>
         @yield('conteudo')
         <footer class="main-footer">
            <div class="pull-right hidden-xs">
               <b>Version</b> 0.0.1-alpha
            </div>
            <strong>Copyright &copy; 2019- {{ date('Y') }} <a href="#">DySATECH</a> .</strong> All rights reserved.  | Creditos template AdminLTE
         </footer>
         <!-- Control Sidebar -->
         <aside id="" class="control-sidebar control-sidebar-dark">
            <!-- Tab panes -->
            <div class="tab-content">
               <h3 class="control-sidebar-heading">Configuração</h3>
               <ul class="control-sidebar-menu">
                  <li>
                     <a href="javascript:void(0)">
                        <h4 class="control-sidebar-subheading">
                           Custom Template Design
                           <span class="label label-danger pull-right">70%</span>
                        </h4>
                        <div class="progress progress-xxs">
                           <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                        </div>
                     </a>
                  </li>
                  <li>
               </ul>
            </div>
         </aside>
         <!-- /.control-sidebar -->
         <!-- Add the sidebar's background. This div must be placed
            immediately after the control sidebar -->
         <div class="control-sidebar-bg"></div>
      </div>
      <!-- ./wrapper -->
      <!-- AdminLTE for demo purposes -->
      <script src="/js/app.js"></script>
      <script>
         $(document).ready(function () {
         $('.sidebar-menu').tree()
         })
      </script>
   </body>
</html>