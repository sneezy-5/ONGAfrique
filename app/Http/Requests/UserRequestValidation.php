<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequestValidation extends FormRequest
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
            'first_name' => 'required|max:100|string',
            'last_name' => 'required|max:100|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|confirmed|min:6',
        ];
    }

    public function messages()
    {
        return [
            'first_name.required' => 'Le titre est requis',
            'first_name.string' => 'Le titre est incorrect',
            'last_name.required' => 'Le nom de la mission est requis',
            'last_name.string' => 'Le nom de la mission  est incorrect',
            'email.required' => 'La date de la mission est requis',
            'email.date' => 'La date de la mission  est incorrect',
        ];
    }
}
