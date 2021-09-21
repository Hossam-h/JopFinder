<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Setlang
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

        // $lang = 'en';
        // $request->attributes->add(['lang' => 'en']);
        $request->route()->setParameter('lang', 'en');
        // $request->request->set('lang', 'en');

        return $next($request);
    }
}
