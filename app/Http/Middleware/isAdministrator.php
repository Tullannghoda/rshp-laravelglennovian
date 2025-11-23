<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class isAdministrator
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, \Closure $next){
    // Cek session userroleid (misal 1 = admin)
    if (session('userroleid') == 1) {
        return $next($request);
    }
    return redirect('/home')->withErrors('Akses ditolak: Anda bukan admin!');
    }

}
