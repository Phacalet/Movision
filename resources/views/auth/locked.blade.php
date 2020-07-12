@extends('layouts.app')

@section('title')
 <title> Movision 4.0 | Session verouillée  </title>
@endsection

@section('content')
<body class="hold-transition lockscreen">
<!-- Automatic element centering -->
<div class="lockscreen-wrapper">
  <div class="lockscreen-logo">
    <a href="/"><b>MOFTS</b> VISION</a>
  </div>
  <!-- User name -->
  <div class="lockscreen-name">{{ __('Locked') }}</div>

  <!-- START LOCK SCREEN ITEM -->
  <div class="lockscreen-item">
    <!-- lockscreen image -->
    <div class="lockscreen-image">
      <img src="{{ route('dist/img/user1-128x128.jpg') }}" alt="User Image">
    </div>
    <!-- /.lockscreen-image -->

    <!-- lockscreen credentials (contains the form) -->
    <form class="lockscreen-credentials" method="POST" action="{{ route('login.unlock') }}" aria-label="{{ __('Locked') }}">
    @csrf  
    
    <div class="input-group">
        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
        <div class="input-group-append">
          <button type="button" class="btn"><i class="fas fa-arrow-right text-muted"></i></button>
        </div>
         @if($errors->has('password'))
             <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('password') }}</strong>
            </span>
         @endif

      </div>
    </form>
    <!-- /.lockscreen credentials -->

  </div>
  <!-- /.lockscreen-item -->
  <div class="help-block text-center">
    Saisissez votre mot de passe pour continuer la session
  </div>
  <div class="text-center">
    <a href="login.html">Ou connecter un autre compte</a>
  </div>
  
</div>
<!-- /.center -->
@endsection
