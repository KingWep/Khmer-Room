<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $role  Role to check (e.g., 'admin')
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $role)
    {
        // Make sure user is logged in
        if (!Auth::check()) {
            return redirect('/show-login'); // redirect if not logged in
        }

        // Check user role
        if (Auth::user()->role !== $role) {
            // Redirect normal users to /home
            return redirect('/');
        }
        return $next($request);
    }
}
