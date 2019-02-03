<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class GuzzleController extends Controller
{
    //
	
	public function getDataFromApi() {
		
		 $client = new \GuzzleHttp\Client();
         $response = $client->request('GET','http://localhost:5001/home');
		//var_dump($response);
		
		$body = $response->getBody();
		
		echo $body;
	}
}
