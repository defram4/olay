<?php


namespace App\Services;


use App\Http\Requests\NewsRequest;
use App\Models\News;
use App\Services\TextService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Intervention\Image\ImageManagerStatic as ImageResize;



class NewsService
{

    public function store(NewsRequest $request)
    {

        $data = $request->validated();


        if ($request->hasFile('img')) {
            $data['img'] = storeFile('news', $request->file('img'));
        }

        if ($request->hasFile('cover_img')) {
            $data['cover_img'] = storeFile('news', $request->file('cover_img'));
        }


        if ($request->hasFile('seo.img')) {
            $data['seo']['img'] = storeFile('news', $request->file('seo.img'));
        }


        $news = News::create([
            'img' => $data['img'],
            'cover_img' => $data['cover_img'],
        ]);


        if ($request->hasFile('gallery')) {
            foreach ($data['gallery'] as $image) {
                $img = storeFile('news', $image);
                $news->gallery()->create(['img' => $img]);
            }
        }


        $meta = $news->meta()->create($data['seo']);
        $news->text()->createMany($data['text']);
        $meta->text()->createMany($data['seotext']);


        return true;
    }



    public function update(NewsRequest $request, News $news)
    {
        $data = $request->validated();
        $meta = $news->meta;

        if ($request->hasFile('img')) {
            removeFile('news', $news->img);
            $data['img'] = storeFile('news', $request->file('img'));
            $news->update([
                'img' => $data['img']
            ]);
        }

        if ($request->hasFile('cover_img')) {
            removeFile('news', $news->cover_img);
            $data['cover_img'] = storeFile('news', $request->file('cover_img'));
            $news->update([
                'cover_img' => $data['cover_img']
            ]);
        }

        if ($request->hasFile('seo.img')) {
            removeFile('news', $meta->img);
            $data['seo']['img'] = storeFile('news', $request->file('seo.img'));
            $meta->update([
                'img' => $data['seo']['img']
            ]);
        }

        if ($request->hasFile('gallery')) {
            foreach ($data['gallery'] as $image) {
                $img = storeFile('news', $image);
                $news->gallery()->create(['img' => $img]);
            }
        }


        (new TextService())->updateText($data['text'], $news);
        (new TextService())->updateText($data['seotext'], $meta);
        return true;
    }


}
