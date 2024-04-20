<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\contact;

class contactController extends Controller
{
    //

    public function index()
    {
        if (Auth::check()) {
            $contact = contact::all();
            return view('admin.section.contact',[

                'contact' => $contact
        ]);
        } else {
            // Redirect the user to the login page or show an error message
            return redirect()->route('login.index')->with('error', 'Please log in to change your password.');
        }
       
    }

    public function update(Request $request, contact $id)
    {
        $data = $request->validate([

            'number' => 'required|string', 
            'location' => 'required|string',
            'email' => 'required|string',
            'site' => 'required|string',

        ]);

        $id->update($data);
        return redirect(route('contact.index'));
    }
}
