<?php


namespace App\Services;


use App\Http\Requests\GalleryRequest;

use App\Models\Gallery;
use App\Services\TextService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;



class GalleryService
{

    public function store(GalleryRequest $request)
    {

        $data = $request->validated();

        if ($request->hasFile('img')) {
            $data['img'] = storeFile('gallery', $request->file('img'));
        }

        Gallery::create([
            'img' => $data['img'],
        ]);

        return true;
    }


    public function update(GalleryRequest $request, Gallery $gallery)
    {
        $data = $request->validated();

        if ($request->hasFile('img')) {
            removeFile('gallery', $gallery->img);
            $data['img'] = storeFile('gallery', $request->file('img'));
            $gallery->update([
                'img' => $data['img']
            ]);
        }

        return true;
    }


}
