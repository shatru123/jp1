<?php

namespace App\Http\Middleware;

use Closure;

class Is_Admin
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
        if(!auth()->user())
        {
            return redirect('login');
        }else {
            if (auth()->user()->isAdmin()) {
                return $next($request);
            }
            return redirect('admin/jobs');
        }
    }
}
