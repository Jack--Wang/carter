<?php

namespace Woolf\Carter\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;

class RedirectIfLoggedIn
{

    public function handle($request, Closure $next)
    {
        if (auth()->check()) {
        	$shop = $request->get('shop');
            return redirect()->route('shopify.dashboard',['shop' => $shop]);
        }

        return $next($request);
    }
}
