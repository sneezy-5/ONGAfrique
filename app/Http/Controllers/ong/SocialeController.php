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
        $stories = Story::where('type', 'culture')->take(3)->get();
        return view('template.nosmissions.sociales', compact('sociales','stories'));
    }

    public function show($id)
    {
        if( story::where('id',$id)->exists()){
            $sociale = story::find($id);
            dd($id);
        }else{
            return response()->view('404', [], 404);
        }
       
        return view('template.show.sociale', compact('sociale'));
    }
}
