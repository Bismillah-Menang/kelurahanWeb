<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class PetugasRwMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
            if (Auth::User()->role =='petugas_rw') {
                return $next($request);
            }else {
                Auth::logout();
                return redirect()->route('form')->with(Session::flash('belum login',true));
            }
        }else {
            Auth::logout();
            return redirect()->route('form')->with(Session::flash('belum login',true));
        }
    }
}
