@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Liste des utiliateurs</div>
                 
                <div class="card-body table-responsive text-nowrap">
                 
                 <!--Table-->
                 <table class="table table-striped">
                 <!--Table head-->
                    <thead>
                        <tr>
                        <th>N°</th>
                        <th>Utilisateur</th>
                        <th>Role</th>
                        <th>Email</th>
                        <th>Action</th>
                        </tr>
                    </thead>
                 <!--Table head-->               
                 <!--Table body-->
                    <tbody>
                    @foreach($users as $user)   
                        <tr>
                        <th scope="row">{{$user->id}}</th>
                        <td>{{$user->name}}</td>
                        <td>{{ implode(', ', $user->roles()->get()->pluck('name')->toArray() )}}</td>
                        <td>{{$user->email}}</td>
                        <td>
                           @can('manage-users') 
                            <a href="{{ route('admin.users.edit',$user->id) }}"><button class="btn btn-primary" >Editer</button> </a> 
                           @endcan

                           @can('delete-users')
                            <form action="{{ route('admin.users.destroy',$user->id) }}" method="POST"  class="d-inline" > 
                              @csrf
                              @method('DELETE')
                               <button class="btn btn-warning" >Supprimer</button>
                            </form>
                           @endcan
                        </td>
                        </tr>
                    @endforeach 
                    </tbody>
                 <!--Table body-->
               </table>
               <!--Table-->  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
