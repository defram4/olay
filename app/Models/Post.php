<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    const ACTIVE = 1;

    protected $table = 'posts';
    protected $fillable = [
        'img',
        'active',
        'category_id'
    ];

    protected $cast = [
        'active' => 'boolean'
    ];

    public function text()
    {
        return $this->hasMany(PostTrans::class, 'post_id', 'id');
    }

    public function meta()
    {
        return $this->hasOne(PostMeta::class, 'post_id', 'id');
    }

    public function gallery()
    {
        return $this->hasMany(PostGallery::class,'post_id', 'id');
    }


    public static function getAllPostsForAdmin($locale = 'en')
    {
        return Post::select('posts.id', 'posts.active', 'posts.img', 'posts.created_at',
            'post_trans.title', 'post_trans.slug', 'category_trans.title as category_title', 'post_trans.text')
            ->leftJoin('post_trans', function ($join) use ($locale) {
                $join->on('post_trans.post_id', 'posts.id')
                    ->where('post_trans.lang', $locale);
            })
            ->leftJoin('categories', 'categories.id', 'posts.category_id')
            ->leftJoin('category_trans', function ($join) use ($locale) {
                $join->on('category_trans.category_id', 'categories.id')
                    ->where('category_trans.lang', $locale);
            })
            ->latest()
            ->get();
    }


    public static function getAllPosts($locale = 'en')
    {
        return Post::select('posts.id', 'posts.active', 'posts.img', 'posts.created_at',
            'post_trans.title','post_trans.excerpt', 'post_trans.slug', 'category_trans.title as category_title', 'post_trans.text')
            ->leftJoin('post_trans', function ($join) use ($locale) {
                $join->on('post_trans.post_id', 'posts.id')
                    ->where('post_trans.lang', $locale);
            })
            ->leftJoin('categories', 'categories.id', 'posts.category_id')
            ->leftJoin('category_trans', function ($join) use ($locale) {
                $join->on('category_trans.category_id', 'categories.id')
                    ->where('category_trans.lang', $locale);
            })
            ->where('posts.active', self::ACTIVE)
            ->latest()
            ->get();
    }


    public static function getRelevantPosts($locale = 'en', $postId)
    {
        return Post::select(
            'posts.id',
            'posts.active',
            'posts.img',
            'posts.created_at',
            'post_trans.title',
            'post_trans.excerpt',
            'post_trans.slug',
            'category_trans.title as category_title',
            'post_trans.text')
            ->leftJoin('post_trans', function ($join) use ($locale) {
                $join->on('post_trans.post_id', 'posts.id')
                    ->where('post_trans.lang', $locale);
            })
            ->leftJoin('categories', 'categories.id', 'posts.category_id')
            ->leftJoin('category_trans', function ($join) use ($locale) {
                $join->on('category_trans.category_id', 'categories.id')
                    ->where('category_trans.lang', $locale);
            })
            ->where('posts.active', self::ACTIVE)
            ->whereNotIn('posts.id', [$postId->post_id])
            ->latest()
            ->limit(3) //choose the limit you have on design
            ->get();
    }


    public static function getAllByCategoryId($locale = 'en', $categoryId)
    {
        return Post::select('posts.id', 'posts.active', 'posts.img', 'posts.created_at',
            'post_trans.slug', 'post_trans.title', 'post_trans.excerpt', 'post_trans.text')
            ->leftJoin('post_trans', function ($join) use ($locale) {
                $join->on('post_trans.post_id', 'posts.id')
                    ->where('post_trans.lang', $locale);
            })
            ->where([
                ['posts.active', self::ACTIVE],
                ['posts.category_id', $categoryId]
            ])
            ->latest()
            ->get();
    }

    public static function getFrontSinglePost($locale = 'en', $postId)
    {
        return Post::select('posts.id', 'posts.active', 'posts.img', 'posts.created_at', 'post_trans.slug',
            'post_trans.title', 'post_trans.sub_title', 'post_trans.excerpt', 'post_trans.text')
            ->leftJoin('post_trans', function ($join) use ($locale) {
                $join->on('post_trans.post_id', 'posts.id')
                    ->where('post_trans.lang', $locale);
            })
            ->where([
                ['posts.active', self::ACTIVE],
                ['posts.id', $postId]
            ])
            ->with('gallery')
            ->first();
    }
}
