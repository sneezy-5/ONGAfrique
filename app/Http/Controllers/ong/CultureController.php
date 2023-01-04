<?php

namespace App\Http\Controllers\ong;

use Illuminate\Http\Request;
use App\Mail\TestMarkdownMail;
use App\Http\Controllers\Controller;
use App\Models\Story;
use Illuminate\Support\Facades\Mail;
// use ;

class CultureController extends Controller
{
    //

    public function index()
    {
        $cultures = story::where('type', 'culture')->paginate(6);
        $stories = Story::where('type', 'social')->take(3)->get();
        return view('template.nosmissions.cultures', compact('cultures','stories'));
    }

    public function show($id)
    {
        if( story::where('id',$id)->exists()){

            $culture = story::find($id);
        }else{
            return response()->view('404', [], 404);
        }
        
        return view('template.show.culture', compact('culture'));
    }
    
}
