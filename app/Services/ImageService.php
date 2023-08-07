<?php


namespace App\Services;


use App\Http\Requests\ImageRequest;
use App\Http\Requests\ImageUpdateRequest;
use App\Models\Image;

class ImageService
{
    public function store(ImageRequest $request)
    {
        $data = $request->validated();
        if ($request->hasFile('img')) {
            $data['img'] = storeFile('image', $request->file('img'));
        }
        Image::create($data);
        return true;
    }

    public function update(ImageUpdateRequest $request, Image $image)
    {
        $data = $request->validated();
        if ($request->hasFile('img')) {
            removeFile('image', $image->img);
            $data['img'] = storeFile('image', $request->file('img'));
        }
        $image->update($data);
        return true;
    }
}
