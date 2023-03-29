<?php

namespace App\Http\Controllers\Auth;

use App\Actions\actEmailverifNotifandPrompt;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmailVerificationPromptController extends Controller
{

    public function __invoke(Request $request, actEmailverifNotifandPrompt $act) 
    {
        $act->handleEmailverifPrompter($request);
    }
}
