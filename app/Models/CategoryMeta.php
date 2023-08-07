<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryMeta extends Model
{
    use HasFactory;

    protected $table = 'category_metas';
    protected $fillable = [
        'img',
        'category_id'
    ];

    public function text()
    {
        return $this->hasMany(CategoryMetaTrans::class, 'category_meta_id', 'id');
    }
}
