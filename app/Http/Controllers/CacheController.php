<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use Cache;

class CacheController extends Controller
{
    //
	
	public function getEmpList() {
		
		$empList = Employee::all();
		
		Cache::put('empList',$empList,30);
		
		return $empList;
	}
	
	public function getCacheData() {
		
		if(Cache::has('empList')) {
			echo "Loading data from cache<br/>";
			$empList = Cache::get('empList');
		}
		else {
			echo "Loading data from database<br/>";
			$empList = Employee::all();
			Cache::put('empList',$empList,30);
		}
		
		
		return $empList;
	}
	
	
}
