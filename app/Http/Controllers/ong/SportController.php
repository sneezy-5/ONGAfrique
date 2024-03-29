<?php

namespace App\Http\Controllers\ong;

use App\Models\Story;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SportController extends Controller
{
    //

    public function index()
    {
        $sports = Story::where('type', 'sport')->take(6)->orderBy('created_at', 'desc')->get();

        // $stories = Story::where('type', 'sante')->take(3)->get();

        return view('template.nosmissions.sports', compact('sports',));
    }

    public function show($id)
    {
        if( story::where('id',$id)->exists()){
            $sport = story::find($id);
            // dd($id);
        }else{
            return response()->view('404', [], 404);
        }
        
        return view('template.show.sport', compact('sport'));
    }
}
