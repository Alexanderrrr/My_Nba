<?php

namespace App\Http\Middleware;

use Closure;

class Forbidden_Words_In_Comment
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
      if (str_contains(request('comment'), ['hate', 'idiot', 'stupid'])) {
          return redirect('/forbidden-comment');
      }
      return $next($request);
    }
}
