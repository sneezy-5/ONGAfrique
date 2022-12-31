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
        $stories = Story::where('type', 'social')->take(2)->get();
        return view('template.nosmissions.cultures', compact('cultures','stories'));
    }

    public function show($id)
    {
        $culture = story::find($id);
        
        return view('template.show.culture', compact('culture'));
    }
    
}
