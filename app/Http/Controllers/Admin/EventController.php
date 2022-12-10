<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\EventRequestValidation;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::all();
        return view('template/admin/events/events',compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('template/admin/events/event');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EventRequestValidation $request)
    {
        $data = $request->except('_token');
       // dd($data);
       if ($request->hasFile('picture')) {
        $d = [];
        foreach($data['picture'] as $key=>$value){
           # dd($value);
            $filenameWithExt =$value->getClientOriginalName (); 
            // Get Filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just Extension
            $extension =$value->getClientOriginalExtension(); 
            // Filename To store
            $fileNameToStore = $filename. ''. time().'.'.$extension;
            // Upload Image $path = 
            $value->storeAs('public/image', $fileNameToStore);
           array_push($d,$fileNameToStore);
           
        }
        $data['picture']=json_encode($d);
        }
        
   
    // Else add a dummy image
    else {
        $fileNameToStore = 'noimage.jpg';
        $path = 'noimage.jpg';
        $data['picture']=json_encode($fileNameToStore);
        }


        if ($request->hasFile('video')) {
            $d = [];
            foreach($data['video'] as $key=>$value){
              
                $filenameWithExt =$value->getClientOriginalName (); 
                
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                
                $extension =$value->getClientOriginalExtension();  
               
                $fileNameToStore = $filename. ''. time().'.'.$extension;
              
                $value->storeAs('public/vidéo', $fileNameToStore);

               array_push($d,$fileNameToStore);
               
            }
            ;
            $data['video']=json_encode($d);
            }     // Else add a dummy image
            else {
                $fileNameToStore = 'novideo.jpg';
                $data['video']=json_encode($fileNameToStore);
                }

        Event::create($data);

        return redirect()->route('events.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = Event::find($id);
        return view('template/admin/events/show_event',compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = Event::find($id);
        return view('template/admin/events/edit_event',compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EventRequestValidation $request, $id)
    {
        $data = $request->except("_tokent");

        if ($request->hasFile('picture')) {
            $d = [];
            foreach($data['picture'] as $key=>$value){
               # dd($value);
                $filenameWithExt =$value->getClientOriginalName (); 
                // Get Filename
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                // Get just Extension
                $extension =$value->getClientOriginalExtension(); 
                // Filename To store
                $fileNameToStore = $filename. ''. time().'.'.$extension;
                // Upload Image $path = 
                $value->storeAs('public/image', $fileNameToStore);
               array_push($d,$fileNameToStore);
               
            }
            $data['picture']=json_encode($d);
            }else{
                $data['picture']= Event::find($id)->picture;
            }


            if ($request->hasFile('video')) {
                $d = [];
                foreach($data['video'] as $key=>$value){
                  
                    $filenameWithExt =$value->getClientOriginalName (); 
                    
                    $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                    
                    $extension =$value->getClientOriginalExtension();  
                   
                    $fileNameToStore = $filename. ''. time().'.'.$extension;
                  
                    $value->storeAs('public/vidéo', $fileNameToStore);

                   array_push($d,$fileNameToStore);
                   
                }
                ;
                $data['video']=json_encode($d);
                } // Else add a dummy image
                else {
                    $fileNameToStore = 'novideo.jpg';
                    $data['video']=  Event::find($id)->video;
                    }
   
        Event::find($id)->update($data);
        return redirect()->route('events.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Event::find($id)->delete();
        return redirect()->route('events.index');
    }
}
