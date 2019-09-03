<?php

namespace App\Http\Middleware;

use Closure;

class TestCheck
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
        if (!$request->has('id')) {

            dd('There is no ID in request!');
        }

        return $next($request);
    }
}
