@extends('layouts.admin')



@section('title')
 <title> Movision 4.0 |> Gestion des comptes utilisateur  </title>
@endsection


@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Gestion des utilisateurs</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Accueil</a></li>
              <li class="breadcrumb-item active">Gestion des utilisateurs</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
        
        <!-- left column -->
        <div class="col-md-5">
        <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">{{ __('Création de compte') }}</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('register') }}">
                        @csrf
                <div class="card-body">
                    
                       <div class="form-group">
                            <input  class=" @error('civility') is-invalid @enderror" type="radio" name="civility" id="civMiss" value="1" required >
                                <label class="mr-2 text-md-left" for="sexcivMissMiss"> 
                                    Mlle
                                </label>
                                
                                <input  class="@error('civility') is-invalid @enderror" type="radio" name="civility" id="civMrs" value="2" required >
                                <label class="mr-2 text-md-left" for="civMrs"> 
                                    Mme
                                </label>
                                
                                <input  class="@error('civility') is-invalid @enderror" type="radio" name="civility" id="civMr" value="3" required >
                                <label class=" text-md-left" for="civMr"> 
                                    M.
                                </label>
                                @error('civility')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group">
                          
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>                 
                        <div class="form-group row">
                             <input id="firstname" type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" required autocomplete="firstname" autofocus>
                                @error('firstname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group row">
                             <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group row">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group row">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password"> 
                        </div>
                        


                  <div class="form-group">
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Parcourir...</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Charger</span>
                      </div>
                    </div>
                   
                  </div>
                 
                <!-- /.card-body -->

                 <div class="card-footer">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Créer maintenant !') }}
                                </button>
                 </div>

              </form>
              </div>
           </div>
        </div>










        <div class="col-md-7">
            <!-- general form elements disabled -->
           <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">General Elements</h3>
              </div>
              <!-- /.card-header -->
                  <!-- form start -->
                  <form action="{{ route('register') }}">
                            @csrf
                    <div class="card-body">
                        
                           <div class="form-group">
                                <input  class=" @error('civility') is-invalid @enderror" type="radio" name="civility" id="civMiss" value="1" required >
                                    <label class="mr-2 text-md-left" for="sexcivMissMiss"> 
                                        Mlle
                                    </label>
                                    
                                    <input  class="@error('civility') is-invalid @enderror" type="radio" name="civility" id="civMrs" value="2" required >
                                    <label class="mr-2 text-md-left" for="civMrs"> 
                                        Mme
                                    </label>
                                    
                                    <input  class="@error('civility') is-invalid @enderror" type="radio" name="civility" id="civMr" value="3" required >
                                    <label class=" text-md-left" for="civMr"> 
                                        M.
                                    </label>
                                    @error('civility')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            <div class="form-group">
                              
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>                 
                            <div class="form-group row">
                                 <input id="firstname" type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" required autocomplete="firstname" autofocus>
                                    @error('firstname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            <div class="form-group row">
                                 <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            <div class="form-group row">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            <div class="form-group row">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password"> 
                            </div>
                            
    
    
                      <div class="form-group">
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile">Parcourir...</label>
                          </div>
                          <div class="input-group-append">
                            <span class="input-group-text" id="">Charger</span>
                          </div>
                        </div>
                       
                      </div>
                     
                    <!-- /.card-body -->
    
                     <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Créer maintenant !') }}
                                    </button>
                     </div>
                     
                  </form>
              
               
              
            </div>
            <!-- /.card -->
        </div>
         <!--/.col (right) -->



        </div>

    <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
