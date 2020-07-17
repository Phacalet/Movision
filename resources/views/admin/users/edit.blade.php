@extends('layouts.admin')

@php $page['title']='Modifier un compte utilisateur'; $page['module']='users';  @endphp
@section('title')
  
 <title> Movision 4.0 | {{$page['title']}} </title>
 @endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Modifier <strong>{{$user->name}}</strong></div>
                 
                <div class="card-body">
                <form action="{{ route('admin.users.update',$user) }}" method="POST" >
                 @csrf
                 @method('PATCH')

            <fieldset>
              <legend>Infos utiliateur :</legend>   
                
              <div class="mb-0 form-group row">
                            <label for="sex" class="col-md-4 col-form-label">{{ __('Civilité :') }}</label>
                            <div class="m-2 col-md-6" text-align="left">
                              <input  class=" @error('civility') is-invalid @enderror " type="radio" name="civility" id="civMiss" value="1" required  @if($user->civility===1) checked  @endif >
                                <label class="mr-2 text-md-left" for="sexcivMissMiss"> 
                                    Mlle
                                </label>
                                
                                <input  class="@error('civility') is-invalid @enderror" type="radio" name="civility" id="civMrs" value="2" required @if($user->civility===2) checked  @endif >
                                <label class="mr-2 text-md-left" for="civMrs"> 
                                    Mme
                                </label>
                                
                                <input  class="@error('civility') is-invalid @enderror" type="radio" name="civility" id="civMr" value="3" required  @if($user->civility===3) checked  @endif >
                                <label class=" text-md-left" for="civMr"> 
                                    M.
                                </label>
                                @error('civility')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                <div class="form-group row">
                            <label for="name" class="col-md-3 col-form-label">{{ __('Nom :') }}</label>

                            <div class="col-md-4">
                                <input id="name" type="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') ?? $user->name }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                </div>


                <div class="form-group row">
                            <label for="firstname" class="col-md-3 col-form-label">{{ __('Prénom :') }}</label>

                            <div class="col-md-4">
                                <input id="firstname" type="firstname" class="form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') ?? $user->firstname }}" required autocomplete="firstname" autofocus>

                                @error('firstname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                </div>


                
                <div class="form-group row">
                            <label for="email" class="col-md-3 col-form-label">{{ __('Email :') }}</label>

                            <div class="col-md-4">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email')  ?? $user->email }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                </div>
                 </fieldset>
                <fieldset>
                     <legend>Rôle utiliateur:</legend>
                 @foreach ($roles as $role)
                  <div class="form-group form-check">                  
                      <input type="checkbox" class="form-check-input" name="roles[]" id="{{ $role->id }}" value="{{ $role->id }}" 
                  @if($user->roles->pluck('id')->contains($role->id)) checked  @endif    />
                      <label for="{{ $role->id }}" class="form-check-label"> {{ $role->name }} </label>
                  </div>
                  @endforeach  
                  </fieldset>
                 <button type="submit" class="btn btn-primary">Modifier les infos</button>
                 </form>
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
