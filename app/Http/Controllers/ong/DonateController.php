<?php

namespace App\Http\Controllers\ong;

use App\Models\Don;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\DonateRequestValidation;

class DonateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $donner = Don::paginate(10);
        // $countdon = Auth::user()->dons->where('amount',);
        return view('espace_donateur/don_show', compact('donner'));
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
    public function store(DonateRequestValidation $request)
    {
        //
        // $validated = $request->validated();

        // Don::create([
        //   $validated
        // ]);
        $this->validate($request,[]);
        
        Don::create($request->all());

        return redirect()->route('/')->with('success', 'Votre don a été effectué avec succès');
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
