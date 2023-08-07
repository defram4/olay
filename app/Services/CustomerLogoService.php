<?php


namespace App\Services;


use App\Http\Requests\CustomerLogoStoreRequest;
use App\Http\Requests\CustomerLogoUpdateRequest;
use App\Models\CustomerLogo;

class CustomerLogoService
{
    public function store(CustomerLogoStoreRequest $request)
    {
        $data = $request->validated();
        if ($request->hasFile('customer.img')) {
            $data['customer']['img'] = storeFile('customer', $request->file('customer.img'));
        }
        $customer = CustomerLogo::create($data['customer']);
        $customer->text()->createMany($data['text']);
        return true;
    }

    public function update(CustomerLogoUpdateRequest $request, CustomerLogo $customerLogo)
    {
        $data = $request->validated();
        $customerLogo->load('text');
        if ($request->hasFile('customer.img')) {
            removeFile('customer', $customerLogo->img);
            $data['customer']['img'] = storeFile('customer', $request->file('customer.img'));
        }
        $customerLogo->update($data['customer']);
        (new TextService())->updateText($data['text'], $customerLogo);
        return true;
    }
}
