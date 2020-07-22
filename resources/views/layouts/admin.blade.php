<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  
  @yield('title')
   

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('plugins/jqvmap/jqvmap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}"> 
  <link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">

  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.css') }}">
  

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/" class="nav-link">Accueil</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">{{$page['title']}}</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <!-- <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Recherche" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>
 -->
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">




     
      









    <!-- Login panel -->
    <li class="nav-item dropdown user user-menu">
    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"> 
        <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="user-image img-circle elevation-2" alt="User Image"> 
      <span class="d-none d-md-block float-right">{{{ isset(Auth::user()->name) ? Auth::user()->firtsname.' '.Auth::user()->name : Auth::user()->email }}}</span> 
    </a>
    <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
      <!-- User image -->
      <li class="user-header bg-primary">
        <img src="{{ asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">

        <p>
          Hyacinthe AGO - Web Developer
          <small>Employé depuis Nov. 2012</small>
        </p>
      </li>
      <!-- Menu Body -->
     <!--  <li class="user-body">
        <div class="row">
          <div class="col-6 text-left">
            <a href="#">N+1: Hyas Phacalet </a>
          </div>
          <div class="col-4 text-center">
            <a href="#">Sales</a>
          </div>
          <div class="col-6 text-right">
            <a href="#">CI/Angré</a>
          </div>
        </div>-->
        <!-- /.row -->
     <!--  </li> --> 
      <!-- Menu Footer-->
      <li class="user-footer">
        <div class="float-left d-none d-sm-inline">
          <a href="#" class="btn btn-outline-info">Profile</a>
        </div>
        <div class="float-right d-none d-sm-inline">
          <!-- <a href="#" class="btn btn-default btn-flat">Sign out</a> -->
           <a class="btn btn-outline-danger" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Déconnexion') }} 
           </a>
           <form id="logout-form"action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
           </form>
        </div>
        
                                   

       </li>
      </ul>
     </li>
      <!-- /. Login panel -->


    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">


    <!-- Brand Logo -->
    <a href="/" class="brand-link">
      <img src="{{ asset('dist/img/MovisionLogo.png') }}" alt="Movision Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Movision 4.0</span>
    </a>
    <!-- / Brand Logo -->



    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Hy@s Phacalet</a>
        </div>
      </div> -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="{{ route('dashboard1') }}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                TABLEAU DE BORD
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('dashboard1') }}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Vision globale</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('dashboard2') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Vision nationale</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('dashboard3') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Vision par agence</p>
                </a>
              </li>
            </ul>
          </li>
          
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
              <p>
                ACTIVIT&Eacute;S
                <i class="fas fa-angle-left right"></i>
                <!-- <span class="badge badge-info right">6</span> -->
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('pos') }}" class="nav-link">
                  <i class="fas fa-home nav-icon"></i>
                  <p>Agence</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('customer') }}" class="nav-link">
                  <i class="fas fa-users nav-icon"> </i>
                  <p>Client</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('pack') }}" class="nav-link">
                  <i class="fas fa-cubes nav-icon"></i>
                  <p>Colis</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('shipping') }}" class="nav-link">
                  <i class="fas fa-shipping-fast nav-icon"></i>
                  <p>Livraison</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('message') }}" class="nav-link">
                  <i class="fas fa-envelope nav-icon"></i>
                  <p>Message</p>
                </a>
              </li>
            </ul>
          </li>
       
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-cogs"></i>
              <p>
                PARAM&Egrave;TRES
                <i class="fas fa-angle-left right"></i>
                <!-- <span class="badge badge-info right">6</span> -->
              </p>
            </a>
            <ul class="nav nav-treeview">
               <li class="nav-item">
                <a href="{{ route('country.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pays/ville</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="{{ route('admin.users.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Utilisateur</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('team') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Equipe</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('package') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Type Colis</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('shippingWay') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Type Envoi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('alert') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Notification</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('calendar') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Calendrier Frêt </p>
                </a>
              </li>             
            </ul>
          </li>

          <li class="nav-item">
            <a href="{{ route('help') }}" class="nav-link">
            <i class="nav-icon fas fa-question"></i>
              <p>
                AIDE ?
              </p>
            </a>  
          </li>


        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    @include('flash-message')
    @yield('content')


  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; <?= date('Y') ?> <a href="http://full-it.com">Full-IT</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 4.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->





<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

<!-- Bootstrap -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.js') }}"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="{{ asset('dist/js/demo.js') }}"></script>

<!-- ChartJS -->
<script src="{{ asset('plugins/chart.js/Chart.min.js') }}"></script>


<!-- daterangepicker -->
<script src="{{ asset('plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- Summernote -->
<script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}"></script>

<!-- PAGE SCRIPTS -->
<script src="{{ asset('dist/js/pages/dashboard2.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('dist/js/pages/dashboard.js') }}"></script>

<!-- DataTables -->
<script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script>
  $(function () {
  $(document).ready(function() {
    $('#userList').DataTable( {
        "language": {
            "url": "http://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/French.json"
        },
       "responsive": true,
       "autoWidth": false
    } );
    } );
   } );
</script>
</body>
</html>