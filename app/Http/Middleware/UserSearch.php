<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class UserSearch
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
        $request->route()->setParameter("query",$request->query->get("query")?:"");
        return $next($request);
    }
}
