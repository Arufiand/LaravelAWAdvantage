<?php

namespace App\Http\Controllers\Auth;

use App\Actions\actRegisUserController;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store($req, actRegisUserController $act): RedirectResponse
    {
        $act->handleRegisUser($req); 
        return redirect(RouteServiceProvider::HOME);
    }
}
