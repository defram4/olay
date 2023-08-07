<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Social extends Model
{
    use HasFactory;

    const ACTIVE = 1;

    protected $table = 'socials';

    protected $fillable = [
        'active',
        'img',
        'url',
    ];


    protected $casts = [
        'active' => 'boolean'
    ];

    public function text()
    {
        return $this->hasMany(SocialTrans::class, 'social_id', 'id');
    }

    public static function getAllSocials($locale = 'en')
    {
        return Social::select(
            'socials.id',
            'socials.active',
            'socials.created_at',
            'socials.img',
            'socials.url',
            'social_trans.name',
            'social_trans.slug',
        )
            ->leftJoin('social_trans', function ($join) use ($locale) {
                $join->on('social_trans.social_id', 'socials.id')
                    ->where('social_trans.lang', $locale);
            })
            ->latest()
            ->get();
    }


    public static function getAllSocialsForFront($locale = 'en')
    {
        return Social::select(
            'socials.id',
            'socials.active',
            'socials.created_at',
            'socials.img',
            'socials.url',
            'social_trans.name',
            'social_trans.slug',
        )
            ->leftJoin('social_trans', function ($join) use ($locale) {
                $join->on('social_trans.social_id', 'socials.id')
                    ->where('social_trans.lang', $locale);
            })
            ->where('socials.active', self::ACTIVE)
            ->latest()
            ->get();
    }
}
