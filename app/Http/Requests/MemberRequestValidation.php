<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MemberRequestValidation extends FormRequest
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
            'nom' => ['required', 'string'],
            'date_naissance' => ['required'],
            'email' => ['required', 'string', 'email', 'max:255',],
            'fonction' => ['required', 'string'],
            'picture' => ['required'],
            'email' => ['required', 'email'],
            'phone' => ['required','regex:/^([0-9\s\-\+\(\)]*)$/','min:10'],
            'region'=> ['required', 'string'],
            //'address'=> ['required', 'string'],
            'section'=> ['required', 'string'],
            //'paye'=> ['required', 'string'],
        ];
    }
}
