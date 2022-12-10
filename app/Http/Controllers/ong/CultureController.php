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
        $cultures = story::where('type', 'culture')->paginate(8);
        
        return view('template.nosmissions.cultures', compact('cultures'));
    }

    public function show($id)
    {
        $culture = story::find($id);
        
        return view('template.show.culture', compact('culture'));
    }
    
}
