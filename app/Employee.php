<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\AddressBook;

class Employee extends Model
{
    //
	
	public function address_book() {
		
		return $this->hasOne('App\AddressBook');
	}
	
	public function phone() {
		
		return $this->hasMany('App\Phone');
	}
	
	public function project() {
		
		return $this->belongsToMany('App\Project');
	}
}
