<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class HomeShortCodeMiddleware
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
        $response = $next($request);
        if(!method_exists($response, 'content')):
            return $response;
        endif;

        $content = str_replace('~', '<span class="bg-success">', $response->content());

        $response->setContent($content);
        return $response;
    }     
}
