<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WhyChoose extends Model
{
    use HasFactory;

    const ACTIVE = 1;

    protected $table = 'why_chooses';

    protected $fillable = [
        'active',
        'img',
    ];


    protected $casts = [
        'active' => 'boolean'
    ];

    public function text()
    {
        return $this->hasMany(WhyChooseTrans::class, 'why_choose_id', 'id');
    }

    public static function getAllWhyChooses($locale = 'en')
    {
        return WhyChoose::select(
            'why_chooses.id',
            'why_chooses.active',
            'why_chooses.created_at',
            'why_chooses.img',
            'why_choose_trans.title',
            'why_choose_trans.text',
            'why_choose_trans.slug',
        )
            ->leftJoin('why_choose_trans', function ($join) use ($locale) {
                $join->on('why_choose_trans.why_choose_id', 'why_chooses.id')
                    ->where('why_choose_trans.lang', $locale);
            })
            ->latest()
            ->get();
    }


    public static function getAllWhyChoosesForFront($locale = 'en')
    {
        return WhyChoose::select(
            'why_chooses.id',
            'why_chooses.active',
            'why_chooses.created_at',
            'why_chooses.img',
            'why_choose_trans.title',
            'why_choose_trans.text',
            'why_choose_trans.slug',
        )
            ->leftJoin('why_choose_trans', function ($join) use ($locale) {
                $join->on('why_choose_trans.why_choose_id', 'why_chooses.id')
                    ->where('why_choose_trans.lang', $locale);
            })
            ->where('why_chooses.active', self::ACTIVE)
            ->latest()
            ->get();
    }
}
