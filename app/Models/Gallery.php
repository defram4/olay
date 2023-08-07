<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    const ACTIVE = 1;

    protected $table = 'galleries';

    protected $fillable = [
        'active',
        'img',
    ];


    protected $casts = [
        'active' => 'boolean'
    ];


    public static function getAllGalleries($locale = 'en')
    {
        return Gallery::select(
            'galleries.id',
            'galleries.active',
            'galleries.created_at',
            'galleries.img',
        )
            ->latest()
            ->get();
    }


    public static function getAllGalleriesForFront($locale = 'en')
    {
        return Gallery::select(
            'galleries.id',
            'galleries.active',
            'galleries.created_at',
            'galleries.img',
        )
            ->where('galleries.active', self::ACTIVE)
            ->latest()
            ->get();
    }
}
