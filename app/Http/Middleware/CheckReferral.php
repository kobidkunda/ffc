<?php

namespace App\Http\Middleware;

use Closure;

class CheckReferral
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

// Check that there is not already a cookie set and that we have 'ref' in the url
        if (! $request->hasCookie('utm_source') && $request->query('utm_source') ) {
            // Add a cookie to the response that lasts 5 years (in minutes)
            $response->cookie( 'utm_source', encrypt( $request->query('utm_source') ), 525600 );
        }


        if (! $request->hasCookie('utm_medium') && $request->query('utm_medium') ) {
            // Add a cookie to the response that lasts 5 years (in minutes)
            $response->cookie( 'utm_medium', encrypt( $request->query('utm_medium') ), 525600 );
        }


        if (! $request->hasCookie('utm_campaign') && $request->query('utm_campaign') ) {
            // Add a cookie to the response that lasts 5 years (in minutes)
            $response->cookie( 'utm_campaign', encrypt( $request->query('utm_campaign') ), 525600 );
        }



          if (! $request->hasCookie('utm_term') && $request->query('utm_term') ) {
            // Add a cookie to the response that lasts 5 years (in minutes)
            $response->cookie( 'utm_term', encrypt( $request->query('utm_term') ), 525600 );
        }

        return $response;
    }
}
