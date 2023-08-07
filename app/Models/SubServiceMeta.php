<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubServiceMeta extends Model
{
    use HasFactory;

    protected $table = 'sub_service_metas';
    protected $fillable = [
        'img',
        'sub_service_id'
    ];

    public function text()
    {
        return $this->hasMany(SubServiceMetaTrans::class, 'sub_service_meta_id', 'id');
    }
}
