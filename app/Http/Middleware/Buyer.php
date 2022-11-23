<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth; 

use Closure;

class Buyer
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
        if ($user->user_type == "buyer"){
            return $next($request);
        } else {
            return redirect('login');
        }
    }
}
