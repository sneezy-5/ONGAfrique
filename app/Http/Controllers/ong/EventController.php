<?php

namespace App\Http\Controllers\ong;

use App\Models\Event;
use App\Models\Story;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $cultures = Story::where('type', 'culture')->take(6)->orderBy('created_at', 'desc')->get();
        $economies = Story::where('type', 'economie')->take(6)->orderBy('created_at', 'desc')->get();
        $educations = Story::where('type', 'education')->take(6)->orderBy('created_at', 'desc')->get();
        $santes = Story::where('type', 'sante')->take(6)->orderBy('created_at', 'desc')->get();
        $sociales = Story::where('type', 'social')->take(6)->orderBy('created_at', 'desc')->get();
        $sports = Story::where('type', 'sport')->take(6)->orderBy('created_at', 'desc')->get();
        return view('template.event.index', compact('cultures','economies','educations','santes','sociales','sports'));
    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $event = Event::find($id);
        return view('template.show.event',compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
