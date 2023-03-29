<?php

namespace App\Http\Controllers\Auth;

use App\Actions\actPassManager;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\View\View;

class NewPasswordController extends Controller
{
    /**
     * Display the password reset view.
     */
    public function create(Request $request): View
    {
        return view('auth.reset-password', ['request' => $request]);
    }

    /**
     * Handle an incoming new password request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store($req, actPassManager $act)
    {
        $passReq = $act->handleNewPassword($req);
    }
}
