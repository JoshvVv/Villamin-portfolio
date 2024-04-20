<?php

namespace App\Http\Controllers;
use App\Models\skill;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class skillController extends Controller
{
    //

    public function index()
    {
        if (Auth::check()) {
            $skill = skill::all();
            return view('admin.sections.skill', [
    
                'skill' => $skill
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
            'email' => 'required|string',
            'role' => 'required|string',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10048',

        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('upload'), $imageName);
            $data['image'] = $imageName;
        }

        $addskill = skill::create($data);
        return redirect(route('skill.index'));
    }

    public function update(Request $request,skill $id)
    {
        $data = $request->validate([

            'name' => 'required|string',
            'email' => 'required|string',
            'role' => 'required|string',
            'description' => 'required|string'
        ]);
        $id->update($data);
        return redirect(route('skill.index'));
    }

    public function destroy(Request $request,skill $id)
    {

        $id->delete();
        return redirect(route('skill.index'));
    }

}
