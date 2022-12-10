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
        $sports = Story::where('type', 'sport')->paginate(8);
        
        return view('template.nosmissions.sports', compact('sports'));
    }

    public function show($id)
    {
        $sport = story::find($id);
        
        return view('template.show.sport', compact('sport'));
    }
}
