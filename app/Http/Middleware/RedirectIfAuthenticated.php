<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

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
        // if (Auth::user()) {
        //     if (Auth::user()->type == 'student') {
        //         return redirect()->intended('student/studentdash');
        //     } else if (Auth::user()->type == 'teacher') {
        //         return redirect()->intended('teacher/teacherdash');
        //     } else if (Auth::user()->type == 'admin') {
        //         return redirect()->intended('admin/admindash');
        //     }
        // }

        // if (Auth::guard($guard)->check()) {
        //     return redirect()->intended();
        // }
        
        return $next($request);
    }
}
