<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Auth;

class Authenticate extends Middleware
{
    public function handle($request, Closure $next, ...$guards)
    {
        foreach ($guards as $guard)
        {
            if ($guard === config('common.guard.admin') && !Auth::guard($guard)->check())
            {
                return redirect()->route('admin');
            }
        }
        return $next($request);
    }
}
