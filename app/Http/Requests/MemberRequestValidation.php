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
            'nom' => ['required', 'string','max:50'],
            'date_naissance' => ['required'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:members'],
            // 'email' => ['required', 'string', 'email', 'max:255',],
            'fonction' => ['required', 'string'],
            'picture' => ['required'],
            // 'email' => ['required', 'email'],
            'phone' => ['required','regex:/^([0-9\s\-\+\(\)]*)$/','min:10'],
            'region'=> ['required', 'string','max:50'],
            //'address'=> ['required', 'string'],
            'section'=> ['required', 'string','max:50'],
            //'paye'=> ['required', 'string'],
        ];
    }
}
