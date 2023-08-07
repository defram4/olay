<?php


namespace App\Services;


use App\Http\Requests\PartnerLogoStoreRequest;
use App\Http\Requests\PartnerLogoUpdateRequest;
use App\Models\PartnerLogo;

class PartnerLogoService
{
    public function store(PartnerLogoStoreRequest $request)
    {
        $data = $request->validated();
        if ($request->hasFile('partner.img')) {
            $data['partner']['img'] = storeFile('partner', $request->file('partner.img'));
        }
        $partner = PartnerLogo::create($data['partner']);
        $partner->text()->createMany($data['text']);
        return true;
    }

    public function update(PartnerLogoUpdateRequest $request, PartnerLogo $partnerLogo)
    {
        $data = $request->validated();
        $partnerLogo->load('text');
        if ($request->hasFile('partner.img')) {
            removeFile('partner', $partnerLogo->img);
            $data['partner']['img'] = storeFile('partner', $request->file('partner.img'));
        }
        $partnerLogo->update($data['partner']);
        (new TextService())->updateText($data['text'], $partnerLogo);
        return true;
    }
}
