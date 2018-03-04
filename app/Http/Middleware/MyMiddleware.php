<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class MyMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!isset(Session::get('admin')->id)) {
            return redirect()->route('admin.dang-nhap');
        }

        return $next($request);
    }
}