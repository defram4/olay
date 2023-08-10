<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Content;
use App\Models\Image;
use App\Models\PageMeta;
use App\Models\Policy;
use App\Models\Service;
use App\Models\Social;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class PrivacyController extends Controller
{

    const ACTIVE = 1;

    public function index($locale)
    {
        $img = Image::getImageByPageId(7);
        $content = Content::getContentByPage($locale, 7);
        $meta = PageMeta::getMetaForPage($locale, 7);
        $services = Service::getForFrontAllServices($locale);
        $socials = Social::getAllSocials($locale);

        $policies = Policy::select('policies.id', 'policies.active', 'policy_trans.title',
            'policy_trans.text', 'policies.created_at')
            ->leftJoin('policy_trans', function ($join) use ($locale) {
                $join->on('policy_trans.policy_id', 'policies.id')
                    ->where('policy_trans.lang', $locale);
            })
            ->latest()
            ->where('policies.active', self::ACTIVE)
            ->get();

        return View::make('front.pages.privacy', [
            'policies' => $policies,
            'content' => $content,
            'images' => $img,
            'services' => $services,
            'meta' => $meta,
            'socials' => $socials,
        ]);
    }


}
