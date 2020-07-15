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
body {
    /* Location of the image */
    background-image: url("{{ asset('dist/img/bg1_workflow6.jpg') }}");
    
    /* Image is centered vertically and horizontally at all times */
    background-position: center center;
    
    /* Image doesn't repeat */
    background-repeat: no-repeat;
    
    /* Makes the image fixed in the viewport so that it doesn't move when 
       the content height is greater than the image height */
    background-attachment: fixed;
    
    /* This is what makes the background image rescale based on its container's size */
    background-size: cover;
    
    /* Pick a solid background color that will be displayed while the background image is loading */
    background-color:#222;
    
    /* SHORTHAND CSS NOTATION
     * background: url(background-photo.jpg) center center cover no-repeat fixed;
     */
  }
  
  /* For mobile devices */
  @media only screen and (max-width: 767px) {
    body {
      /* The file size of this background image is 93% smaller
       * to improve page load speed on mobile internet connections */
      background-image: url("{{ asset('dist/img/bg1_workflow6.jpg') }}");
      background-size: cover;
      background-attachment: fixed;
      background-position: center center;
      background-repeat: repeat;
    }
      }

@media only screen and (max-width: 640px) {
body {
    background-image: url("{{ asset('dist/img/bg1_workflow6.jpg') }}");
      background-size: cover;
      background-attachment: fixed;
      background-position: center center;
      background-repeat: repeat;
}
}
@media only screen and (min-width: 640px) {
body {
    background-image: url("{{ asset('dist/img/bg1_workflow6.jpg') }}");
      background-size: cover;
      background-attachment: fixed;
      background-position: center center;
      background-repeat: repeat;
}
}
@media only screen and (min-width:960px) {
body {
    background-image: url("{{ asset('dist/img/bg1_workflow6.jpg') }}");
      background-size: cover;
      background-attachment: fixed;
      background-position: center center;
      background-repeat: repeat;
}
}
@media only screen and (min-width:1100px) {
body {
    background-image: url("{{ asset('dist/img/bg1_workflow6.jpg') }}");
      background-size: cover;
      background-attachment: fixed;
      background-position: center center;
}
}

</style>
</head>
<body>

<div class="content">
 

        <div class="row h10">
          <div class="col-8 p-3 text-left"> <img src="{{ asset('dist/img/logo_mofret.png') }}" alt="logo"> </div>

          <div class="col-4 p-3">
           @if (Route::has('login'))
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
        </div>
       
        <div class="row h80">
                <div class="col-12">
                <a href="#" class="m-b-md col-12 p-5">
                <span class="specAppTitleBlue">MO'FTS</span>
                <span class="specAppTitleOrange">VISION</span>
                <span class="specAppSmallTitleBlue">4.0</span>
                </a>
                </div> 
                
               
                <div class="row ml-5">
                
                 <div class="col-11 text-center ml-4">
                
                  <p class="text-center">    
                    <nav class="navbar navbar-expand-sm navbar-dark bg-primary justify-content-center">
                        <ul class="nav">
                            <li class="nav-item">
                              <a href="#"><i class="fas fa-home nav-icon"></i>Agences</a>
                            </li>
                            <li class="nav-item ml-4">
                               <a href="#"><i class="fas fa-users nav-icon"></i>Clients</a>
                            </li>
                            <li class="nav-item ml-4">
                               <a href="#"><i class="fas fa-cubes nav-icon"></i>Colis</a>
                            </li>
                            <li class="nav-item ml-4">
                               <a href="#"><i class="fas fa-shipping-fast nav-icon"></i>Livraisons</a>
                            </li>
                            <li class="nav-item ml-4">
                               <a href="#"><i class="fas fa-search-location nav-icon"></i>Suivis</a>
                            </li>
                            <!-- <li class="nav-item ml-4">
                               <a href="#">Aide<i class="fas fa-question-circle nav-icon  mr-4"></i></a>
                            </li> -->
                        </ul>
                     <form class="form-inline my-2 my-lg-0">
                     <input class="form-control mr-sm-2 ml-sm-2" type="search" placeholder="Numéro de tracking" aria-label="Search">
                    <button class="btn btn-outline-warning my-2 my-sm-0 mr-2" type="submit">Rechercher</button>
                    </form>
                   </nav>
                  </p>
                </div>

                
        
                


                <div class="col-12 mt-3 mr-5">
                     <span class="specAppDescript">..:: Solution de gestion de frêt ::..</span>
                </div>

                
               
        </div>
        

        <div class="row h10 ml-2 mb-0">
        <footer class="specAppCopyRight ml-2">Copyright&copy; {{date('Y')}} - Powered by Full-IT</footer>
        </div>


   
  


  
</div>
</body>
</html>
