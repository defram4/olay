<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamTrans extends Model
{
    use HasFactory, Sluggable;

    protected $table = 'team_trans';

    protected $fillable = [
        'name',
        'function',
        'text',

        'team_id',
        'slug',
        'lang',
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name',
                'onUpdate' => true
            ]
        ];
    }
}
