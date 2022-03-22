<?php

namespace App\Http\Middleware;

use Closure;

class KhiemIsValid
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

            if($request->input ('token') == 'khiemadmin' ){
                return redirect('admin');
            }
            else if ($request->input ('token') == 'khiemuser' ){
                return redirect('user');
            }
            return $next($request);
    }
}
