<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class HttpsProtocol {

    public function handle($request, Closure $next)
    {
        if ($request->getScheme() !== 'https' &&
            env("ENABLE_REDIRECT_HTTPS",false)
        ) {
            return redirect()->secure($request->getRequestUri());
        }

        return $next($request);
    }
}
