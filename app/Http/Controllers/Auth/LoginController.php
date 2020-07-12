<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
   // protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('guest')->except('logout');

        $this->middleware('guest')->except([
            'logout',
            'locked',
            'unlock'
        ]);
    }

    protected function redirectTo()
    {
      /* if(Auth::User()->roles->pluck('name')->contains('Super Admin'))
       {
           return '/admin/users';
       } 
       elseif(Auth::User()->roles->pluck('name')->contains('Admin')) {
            return '/admin/users';
       } 
       else 
       { */
      /* dd(Auth::User()->getLockoutTime()); */
      
      if (Auth::User()->getLockoutTime() > 0) {
         session(['lock-expires-at' => now()->addMinutes(Auth::User()->User()->getLockoutTime())]);
      }
          
           return '/home';
      /*  } */
    }



   /* Lock screen functions*/
    public function locked()
    {
    if(!session('lock-expires-at')){
        return redirect('/');
    }

    if(session('lock-expires-at') > now()){
        return redirect('/');
    }

    return view('auth.locked');
    }

    
    public function unlock(Request $request)
    {
    $check = Hash::check($request->input('password'), $request->User()->password);

    if(!$check){
        return redirect()->route('login.locked')->withErrors([
            'Mot de passe incorrecte !'
        ]);
    }

     session(['lock-expires-at' => now()->addMinutes($request->user()->getLockoutTime())]);

     return redirect('/');
     }
}
