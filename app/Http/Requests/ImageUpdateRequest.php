<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ImageUpdateRequest extends FormRequest
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
            'key' => ['required', 'string'],
            'page_id' => ['required', 'numeric'],
            'img' => ['sometimes', 'file', 'max:2500']
        ];
    }


    public function attributes()
    {
        return [
            'key' => trans('Key'),
            'page_id' => trans('Page name'),
            'img' => trans('Photo')
        ];
    }
}
