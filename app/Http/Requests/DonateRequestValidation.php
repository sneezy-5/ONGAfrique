<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DonateRequestValidation extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
            'last_name' => ['required', 'string'],
            'first_name' => ['required', 'string'],
            'email' => ['required', 'string', 'email', 'max:255',],
            'country' => ['required', 'string'],
            'city' => ['required', 'string'],
            'address' => ['required', 'string'],
            'amount' => ['required', 'int']
        ];
    }

    public function message()
    {
        return
        [ 
            'last_name.required' => "last_name est requis",
            'first_name.required' => "first_name est requis",
            'email.required' => "email est requis",
            'country.required' =>"country est requis",
            'city.required' => "city est requis",
            'address.required' => "address est requis",
            'amount.required' => "amount"
        ];
    }
}
