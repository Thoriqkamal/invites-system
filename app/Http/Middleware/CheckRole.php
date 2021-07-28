<?php

namespace App\Http\Middleware;

use Closure;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, ...$roles)
    {
        if(!session()->has('roles'))
        {
            $reason = "Your session was expired! Please log back in.";
            return redirect('/?notifbox=' . base64_encode('false') . '&reason=' . base64_encode($reason));
        }

        foreach (session()->get('roles') as $key => $val_roles) {
            if(in_array($val_roles, $roles))
            {
                //dd(session()->get('roles'));
                return $next($request);
            }
        }

        return redirect('/restrictedpage');

    }
}
