<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BannerRequest extends FormRequest
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
            'big_img' => ['sometimes', 'file', 'max:3000'],
            'mobile_img' => ['sometimes', 'file', 'max:3000'],
            'big_video' => ['sometimes', 'file', 'max:3000'],
            'mobile_video' => ['sometimes', 'file', 'max:3000'],

            'text.*.title_1' => ['sometimes'],
            'text.*.title_2' => ['sometimes'],
            'text.*.title_3' => ['sometimes'],
            'text.*.title_4' => ['sometimes'],
            'text.*.text' => ['sometimes'],
            'text.*.btn_text' => ['sometimes'],
            'text.*.btn_url' => ['sometimes'],

            'text.*.lang' => ['string'],
        ];
    }
}
