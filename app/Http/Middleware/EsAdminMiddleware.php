<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class EsAdminMiddleware
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
        //$user=Auth::user();
        if($request->user() && auth()->user()->rol_id !=="1"){
            //return redirect('/');
            abort(401);
        }
        return $next($request);
    }
}
