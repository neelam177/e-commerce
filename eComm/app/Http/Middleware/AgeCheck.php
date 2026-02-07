<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AgeCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // echo "echo from age check";
        // echo "<pre>";
        // print_r($request->age);
        if ($request->age < 18) {
            die('you can under 18 and not access this site');
        }
        return $next($request);
    }
}
