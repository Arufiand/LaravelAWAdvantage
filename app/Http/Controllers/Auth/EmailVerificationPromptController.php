<?php

namespace App\Http\Controllers\Auth;

use App\Actions\actEmailverifNotifandPrompt;
use App\Http\Controllers\Controller;


class EmailVerificationPromptController extends Controller
{
    /**
     * Display the email verification prompt.
     */
    public function __invoke($request, actEmailverifNotifandPrompt $act) 
    {
        $prompter = $act->handleEmailverifPrompter($request);
    }
}
