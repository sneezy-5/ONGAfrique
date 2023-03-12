<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorieRequestValidation extends FormRequest
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
            'type' => ['required', 'string'],
            'first_name' => ['required', 'string'],
            'last_name' => ['required', 'string'],
            // 'email' => ['required', 'string', 'email', 'max:255', 'unique:members'],
            'story_one_sentence_description' => ['required', 'string'],
            'other' => ['required', 'string'],

        ];
    }
}
