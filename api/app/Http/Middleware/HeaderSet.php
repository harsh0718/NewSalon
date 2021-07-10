<?php

namespace App\Http\Middleware;

use Closure;

/**
 * Class NoCache
 * @package App\Http\Middleware
 */
class HeaderSet
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $response = $next($request);

        $response->header('Cache-Control', 'no-cache, must-revalidate');
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }
}