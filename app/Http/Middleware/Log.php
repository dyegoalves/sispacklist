<?php

namespace App\Http\Middleware;
use Auth;
use Closure;

class Log
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
        if(!Auth::check()){
             return redirect()
                            ->route('login')
                            ->with('error', 'Favor logar no sistema')
                            ->withInput();
        }
    return $next($request);
    }
}
