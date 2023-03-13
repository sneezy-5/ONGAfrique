<?php

namespace App\Http\Controllers\ong;

use App\Models\Story;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SanteController extends Controller
{
    public function index()
    {
        $santes = Story::where('type', 'sante')->take(6)->orderBy('created_at', 'desc')->get();
        $stories = Story::where('type', 'sport')->take(3)->get();
        // $storiess = Story::where('video')->take(3)->get();
        return view('template.nosmissions.santes', compact('santes','stories',));
    }

    public function show($id)
    {
        if( story::where('id',$id)->exists()){
            $sante = story::find($id);
            // dd($id);
        }else{
            return response()->view('404', [], 404);
        }
       
        
        return view('template.show.sante', compact('sante'));
    }
}
