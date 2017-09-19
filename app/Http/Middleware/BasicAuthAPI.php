<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Auth\Guard;

class BasicAuthAPI {

    public function handle($request, Closure $next)
    {
        return Auth::onceBasic('email') ?: $next($request);
    }

}