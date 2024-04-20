<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;


class AuthController extends Controller
{
    //
    public function login(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    $credentials = $request->only('email','password');

    if (Auth::attempt($credentials)) {
        $user = Auth::user();
        $request->session()->put('user_name', $user->name);
        // Authentication successful, redirect to a desired location
        $request->session()->flash('alert', ['type' => 'success', 'message' => 'Login Successful!']);
        return redirect()->route('admin.index');
    } else {
        // Authentication failed, redirect back with errors
        $request->session()->flash('alert', ['type' => 'error', 'message' => 'Login Failed! Please check your credentials.']);
        return redirect()->back();
    }
}



     


    

    public function reg(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:users,email',
            'name' => 'required|string',
            'password' => 'required|string|min:8',
        ]);

        $user = User::create([
            'email' => $request->email,
            'name' => $request->name,
            'password' => bcrypt($request->password),
        ]);

        return redirect()->route('admin.index'); // Change to your desired route after registration
    }

    public function newpass()
{
    // Check if the user is authenticated
    if (Auth::check()) {
        return view('login.newpass');
    } else {
        // Redirect the user to the login page or show an error message
        return redirect()->route('login.index');
    }
}

    public function savepass(Request $request)
    {
        $request->validate([
            'pass1' => 'required|min:8', // Add any validation rules as needed
            'pass2' => 'required|same:pass1',
        ]);
    
        // Check if the user is authenticated
        if (Auth::check()) {
            $user = Auth::User();
            $user->password = bcrypt($request->input('pass1'));
            $user->save();
            $request->session()->flash('alert', ['type' => 'success', 'message' => 'New password save Successful!']);
            return redirect()->route('admin.updatepass');
        } else {
            // Handle the case where the user is not authenticated
            // Redirect the user to the login page or show an error message
            $request->session()->flash('alert', ['type' => 'error', 'message' => 'Confirm Password Doesnt match.']);
            return redirect()->route('admin.updatepass')->with('error', 'User is not authenticated!');
        }
    }

    

public function logout()
{
    Auth::logout(); // This will clear the authentication information from the session
    session()->flash('alert', ['type' => 'success', 'message' => 'Logout Successful!']);
    return redirect()->route('login.index');
}
}
