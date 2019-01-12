<?php

namespace App\Http\Middleware;

use Closure;
//use Response;
use Illuminate\Http\Response;

class CustomAuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
		$username= $request->input("username");
		$password = $request->input("password");
		if($username=="abcd" && $password=="abcd@123")
			return $next($request);
		else {
			$response = new Response();
			return $response;
		}
    }
}
