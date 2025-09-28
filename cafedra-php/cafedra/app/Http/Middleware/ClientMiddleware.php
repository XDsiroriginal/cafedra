<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ClientMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        if (!auth()->check()) {
            return response()->json(['message' => 'Login failed'], 401);
        }

        if (!auth()->user()->isClient()) {
            return response()->json(['message' => 'Forbidden for you'], 403);
        }

        return $next($request);
    }
}
