<?php


namespace App\Services;


use App\Http\Requests\ServiceStoreRequest;
use App\Http\Requests\ServiceUpdateRequest;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceService
{
    public function store(ServiceStoreRequest $request)
    {
        $data = $request->validated();
        if ($request->hasFile('img')) {
            $data['img'] = storeFile('service', $request->file('img'));
        }
        if ($request->hasFile('seo.img')) {
            $data['seo']['img'] = storeFile('service', $request->file('seo.img'));
        }
        $service = Service::create(['img' => $data['img']]);

        if ($request->hasFile('gallery')) {
            foreach ($data['gallery'] as $image) {
                $img = storeFile('service', $image);
                $service->gallery()->create(['img' => $img]);
            }
        }

        $meta = $service->meta()->create($data['seo']);
        $service->text()->createMany($data['text']);
        $meta->text()->createMany($data['seotext']);
        return true;
    }

    public function update(ServiceUpdateRequest $request, Service $service)
    {
        $data = $request->validated();
        $meta = $service->meta;
        if ($request->hasFile('img')) {
            removeFile('service', $service->img);
            $data['img'] = storeFile('service', $request->file('img'));
            $service->update([
                'img' => $data['img']
            ]);
        }
        if ($request->hasFile('seo.img')) {
            removeFile('service', $meta->img);
            $data['seo']['img'] = storeFile('service', $request->file('seo.img'));
            $meta->update([
                'img' => $data['seo']['img']
            ]);
        }

        if ($request->hasFile('gallery')) {
            foreach ($data['gallery'] as $image) {
                $img = storeFile('service', $image);
                $service->gallery()->create(['img' => $img]);
            }
        }

        (new TextService())->updateText($data['text'], $service);
        (new TextService())->updateText($data['seotext'], $meta);
        return true;
    }

}
