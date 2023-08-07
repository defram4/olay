<?php


namespace App\Services;


use App\Http\Requests\TestimonialRequest;

use App\Models\Testimonial;
use App\Services\TextService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;



class TestimonialService
{

    public function store(TestimonialRequest $request)
    {

        $data = $request->validated();

        if ($request->hasFile('img')) {
            $data['img'] = storeFile('testimonial', $request->file('img'));
        }

        $testimonial = Testimonial::create([
            'img' => $data['img'],
        ]);

        $testimonial->text()->createMany($data['text']);

        return true;
    }


    public function update(TestimonialRequest $request, Testimonial $testimonial)
    {
        $data = $request->validated();

        if ($request->hasFile('img')) {
            removeFile('testimonial', $testimonial->img);
            $data['img'] = storeFile('testimonial', $request->file('img'));
            $testimonial->update([
                'img' => $data['img']
            ]);
        }


        (new TextService())->updateText($data['text'], $testimonial);
        return true;
    }


}
