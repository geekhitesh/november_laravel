<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GetController extends Controller
{
    //
	
	public function sum(Request $request) {
		$num1 = $request->input('num1');
		$num2 = $request->input('num2');
		
		return ($num1 + $num2);
	}
}
