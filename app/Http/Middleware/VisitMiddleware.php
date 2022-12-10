<?php

namespace App\Http\Middleware;

use App\Models\Visitor;
use Closure;
use DateTime;
use Illuminate\Http\Request;

class VisitMiddleware
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
        $ip_exist = Visitor::where('ip_address',$_SERVER['REMOTE_ADDR']);
        if(!$ip_exist->exists()){
            Visitor::create(['ip_address'=>$_SERVER['REMOTE_ADDR']]);
        }else{
            Visitor::where('ip_address',$_SERVER['REMOTE_ADDR'])->first()->update_at=new DateTime();
        }
        return $next($request);
    }
}
