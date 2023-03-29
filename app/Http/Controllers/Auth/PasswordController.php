<?php

namespace App\Http\Controllers\Auth;

use App\Actions\actPassManager;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class PasswordController extends Controller
{
    /**
     * Update the user's password.
     */
    public function update(Request  $request, actPassManager $act): RedirectResponse
    {
        $act->handleupdatePass($request);
        return back()->with('status', 'password-updated');
    }
}
