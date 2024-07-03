<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $roles = null): Response
    {
        // if (!Auth::check() || !is_array($roles) && !Auth::user()->hasRole($roles)) {
        //     if (!is_array($roles)) {
        //         $roles = [$roles];
        //     }

        //     return redirect()->route('home');
        // }

        // return $next($request);
    }
}
