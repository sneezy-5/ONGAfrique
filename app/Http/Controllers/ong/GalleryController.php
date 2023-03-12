<?php

namespace App\Http\Controllers\ong;

use App\Models\Story;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GalleryController extends Controller
{
    //
   
    public function index()
    {
        $all =story::orderBy('created_at','desc')->get();
        $sociale = Story::where('type', 'social')->take(3)->orderBy("created_at", "desc")->get();
        $education = Story::where('type', 'education')->take(3)->orderBy("created_at", "desc")->get();
        $sante = Story::where('type', 'sante')->take(3)->orderBy("created_at", "desc")->get();
        $sport = Story::where('type', 'sport')->take(3)->orderBy("created_at", "desc")->get();
        $economie = Story::where('type', 'economie')->take(3)->orderBy("created_at", "desc")->get();
        $culture = Story::where('type', 'culture')->take(3)->orderBy("created_at", "desc")->get();
        // dd($sport);
        return view('template.gallery.gallery',compact('sport','sociale','education','sante','economie','culture'));
    }
}
