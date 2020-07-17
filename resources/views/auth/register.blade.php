@extends('layouts.log')


@section('title')
 <title> Movision 4.0 |> Créer un compte utilisateur </title>
@endsection


@section('content')
<body class="hold-transition login-page bg">
<img src="{{ asset('dist/img/logo_mofret.png') }}" alt="logo" class="top-left">
<div class="col-md-6 mt-5" >
  <div class="login-logo">
    <a href="{{ asset('/') }}"><b class="specAppSmallTitleBlue">MO'FTS</b><span class="specAppSmallTitleOrange">VISION</span></a>
  </div>
  <!-- /.login-logo -->
  <div class="card card-primary AppConnect mt-5">
    <div class="card-header text-center card-title txtMaj">{{ __(':: Créer un compte utilisateur  ::') }}</div> 

                <div class="login-card-body">
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data"  >
                        @csrf
                      <div class="row">
                       <div class="col-md-6 form-group"> 
                        <div class="custom-control custom-radio pl-4 pt-2">
                                <input type="radio" name="civility" id="civility1" value="1" class="form-check-input @error('civility') is-invalid @enderror" required  >
                                <label class="form-check-label mr-5" for="civility1"> 
                                    <span class="text-bold">Mlle</span>
                                </label>
                                
                                <input type="radio" name="civility" id="civility2" value="2" class="form-check-input @error('civility') is-invalid @enderror" required >
                                <label class="form-check-label mr-5" for="civility2"> 
                                    <span class="text-bold">Mme</span>
                                </label>
                                
                                <input tableindex=1  type="radio" name="civility" id="civility3" value="3" class="form-check-input @error('civility') is-invalid @enderror" required >
                                <label class="form-check-label" for="civility3"> 
                                <span class="text-bold">M.</span>
                                </label>
                                @error('civility')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                       </div>
                       <div class="col-md-6">
                       <div class="input-group">
                          <div class="custom-file">
                            <input tableindex=2 type="file" name="picture" value="picture" class="custom-file-input" id="picture" >
                            <label class="custom-file-label" for="exampleInputFile">Choisir image</label>
                          </div>
                          <div class="input-group-append">
                            <span class="input-group-text" id="">Charger</span>
                          </div>
                        </div>
                       </div>
                      </div>
                      
                     <!-- Rangéee vide
                      <div class="row">
                       <div class="col-md-6">
                         
                       </div>
                       <div class="col-md-6">
                         
                       </div>
                      </div> -->
                       
                      <div class="row">
                       <div class="col-md-6"> 
                        <div class="input-group mt-4">
                            <input tableindex=3 placeholder="Nom" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" >
                              <div class="input-group-append">
                                <div class="input-group-text">
                                <span class="fas fa-user"></span>
                                </div>
                              </div> 
                             @error('name')
                             <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                             </span>
                             @enderror
                        </div>

                        </div>
                       <div class="col-md-6 input-group mt-4">
                            <input tableindex=4 placeholder="Prénom" id="firstname" type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" required autocomplete="firstname" >
                              <div class="input-group-append">
                                <div class="input-group-text">
                                <span class="fas fa-user"></span>
                                </div>
                              </div> 
                             @error('firstname')
                             <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                             </span>
                             @enderror
                       </div>
                      </div>

                      <div class="row">
                       <div class="col-md-6">   
                        <div class="input-group mt-4">
                            <input tableindex=5 placeholder="Téléphone" id="phone" type="phone" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}"  autocomplete="phone" >
                              <div class="input-group-append">
                                <div class="input-group-text">
                                <span class="fas fa-phone"></span>
                                </div>
                              </div> 
                             @error('phone')
                             <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                             </span>
                             @enderror
                        </div>

                        </div>
                       <div class="input-group mt-4 col-md-6">
                         <input tableindex=6 placeholder="Email" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
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
                      </div>

                      <div class="row">
                       <div class="col-md-6"> 
                        <div class="input-group mt-4">
                            <input tableindex=7 placeholder="Mot de passe" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" value="{{ old('password') }}" >
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
                          </div>
                          <div class="col-md-6 input-group mt-4">
                            <input tableindex=8 placeholder="Confirmer le mot de passe" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" value="{{ old('password_confirmation') }}" >
                              <div class="input-group-append">
                                <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                                </div>
                              </div> 
                             @error('password-confirm')
                             <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                             </span>
                             @enderror
                        </div>
                      </div>

                        <div class="row mt-5">
                            <div class="col-md-12 text-center">
                                <button tableindex=9 type="submit" class="btn btn-primary">
                                    {{ __('Créer maintenant !') }}
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- <fieldset class="border p-2">
                      <legend  class="w-auto">Your Legend</legend>
                    </fieldset> -->

                </div>
            </div>
        </div>
    </div>
    <p>...</p>

</div>

@endsection
