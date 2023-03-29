<?php

namespace App\Actions;

use Lorisleiva\Actions\Concerns\AsAction;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class actAuthenticatedSession
{
    use AsAction;

    /**
     * Handle an incoming authentication request.
     */
    public function handleLoginRequest(LoginRequest $request)
    {
        $request->authenticate();
        $request->session()->regenerate();
    }

    /**
     * Destroy an authenticated session.
     */
    public function handleLogoutRequest(Request $req)
    {
        Auth::guard('web')->logout();

        $req->session()->invalidate();

        $req->session()->regenerateToken();
    }
}
