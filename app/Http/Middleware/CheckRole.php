<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckRole
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
        //  jika akun yang login sesuai dengan role
        //  maka akses sesuai
        //  jika tidak maka akan diarahkan ke welcome

        $roles = array_slice(func_get_args(), 2);

        foreach($roles as $role) {
            $user = \Auth::user()->role;

            if($user == $role) {
                return $next($request);
            }
        }

        return redirect('/home')->with('failed','Anda bukan seorang admin !!!');

    }
}
