<?php

namespace App\Http\Middleware;

use Closure;

class AccessTokenCheck
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
        if($request->has('access_token')){
            return $next($request);
        }else{
        return redirect('/');
        }
    }
}
