<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostMeta extends Model
{
    use HasFactory;
    protected $table = 'post_metas';
    protected $fillable = ['img', 'post_id'];

    public function text()
    {
        return $this->hasMany(PostMetaTrans::class, 'post_meta_id', 'id');
    }

    public static function getPostMeta($locale = 'en', $postId)
    {
        return PostMeta::select('post_metas.img', 'post_meta_trans.title')
            ->leftJoin('post_meta_trans', function ($join) use ($locale) {
                $join->on('post_metas.id', 'post_meta_trans.post_meta_id')
                    ->where('post_meta_trans.lang', $locale);
            })
            ->where('post_metas.post_id', $postId)
            ->first();
    }
}
