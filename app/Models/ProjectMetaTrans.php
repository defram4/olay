<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectMetaTrans extends Model
{
    use HasFactory;

    protected $table = 'project_meta_trans';
    protected $fillable = [
        'title',
        'text',
        'keywords',
        'lang',
        'project_meta_id'
    ];
}
