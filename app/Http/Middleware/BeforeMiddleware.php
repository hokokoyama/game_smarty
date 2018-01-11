<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Log;

class BeforeMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next){
        if(isset($request['email'])){
          return $next($request);
        }
        if(isset($request['user_id'])){
          return $next($request);
        }
        header('location: /');
        exit();
    }
}
