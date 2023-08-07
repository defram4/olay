<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerLogo extends Model
{
    use HasFactory;

    const ACTIVE = 1;

    protected $table = 'customer_logos';
    protected $fillable = [
        'img',
        'url'
    ];

    protected $casts = [
        'active' => 'boolean'
    ];

    public function text()
    {
        return $this->hasMany(CustomerLogoTrans::class, 'customer_logo_id', 'id');
    }

    public static function getCustomer($locale = 'en')
    {
        return CustomerLogo::select('customer_logos.id', 'customer_logos.img',
            'customer_logos.active', 'customer_logo_trans.name')
            ->leftJoin('customer_logo_trans', function ($join) use ($locale) {
                $join->on('customer_logo_trans.customer_logo_id', 'customer_logos.id')
                    ->where('customer_logo_trans.lang', $locale);
            })
            ->get();
    }

    public static function getCustomerForFront($locale = 'en')
    {
        return CustomerLogo::select('customer_logos.id', 'customer_logos.img','customer_logos.url',
            'customer_logos.active', 'customer_logo_trans.name')
            ->leftJoin('customer_logo_trans', function ($join) use ($locale) {
                $join->on('customer_logo_trans.customer_logo_id', 'customer_logos.id')
                    ->where('customer_logo_trans.lang', $locale);
            })
            ->where('customer_logos.active', self::ACTIVE)
            ->get();
    }
}
