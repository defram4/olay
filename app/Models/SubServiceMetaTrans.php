<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubServiceMetaTrans extends Model
{
    use HasFactory;

    protected $table = 'sub_service_meta_trans';
    protected $fillable = [
        'title',
        'text',
        'keywords',
        'lang',
        'sub_service_meta_id'
    ];
}
