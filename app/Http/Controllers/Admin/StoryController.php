<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoryValidation;
use App\Models\Story;
use Illuminate\Http\Request;

class StoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stories = Story::all();
        return view('template/admin/stories/stories',compact('stories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('template/admin/stories/story');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoryValidation $request)
    {
        $data = $request->except('_token');
 
       # dd($data['image'][0]->getClientOriginalName());
        
        if ($request->hasFile('image')) {
            $d = [];
            foreach($data['image'] as $key=>$value){
               # dd($value);
                $filenameWithExt =$value->getClientOriginalName (); #$request->file('image')->getClientOriginalName ();
                // Get Filename
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                // Get just Extension
                $extension =$value->getClientOriginalExtension();  #$request->file('image')->getClientOriginalExtension();
                // Filename To store
                $fileNameToStore = $filename. ''. time().'.'.$extension;
                // Upload Image $path = 
                $value->storeAs('public/image', $fileNameToStore);
               # $request->file('image')->storeAs('public/image', $fileNameToStore);
               array_push($d,$fileNameToStore);
               
            }
            $data['image']=json_encode($d);
            }
                 // Else add a dummy image
        else {
            $fileNameToStore = 'noimage.jpg';
            $path = 'noimage.jpg';
            $data['image']=json_encode($fileNameToStore);
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
                    
       
   
            #dd($data);
        Story::create($data);

        return redirect()->route('stories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $story = Story::find($id);
       return  view('template/admin/stories/show_story',compact('story'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $story = Story::find($id);
        return  view('template/admin/stories/edit_story',compact('story'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoryValidation $request, $id)
    {
        $data = $request->except('_token','_method');
   

        if ($request->hasFile('image')) {
            $d = [];
            foreach($data['image'] as $key=>$value){
               # dd($value);
                $filenameWithExt =$value->getClientOriginalName (); #$request->file('image')->getClientOriginalName ();
                // Get Filename
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                // Get just Extension
                $extension =$value->getClientOriginalExtension();  #$request->file('image')->getClientOriginalExtension();
                // Filename To store
                $fileNameToStore = $filename. ''. time().'.'.$extension;
                // Upload Image $path = 
                $value->storeAs('public/image', $fileNameToStore);
               # $request->file('image')->storeAs('public/image', $fileNameToStore);
               array_push($d,$fileNameToStore);
               
            }
            ;
            $data['image']=json_encode($d);
            }
            // Else add a dummy image
        else {
                $fileNameToStore = 'noimage.jpg';
                $path = 'noimage.jpg';
                $data['image']=  Story::find($id)->image;
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
                    $data['video']=  Story::find($id)->video;
                    }
   
            //dd($data);
            Story::find($id)->update($data);
            
        return redirect()->route('stories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Story::find($id)->delete();
        return redirect()->route('stories.index');
    }
}
