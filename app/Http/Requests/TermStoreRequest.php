<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TermStoreRequest extends FormRequest
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
            'text.*.title' => ['required', 'string'],
            'text.*.text' => ['required', 'string'],
            'text.*.lang' => ['required', 'string']
        ];
    }

    public function attributes()
    {
        return [
            'text.*.title' => trans('Title'),
            'text.*.text' => trans('Text'),
            'text.*.lang' => trans('Language')
        ];
    }

}
