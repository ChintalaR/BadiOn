<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string ...$guards): Response
    {
        $guards = empty($guards) ? [null] : $guards;
        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check() && Auth::user()->role == 1) {
                return redirect('Admin/home');
            } elseif (Auth::guard($guard)->check() && Auth::user()->role == 2) {
                return redirect('School/home');
            } elseif (Auth::guard($guard)->check() && Auth::user()->role == 3) {
                return redirect('Teacher/home');
            } elseif (Auth::guard($guard)->check() && Auth::user()->role == 4) {
                return redirect('Student/home');
            } elseif (Auth::guard($guard)->check() && Auth::user()->role == 5) {
                return redirect('pending');
            }
        }
        return $next($request);
    }
}
