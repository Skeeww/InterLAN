<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CountdownReached
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
        // Redirect to "/wait" while the current time is not 2021-11-22T00:00:00+00:00(UTC+1)
        if ($request->getUri() === route('wait')) {
            return $next($request);
        } else if (date('Y-m-d\TH:i:s\Z') < '2021-11-22T00:00:00+01:00') {
            return redirect('/wait');
        } else {
            return redirect('/');
        }
    }
}
