<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckAssociationSuspended
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (auth()->check() && auth()->user()->association && auth()->user()->association->suspended) {
            if ($request->route()->getName() === 'evennements.store') {
                return response()->view('errors.unauthorized', [], 403);
            }
        }
        return $next($request);
    }
}
