@extends('layouts.admin')



@php 
  $page['title']='Paramétrage des Pays/Villes'; 
  $page['module']='Paramètres'; 
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
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Gestion des Pays/Villes</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="/home">Accueil</a></li>
          <li class="breadcrumb-item active">{{$page['title']}}</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
  <div class="container-fluid">


    <div class="row">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header border-transparent">
            <h3 class="card-title">Gerer les Pays</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <!-- /.card-header -->

          <div class="card-body p-0">
            <div class="table-responsive">
              <table class="table m-0">
                <thead>
                  <tr>
                    <th>N°</th>
                    <th>Pays</th>
                    <th>Statut</th>
                    <th>Date d'ajout</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>

                  @foreach($countries as $country)
                  <tr>
                    <td><a href="#">{{$country->id}}</a></td>
                    <td>{{$country->name}}</td>
                    <td class="text-center"><?= ($country->status == 1) ? '<span class="badge badge-success">Actif</span>' : '<span class="badge badge-danger">Inactif</span>' ?></td>
                    <td class="text-center">{{$country->created_at->diffForHumans()}}</td>
                    <td class="text-center">


                      <form  name="ShowCountry" id="ShowCountry" class="d-inline" id="formCountryShow" name="formCountryShow">
                        <div class="modal fade" id="modal_ShowCountry" tabindex="-1" role="dialog" aria-labelledby="ShowCountryModalLabel" aria-hidden="true">

                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="modal_ShowCountryLabel"><strong>{{ __('::  DETAILS DE '.strtoupper($country->name).'    ::') }}</strong></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">



                                <div class="card-body">

                                  <div class="form-group">

                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') ?? $country->name }}" required autocomplete="name" >
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                  </div>



                                  <div class="form-group clearfix">

                                    <div class="icheck-primary d-inline mr-4">
                                      <input type="radio" id="status1" value=1 name="status" required>
                                      <label for="status1">Actif
                                      </label>
                                    </div>
                                    <div class="icheck-danger d-inline">
                                      <input type="radio" id="status2" value=0 name="status" required>
                                      <label for="status2">Inactif
                                      </label>
                                    </div>

                                  </div>
                                  <!--  
                        <div>
                        <p></p>
                         <center><strong>{{ __('   --------   OU   ---------   ') }}</strong></center> 
                        </div>
                     

                 
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="listePays">
                        <label class="custom-file-label" for="exampleInputFile">Charger une liste...</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Charger</span>
                      </div> 
                   
                   
                  </div>-->
                                </div>
                                <!-- /.card-body -->




                              </div>
                              <div class="modal-footer text-center">
                                <button type="reset" class="btn btn-info" data-dismiss="modal">Fermer</button>

                              </div>
                            </div>
                          </div>

                        </div>
                        <button type="submit" alt="voir le pays" class="btn btn-primary btn-xs" data-target="#modal_ShowCountry" data-toggle="modal"><i class="fas fa-eye" title="Plus de détails"></i></button>
                      </form>



                      <form name="EditCountry" id="EditCountry" action="{{ route('country.update', $country)}}" method="POST" enctype="multipart/form-data" class="d-inline" id="formCountryEdit" name="formCountryEdit">
                        @csrf
                        @method('PATCH')


                        <div class="modal fade" id="modal_EditCountry" tabindex="-1" role="dialog" aria-labelledby="EditCountryModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="modal_EditCountryLabel"><strong>{{ __('::   EDITER '.strtoupper($country->name).'    ::') }}</strong></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">



                                <div class="card-body">

                                  <div class="form-group">

                                    <input id="name" placeholder="Nom du Pays" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') ?? $country->name }}" required autocomplete="name" >
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                  </div>



                                  <div class="form-group clearfix">

                                    <div class="icheck-primary d-inline mr-4">
                                      <input type="radio" id="status1" value=1 name="status" required >
                                      <label for="status1">Actif
                                      </label>
                                    </div>
                                    <div class="icheck-danger d-inline">
                                      <input type="radio" id="status2" value=0 name="status"  >
                                      <label for="status2">Inactif
                                      </label>
                                    </div>

                                  </div>
                                  <!--  
                        <div>
                        <p></p>
                         <center><strong>{{ __('   --------   OU   ---------   ') }}</strong></center> 
                        </div>
                     

                 
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="listePays">
                        <label class="custom-file-label" for="exampleInputFile">Charger une liste...</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Charger</span>
                      </div> 
                   
                   
                  </div>-->
                                </div>
                                <!-- /.card-body -->




                              </div>
                              <div class="modal-footer">
                                <button type="reset" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                                <button type="submit" class="btn btn-outline-success">Valider</button>
                              </div>
                            </div>
                          </div>
                        </div>

                        <button type="submit" alt="modidier les infos" class="btn btn-primary btn-xs" data-target="#modal_EditCountry" data-toggle="modal"><i class="fas fa-pen" title="Modifier"></i></button>
                      </form>



                      <form id="DeleteCountry" name="DeleteCountry" action="{{ route('country.destroy', $country)}}" method="POST" class="d-inline" id="formCountryDelete" name="formCountryDelete">
                        @csrf
                        @method('DELETE')


                        <button type="submit" alt="Supprimer le pays" class="btn btn-primary btn-xs"><i class="fas fa-trash" title="Supprimer"></i></button>
                      </form>

                    </td>
                  </tr>
                  @endforeach


                </tbody>
              </table>
            </div>
            <!-- /.table-responsive -->
          </div>
          <!-- /.card-body -->

          <div class="card-footer clearfix">

            <a href="javascript:void(0)" class="btn btn-sm btn-info float-left" data-target="#modal_AddCountry" data-toggle="modal">Ajouter un Pays</a>
            <form name="addCountry" id="addCountry" method="POST" action="{{ route('country.store') }}">
              @csrf

              <div class="modal fade" id="modal_AddCountry" tabindex="-1" role="dialog" aria-labelledby="AddCountryModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="modal_AddCountryLabel"><strong>{{ __('::   AJOUTER UN PAYS    ::') }}</strong></h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">



                      <div class="card-body">

                        <div class="form-group clearfix">

                          <input id="name" placeholder="Nom du Pays" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name">
                          @error('name')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                        </div>



                        <div class="form-group">
                          <label for="city" class="col-md-4 control-label">Statut :</label>
                          <div class="col-md-12">
                            <div class="icheck-primary d-inline mr-4">
                              <input type="radio" id="status1" value=1 name="status" >
                              <label for="status1">Actif</label>
                            </div>
                            <div class="icheck-danger d-inline">
                              <input type="radio" id="status2" value=0 name="status" >
                              <label for="status2">Inactif</label>
                            </div>
                            @error('status')
                            <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                          </div>
                        </div>
                      </div>
                      <!-- /.card-body -->




                    </div>
                    <div class="modal-footer">
                      <button type="reset" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                      <button type="submit" class="btn btn-primary">Enregistrer</button>
                    </div>
                  </div>
                </div>
              </div>
            </form>





            <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">Voir tous les Pays</a>
          </div>

          <!-- /.card-footer -->
        </div>
      </div>

      <!-- /.modal-content -->



      <div class="col-md-6">
        <div class="card">
          <div class="card-header border-transparent">
            <h3 class="card-title">Gerer les Villes</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <!-- /.card-header -->

          <div class="card-body p-0">
            <div class="table-responsive">
              <table class="table m-0">
                <thead>
                  <tr>
                    <th>N°</th>
                    <th>Pays</th>
                    <th>Villes</th>
                    <th>Statut</th>
                    <!-- <th>Date ajout</th> -->
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>

                  @foreach($cities as $city)
                  <tr>
                    <td><a href="#">{{$city->id}}</a></td>
                    <td>{{$city->country->name}}</td>
                    <td>{{$city->name}}</td>
                    <td class="text-center"><?= ($city->status == 1) ? '<span class="badge badge-success">Actif</span>' : '<span class="badge badge-danger">Inactif</span>' ?></td>
                    <!--  <td class="text-center">{{$city->created_at->diffForHumans()}}</td> -->
                    <td class="text-center">
                      <a href="{{route('city.show', $city->id)}}" alt="Consulter"><i class="fas fa-eye mr-2" title="Plus de détails"></i> </a>

                      <a href="{{route('city.edit', $city->id)}}" alt="Modifier"><i class="fas fa-pen mr-2" title="Modifier"></i> </a>

                      <form action="{{route('city.destroy', $city->id)}}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <a href="{{route('city.destroy', $city->id)}}" alt="Supprimer" class=""><i class="fas fa-trash" title="Supprimer"></i> </a>
                      </form>

                    </td>
                  </tr>
                  @endforeach

                </tbody>
              </table>
            </div>
            <!-- /.table-responsive -->
          </div>
          <!-- /.card-body -->
          <div class="card-footer clearfix">

            <a href="javascript:void(0)" class="btn btn-sm btn-info float-left" data-target="#modal_AddCity" data-toggle="modal">Ajouter une ville</a>
            <form name="addCity" id="addCity" method="POST" action="{{ route('city.store') }}" enctype="multipart/form-data">
              @csrf

              <div class="modal fade" id="modal_AddCity" tabindex="-1" role="dialog" aria-labelledby="AddCityModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="modal_AddCityLabel"><strong>{{ __('::   AJOUTER UNE VILLE    ::') }}</strong></h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">



                      <div class="card-body">



                        <div class="form-group">
                          <label for="country" class="col-md-4 control-label">Pays :</label>
                          <div class="col-md-12">
                            <select name="country" id="country" class="form-control">
                              <option>---Choix de ays--</option>
                              @foreach($countries as $country)
                              <option value="{{ $country->id }}" > {{ $country->name }} </option>
                              @endforeach
                            </select>
                            @error('country')
                            <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="city" class="col-md-4 control-label">Ville :</label>
                          <div class="col-md-12">
                            <input id="name" placeholder="Nom de la ville" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" >
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                          </div>
                        </div>


                        <div class="form-group">
                          <label for="city" class="col-md-4 control-label">Statut :</label>
                          <div class="col-md-12">
                            <div class="icheck-primary d-inline mr-4">
                              <input type="radio" id="status1" value=1 name="status" required>
                              <label for="status1">Actif
                              </label>
                            </div>
                            <div class="icheck-danger d-inline">
                              <input type="radio" id="status2" value=0 name="status">
                              <label for="status2">Inactif
                              </label>
                            </div>
                            @error('status')
                            <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                          </div>
                        </div>


                        <!--  
                        <div>
                        <p></p>
                         <center><strong>{{ __('   --------   OU   ---------   ') }}</strong></center> 
                        </div>
                     

                 
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="listePays">
                        <label class="custom-file-label" for="exampleInputFile">Charger une liste...</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Charger</span>
                      </div> 
                   
                   
                  </div>-->
                      </div>
                      <!-- /.card-body -->




                    </div>
                    <div class="modal-footer">
                      <button type="reset" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                      <button type="submit" class="btn btn-primary">Enregistrer</button>
                    </div>
                  </div>
                </div>
              </div>
            </form>


            <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">Voir toutes les villes</a>
          </div>
          <!-- /.card-footer -->
        </div>
      </div>
      <!--/.col (right) -->



    </div>

    <!-- /.row -->
  </div><!-- /.container-fluid -->

  <div class="row">

    <div class="col-md-12">
      <div class="card">
        <div class="card-header border-transparent">
          <h3 class="card-title">Movision dans le monde</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <!-- /.card-header -->

        <div class="card-body p-0">

          <script src="{{ asset('dist/src/svg-world-map.js') }}"></script>

          <script>
            svgWorldMap()
          </script>

        </div>
        <!-- /.card-body -->
        <div class="card-footer clearfix">

        </div>
        <!-- /.card-footer -->
      </div>
    </div>


    <script>
      function myCountryDeletion() {
        var r = confirm("Attention !!! Vous êtes sur le point de supprimer un pays. ");
        if (r == false) {
          return false;
          history.go('/country');
          exit();
        }
        else
        {
          return true;
          history.go('/country');
        }
        return false;
      }

      function myCityDeletion() {
        confirm("Attention !!! Vous êtes sur le point de supprimer une ville. ");
      }
    </script>





</section>
<!-- /.content -->
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