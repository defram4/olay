<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContentRequest extends FormRequest
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
            'content.key' => ['required', 'string'],
            'content.page_id' => ['required', 'numeric'],
            'text.*.link' => ['nullable', 'url'],
            'text.*.text' => ['required', 'string'],
            'text.*.lang' => ['string']
        ];
    }

    public function attributes()
    {
        return [
            'content.key' => trans('Key'),
            'content.page_id' => trans("Page"),
            'text.*.link' => trans("Link"),
            'text.*.text' => trans("Content")
        ];
    }
}
