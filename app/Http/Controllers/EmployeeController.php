<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class EmployeeController extends Controller
{

	public function __construct() {
		
	}
	
	public function get($id) {
		$employee = Employee::find($id);
		
		//$address = $employee->address_book;
		//echo $address->id;
		//return $employee;
		
		$phones = $employee->phone;
		
		return $phones;
	}
	
	public function all() {
		
	}
	
	public function create(Request $request) {
		
		$name = $request->input('name');
		$employee = new Employee();
		
		$employee->name = $name;
		
		$employee->save();
		
		return $employee;
		
	}
	
	public function update(Request $request) {
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
		$employee = Employee::find($id);
		$projects = $employee->project;
		
		return $projects;
	}
	
}
