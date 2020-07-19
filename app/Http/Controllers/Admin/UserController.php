<?php

namespace App\Http\Controllers\Admin;

use App\Role;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;

class UserController extends Controller
{

    public function __construct()
    {
      $this->middleware('auth');

      /* if ($request->User()->getLockoutTime() > 0) {
        session(['lock-expires-at' => now()->addMinutes($request->User()->getLockoutTime())]);
      } */
    } 

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
   

    public function index()
    {
        //
        $users = User::all();
         
        return view('admin.users.index')->with('users',$users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {   

       if (Gate::denies('manage-users')) {
          return redirect()->route('admin.users.index')->with('warning','Vous n\'êtes pas habilité à paramétrer les utilisateurs !');
       }

        $roles = Role::all();
        //
        return view('admin.users.edit',[
            'user'=>$user,
            'roles'=>$roles
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\User $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
       $user->roles()->sync($request->roles);
        
       $user->name = $request->name;
       $user->firstname = $request->firstname;
       $user->email = $request->email;
      /*  $user->birthday = $request->birthday; 
       $user->phone = $request->phone; */
       $user->civility = $request->civility;
       /* $user->password = $request->Hash::make('password'); 
       $user->status = $request->status;  */

       $user->save();
       return redirect()->route('admin.users.index')->with('success','Modification pris en compte !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        
       if (Gate::denies('delete-users')) {
        return redirect()->route('admin.users.index');
       }
 
        //
        $user->roles()->detach();
        $user->delete();
        return redirect()->route('admin.users.index')->with('danger','Suppression effectuée avec succès !');
    }
}
