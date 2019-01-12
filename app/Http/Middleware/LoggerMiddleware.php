<?php

namespace App\Http\Middleware;

use Closure;
use Log;

class LoggerMiddleware
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
		Log::info("Api Call Started");
        $response = $next($request);
		
		Log::info("Api Call Ended");
		
		return $response;
    }
}
