<?php

namespace App\Http\Middleware;

use Closure;
use App\User;
class IfNotVerified
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
      $user = User::where('email', request('email'))->first();
      if(!$user) {
        return back()
               ->withErrors([
                   'message' => 'Register First!'
               ]);
      }

      elseif(!$user->is_verified) {
          return redirect('/login')->withErrors(['Account is not yet verified']);
          }
        return $next($request);
    }
}
