<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    // We map one URL / URI to one operation.
	// one operation -> one controller function
	// one uri -> one controller function in Routes
	
	private $employeeList;
	
	public function __construct() {
		$this->employeeList = array("Hitesh",
		                      "Rajat",
							  "Akash",
							  "Dheeraj",
							  "Karan");
		
	}
	
	public function all() {
		
		
		//print_r($this->employeeList);
		
		//return $this->getEmployeeList();
		
		$empList = $this->getEmployeeList();
		
		return view('employeeList',with(compact('empList')));
	}
	
	public function get($id) {
		
		$empList = $this->getEmployeeList();
		
		foreach($empList as $emp) {
			if($emp["id"] == $id)
			{
				 if($emp["role"]=="ceo") {
					 return view('employeeCEO');
				 }else if($emp["role"]=="developer"){
					 return view('employeeDeveloper');
				 }else if($emp["role"]=="admin") {
					 return view('employeeAdmin');
				 }else {
					 return "No role defined for the user";
				 }
			}
		}
		
		return "No employee found with id:$id";
		
	}
	
	public function update($record) {
		//TODO
	}
	
	public function create($record) {
		//TODO
	}
	
	public function remove($id) {
		//TODO
	}
	
	/*public function checkAuth($username,$password) {
		if($username=="hitesh" && $password=="ahuja"){
			return "authenticated";
		}else {
			return "try again";
		}
	}*/
	
	public function checkAuth(Request $request) {
		

		
		$username = $request->input('username');
		$password = $request->input('password');
		
		if($username=="hitesh" && $password=="ahuja"){
			return "authenticated";
		}else {
			return "try again";
		}
	}
	
	private function getEmployeeList() {
		$empList = array(array("id" => 1,
		                       "name" =>"hitesh",
							   "role" =>"admin"),
		                 array("id" => 2,
		                       "name" =>"rajat",
							   "role" =>"developer"),
						 array("id" => 3,
		                       "name" =>"akash",
							   "role" =>"ceo"),
						array("id" => 4,
		                       "name" =>"Avnish",
							   "role" =>"cfo"));
							   
		return $empList;					   
	}
}
