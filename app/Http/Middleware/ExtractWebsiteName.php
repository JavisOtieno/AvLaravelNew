<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\User;
use Illuminate\Http\Request;

class ExtractWebsiteName
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Fetch the full URL
        $fullUrl = $request->fullUrl();

        // Parse the URL to get the host (domain)
        $host = parse_url($fullUrl, PHP_URL_HOST);

        // Explode the host to get parts (subdomain, domain, TLD)
        $hostParts = explode('.av.ke', $host);

        // Check if it's a subdomain or just domain + TLD
        if (count($hostParts) > 2) {
            // If it's a subdomain, return the second part as the website name
            $websiteName = $hostParts[1];
        } else {
            // If it's just domain + TLD, return the first part as the website name
            $websiteName = $hostParts[0];
        }
        

        if(str_contains($fullUrl,'127.0.0.1')){
            $websiteName='test';
        }
        

        $user = User::where('websitename',$websiteName)->first();

        // Optionally, store the website name in the request for later use
        $request->attributes->set('websiteName', $websiteName);
        $request->attributes->set('user', $user);

        return $next($request);
    }
}
