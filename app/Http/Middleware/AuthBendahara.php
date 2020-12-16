<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthBendahara
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (session('role') == 'bendahara') {
            return $next($request);
        } else {
            session()->flush();
            return redirect()->route('login');
        }
        return $next($request);
    }
}
