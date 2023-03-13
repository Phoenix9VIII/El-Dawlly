<?php

namespace App\Http\Middleware;

use Closure;

class secure_project
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
        if(! $request->session()->get('t_email')){
               return redirect('/signup');

        }
        return $next($request);
    }
}
