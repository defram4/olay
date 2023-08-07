<?php


namespace App\Services;


use App\Http\Requests\PageStoreRequest;
use App\Http\Requests\PageUpdateRequest;
use App\Models\Page;

class PageService
{
    public function store(PageStoreRequest $request)
    {
        $data = $request->validated();
        if ($request->hasFile('seoimg')) {
            $data['seoimg'] = storeFile('page', $request->file('seoimg'));
        }

        $page = Page::create(['label' => $data['label']]);
        $meta = $page->meta()->create(['img' => $data['seoimg']]);
        $meta->text()->createMany($data['seotext']);
        return true;
    }

    public function update(PageUpdateRequest $request, Page $page)
    {
        $data = $request->validated();

        $page->load('meta.text');
        $meta = $page->meta;


        if ($request->hasFile('seoimg')){
            if ($meta == null){
                $meta = $page->meta()->create(['img' => $data['seoimg']]);
            }else{
                removeFile('page', $meta->img);
                $img = storeFile('page', $request->file('seoimg'));
                $meta->update(['img' => $img]);
            }

        }

        $page->update(['label' => $data['label']]);
        (new TextService())->updateText($data['seotext'], $meta);
        return true;
    }
}
