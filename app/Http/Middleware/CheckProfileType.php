<?php

namespace App\Http\Middleware;

use Closure;

use App\User;
use Auth;

use Illuminate\Support\Facades\Route;

class CheckProfileType
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

        $response = $next($request);

        $current_route = Route::currentRouteName();

    if($current_route != 'user.select-type') {
        if(Auth::check()) {
            $user = User::find(Auth::user()->id);

            if(!$user->profile_type)
            {
                //return redirect('/user/{id}/select-type');
                return redirect()->route('user.select-type', ['id' => $user->id]);
            } 

            //return redirect('home');

            //     dd($request->all());
             
        }
    }
    return $response;
    }
}
