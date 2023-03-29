<?php

namespace App\Http\Controllers\Auth;

use App\Actions\actUserManager;
use App\Http\Controllers\Controller;

class VerifyEmailController extends Controller
{
    /**
     * Mark the authenticated user's email address as verified.
     */
    public function __invoke($request, actUserManager $act)
    {
        $act->__invoke($request);
    }
}
