<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;

    const ACTIVE = 1;

    protected $table = 'contents';
    protected $fillable = [
        'key',
        'page_id'
    ];

    public function text()
    {
        return $this->hasMany(ContentTrans::class, 'content_id', 'id');
    }

    public static function getContentByPage($locale, $pageId)
    {
        return Content::select('contents.key', 'content_trans.text', 'content_trans.link', 'contents.id')
            ->leftJoin('content_trans', function ($join) use ($locale) {
                $join->on('content_trans.content_id', 'contents.id')
                    ->where('content_trans.lang', $locale);
            })
            ->where('contents.page_id', $pageId)
            ->get()
            ->mapWithKeys(function ($item) {
                return [$item->key => $item];
            });
    }
}
