<?php

namespace App\Http\Controllers\Auth;

use App\Actions\actEmailverifNotifandPrompt;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;

class EmailVerificationNotificationController extends Controller
{
   
    public function store($req, actEmailverifNotifandPrompt $act): RedirectResponse
    {
        $act->handleSendEmailNotif($req);
        return back()->with('status', 'verification-link-sent');
    }
}
