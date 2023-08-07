<?php


namespace App\Services;


use App\Http\Requests\WhyChooseRequest;

use App\Models\WhyChoose;
use App\Services\TextService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;



class WhyChooseService
{

    public function store(WhyChooseRequest $request)
    {

        $data = $request->validated();

        if ($request->hasFile('img')) {
            $data['img'] = storeFile('why_choose', $request->file('img'));
        }

        $why_choose = WhyChoose::create([
            'img' => $data['img'],
        ]);

        $why_choose->text()->createMany($data['text']);

        return true;
    }


    public function update(WhyChooseRequest $request, WhyChoose $why_choose)
    {
        $data = $request->validated();

        if ($request->hasFile('img')) {
            removeFile('why_choose', $why_choose->img);
            $data['img'] = storeFile('why_choose', $request->file('img'));
            $why_choose->update([
                'img' => $data['img']
            ]);
        }


        (new TextService())->updateText($data['text'], $why_choose);
        return true;
    }


}
