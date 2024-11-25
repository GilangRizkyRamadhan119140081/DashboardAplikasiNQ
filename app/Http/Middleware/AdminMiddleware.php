<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Check if user is authenticated
        if (!Auth::check()) {
            return redirect()->route('login'); // Redirect to login route
        }
        // if (Auth::user()->name=='Admin') {
        //     return redirect()->route('login');

        // }

        return $next($request); // Allow request to proceed if user is authenticated and an admin
    }
}

