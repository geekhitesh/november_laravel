<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
	
	public function employee() {
		
		return $this->belongsToMany('App\Employee');
	}
}
