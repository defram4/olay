<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    const ACTIVE = 1;

    protected $table = 'reviews';
    protected $fillable = ['active'];

    protected $cast = [
        'active' => 'boolean'
    ];

    public function text()
    {
        return $this->hasMany(ReviewTrans::class, 'review_id', 'id');
    }

    public static function getAllReviewsForFront($locale)
    {
        return Review::select('reviews.id', 'reviews.active', 'review_trans.title',
            'review_trans.text', 'reviews.created_at')
            ->leftJoin('review_trans', function ($join) use ($locale) {
                $join->on('review_trans.review_id', 'reviews.id')
                    ->where('review_trans.lang', $locale);
            })
            ->latest()
            ->where('reviews.active', self::ACTIVE)
            ->get();
    }

}
