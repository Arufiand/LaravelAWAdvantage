<?php

namespace App\Http\Controllers\Auth;

use App\Actions\actPassManager;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ConfirmablePasswordController extends Controller
{
    /**
     * Show the confirm password view.
     */
    public function show(): View
    {
        return view('auth.confirm-password');
    }


    public function store(Request $req, actPassManager $act): RedirectResponse
    {
        $act->handleConfirmPass($req);
        return redirect()->intended(RouteServiceProvider::HOME);
    }
}
