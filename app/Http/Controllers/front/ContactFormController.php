<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactFormFrontRequest;
use App\Mail\ContactFormMail;
use App\Models\Content;
use App\Models\Image;
use App\Models\Inbox;
use App\Models\PageMeta;
use App\Models\Service;
use App\Models\Social;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\View;

class ContactFormController extends Controller
{


    public function index($locale)
    {
        $meta = PageMeta::getMetaForPage($locale, 6);
        $content = Content::getContentByPage($locale, 6);
        $img = Image::getImageByPageId(6);
        $services = Service::getForFrontAllServices($locale);
        $socials = Social::getAllSocials($locale);

        return View::make('front.pages.contact', [
            'meta' => $meta,
            'content' => $content,
            'services' => $services,
            'images' => $img,
            'socials' => $socials,
        ]);
    }


    public function store(ContactFormFrontRequest $request)
    {

        $data=$request->validated();

        Inbox::create($data);
        Mail::to('test@royalsystems.md')->send(new ContactFormMail($data));

        return redirect()->route('front.contact.thank', app()->getLocale());
    }




    public function thankForm()
    {
        return View::make('front.components.thank-for-message-page');
    }

}
