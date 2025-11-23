<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class isResepsionis
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, \Closure $next){
    if (session('userroleid') == 4) {
        return $next($request);
    }
    return redirect('/home')->withErrors('Akses ditolak: Anda bukan resepsionis!');
    }

}
