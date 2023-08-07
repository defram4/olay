<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductUpdateRequest extends FormRequest
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
            'product.sub_category_id' => ['required', 'numeric'],
            'product.price' => ['required', 'numeric'],
            'product.old_price' => ['nullable', 'numeric'],
            'product.img' => ['sometimes', 'file', 'max:2500'],
            'text.*.tag' => ['nullable', 'string'],
            'text.*.title' => ['required', 'string'],
            'text.*.sub_title' => ['required', 'string'],
            'text.*.text' => ['required', 'string'],
            'text.*.lang' => ['string'],
            'seoimg' => ['sometimes', 'file', 'max:2500'],
            'seotext.*.title' => ['required', 'string'],
            'seotext.*.text' => ['required', 'string'],
            'seotext.*.lang' => ['string'],
            'gallery' => ['sometimes', 'array'],
            'gallery.*' => ['sometimes', 'file', 'max:2500']
        ];
    }

    public function attributes()
    {
        return [
            'product.sub_category_id' => trans('Subcategory'),
            'product.price' => trans('Price'),
            'product.old_price' => trans('Old Price'),
            'product.img' => trans('Photo'),
            'text.*.tag' => trans('Tag'),
            'text.*.title' => trans('Title'),
            'text.*.sub_title' => trans('Sub title'),
            'text.*.text' => trans('Description'),
            'seoimg' => trans('Image SEO'),
            'seotext.*.title' => trans('SEO Title'),
            'seotext.*.text' => trans('SEO Description'),
            'gallery.*' => trans('Gallery')
        ];
    }
}
