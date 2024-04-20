<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\home;

class adminController extends Controller
{
    //

    public function index()
    {
        if (Auth::check()) {
            return view('admin.index');
        } else {
            // Redirect the user to the login page or show an error message
            return redirect()->route('login.index')->with('error', 'Please log in to change your password.');
        }
       
    }

    public function home()
    {
        $home = home::all();
        return view('admin.section.home', [

            'home' => $home
        ]);
    }

    public function update(Request $request,home $id)
    {
        $data = $request->validate([

            'name' => 'required|string',
            'role' => 'required|string', 
            'description' => 'required|string'

        ]);

        $id->update($data);

        return redirect(route('admin.home'));
    }

    public function updatepass()
    {
       
        return view('admin.section.setting');
    }
}
