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
        $stories = Story::where('type', 'economie')->take(3)->get();
        return view('template.nosmissions.educations', compact('educations','stories'));
        
    }

    public function show($id)
    {
        if( story::where('id',$id)->exists()){
            $education = story::find($id);
            // dd($id);
        }else{
            return response()->view('404', [], 404);
        }
        
        
        return view('template.show.education', compact('education'));
    }
}
