<?php

namespace App\Http\Controllers\Auth;

use App\Actions\actEmailverifNotifandPrompt;
use App\Http\Controllers\Controller;


class EmailVerificationPromptController extends Controller
{

    public function __invoke($request, actEmailverifNotifandPrompt $act) 
    {
        $act->handleEmailverifPrompter($request);
    }
}
