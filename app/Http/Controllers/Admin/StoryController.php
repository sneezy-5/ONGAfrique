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
 
       //dd($data['image']->getClientOriginalName());
        
       if ($request->hasFile('image')) {
        $filenameWithExt = $request->file('image')->getClientOriginalName ();
        // Get Filename
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        // Get just Extension
        $extension = $request->file('image')->getClientOriginalExtension();
        // Filename To store
        $fileNameToStore = $filename. ''. time().'.'.$extension;
        // Upload Image $path = 
        $request->file('image')->storeAs('public/image', $fileNameToStore);
        $data['image']=$fileNameToStore;
        }
   
    // Else add a dummy image
    else {
        $fileNameToStore = 'noimage.jpg';
        $data['image']=$fileNameToStore;
        }

        if ($request->hasFile('video')) {
            $filenameWithExt = $request->file('video')->getClientOriginalName ();
            // Get Filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just Extension
            $extension = $request->file('video')->getClientOriginalExtension();
            // Filename To store
            $fileNameToStore = $filename. ''. time().'.'.$extension;
            // Upload Image $path = 
            $request->file('video')->storeAs('public/video', $fileNameToStore);
            $data['video']=$fileNameToStore;
            }
       
        // Else add a dummy image
        else {
            $fileNameToStore = 'novideo.jpg';
            $data['video']=$fileNameToStore;
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
            $filenameWithExt = $request->file('image')->getClientOriginalName ();
            // Get Filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just Extension
            $extension = $request->file('image')->getClientOriginalExtension();
            // Filename To store
            $fileNameToStore = $filename. ''. time().'.'.$extension;
            // Upload Image $path = 
            $request->file('image')->storeAs('public/image', $fileNameToStore);
            $data['image']=$fileNameToStore;
            }
       
        // Else add a dummy image
        else {
            $fileNameToStore = 'noimage.jpg';
            $data['image']=Story::find($id)->video;
            }
    
            if ($request->hasFile('video')) {
                $filenameWithExt = $request->file('video')->getClientOriginalName ();
                // Get Filename
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                // Get just Extension
                $extension = $request->file('video')->getClientOriginalExtension();
                // Filename To store
                $fileNameToStore = $filename. ''. time().'.'.$extension;
                // Upload Image $path = 
                $request->file('video')->storeAs('public/video', $fileNameToStore);
                $data['video']=$fileNameToStore;
                }
           
            // Else add a dummy image
            else {
                $fileNameToStore = 'novideo.jpg';
                $data['video']= Story::find($id)->video;
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