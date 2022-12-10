<?php

namespace App\Http\Controllers\ong;

use App\Models\Story;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SanteController extends Controller
{
    public function index()
    {
        $santes = Story::where('type', 'sante')->get();
        
        return view('template.nosmissions.santes', compact('santes'));
    }

    public function show($id)
    {
        $sante = story::find($id);
        
        return view('template.show.sante', compact('sante'));
    }
}
