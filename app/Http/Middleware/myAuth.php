<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Session;

class myAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $path = $request->path();
        if(($path == 'login' || $path == 'register') && Session::get('admin')){
            return redirect('/');
        }
        elseif(($path != 'login' && !Session::get('admin')) && ($path != 'register' && !Session::get('admin'))){
            return redirect('/login');
        }
        return $next($request);
    }
}
