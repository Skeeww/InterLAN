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
        // Redirect to wait if current url is not wait and current date is before 2021-11-21T00:00:00
        $countdown_end = (strtotime('2021-11-23T00:00:00') < time());
        if (
            !$request->is('wait') &&
            !$countdown_end
        ) {
            return redirect('wait');
        } else if ($request->is('wait') && $countdown_end) {
            return redirect('/');
        }
        return $next($request);
    }
}
