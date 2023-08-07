<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartnerLogoTrans extends Model
{
    use HasFactory;

    protected $table = 'partner_logo_trans';
    protected $fillable = [
        'name',
        'lang',
        'partner_logo_id'
    ];
}
