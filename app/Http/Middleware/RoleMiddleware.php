<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role = 'owner'): Response
    {
        dd($request->all());
        if(auth()->user() && auth()->user()->level >= 5){
            return $next($request);
        }
        else{
            return redirect('/login');
        }
    }
}
