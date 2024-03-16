<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\RateLimiter;
class RateLimitEmails
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        $ip = $request->ip();
    
        // Define a rate limiter for IP addresses.
        $limiterName = 'email_rate_limit:' . $ip;
    
        // Check if the IP address has exceeded the rate limit.
        if (RateLimiter::tooManyAttempts($limiterName, 2)) {
            // You can handle this case as you prefer, such as returning an error response.
            return response('Too many email requests from this IP address.', 429);
        }
    
        // Continue with the request.
        return $next($request);
    }
}
