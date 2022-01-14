<?php

namespace App\Http\Middleware;

use App\Models\Player;
use Closure;
use Illuminate\Http\Request;

class LimitRegisterReached
{
    public static $MAX_MEMBERS = 200;

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $nb_members = Player::all()->count();

        if($nb_members >= LimitRegisterReached::$MAX_MEMBERS) {
            return redirect('/')->withErrors(['msg' =>  'Le nombre d\'inscrits maximum a été atteints. Cependant des places peuvent toujours se libérer alors restez à l\'affût ;D']);
        }

        return $next($request);
    }
}
