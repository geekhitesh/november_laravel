<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Student;

class StudentController extends Controller
{
    //
	
	public function __construct() {
		
	}
	
	public function index() {
		
	}
	
	public function create(Request $request) {
		
		$name    = $request->input('name');
		$age     = $request->input('age');
		$city    = $request->input('city');
		$college = $request->input('college');
		
		$student = new Student();
		
		$student->name = $name;
		$student->age = $age;
		$student->city = $city;
		$student->college = $college;
		$student->save();
		
		return view('student.register_thanks')->with(compact('student'));
		
		//return $student;
	}
	
	public function get($id) {
		
		$student = Student::find($id);
		
		return view('student.view')->with(compact('student'));
		//return $student;
	}
	
	public function getList() {
		
	}
	
	public function edit(Request $request) {
		
		$id      = $request->input('id');
		$name    = $request->input('name');
		$age     = $request->input('age');
		$city    = $request->input('city');
		$college = $request->input('college');
		
		//$student = new Student();
		
		$student = Student::find($id);
		
		$student->name = $name;
		$student->age = $age;
		$student->city = $city;
		$student->college = $college;
		$student->save();
		
		return view('student.register_thanks')->with(compact('student'));
	}
}
