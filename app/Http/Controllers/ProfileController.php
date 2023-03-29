<?php

namespace App\Http\Controllers;

use App\Actions\actProfileController;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update( Request $request, actProfileController $act): RedirectResponse
    {
        $act->handleUpdateUser($request);
        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy( Request $request, actProfileController $act): RedirectResponse
    {
        $act->handleDeleteUser($request);
        return Redirect::to('/');
    }
}
