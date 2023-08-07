<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    const ACTIVE = 1;

    protected $table = 'teams';

    protected $fillable = [
        'active',
        'img',
    ];


    protected $casts = [
        'active' => 'boolean'
    ];

    public function text()
    {
        return $this->hasMany(TeamTrans::class, 'team_id', 'id');
    }

    public static function getAllTeams($locale = 'en')
    {
        return Team::select(
            'teams.id',
            'teams.active',
            'teams.created_at',
            'teams.img',
            'team_trans.name',
            'team_trans.function',
            'team_trans.text',
            'team_trans.slug',
        )
            ->leftJoin('team_trans', function ($join) use ($locale) {
                $join->on('team_trans.team_id', 'teams.id')
                    ->where('team_trans.lang', $locale);
            })
            ->latest()
            ->get();
    }


    public static function getAllTeamsForFront($locale = 'en')
    {
        return Team::select(
            'teams.id',
            'teams.active',
            'teams.created_at',
            'teams.img',
            'team_trans.name',
            'team_trans.function',
            'team_trans.text',
            'team_trans.slug',
        )
            ->leftJoin('team_trans', function ($join) use ($locale) {
                $join->on('team_trans.team_id', 'teams.id')
                    ->where('team_trans.lang', $locale);
            })
            ->where('teams.active', self::ACTIVE)
            ->latest()
            ->get();
    }
}
