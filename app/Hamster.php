<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hamster extends Model
{

	protected $fillable = ['name'];

    function users(){
        return $this->belongsToMany('App\User')->withPivot('role');
    }


}
