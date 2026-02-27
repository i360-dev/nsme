<?php

namespace App\Http\Responses;

use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;

class LoginResponse implements LoginResponseContract
{
    public function toResponse($request)
    {
        $user = $request->user();

        if ($user->hasAnyRole(['super_admin', 'admin', 'board'])) {
            return redirect('/admin');
        }

        return redirect('/dashboard');
    }
}
