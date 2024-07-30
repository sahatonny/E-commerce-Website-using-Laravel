<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class ForgetPasswordController extends Controller
{
    function forgetPassword(){
        return view('forget-password');
    }

    function forgetPasswordPost(Request $request)
    {
        function forgetPasswordPost(Request $request)
{
    // Validate the email input
    $request->validate([
        'email' => 'required|email|exists:users,email',
    ]);

    // Send the password reset link to the provided email
    $status = Password::sendResetLink(
        $request->only('email')
    );

    // Check the status and return appropriate response
    return $status === Password::RESET_LINK_SENT
                ? back()->with(['status' => __($status)])
                : back()->withErrors(['email' => __($status)]);
}

    }


}

