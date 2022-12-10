<?php

namespace App\Http\Controllers\ong;

use App\Models\Story;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class welcomeController extends Controller
{
    //
    public function index()
    {
        $cultures = Story::where('type', 'culture')->first();
        $economies = Story::where('type', 'economie')->first();
        $educations = Story::where('type', 'education')->first();
        $santes = Story::where('type', 'sante')->first();
        $sociales = Story::where('type', 'sociale')->first();
        $sports = Story::where('type', 'sport')->first();
        
        return view('welcome', compact('cultures','economies','educations',
                                        'santes','sociales','sports',));
    }
}
