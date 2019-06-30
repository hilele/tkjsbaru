<?php

namespace App\Http\Middleware;

use Closure;

class isAdmin
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
        if (auth()->check() && $request->user()->role == 'isAdmin'){
            return $next($request);
        }
        elseif (auth()->check() && $request->user()->role == 'isSuperAdmin'){
            return redirect('superAdmin/homeSA');
        }
    }
}
