<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectMeta extends Model
{
    use HasFactory;

    protected $table = 'project_metas';
    protected $fillable = ['img', 'project_id'];

    public function text()
    {
        return $this->hasMany(ProjectMetaTrans::class, 'project_meta_id', 'id');
    }

    public static function getProjectMeta($locale = 'en', $projectId)
    {
        return ProjectMeta::select('project_metas.img', 'project_meta_trans.title')
            ->leftJoin('project_meta_trans', function ($join) use ($locale) {
                $join->on('project_metas.id', 'project_meta_trans.project_meta_id')
                    ->where('project_meta_trans.lang', $locale);
            })
            ->where('project_metas.project_id', $projectId)
            ->first();
    }
}
