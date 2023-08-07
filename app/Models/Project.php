<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    const ACTIVE = 1;

    protected $table = 'projects';
    protected $fillable = ['img', 'active'];

    protected $casts = [
        'active' => 'boolean'
    ];

    public function text()
    {
        return $this->hasMany(ProjectTrans::class, 'project_id', 'id');
    }

    public function meta()
    {
        return $this->hasOne(ProjectMeta::class, 'project_id', 'id');
    }


    //Gallery
    public function gallery()
    {
        return $this->hasMany(ProjectGallery::class, 'project_id', 'id');
    }



    public static function getProjects($locale = 'en')
    {
        return Project::select('projects.id', 'projects.active', 'projects.img', 'projects.created_at',
            'project_trans.title', 'project_trans.sub_title', 'project_trans.slug', 'project_trans.text')
            ->leftJoin('project_trans', function ($join) use ($locale) {
                $join->on('project_trans.project_id', 'projects.id')
                    ->where('project_trans.lang', $locale);
            })
            ->where('projects.active', self::ACTIVE)
            ->latest()
            ->get();
    }

    public static function getForFrontAllProjects($locale = 'en')
    {
        return Project::select('projects.id', 'projects.active', 'projects.img', 'projects.created_at',
            'project_trans.title', 'project_trans.sub_title', 'project_trans.slug', 'project_trans.text')
            ->leftJoin('project_trans', function ($join) use ($locale) {
                $join->on('project_trans.project_id', 'projects.id')
                    ->where('project_trans.lang', $locale);
            })
            ->where('projects.active', self::ACTIVE)
            ->get();
    }


    public static function getFrontSingleProject($locale = 'en', $projectId)
    {
        return Project::select(
            'projects.id',
            'projects.active',
            'projects.img',
            'projects.cover_img',
            'projects.cover_video_img',
            'projects.video_link',
            'projects.created_at',
            'project_trans.slug',
            'project_trans.title',
            'project_trans.sub_title',
            'project_trans.text',
            'project_trans.customer_name',
            'project_trans.company_name',
            'project_trans.country'
        )
            ->leftJoin('project_trans', function ($join) use ($locale) {
                $join->on('project_trans.project_id', 'projects.id')
                    ->where('project_trans.lang', $locale);
            })
            ->where([
                ['projects.active', self::ACTIVE],
                ['projects.id', $projectId]
            ])
            ->with('gallery')
            ->first();
    }

    public static function getAllProjectOnPages($locale = 'en')
    {
        return Project::select('projects.id', 'projects.active', 'projects.img', 'projects.created_at',
            'project_trans.title', 'project_trans.sub_title', 'project_trans.slug', 'project_trans.text')
            ->leftJoin('project_trans', function ($join) use ($locale) {
                $join->on('project_trans.project_id', 'projects.id')
                    ->where('project_trans.lang', $locale);
            })
            ->where('projects.active', self::ACTIVE)
            ->latest()
            ->get();
    }
}
