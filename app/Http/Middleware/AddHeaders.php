<?php
namespace App\Http\Middleware;
use Closure;
class AddHeaders
{
    public function handle($request, Closure $next)
    {
        $response = $next($request);
        $response
            ->header('Access-Control-Allow-Origin', env('ACCESS_CONTROL_ALLOW_ORIGIN', '*'))
            ->header('Access-Control-Allow-Methods', env('ACCESS_CONTROL_ALLOW_METHODS', '*'))
            ->header('Access-Control-Allow-Headers', env('ACCESS_CONTROL_ALLOW_HEADERS', 'Content-Type'));
        return $response;
    }
}
