<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
//use Log;
use App\Events\EmployeeCreated;

use Auth;

class EmployeeController extends Controller
{

	public function __construct() {
		//$this->middleware('auth');
	}
	
	public function get($id) {
		
		
		$employee = Employee::find($id);
		$user = Auth::user();
		
		echo $user->name;
		
		//$address = $employee->address_book;
		//echo $address->id;
		//return $employee;
		
		//$phones = $employee->phone;
		
		/*if(!isset($employee)) {
			Log::error("Employee API Call for id:".$id);
		} else {
			Log::info("Employee API Call for id:".$id);
		}*/
		
		return $employee;
	}
	
	public function all() {
		
	}
	
	public function create(Request $request) {
		//Log::info("Employee API Call for create");
		$name = $request->input('name');
		$employee = new Employee();
		
		$employee->name = $name;
		
		$employee->save();
		
		event(new EmployeeCreated($employee));
		
		return $employee;
		
	}
	
	public function update(Request $request) {
		//Log::info("Employee API Call for update");
		$id = $request->input('id');
		$name = $request->input('name');
		
		$employee = Employee::find($id);
		$employee->name = $name;
		$employee->save();
		
		return $employee;
	}
	
	public function delete() {
		
	}
	
	public function projects($id) {
		//Log::info("Employee API Call for projects");
		$employee = Employee::find($id);
		$projects = $employee->project;
		
		return $projects;
	}
	
}
