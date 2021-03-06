<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use App\Role;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
     // protected $redirectTo = RouteServiceProvider::HOME;
    protected $redirectTo = '/register';
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'civility' =>'integer',   
            'name' =>'required|string|min:3|max:225',
            'firstname' => 'required|string|min:3|max:225',  
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8,confirmed', 
            
        ]);
    }
    
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return $user = User::create([
            'civility' => $data['civility'],
            'name' => $data['name'],
            'firstname' => $data['firstname'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'status' => 0,
        ]);
 
        /* dd($user );
        exit(); */
        $role = Role::Select('id')->where('name','Invité')->first();
        
        $user->roles()->attach($role);
        
        return back()->with('success','Votre compte a été créé avec succès !');
        
        
    }
}
