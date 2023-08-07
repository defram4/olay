<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    use HasFactory;

    //FAQ MODEL AND RELATION

    protected $table = 'faqs';
    protected $fillable = ['active'];

    protected $cast = [
        'active' => 'boolean'
    ];

    public function text()
    {
        return $this->hasMany(FaqTrans::class, 'faq_id', 'id');
    }
}
