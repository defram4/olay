<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostMetaTrans extends Model
{
    use HasFactory;

    protected $table = 'post_meta_trans';
    protected $fillable = ['title', 'description', 'keywords', 'lang', 'post_meta_id'];
}
