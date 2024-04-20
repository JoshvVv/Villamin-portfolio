<?php

namespace App\Http\Controllers;
use App\Models\service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class serviceController extends Controller
{
    //

    public function index()
    {
        if (Auth::check()) {
            $service = service::all();
        
            return view('admin.section.service', [
    
                'service' => $service
            ]);
        } else {
            // Redirect the user to the login page or show an error message
            return redirect()->route('login.index')->with('error', 'Please log in to change your password.');
        }
        
    }

    public function add(Request $request)
    {
        $data = $request->validate([

            'title' => 'required|string',
            'description' => 'required|string' 
           

        ]);

        $addservice = service::create($data);
        return redirect(route('service.index'));
    }

    public function update(Request $request,service $id)
    {
        $data = $request->validate([

            'title' => 'required|string',
            'description' => 'required|string' 
           

        ]);

        $id->update($data);
        return redirect(route('service.index'));
    }

    public function destroy(Request $request,service $id)
    {

        $id->delete();
        return redirect(route('service.index'));
    }
}
