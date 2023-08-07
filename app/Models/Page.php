<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    const ACTIVE = 1;
    const INACTIVE = 0;


    //Pages
    const HOME = 1;
    const ABOUT = 2;
    const SERVICES = 3;
    const PROJECTS = 4;
    const BLOG = 5;
    const CONTACT = 6;
    const PRIVACY = 7;
    const FAQ = 8;
    const TERMS = 9;

    const NEWS = 10;

    protected $table = 'pages';
    protected $fillable = [
        'active',
        'label'
    ];

    protected $casts = [
        'active' => 'boolean'
    ];

    public function meta()
    {
        return $this->hasOne(PageMeta::class, 'page_id', 'id');
    }

    public static function getActivePages()
    {
        return Page::select('id', 'label')
            ->where('active', Page::ACTIVE)
            ->get();
    }
}
