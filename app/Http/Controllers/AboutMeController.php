<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Competance;
use App\Models\Profile;
use App\Models\AboutMePage;
use App\Models\University;
class AboutMeController extends Controller
{
    public function index(Request $request)
    {
        $competances = Competance::all();
        $profile = Profile::first();
        $universityitem = University::all();
        $aboutmepage = new AboutMePage($profile,$competances,$universityitem);
    
      
        return view('aboutme')->with('aboutmepage', $aboutmepage);
    }
}
