<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Competance;
class AboutMeController extends Controller
{
    public function index(Request $request)
    {
        $competances = Competance::all();
        return view('aboutme')->with('competancesItem', $competances);
    }
}
