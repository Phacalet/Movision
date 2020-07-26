@extends('layouts.log')


@php 
  $page['title']='Connexion'; 
  $page['module']='Authentification'; 
  $page['imgPath']='dist/img/';
  $page['appVersion']='4.0'; 
  $page['appPoweredBy']='FULL-IT'; 
  $page['appPoweredByWebsite']="http://full-it.com";
  $page['appLongName']='MO\'FTVISION'; 
  $page['appName']='Movision';
@endphp

@section('title')
<title> {{$page['appName'].' '.$page['appVersion']}} | {{$page['title']}} </title>
@endsection


@section('content')
<body class="hold-transition login-page bg">
<img src="{{ asset('dist/img/logo_mofret.png') }}" alt="logo" class="top-left">
<div class="login-box">
  <div class="login-logo">
    <a href="{{ asset('/') }}"><b class="specAppSmallTitleBlue">{{ Str::of($page['appLongName'])->substr(0, 5) }}</b><span class="specAppSmallTitleOrange">{{ Str::of($page['appLongName'])->substr(5, 11) }}</span></a>
  </div>
  <!-- /.login-logo -->
  <div class="card card-primary  AppConnect">
   <div class="card-header text-center card-title txtMaj">{{ __('::   Connectez-vous !    ::') }}</div>
    <div class="card-body login-card-body">

      <form  method="POST" action="{{ route('login') }}">
      @csrf

        <div class="input-group mb-3">
           <input placeholder="Email" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
           <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
         </div> 
           @error('email')
           <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
           </span>
           @enderror
          
        </div>
        <div class="input-group mb-3">
          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Mot de passe">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
           @error('password')
            <span class="invalid-feedback" role="alert">
               <strong>{{ $message }}</strong>
           </span>                        
           @enderror
        </div>
        <div class="row">
         <div class="col-4">
          <!--    <div class="icheck-primary">
              <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
               <label class="form-check-label" for="remember">
                  {{ __('Retenir') }}
              </label>
            </div>-->
            <button type="reset" class="btn btn-default btn-block mb-3"> 
              {{ __('Annuler') }}
            </button>

          </div>
          <!-- /.col -->


           <div class="col-3">

           </div>

           <div class="col-5">  
            <button type="submit" class="btn btn-primary btn-block"> 
              {{ __('Connexion') }}
            </button>

           
          <!-- </div> -->
          <!-- /.col -->
         </div>
      
    <!-- /.login-card-body -->
  </div>
  
      <div class="row">
        <div class="col-12 text-center">
            @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                     {{ __('Mot de passe oublié ?') }} 
                                    </a>
            @endif
      
        </div>
      </div>
</div>
</div>
<!-- /.login-box -->




@endsection




@section('footer')

<footer class="main-footer">
    <strong>Copyright &copy; <?= date('Y') ?> <a href="{{$page['appPoweredByWebsite']}}">{{ $page['appPoweredBy'] }}</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> {{ $page['appVersion'] }}
    </div>
  </footer>

@endsection