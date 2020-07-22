<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use PHPUnit\Framework\Constraint\Count;

class City extends Model
{
    //
    protected $fillable = ['name','country','status'];

    public function country(){ 
        return $this->belongsTo(Country::class);
       }
}
