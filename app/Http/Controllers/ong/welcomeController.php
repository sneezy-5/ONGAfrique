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
        $cultures = Story::latest('id')->first();
        $economies = Story::latest('id')->first();
        $educations = Story::latest('id')->first();
        $santes = Story::latest('id')->first();
        $sociales = Story::latest('id')->first();
        $sports = Story::latest('id')->first();
        
        return view('welcome', compact('cultures','economies','educations',
                                        'santes','sociales','sports',));
    }
}
