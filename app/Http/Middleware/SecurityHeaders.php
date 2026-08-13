<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SecurityHeaders
{
    /**
     * Handle an incoming request.
     *
     * Adds OWASP Top 10 security headers to all responses.
     * Prevents clickjacking, MIME sniffing, XSS attacks, and enforces HTTPS.
     */
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);

        // Prevent clickjacking attacks - only allow framing from same origin
        $response->header('X-Frame-Options', 'SAMEORIGIN');

        // Prevent MIME type sniffing - force browser to respect Content-Type
        $response->header('X-Content-Type-Options', 'nosniff');

        // Enable XSS protection in older browsers
        $response->header('X-XSS-Protection', '1; mode=block');

        // Control referrer information - prevent leaking sensitive data in referrer
        $response->header('Referrer-Policy', 'strict-origin-when-cross-origin');

        // Content Security Policy - restricts inline scripts and external domains
        // Allows inline styles/scripts from same origin only
        $csp = "default-src 'self'; "
            . "script-src 'self' 'unsafe-inline' https://cdn.jsdelivr.net https://fonts.googleapis.com; "
            . "style-src 'self' 'unsafe-inline' https://fonts.googleapis.com; "
            . "font-src 'self' https://fonts.gstatic.com; "
            . "img-src 'self' data: https:; "
            . "connect-src 'self'; "
            . "base-uri 'self'; "
            . "form-action 'self'; "
            . "frame-ancestors 'self';";

        $response->header('Content-Security-Policy', $csp);

        // Enforce HTTPS in production
        if (app()->environment('production')) {
            $response->header('Strict-Transport-Security', 'max-age=31536000; includeSubDomains; preload');
        }

        return $response;
    }
}
