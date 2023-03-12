<?php

namespace App\Http\Controllers\ong;

use App\Http\Controllers\Controller;
use App\Http\Requests\MemberRequestValidation;
use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('template.commentnousaider.adhesion.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MemberRequestValidation $request)
    {

        $data = $request->except('_token');
        // 
        if ($request->hasFile('picture')) {
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
          $member=  Member::create([

                'nom'=>$request->nom,
                'picture'=>$fileNameToStore,
                'email' => $request->email,
                'date_naissance'=>$request->date_naissance,
                'fonction'=>$request->fonction,
                'phone'=>$request->phone,
                'region'=>$request->region,
                'section'=>$request->section,
                // 'civilite'=>$request->civilite,
                'paye'=>true,
    
            ]);

            $apn =  env('APP_URL')."/ipn";
            $succes =  env('APP_URL')."succesMember";
            $cancel =  env('APP_URL')."cancelmember/".$member->id;
            $postFields = array(
                "item_name"    =>$request['nom'],
            "item_price"   => 2000,
            "currency"     => "xof",
            "ref_command"  => date("Hs"),
            "command_name" =>  "test",
            "env"=>"test",
            "ipn_url" =>"https://domaine.com/ipn",
            "success_url" => $succes,
            "cancel_url" => $cancel,
            "custom_field" =>  "zefezf"
        );
    
        
        $api_key="386c30e32715a54b2beba9a5306242a6621545961f8152b18aca4372ba19ece6";
        $api_secret="94af82652ae929fd60b3a26e2e2e96e310871e3362f75455402cb229da8863e0";
        $jsonResponse =$this->payement('https://paytech.sn/api/payment/request-payment', $postFields, [
            "API_KEY: ".$api_key,
            "API_SECRET: ".$api_secret
        ]);
        //dd($postFields, $jsonResponse);
        return redirect(json_decode($jsonResponse,true)['redirect_url']);
    
        // return redirect()->route('/')->with('success', 'Votre adhésion a été effectuée avec succès');

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


    public function cancelMember($id){
        Member::find($id)->delete();
        // dd($don);
        return redirect()->route('/')->with('message', 'Votre payement a échoué');
     }
 
     public function succesMember(){
        return redirect()->route('/')->with('success', 'Votre adhésion a été effectuée avec succès');

     }
      private function payement($url, $data = [], $header = [])
    {
        $strPostField = http_build_query($data);

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $strPostField);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array_merge($header, [
            'Content-Type: application/x-www-form-urlencoded;charset=utf-8',
            'Content-Length: ' . mb_strlen($strPostField)
        ]));

        return curl_exec($ch);
    }
}
