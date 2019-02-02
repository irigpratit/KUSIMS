<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Super_Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::user()->role == 1) {
            return $next($request);
        } elseif (Auth::user()->role == 2) {
            return redirect('/admin');
        }
    }
}
