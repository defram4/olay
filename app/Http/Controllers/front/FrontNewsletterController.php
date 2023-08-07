<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Http\Requests\Newsletter;
use App\Mail\NewsletterMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\View;

class FrontNewsletterController extends Controller
{
    public function store(Newsletter $request)
    {

        $data = $request->validated();


        \App\Models\Newsletter::create($data);

        Mail::to('pislarustefan@gmail.com')->send(new NewsletterMail($data));

        return redirect()->route('front.newsletter.thank', app()->getLocale());
    }

    public function newsletterForm()
    {
        return View::make('front.components.thank-for-newsletter');
    }
}
