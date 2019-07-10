<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;


use Closure;

class CheckMurid
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        
        if (!Auth::check()) {
            return redirect('/my');
        }else if(!$request->user()->hasRole($role)){
            return redirect('/my');
        }
        return $next($request);
    }
}
