<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReviewTrans extends Model
{
    use HasFactory;

    protected $table = 'review_trans';
    protected $fillable = [
        'title',
        'text',
        'lang',
        'review_id'
    ];

}
