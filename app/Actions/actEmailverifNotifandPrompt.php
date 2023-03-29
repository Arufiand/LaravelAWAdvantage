<?php

namespace App\Actions;

use Lorisleiva\Actions\Concerns\AsAction;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class actEmailverifNotifandPrompt
{
    use AsAction;

     /**
     * Send a new email verification notification.
     */
    public function handleSendEmailNotif(Request $request)
    {
        if ($request->user()->hasVerifiedEmail()) {
            return redirect()->intended(RouteServiceProvider::HOME);
        }

        $request->user()->sendEmailVerificationNotification();
    }

    /**
     * Display the email verification prompt.
     */
    public function handleEmailverifPrompter(Request $request): RedirectResponse|View
    {
        return $request->user()->hasVerifiedEmail()
                    ? redirect()->intended(RouteServiceProvider::HOME)
                    : view('auth.verify-email');
    }
}
