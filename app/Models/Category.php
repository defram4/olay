<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';
    protected $fillable = [
        'img',
        'active'
    ];

    protected $casts = [
        'active' => 'boolean'
    ];

    public function text()
    {
        return $this->hasMany(CategoryTrans::class, 'category_id', 'id');
    }

    public function meta()
    {
        return $this->hasOne(CategoryMeta::class, 'category_id', 'id');
    }


    public static function getAllCategories($locale = 'en')
    {
        return Category::select('categories.id', 'categories.active', 'categories.created_at',
            'categories.img', 'category_trans.title')
            ->leftJoin('category_trans', function ($join) use ($locale) {
                $join->on('category_trans.category_id', 'categories.id')
                    ->where('category_trans.lang', $locale);
            })
            ->latest()
            ->get();
    }

    public static function getCategoriesPostCreate($locale = 'en')
    {
        return Category::select('categories.id', 'category_trans.title')
            ->leftJoin('category_trans', function ($join) use ($locale) {
                $join->on('category_trans.category_id', 'categories.id')
                    ->where('category_trans.lang', $locale);
            })
            ->get();
    }
}


