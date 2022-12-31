<?php

namespace App\Http\Controllers\ong;

use App\Models\Story;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SocialeController extends Controller
{
    //
    public function index()
    {
        $sociales = Story::where('type', 'social')->paginate(6);
        $stories = Story::where('type', 'culture')->take(2)->get();
        return view('template.nosmissions.sociales', compact('sociales','stories'));
    }

    public function show($id)
    {
        $sociale = story::find($id);
        
        return view('template.show.sociale', compact('sociale'));
    }
}
