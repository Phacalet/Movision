<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;


use Closure;

class AuthLock
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure                 $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next)
    {  

       if(Auth::check())
       {

        // If the user does not have this feature enabled, then just return next.
        if (!$request->User()->hasLockoutTime()) {
            // Check if previous session was set, if so, remove it because we don't need it here.
            if (session('lock-expires-at')) {
                session()->forget('lock-expires-at');
            }

            return $next($request);
        }

        if ($lockExpiresAt = session('lock-expires-at')) {
            if ($lockExpiresAt < now()) {
                return redirect()->route('login.locked');
            }
        }
       
        session(['lock-expires-at' => now()->addMinutes($request->User()->getLockoutTime())]);
        }  

     return $next($request);
    }
}