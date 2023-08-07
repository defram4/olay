<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartnerLogo extends Model
{
    use HasFactory;

    const ACTIVE = 1;

    protected $table = 'partner_logos';
    protected $fillable = [
        'img',
        'url'
    ];

    protected $casts = [
        'active' => 'boolean'
    ];

    public function text()
    {
        return $this->hasMany(PartnerLogoTrans::class, 'partner_logo_id', 'id');
    }

    public static function getPartner($locale = 'en')
    {
        return PartnerLogo::select('partner_logos.id', 'partner_logos.img',
            'partner_logos.active', 'partner_logo_trans.name')
            ->leftJoin('partner_logo_trans', function ($join) use ($locale) {
                $join->on('partner_logo_trans.partner_logo_id', 'partner_logos.id')
                    ->where('partner_logo_trans.lang', $locale);
            })
            ->get();
    }

    public static function getPartnerForFront($locale = 'en')
    {
        return PartnerLogo::select('partner_logos.id', 'partner_logos.img','partner_logos.url',
            'partner_logos.active', 'partner_logo_trans.name')
            ->leftJoin('partner_logo_trans', function ($join) use ($locale) {
                $join->on('partner_logo_trans.partner_logo_id', 'partner_logos.id')
                    ->where('partner_logo_trans.lang', $locale);
            })
            ->where('partner_logos.active', self::ACTIVE)
            ->get();
    }
}
