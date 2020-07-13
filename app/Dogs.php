<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Carbon;


class Dogs extends Model
{
	protected $dates = ['birthday'];

	function setNameAttribute($value){
		return $this->attributes['name'] = strtoupper($value);
	}


}
