<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    const ACTIVE = 1;

    protected $table = 'news';

    protected $fillable = [
        'active',
        'img',
        'cover_img',

    ];

    protected $casts = [
        'active' => 'boolean'
    ];


    public function text()
    {
        return $this->hasMany(NewsTrans::class, 'news_id', 'id');
    }

    public function meta()
    {
        return $this->hasOne(NewsMeta::class, 'news_id', 'id');
    }

    public function gallery()
    {
        return $this->hasMany(NewsGallery::class, 'news_id', 'id');
    }

    public static function getAllNews($locale = 'en')
    {
        return News::select(
            'news.id',
            'news.active',
            'news.created_at',
            'news.img',
            'news.cover_img',
            'news_trans.title',
            'news_trans.sub_title',
            'news_trans.excerpt',
            'news_trans.text',
            'news_trans.slug',
        )
            ->leftJoin('news_trans', function ($join) use ($locale) {
                $join->on('news_trans.news_id', 'news.id')
                    ->where('news_trans.lang', $locale);
            })
            ->latest()
            ->get();
    }

    public static function getAllNewsForFront($locale = 'en')
    {
        return News::select(
            'news.id',
            'news.active',
            'news.created_at',
            'news.img',
            'news.cover_img',
            'news_trans.title',
            'news_trans.sub_title',
            'news_trans.excerpt',
            'news_trans.text',
            'news_trans.slug',
        )
            ->leftJoin('news_trans', function ($join) use ($locale) {
                $join->on('news_trans.news_id', 'news.id')
                    ->where('news_trans.lang', $locale);
            })
            ->where('news.active', self::ACTIVE)
            ->latest()
            ->get();
    }

    public static function getSingleNewsForFront($locale = 'en', $newsId)
    {
        return News::select(
            'news.id',
            'news.active',
            'news.created_at',
            'news.img',
            'news.cover_img',
            'news_trans.title',
            'news_trans.sub_title',
            'news_trans.excerpt',
            'news_trans.text',
            'news_trans.slug',
        )
            ->leftJoin('news_trans', function ($join) use ($locale) {
                $join->on('news_trans.news_id', 'news.id')
                    ->where('news_trans.lang', $locale);
            })
            ->where([
                ['news.active', self::ACTIVE],
                ['news.id', $newsId]
            ])
            ->with('gallery')
            ->first();
    }



}
