<?php

namespace App;

use App\Traits\LockableTrait;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable,
        LockableTrait;   

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       'civility','name','firstname','email','password','status',
      /* 'name','email','password',*/
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function roles()
    {
        return $this->belongsToMany('App\Role');
    }

    public function hasAnyRole(array $roles)
    {
      return $this->roles()->whereIn('name',$roles)->first();
    }

    public function isAdmin()
    {
        return $this->roles()->where('name','Admin')->first();
    }

    public function isSupervisor()
    {
        return $this->roles()->where('name','Superviseur')->first();
    }




   
  
}
