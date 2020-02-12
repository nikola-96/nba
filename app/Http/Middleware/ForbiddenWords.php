<?php

namespace App\Http\Middleware;

use Closure;

class ForbiddenWords
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
        if ($request->content == 'hate' ||
         $request->content == 'idiot' ||
         $request->content == 'stupid' ) {
             
            return redirect('forbidden_comment');
        }

        return $next($request);    }
}
