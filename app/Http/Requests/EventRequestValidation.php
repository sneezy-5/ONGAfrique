<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventRequestValidation extends FormRequest
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
            'title_fr'=>['required','string','max:50','min:5'],
            'title_en'=>['required','string','max:50','min:5'],
            'description_fr'=>['required','string',],
            'description_en'=>['required','string'],
            'picture'=>['required'],
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Le titre est requis',
            'title.string' => 'Le titre est incorrect',
            'description.required' => 'Le nom de la mission est requis',
            'dscription.string' => 'Le nom de la mission  est incorrect',
        ];
    }
}
