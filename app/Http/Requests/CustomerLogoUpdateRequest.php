<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerLogoUpdateRequest extends FormRequest
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
            'customer.url' => ['nullable', 'url'],
            'customer.img' => ['sometimes', 'file', 'max:2500'],
            'text.*.name' => ['required', 'string'],
            'text.*.lang' => ['string']
        ];
    }

    public function attributes()
    {
        return [
            'customer.url' => trans('Link'),
            'customer.img' => trans('Logo'),
            'text.*.name' => trans('Name')
        ];
    }
}
