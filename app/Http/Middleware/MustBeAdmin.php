<?php

namespace App\Http\Middleware;

use Closure;

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
        $user = $request->user();

        if($user && $user->isAdmin()) {
            return $next($request);
        } elseif ($user) {
            return redirect('home');
        }
        // if($user && $user->email == 'johndoe@example.com') {
        //     return $next($request);   
        // }
        // return redirect('/');
        return redirect()->guest('login');

    }
}
