<?php

namespace App\Http\Controllers\ong;

use App\Models\Don;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
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
        // Récupérez l'utilisateur connecté
        $user = Auth::user();

         $donner = Don::where('user_id', $user->id)->get();
        
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
    public function store(Request $request)
    {
        
        
        $this->validate($request,[

            'last_name'=>'required',
            'amount'=>'required' ,
            'phone'=>'required',
            'honneur',
            'honnoree'=>'nullable'
        ]);
        
        $data = $request->except('_token');
        if(auth()->check()){
            $data['user_id']=auth()->user()->id;
        }
        Don::create($data);
       
    //     $apn =  env('APP_URL')."/ipn";
    //     $succes =  env('APP_URL')."succesDon/".http_build_query($data);
    //     $cancel =  env('APP_URL')."canceldon";
    //     $postFields = array(
    //         "item_name"    =>$request['last_name'],
    //     "item_price"   => $request['francscfa'],
    //     "currency"     => "XOF",
    //     "ref_command"  => date("Hs").date('H'),
    //     "command_name" =>  "test",
    //     "env"=>"test",
    //     "ipn_url" =>"https://ongsouriredafrique.com/ipn",
    //     "success_url" => $succes,
    //     "cancel_url" => $cancel,
    //     "custom_field" =>  "zefezf"
    // );

    
    // $api_key="386c30e32715a54b2beba9a5306242a6621545961f8152b18aca4372ba19ece6";
    // $api_secret="94af82652ae929fd60b3a26e2e2e96e310871e3362f75455402cb229da8863e0";
    // $jsonResponse =$this->payement('https://paytech.sn/api/payment/request-payment', $postFields, [
    //     "API_KEY: ".$api_key,
    //     "API_SECRET: ".$api_secret
    // ]);

    // //dd($postFields, $jsonResponse);
    //  return redirect(json_decode($jsonResponse,true)['redirect_url']);
    // //dd(json_decode($jsonResponse,true)['redirect_url']);
    //    //
        

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


    public function deleteDonCancel(){
     
        return redirect()->route('/')->with('message', 'Votre payement a échoué');
    }

    public function succesDon($id){
        parse_str($id, $params);
        $don =Don::create($params);
        return redirect()->route('/')->with('success', 'Votre don a été effectué avec succès');
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