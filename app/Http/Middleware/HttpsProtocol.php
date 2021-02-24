<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;

class HttpsProtocol {

    public function handle($request, Closure $next)
    {
        $var=env("ENABLE_REDIRECT_HTTPS",false);
        if (!$request->secure() && $var ) {
            return redirect()->secure($request->getRequestUri());
        }

        return $next($request);
    }
}
