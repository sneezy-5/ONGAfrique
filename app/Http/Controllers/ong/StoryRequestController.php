<?php

namespace App\Http\Controllers\ong;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorieRequestValidation;
use App\Models\StoryRequest;
use Illuminate\Http\Request;

class StoryRequestController extends Controller
{
    //
    public function createStoryRequest()
    {
        return view('template.storyrequest.create');
    }
    
    public function storeStoryRequest(StorieRequestValidation $request)
    {
        $data = $request->except('_token');
        // dd($data);
         if ($request->hasFile('photo1')) {
             $filenameWithExt = $request->file('picture')->getClientOriginalName ();
             // Get Filename
             $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
             // Get just Extension
             $extension = $request->file('picture')->getClientOriginalExtension();
             // Filename To store
             $fileNameToStore = $filename. ''. time().'.'.$extension;
             // Upload Image $path = 
             $request->file('picture')->storeAs('public/image', $fileNameToStore);
             }
             elseif ($request->hasFile('photo2')) {
                $filenameWithExt = $request->file('picture')->getClientOriginalName ();
                // Get Filename
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                // Get just Extension
                $extension = $request->file('picture')->getClientOriginalExtension();
                // Filename To store
                $fileNameToStore = $filename. ''. time().'.'.$extension;
                // Upload Image $path = 
                $request->file('picture')->storeAs('public/image', $fileNameToStore);
                }
                elseif ($request->hasFile('photo3')) {
                    $filenameWithExt = $request->file('picture')->getClientOriginalName ();
                    // Get Filename
                    $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                    // Get just Extension
                    $extension = $request->file('picture')->getClientOriginalExtension();
                    // Filename To store
                    $fileNameToStore = $filename. ''. time().'.'.$extension;
                    // Upload Image $path = 
                    $request->file('picture')->storeAs('public/image', $fileNameToStore);
                    }
                    elseif ($request->hasFile('video')) {
                        $filenameWithExt = $request->file('picture')->getClientOriginalName ();
                        // Get Filename
                        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                        // Get just Extension
                        $extension = $request->file('picture')->getClientOriginalExtension();
                        // Filename To store
                        $fileNameToStore = $filename. ''. time().'.'.$extension;
                        // Upload Image $path = 
                        $request->file('picture')->storeAs('public/image', $fileNameToStore);
                        }
        
         // Else add a dummy image
         else {
             $fileNameToStore = 'noimage.jpg';
             $path = 'noimage.jpg';
             }
             $data['picture']=$fileNameToStore;
 
         StoryRequest::create($data);

        return redirect()->route('/')->with('success', 'Votre don a été effectué avec succès');
    }

    public function show($id)
    {
        $storyRequest = StoryRequest::find($id);
        return view('template/storyRequest/show_storyRequest',compact('storyRequest'));
    }
}
