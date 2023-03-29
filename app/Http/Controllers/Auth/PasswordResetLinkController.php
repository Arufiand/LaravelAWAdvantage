<?php

namespace App\Http\Controllers\Auth;

use App\Actions\actPassManager;
use App\Http\Controllers\Controller;
use Illuminate\View\View;

class PasswordResetLinkController extends Controller
{
    /**
     * Display the password reset link request view.
     */
    public function create(): View
    {
        return view('auth.forgot-password');
    }

    /**
     * Handle an incoming password reset link request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store($request, actPassManager $act){
        $act->handleLinkPassReq($request);
    }
}
