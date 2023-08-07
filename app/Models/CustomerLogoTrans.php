<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerLogoTrans extends Model
{
    use HasFactory;

    protected $table = 'customer_logo_trans';
    protected $fillable = [
        'name',
        'lang',
        'customer_logo_id'
    ];
}
