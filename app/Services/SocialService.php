<?php


namespace App\Services;


use App\Http\Requests\SocialRequest;

use App\Models\Social;
use App\Services\TextService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;



class SocialService
{

    public function store(SocialRequest $request)
    {

        $data = $request->validated();

        if ($request->hasFile('img')) {
            $data['img'] = storeFile('social', $request->file('img'));
        }

        $social = Social::create([
            'img' => $data['img'],
            'url' => $data['url'],
        ]);

        $social->text()->createMany($data['text']);

        return true;
    }


    public function update(SocialRequest $request, Social $social)
    {
        $data = $request->validated();

        $social->update([
            'url' => $data['url'],
        ]);

        if ($request->hasFile('img')) {
            removeFile('social', $social->img);
            $data['img'] = storeFile('social', $request->file('img'));
            $social->update([
                'img' => $data['img']
            ]);
        }


        (new TextService())->updateText($data['text'], $social);
        return true;
    }


}
