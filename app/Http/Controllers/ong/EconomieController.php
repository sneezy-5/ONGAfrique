<?php

namespace App\Http\Controllers\ong;

use App\Models\Story;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EconomieController extends Controller
{
    //
    public function index()
    {
        $economies = Story::where('type', 'economie')->paginate(6);
        $stories = Story::where('type', 'education')->take(2)->get();
        return view('template.nosmissions.economies', compact('economies','stories'));
        
    }

    public function show($id)
    {
        $economie = Story::find($id);
        
        return view('template.show.economie', compact('economie'));
    }
}
