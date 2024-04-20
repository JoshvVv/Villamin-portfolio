<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;

class loginController extends Controller
{
    //

    public function index()
    {
        return view('login.index');
    }

    public function login(Request $request)
    {
       
    }

    public function forgot()
    {
        return view('login.forgot');
    }

    public function newpass()
    {
        return view('login.newpass');
    }
}
