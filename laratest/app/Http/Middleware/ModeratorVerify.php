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
       
            if($request->session()->get('type')=='Moderator' )
            {

                return $next($request);
            }
            elseif($request->session()->get('type')=='Admin' )
            {

                return $next($request);
            }
           
        
        else
        {
            $request->session()->flash('errorMsg','Session M Validation Error!');
            return redirect()->route('index');

        }
    }
}
