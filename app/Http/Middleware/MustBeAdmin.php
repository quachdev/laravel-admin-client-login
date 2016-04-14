<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;


class MustBeAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // $user = $request->user();

        // if($user && $user->isAdmin()) {
        //     return $next($request);
        // } elseif ($user) {
        //     return redirect('home');
        // }        

        if(Auth::user() && Auth::user()->isAdmin()) {
            return $next($request);
        } elseif (Auth::user()) {
            return redirect('home');
        }
        
        return redirect()->guest('login');

    }
}
