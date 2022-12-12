<?php

namespace App\Http\Controllers\Admin;

use App\Models\Don;
use App\Models\Event;
use App\Models\Story;
use App\Models\Member;
use App\Models\StoryRequest;
use App\Http\Controllers\Controller;
use App\Models\Newsletter;
use App\Models\Visitor;
use Illuminate\Foundation\Auth\User;

class HomeController extends Controller
{
    public function index(){
        $stories = Story::count();
        $newsletters = Newsletter::count();
        $users = User::count();
        $members = Member::count();
        $dons = Don::count();
        $events = Event::count();
        $visitors = Visitor::count();
        $toDay = date('y-m-d');
        $visitorPerDay = Visitor::where('created_at', 'LIKE', "%{$toDay}%")->count() ;
        return view('template/admin/home',compact('stories','newsletters','users','members','dons','events','visitors','visitorPerDay'));
    }
}
