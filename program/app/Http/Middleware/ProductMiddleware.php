<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

use Illuminate\Http\Request;

class ProductMiddleware
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
       if (Auth::check() && Auth::user()->roleid == config('role.role.Admin')){
        return redirect()->route('listAdmin');

       }elseif(Auth::check() && Auth::user()->roleid == config('role.role.Manager')){
        return redirect()->route('listManager');

       }elseif(Auth::check() && Auth::user()->roleid == config('role.role.User')){
        return redirect()->route('listUser');
       }else{
        return redirect()->route('home');
       }
    }
        
}
