<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use SoftDeletes;

class Dogs extends Model
{

	protected static function boot(){
		
		parent::boot();

		static::addGlobalScope('age', function (Builder $builder){
			$builder->where('age','>',8);
		});
	}
}
