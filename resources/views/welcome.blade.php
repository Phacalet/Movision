<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Movision 4.0') }}</title>

        <!-- Font Awesome Icons -->
<link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- App specifique style -->
  <link rel="stylesheet" href="{{ asset('dist/css/style.css') }}">    
  <style>

.bg {
                /* The image used */
                background-image: url("{{ asset('dist/img/bg1_workflow6.jpg') }}");
                /* Full height */
                height: 100vh;

                /* Center and scale the image nicely */
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
                /* z-index: -1; */
            }
  </style>  
    </head>
    <body>
        <div class="flex-center position-ref full-height bg">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Accueil</a>
                    @else
                    <button class="btn btn-primary" ><a href="{{ route('login') }}" class="btn btn-primary">Connexion</a></button>
   
                        @if (Route::has('register'))
                        <button type="button" class="btn btn-warning"><a href="{{ route('register') }}" class="btn btn-warning">Inscription</a></button>
                        @else
                            <a class="btn btn-default btn-warn" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Déconnexion') }} 
                           </a>
                           <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                             @csrf
                           </form>
                        @endif
                        
                    @endauth
                </div>
            @endif
            
            <div class="content">
                
            <img src="{{ asset('dist/img/logo_mofret.png') }}" alt="logo" class="top-left">

                <div class="specAppTitleBlue m-b-md">
                MO'FTS<span class="specAppTitleOrange">VISION</span><span class="specAppSmallTitleBlue">4.0</span>
                </div>
                <div class="navbar navbar-dark bg-primary navbar-expand-lg SpecAppnavBarre">
                <div class="AppSecplinks">
                    <a href="#"><i class="fas fa-home nav-icon"></i>Agences</a>
                    <a href="#"><i class="fas fa-users nav-icon"></i>Clients</a>
                    <a href="#"><i class="fas fa-cubes nav-icon"></i>Colis</a>
                    <a href="#"><i class="fas fa-shipping-fast nav-icon"></i>Livraisons</a>
                    <a href="#"><i class="fas fa-search-location nav-icon"></i>Suivis</a>
                    <a href="#">Aide<i class="fas fa-question-circle nav-icon"></i></a>
                </div>
                </div>

                 <div>
                     <center class="specAppDescript">...: Solution de gestion de frêt :...</center>
                 </div>
            

                
            </div>
           
        </div>
        <footer class="specAppCopyRight">Copyright&copy; {{date('Y')}} - Powered by Full-IT</footer>
    </body>
   
</html>
