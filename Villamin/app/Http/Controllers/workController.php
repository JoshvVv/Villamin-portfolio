<?php

namespace App\Http\Controllers;
use App\Models\work;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class workController extends Controller
{
    //

    public function index()
    {
        if (Auth::check()) {
            $work = work::all();
            return view('admin.sections.work', [

                'work' => $work
            ]);
        } else {
            // Redirect the user to the login page or show an error message
            return redirect()->route('login.index')->with('error', 'Please log in to change your password.');
        }
       
    }

    public function site($site)
    {
        return redirect("https://{$site}");
    }

    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'site' => 'required|string',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10048',
        ]);
    
        // Handle file upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('upload'), $imageName);
            $validatedData['image'] = $imageName;
        }
    
        // Create new work instance and save to database
        $work = work::create($validatedData);
    
             
               
    
               
                // Redirect to the index page
                return redirect(route('work.index'));
    }

    public function update(Request $request, work $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'site' => 'required|string',
            'description' => 'required|string',
            
        ]);
    
        
  
        $id->update($validatedData);          
                // Redirect to the index page
                return redirect(route('work.index'));
    }


    public function destroy(Request $request,work $id)
    {

        $id->delete();
        return redirect(route('work.index'));
    }


}
