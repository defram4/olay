<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostUpdateRequest extends FormRequest
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
            'post.category_id' => ['required', 'numeric'],
            'post.img' => ['sometimes', 'file', 'max:2500'],
            'text.*.title' => ['required', 'string'],
            'text.*.sub_title' => ['required', 'string'],
            'text.*.excerpt' => ['required', 'string'],
            'text.*.text' => ['required', 'string'],
            'text.*.lang' => ['string'],
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
            'text.*.sub_title' => trans('Sub title'),
            'text.*.excerpt' => trans('Excerpt'),
            'text.*.text' => trans('Description'),
            'seotext.*.title' => trans('SEO Title'),
            'seotext.*.description' => trans('SEO Description'),
            'seotext.*.keywords' => trans('Keywords'),
            'seo.img' => trans('Image SEO'),
            'post.img' => trans('Photo'),
            'post.category_id' => trans('Category')
        ];
    }
}
