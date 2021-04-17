<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Role
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
        if (Auth::user()->type == 'SUPER_ADMIN') { // if the current role is Administrator
            return $next($request);
        }
        abort(403, "You are not authorized to access this page.");
        // return redirect('/'); // redirecting to landing page
    }
}
