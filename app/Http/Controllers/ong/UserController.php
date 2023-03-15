<?php

namespace App\Http\Controllers\ong;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\UserRequestValidation;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // Obtenir l'utilisateur connecté
        // $user = auth()->user();

        // // Compter le nombre de dons de l'utilisateur
        // $countdon = $user->dons()->where('user_id','amount')->count();

        // // Obtenir la somme des dons de l'utilisateur
        // $sumdon = $user->dons()->where('user_id', 'amount')->sum('amount');

//
        // Obtenez l'utilisateur connecté
        $user = Auth::user();

        // Obtenez tous les dons de l'utilisateur connecté
        $dons = $user->dons;

        // Comptez le nombre de dons de l'utilisateur connecté
        $countdon = $dons->count();

        // Calculez la somme de tous les dons de l'utilisateur connecté
        $sumdon = $dons->sum('montant');






        // $countdon = auth()->user()->dons->count('amount');
        // $sumdon = auth()->user()->dons->sum('amount');
        return view('espace_donateur.donateur', compact('countdon', 'sumdon'));
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
    public function store(UserRequestValidation $request)
    {
        
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
            }
       
        // Else add a dummy image
        else {
            $fileNameToStore = 'noimage.jpg';
            $path = 'noimage.jpg';
            }
            $data['image']=$fileNameToStore;
           
        $user = User::create([
            'name' => $request->first_name,
            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            // 'image'=>$request->image,
            'is_admin'=>isset($request->is_admin),
            'email' => $request->email,
            'amount'=>$request->amount,
            'password' => Hash::make($request->password),
        ]);
       
        return redirect()->route('donateur');
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
        $user=User::find($id);
        return view('template/donateur/users/edit_user',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequestValidation $request, $id)
    {
        //
        $data =$request->except('_token');
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
       
           
        User::find($id)->update($data);
       return redirect()->route('users.index');
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
