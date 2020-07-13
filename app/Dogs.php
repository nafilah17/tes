<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;


class Dogs extends Model
{
	public function Dogs(){
		return \App\Dogs::select('name', 'age')
		->where('age', '<', 6)
		->orWhere(function($q){
			$q->where('age','>', 8);
			$q->whereIn('name', ['Jane', 'Jerry']);
		})
		->get();
	}
}
