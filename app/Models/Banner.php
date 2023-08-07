<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;

    const ACTIVE = 1;

    protected $table = 'banners';

    protected $fillable = [
        'active',
        'big_img',
        'mobile_img',
        'big_video',
        'mobile_video',
    ];


    protected $casts = [
        'active' => 'boolean'
    ];

    public function text()
    {
        return $this->hasMany(BannerTrans::class, 'banner_id', 'id');
    }

    public static function getAllBanners($locale = 'en')
    {
        return Banner::select(
            'banners.id',
            'banners.active',
            'banners.created_at',
            'banners.big_img',
            'banners.mobile_img',
            'banners.big_video',
            'banners.mobile_video',
            'banner_trans.title_1',
            'banner_trans.title_2',
            'banner_trans.title_3',
            'banner_trans.title_4',
            'banner_trans.text',
            'banner_trans.btn_text',
            'banner_trans.btn_url',
            'banner_trans.slug',
        )
            ->leftJoin('banner_trans', function ($join) use ($locale) {
                $join->on('banner_trans.banner_id', 'banners.id')
                    ->where('banner_trans.lang', $locale);
            })
            ->latest()
            ->get();
    }


    public static function getAllBannersForFront($locale = 'en')
    {
        return Banner::select(
            'banners.id',
            'banners.active',
            'banners.created_at',
            'banners.big_img',
            'banners.mobile_img',
            'banners.big_video',
            'banners.mobile_video',
            'banner_trans.title_1',
            'banner_trans.title_2',
            'banner_trans.title_3',
            'banner_trans.title_4',
            'banner_trans.text',
            'banner_trans.btn_text',
            'banner_trans.btn_url',
            'banner_trans.slug',
        )
            ->leftJoin('banner_trans', function ($join) use ($locale) {
                $join->on('banner_trans.banner_id', 'banners.id')
                    ->where('banner_trans.lang', $locale);
            })
            ->where('banners.active', self::ACTIVE)
            ->inRandomOrder()
            ->get();
    }
}
