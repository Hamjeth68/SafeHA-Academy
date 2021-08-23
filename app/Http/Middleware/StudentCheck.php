<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class StudentCheck
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
        if (auth()->check() && auth()->user()->user_type !== '1')
        {
            abort(404);
        }

        return $next($request);
    }
}
