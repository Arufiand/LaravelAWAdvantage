<?php

namespace App\Http\Controllers\Auth;

use App\Actions\actRegisUserController;
use App\Http\Controllers\Controller;

class VerifyEmailController extends Controller
{
    /**
     * Mark the authenticated user's email address as verified.
     */
    public function __invoke($request, actRegisUserController $act)
    {
        $act->__invoke($request);
    }
}
