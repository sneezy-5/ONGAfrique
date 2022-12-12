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
        $educations = Story::where('type', 'education')->paginate(8);
        $stories = Story::paginate(3);
        return view('template.nosmissions.educations', compact('educations','stories'));
        
    }

    public function show($id)
    {
        $education = Story::find($id);
        
        return view('template.show.education', compact('education'));
    }
}
