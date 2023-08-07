<?php


namespace App\Services;


use App\Http\Requests\SubServiceStoreRequest;
use App\Http\Requests\SubServiceUpdateRequest;
use App\Models\SubService;

class SubServiceService
{
    public function store(SubServiceStoreRequest $request)
    {
        $data = $request->validated();
        if ($request->hasFile('service.img')) {
            $data['service']['img'] = storeFile('subService', $request->file('service.img'));
        }
        if ($request->hasFile('seo.img')) {
            $data['seo']['img'] = storeFile('subService', $request->file('seo.img'));
        }
        $subService = SubService::create($data['service']);
        $meta = $subService->meta()->create($data['seo']);
        $subService->text()->createMany($data['text']);
        $meta->text()->createMany($data['seotext']);
        return true;
    }

    public function update(SubServiceUpdateRequest $request, SubService $subService)
    {
        $data = $request->validated();
        $subService->load(['text', 'meta.text']);
        $meta = $subService->meta;
        if ($request->hasFile('service.img')) {
            removeFile('subService', $subService->img);
            $data ['service']['img'] = storeFile('subService', $request->file('service.img'));
        }
        if ($request->hasFile('seo.img')) {
            removeFile('subService', $meta->img);
            $data['seo']['img'] = storeFile('subService', $request->file('seo.img'));
            $meta->update($data['seo']);
        }
        $subService->update($data['service']);
        (new TextService())->updateText($data['text'], $subService);
        (new TextService())->updateText($data['seotext'], $meta);
        return true;
    }
}
