<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryMetaTrans extends Model
{
    use HasFactory;

    protected $table = 'category_meta_trans';
    protected $fillable = [
        'title',
        'description',
        'keywords',
        'lang',
        'category_meta_id'
    ];
}
