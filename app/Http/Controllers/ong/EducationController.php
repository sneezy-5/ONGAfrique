<?php

namespace App\Http\Controllers\ong;

use App\Models\Story;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EducationController extends Controller
{
    //

    public function index()
    {
        $educations = Story::where('type', 'education')->paginate(6);
        $stories = Story::where('type', 'education')->take(2)->get();
        return view('template.nosmissions.educations', compact('educations','stories'));
        
    }

    public function show($id)
    {
        $education = Story::find($id);
        
        return view('template.show.education', compact('education'));
    }
}
