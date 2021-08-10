<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Console\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class Locale
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
        // Get data from Session, not return default in config
        if ($language = $request->session()->get('lang')) {
            App::setLocale($language);
        };
        return $next($request);
    }
}
