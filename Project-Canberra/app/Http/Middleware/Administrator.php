<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Administrator
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if($request->url('/admin/save')||$request->url('/admin/add')||$request->url('/admin/view')||
        $request->url('/admin/dashboard')||$request->url('/admin/save')){
            return redirect()->to('/admin');
        }
        return $next($request);
    }
}
