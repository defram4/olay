<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeamRequest extends FormRequest
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
            'img' => ['sometimes', 'file', 'max:2000'],

            'text.*.name' => ['required', 'string'],
            'text.*.function' => ['required', 'string'],
            'text.*.text' => ['required', 'string'],

            'text.*.lang' => ['string'],
        ];
    }
}
