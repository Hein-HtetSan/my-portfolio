<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AddCorsHeaders
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);
        // add CORS headers only for script files
        if($request->is('public/build/assets/*')){
            $response->headers->set(
                'Access-Control-Allow-Origin', '*');
            )
        }
        return $next($request);
    }
}
