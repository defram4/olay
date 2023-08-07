<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inbox extends Model
{
    use HasFactory;
    protected $table = 'inboxes';
    protected $fillable = [
      'name', 'title', 'email', 'phone', 'message'
    ];

    public static function getAllInbox()
    {
        return Inbox::select('id', 'name', 'title', 'message', 'created_at')
            ->latest()
            ->get();
    }
}
