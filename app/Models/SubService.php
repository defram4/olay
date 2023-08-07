<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubService extends Model
{
    use HasFactory;

    protected $table = 'sub_services';
    protected $fillable = [
        'img',
        'active',
        'service_id'
    ];

    protected $casts = [
        'active' => 'boolean'
    ];

    public function text()
    {
        return $this->hasMany(SubServiceTrans::class, 'sub_service_id', 'id');
    }

    public function meta()
    {
        return $this->hasOne(SubServiceMeta::class, 'sub_service_id', 'id');
    }

    public static function getSubServices($locale = 'en')
    {
        return SubService::select('sub_services.id', 'sub_services.img', 'sub_services.active',
            'sub_service_trans.title', 'service_trans.title as service_title')
            ->leftJoin('sub_service_trans', function ($join) use ($locale) {
                $join->on('sub_service_trans.sub_service_id', 'sub_services.id')
                    ->where('sub_service_trans.lang', $locale);
            })
            ->leftJoin('services', 'services.id', 'sub_services.service_id')
            ->leftJoin('service_trans', function ($join) use ($locale) {
                $join->on('service_trans.service_id', 'services.id')
                    ->where('service_trans.lang', $locale);
            })
            ->get();
    }

}
