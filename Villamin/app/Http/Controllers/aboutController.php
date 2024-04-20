<?php

namespace App\Http\Controllers;
use App\Models\about;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class aboutController extends Controller
{
    //
    public function index()
    {
        if (Auth::check()) {
            $about = about::all();
            return view('admin.sections.about', [
    
                'about' => $about
            ]);
        } else {
            // Redirect the user to the login page or show an error message
            return redirect()->route('login.index')->with('error', 'Please log in to change your password.');
        }
        
    }

    public function update(Request $request, about $id)
    {
        $data = $request->validate([

            'first' => 'required|string',
            'middle' => 'required|string',
            'last' => 'required|string',  
            'description' => 'required|string',
            'month' => 'required|string',
           'day' => 'required|string',
           'year' => 'required|string',
           'site' => 'required|string',
           'email' => 'required|string',
           'number' => 'required|string',
           'role' => 'required|string', 
            'description1' => 'required|string',
            'description2' => 'required|string',
            'description3' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:10048'
          

        ]);
        
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('upload'), $imageName);
            $data['image'] = $imageName;
        }
        $id->update($data);

        return redirect(route('about.index'));
    }

    public function link($link,$target)
    {
        return redirect("https://{$link}/{$target}");
    }

   
}
