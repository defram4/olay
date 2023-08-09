<?php


namespace App\Services;


use App\Http\Requests\BannerRequest;

use App\Models\Banner;
use App\Services\TextService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;



class BannerService
{

    public function store(BannerRequest $request)
    {
        $data = $request->validated();

        if ($request->hasFile('big_img')) {
            $data['big_img'] = storeFile('banner', $request->file('big_img'));
        }
        if ($request->hasFile('small_img')) {
            $data['small_img'] = storeFile('banner', $request->file('small_img'));
        }

        if ($request->hasFile('mobile_img')) {
            $data['mobile_img'] = storeFile('banner', $request->file('mobile_img'));
        }

        if ($request->hasFile('big_video')) {
            $data['big_video'] = storeFile('banner', $request->file('big_video'));
        }

        if ($request->hasFile('mobile_video')) {
            $data['mobile_video'] = storeFile('banner', $request->file('mobile_video'));
        }

        $banner = Banner::create([
            'big_img' => $data['big_img'] ?? null,
            'mobile_img' => $data['mobile_img'] ?? null,
            'small_img' => $data['mobile_img'] ?? null,
            'big_video' => $data['big_video'] ?? null,
            'mobile_video' => $data['mobile_video'] ?? null,
        ]);

        $banner->text()->createMany($data['text'] ?? []);

        return true;
    }


    public function update(BannerRequest $request, Banner $banner)
    {
        $data = $request->validated();

        if ($request->hasFile('big_img')) {
            removeFile('banner', $banner->big_img);
            $data['big_img'] = storeFile('banner', $request->file('big_img'));
            $banner->update([
                'big_img' => $data['big_img']
            ]);
        }

        if ($request->hasFile('mobile_img')) {
            removeFile('banner', $banner->mobile_img);
            $data['mobile_img'] = storeFile('banner', $request->file('mobile_img'));
            $banner->update([
                'mobile_img' => $data['mobile_img']
            ]);
        }
        if ($request->hasFile('small_img')) {
            removeFile('banner', $banner->mobile_img);
            $data['small_img'] = storeFile('banner', $request->file('small_img'));
            $banner->update([
                'small_img' => $data['small_img']
            ]);
        }

        if ($request->hasFile('big_video')) {
            removeFile('banner', $banner->big_video);
            $data['big_video'] = storeFile('banner', $request->file('big_video'));
            $banner->update([
                'big_video' => $data['big_video']
            ]);
        }

        if ($request->hasFile('mobile_video')) {
            removeFile('banner', $banner->mobile_video);
            $data['mobile_video'] = storeFile('banner', $request->file('mobile_video'));
            $banner->update([
                'mobile_video' => $data['mobile_video']
            ]);
        }


        (new TextService())->updateText($data['text'], $banner);
        return true;
    }


}
