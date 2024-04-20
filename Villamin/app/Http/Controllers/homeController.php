<?php

namespace App\Http\Controllers;

use App\Models\skill;
use App\Models\education;
use App\Models\experience;
use App\Models\home;
use App\Models\service;
use App\Models\about;
use App\Models\work;
use App\Models\contact;

use Illuminate\Http\Request;

class homeController extends Controller
{
    //
    public function index()
    {

        $home = home::all();
        $about = about::all();
        $skill = skill::all();
        $experience = experience::all();
        $service = service::all();
        $work = work::all();
        $contact = contact::all();
        $education = education::all();
       
        return view('landingpage.index',
    [
        'home' => $home,
        'about' => $about,
        'education' => $education,
        'skill' => $skill,
        'service' => $service,
        'work' => $work,
        'contact' => $contact,
        'experience' => $experience
        
    ]);
    }
    public function cv()
    {
        return view('landingpage.cv');
    }
}
