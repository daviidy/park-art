<?php

namespace App\Responses;

use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;

class LoginResponse implements LoginResponseContract
{

    public function toResponse($request)
    {
        
        // below is the existing response
        // replace this with your own code
        // the user can be located with Auth facade
       // $home = (Auth::user()->role_id === 1) ? config('fortify.login_client') : ((Auth::user()->role_id === 2) ? config('fortify.login_freelance') : null);
       $home = null;
       switch (Auth::user()->role->name) {
            case 'client' : $home =  config('fortify.login_client');
                break;
            case 'freelance' : $home =  config('fortify.login_freelance');
                break;
            case 'admin' : $home =  config('fortify.login_admin');
                break;
            default: $home = null;    
         }  

        return $request->wantsJson()
                        ? new Response('', 201)
                        : redirect($home);
}

}