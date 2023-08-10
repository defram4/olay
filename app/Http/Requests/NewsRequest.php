<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsRequest extends FormRequest
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
            'cover_img' => ['sometimes', 'file', 'max:3000'],

            'text.*.title' => ['sometimes', 'string'],
            // 'text.*.sub_title' => ['required', 'string'],
            'text.*.excerpt' => ['required', 'string'],
            'text.*.text' => ['sometimes', 'string'],
            'text.*.lang' => ['string'],


            'seo.img' => ['sometimes', 'file', 'max:2500'],
            'seotext.*.title' => ['required', 'string'],
            'seotext.*.text' => ['required', 'string'],
            'seotext.*.keywords' => ['required', 'string'],
            'seotext.*.lang' => ['string'],

            // 'gallery' => ['sometimes', 'array'],
            // 'gallery.*' => ['sometimes', 'file', 'max:2500']


        ];
    }
}
