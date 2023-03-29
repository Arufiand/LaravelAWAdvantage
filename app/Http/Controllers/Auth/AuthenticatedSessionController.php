<?php

namespace App\Http\Controllers\Auth;

use App\Actions\actAuthenticatedSession;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    public function store(Request $request, actAuthenticatedSession $act): RedirectResponse
    {
        $act->handleLoginRequest($request);
        return redirect()->intended(RouteServiceProvider::HOME);
    }

    public function destroy(Request $request, actAuthenticatedSession $act): RedirectResponse
    {
        $act->handleLogoutRequest($request);
        return redirect('/');
    }
}
