<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class UserACL
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $userACL)
    {
        if(auth()->user()->role_id == $userACL){
            return $next($request);
        }
          
        // return redirect()->route('login');
        // return response()->json(['You do not have permission to access this page.']);
        return response()->view('errors.check-permission');
    }
}
