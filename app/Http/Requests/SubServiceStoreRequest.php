<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubServiceStoreRequest extends FormRequest
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
            'service.service_id' => ['required', 'numeric'],
            'service.img' => ['required', 'file', 'max:2500'],
            'text.*.title' => ['required', 'string'],
            'text.*.sub_title' => ['required', 'string'],
            'text.*.text' => ['required', 'string'],
            'text.*.lang' => ['string'],
            'seo.img' => ['required', 'file', 'max:2500'],
            'seotext.*.title' => ['required', 'string'],
            'seotext.*.text' => ['required', 'string'],
            'seotext.*.keywords' => ['required', 'string'],
            'seotext.*.lang' => ['string'],
        ];
    }

    public function attributes()
    {
        return [
            'service.service_id' => trans('Service'),
            'service.img' => trans('Photo'),
            'text.*.title' => trans('Title'),
            'text.*.sub_title' => trans('Sub title'),
            'text.*.text' => trans('Description'),
            'seo.img' => trans('Image SEO'),
            'seotext.*.title' => trans('SEO Title'),
            'seotext.*.text' => trans('SEO Description'),
            'seotext.*.keywords' => trans('Keywords'),
        ];
    }
}
