@extends('layouts.admin')

@php $page['title']='Gestion des utilisateurs'; $page['module']='users';  @endphp
@section('title')
  
 <title> Movision 4.0 | {{$page['title']}} </title>
@endsection


@section('content')

  <!-- Content Header (Page header) -->
  <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1> {{$page['title']}}</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/home">Accueil</a></li>
              <li class="breadcrumb-item active"> {{$page['title']}}</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

        <div class="row">
       
        <div class="card col-12">
            <div class="card-header">
              <h3 class="card-title">Liste des comptes utilisateurs</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
        
        <div class="row">
               <div class="col-sm-12">
                <table id="userList" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="userList_info">
                <thead>
                <tr role="row">
                    <th class="sorting" tabindex="0" aria-controls="userList" rowspan="1" colspan="1" aria-label="id">N° ID</th>
                    <th class="sorting" tabindex="0" aria-controls="userList" rowspan="1" colspan="1" aria-label="user">Nom & Prénom(s)</th>
                    <th class="sorting" tabindex="0" aria-controls="userList" rowspan="1" colspan="1" aria-label="Type de compte">Type de compte</th>
                    <th class="sorting" tabindex="0" aria-controls="userList" rowspan="1" colspan="1" aria-label="Email">Email</th>
                    <th class="sorting_asc" tabindex="0" aria-controls="userList" rowspan="1" colspan="1" aria-label="Statut" aria-sort="ascending">Statut</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                <tr scope="row" role="row" class="odd">
                  <td class="" tabindex="0">{{$user->id}}</td>
                  <td class="">{{$user->name}}</td>
                  <td class="">{{ implode(', ', $user->roles()->get()->pluck('name')->toArray() )}}</td>
                  <td class="">{{$user->email}}</td>
                  <td class="sorting_1 text-center"><?= ($user->status==1) ? '<span class="badge badge-success">Actif</span>' :'<span class="badge badge-danger">Inactif</span>' ?></td>
                  <td class="text-center">
                  <a href="{{ route('admin.users.show',$user->id) }}" alt="Voir les details du compte"><i class="fas fa-eye mr-2" title="Plus de détails" ></i> </a>
                  @can('manage-users') 
                            <a href="{{ route('admin.users.edit',$user->id) }}" alt="Modifier les infos"><i class="fas fa-pen mr-2" title="Modifier" ></i> </a> 
                  @endcan

                  @can('delete-users')
                  <form action="{{ route('admin.users.destroy',$user->id) }}" method="POST"  class="d-inline" > 
                    @csrf
                    @method('DELETE') 
                    <a href="{{ route('admin.users.edit',$user->id) }}" alt="Supprimer le compte" class="" ><i class="fas fa-trash" title="Supprimer" ></i> </a> 
                  </form>
                 @endcan 
                  </td>
                </tr>
               
               @endforeach
               </tbody>
              </table>
            </div>
        </div>
              
            </div>
            <!-- /.card-body -->
          </div>
        
        

        
     



        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->

     
      
    </section>
    <!-- /.content -->   

@endsection
