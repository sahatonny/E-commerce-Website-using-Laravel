<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class UserController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;


    public function profile()
    {
        return view('user.profile');
    }

    public function settings()
    {
        return view('user.settings');
    }
}
