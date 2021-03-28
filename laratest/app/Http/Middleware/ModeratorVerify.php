<?php

namespace App\Http\Middleware;

use Closure;

class ModeratorVerify
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
        if($request->session()->has('username'))
        {
            if($request->session()->get('type')=='Moderator' )
            {

                return $next($request);
            }
            else
            {

                $request->session()->flash('userPermissionError',' Not an Moderator Account');
                return redirect()->route('dashboard');
            }
        }
        else
        {
            $request->session()->flash('errorMsg','Session Validation Error!');
            return redirect()->route('login');

        }
    }
}
