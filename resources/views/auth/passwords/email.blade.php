@extends('layouts.log')


@section('title')
 <title> Movision 4.0 | Mot de passe oublié  </title>
@endsection


@section('content')
<body class="hold-transition login-page bg">
<img src="{{ asset('dist/img/logo_mofret.png') }}" alt="logo" class="top-left">
<div class="login-box">
  <div class="login-logo">
    <a href="{{ asset('/') }}"><b class="specAppSmallTitleBlue">MO'FTS</b><span class="specAppSmallTitleOrange">VISION</span></a>
  </div>
  <!-- /.login-logo -->
  <div class="card card-primary AppConnect">
    <div class="card-header text-center card-title txtMaj">{{ __(':: Mot de passe oublié ::') }}</div> 

                <div class="card-body login-card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        
                        <div class="input-group mb-3 mt-3">
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

                        <div class="row mb-4">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Envoyer le lien de reinintialisation') }}
                                </button>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 text-center">
                                <a href="{{ asset('/') }}" class="text-dark">
                                 <span class="fas fa-home"></span>     
                                    Retour à l'accueil
                                </a>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>





@endsection
