<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;

use Closure;

class Exporter
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next){
        $user = Auth::user();
        if($user->user_type == "exporter"){
            return $next($request);
        } else {
            return redirect('/login');
        }
    }
}
