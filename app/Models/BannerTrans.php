<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BannerTrans extends Model
{
    use HasFactory, Sluggable;

    protected $table = 'banner_trans';

    protected $fillable = [
        'title_1',
        'title_2',
        'title_3',
        'title_4',
        'text',
        'btn_text',
        'btn_url',

        'banner_id',
        'slug',
        'lang',
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title_1',
                'onUpdate' => true
            ]
        ];
    }
}
