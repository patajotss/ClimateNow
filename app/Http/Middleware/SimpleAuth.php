<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SimpleAuth
{
    public function handle(Request $request, Closure $next)
    {
        if (!session()->has('user_id')) {
            return redirect('/login');
        }
        return $next($request);
    }
} 