<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;

class HttpProtocol {

    public function handle($request, Closure $next)
    {
        if (!$request->secure() && App::environment() === 'staging') {
            return redirect()->secure($request->getRequestUri());
        }

        return $next($request);
    }
}
