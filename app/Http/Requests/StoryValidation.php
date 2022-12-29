<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoryValidation extends FormRequest
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
            'title_en'=>['required','string','max:50','min:5'],
            'title_en'=>['required','string','max:50','min:5'],
            'description_en'=>['required','string'],
            'description_en'=>['required','string'],
            #'mission_name'=>['required','string'],
            'mission_date'=>['required','date'],
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Le titre est requis',
            'title.string' => 'Le titre est incorrect',
            #'mission_name.required' => 'Le nom de la mission est requis',
            #'mission_name.string' => 'Le nom de la mission  est incorrect',
            'mission_date.required' => 'La date de la mission est requis',
            'mission_name.date' => 'La date de la mission  est incorrect',
        ];
    }
}
