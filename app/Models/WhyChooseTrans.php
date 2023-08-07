<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WhyChooseTrans extends Model
{
    use HasFactory, Sluggable;

    protected $table = 'why_choose_trans';

    protected $fillable = [
        'title',
        'text',

        'why_choose_id',
        'slug',
        'lang',
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title',
                'onUpdate' => true
            ]
        ];
    }
}
