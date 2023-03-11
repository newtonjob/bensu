<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function login()
    {
        if (! Auth::attempt(request()->only(['email', 'password']), request()->boolean('remember'))) {
            throw ValidationException::withMessages(['email' => 'Invalid login credentials!']);
        }

        session()->regenerate();

        return Response::api('Welcome back...');
    }
}
