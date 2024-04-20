<?php

namespace App\Http\Controllers;
use App\Models\education;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class educationController extends Controller
{
    //
    public function index()
    {
        if (Auth::check()) {
            $education = education::all();
            return view('admin.sections.socials', [
    
                'education' => $education
            ]);
        } else {
            // Redirect the user to the login page or show an error message
            return redirect()->route('login.index')->with('error', 'Please log in to change your password.');
        }
       
    }

    public function add(Request $request)
    {
        $data = $request->validate([

            'name' => 'required|string',
            'icon' => 'required|string',
            'target' => 'required|string',
            'link' => 'required|string', 
           

        ]);

        $addeducation = education::create($data);
        return redirect(route('education.index'));
    }

    public function update(Request $request,education $id)
    {
        $data = $request->validate([

            'name' => 'required|string',
            'icon' => 'required|string',
            'link' => 'required|string',
            'target' => 'required|string',

        ]);

        $id->update($data);
        return redirect(route('education.index'));
    }

    public function destroy(Request $request,education $id)
    {

        $id->delete();
        return redirect(route('education.index'));
    }
}
