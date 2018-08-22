<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\Role;
use App\User;
class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {

           /* if ($request->user()->authorizeRoles(['user'])) {
                return redirect()->route('posts.index');
            } else if ($request->user()->authorizeRoles(['admin'])) {
                return redirect()->route('admin.index');
            }*/

            return redirect()->route('posts.index');
        }

        return $next($request);
    }
}
