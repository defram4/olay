<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogCategoryUpdateRequest extends FormRequest
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
            'text.*.description' => ['required', 'string'],
            'text.*.lang' => ['string'],
            'img' => ['sometimes', 'image', 'max:2500'],
            'seotext.*.title' => ['required', 'string'],
            'seotext.*.description' => ['required', 'string'],
            'seotext.*.keywords' => ['required', 'string'],
            'seotext.*.lang' => ['string'],
            'seo.img' => ['sometimes', 'file', 'max:2500']
        ];
    }

    public function attributes()
    {
        return [
            'text.*.title' => trans('Title'),
            'text.*.description' => trans('Description'),
            'seotext.*.title' => trans('SEO Title'),
            'seotext.*.description' => trans('SEO Description'),
            'seotext.*.keywords' => trans('Keywords'),
            'seo.img' => trans('Image SEO'),
            'img' => trans('Image')
        ];
    }
}
