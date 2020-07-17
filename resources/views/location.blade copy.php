@extends('layouts.admin')



@php $page['title']='Gestion des Pays/Villes'; $page['module']='Activité';  @endphp
@section('title')
  
 <title> Movision 4.0 | {{$page['title']}} </title>
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
              <li class="breadcrumb-item active">Paramétrage Pays/Villes</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">


        <div class="row">
        <div class="col-md-5">
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
                      <th>N° d'ordre</th>
                      <th>Pays</th>
                      <th>Status</th>
                      <th>Date d'ajout</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td><a href="#">1</a></td>
                      <td>France</td>
                      <td><span class="badge badge-success">Actif</span></td>
                      <td>12/07/2020</td>
                    </tr>
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
              <form method="POST" action="" enctype="multipart/form-data" >
              @csrf
              <div class="card-footer clearfix">
                <a href="javascript:void(0)" class="btn btn-sm btn-info float-left"  data-target="#modal_AddCountry" data-toggle="modal">Ajouter un Pays</a>
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

                        <div class="form-group">
                          
                            <input id="country" placeholder="Nom du Pays"  type="text" class="form-control @error('country') is-invalid @enderror" name="country" value="{{ old('country') }}" required autocomplete="country" autofocus>
                                @error('country')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>                 
                       
					 
					   
                        <div class="form-group clearfix">
                        <div class="icheck-primary d-inline">
                        <input type="checkbox" id="status" name="status" checked="">
                        @error('status')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                        <label for="status">Actif</label>
                       </div>
                         </div>
					              
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
                   
                   
                  </div>
                  </div>
                <!-- /.card-body -->


              

                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                        <button type="button" class="btn btn-primary">Enregistrer</button>
                      </div>
                    </div>
                  </div>
                </div>
                
                <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">Voir tous les Pays</a>
              </div>
              
              <!-- /.card-footer -->
           </div>
        </div>
        </form>
          <!-- /.modal-content -->
        
        

        <div class="col-md-7">
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
                      <th>N° d'ordre</th>
                      <th>Pays</th>
                      <th>Villes</th>
                      <th>Status</th>
                      <th>Date d'ajout</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td><a href="#">1</a></td>
                      <td>France</td>
                      <td>Paris</td>
                      <td><span class="badge badge-success">Actif</span></td>
                      <td>12/07/2020</td>
                    </tr>
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Ajouter une ville</a>
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
                <h3 class="card-title">Movison dans le monde</h3>

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
                
                <script>svgWorldMap()</script>
        
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">

              </div>
              <!-- /.card-footer -->
           </div>
      </div>

      
    </section>
    <!-- /.content -->
@endsection
