<?php

namespace App\Http\Middleware;

use Closure;

class SessionLoginUser
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
        if(!session('SessionLoginUser')){
            return redirect('/loginAdmin')->with(['error' => 'You have to login first']);
        }
        return $next($request);
    }
}
