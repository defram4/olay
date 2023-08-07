<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PageUpdateRequest extends FormRequest
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
            'label' => ['required', 'string'],
            'seoimg' => ['sometimes', 'file', 'max:2500'],
            'seotext.*.title' => ['required', 'string'],
            'seotext.*.text' => ['required', 'string'],
            'seotext.*.keywords' => ['required', 'string'],
            'seotext.*.lang' => ['string'],
        ];
    }

    public function attributes()
    {
        return [
            'label' => trans('Page name'),
            'seoimg' => trans('Image SEO'),
            'seotext.*.title' => trans('SEO Title'),
            'seotext.*.text' => trans('SEO Description'),
            'seotext.*.keywords' => trans('Keywords'),
        ];
    }
}
