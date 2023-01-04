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
        $stories = Story::where('type', 'education')->take(3)->get();
        return view('template.nosmissions.economies', compact('economies','stories'));
        
    }

    public function show($id)
    {
        if( story::where('id',$id)->exists()){
            $economie = story::find($id);
            // dd($id);
        }else{
            return response()->view('404', [], 404);
        }
        
        return view('template.show.economie', compact('economie'));
    }
}
