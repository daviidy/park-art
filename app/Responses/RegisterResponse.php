<?php

namespace App\Responses;

use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Laravel\Fortify\Contracts\RegisterResponse as RegisterResponseContract;

class RegisterResponse implements RegisterResponseContract
{


    public function toResponse($request)
    {

        $home = ((Auth::user()->role_id == 1) ? config('fortify.registered_client') : (Auth::user()->role_id == 2 ? config('fortify.registered_freelance') : ''));
            return $request->wantsJson()
            ? new Response('', 201)
            : redirect($home);
    }
}