<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectTrans extends Model
{
    use HasFactory, Sluggable;


    protected $table = 'project_trans';
    protected $fillable = [
        'title',
        'slug',
        'sub_title',
        'text',
        'lang',
        'project_id'
    ];

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
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
