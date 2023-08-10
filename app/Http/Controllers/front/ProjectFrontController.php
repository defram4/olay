<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Content;
use App\Models\CustomerLogo;
use App\Models\Image;
use App\Models\PageMeta;
use App\Models\Project;
use App\Models\ProjectMeta;
use App\Models\ProjectTrans;
use App\Models\Review;
use App\Models\Service;
use App\Models\ServiceMeta;
use App\Models\ServiceTrans;
use App\Models\Social;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;

class ProjectFrontController extends Controller
{
    public function index($locale)
    {


        $img = Image::getImageByPageId(4);
        $projects = Project::getForFrontAllProjects($locale);
        $content = Content::getContentByPage($locale, 4);
        $meta = PageMeta::getMetaForPage($locale, 4);
        $services = Service::getForFrontAllServices($locale);
        $socials = Social::getAllSocials($locale);
        $socials = Social::getAllSocialsForFront($locale);


        return View::make('front.pages.projects.project', [
            'images' => $img,
            'projects' => $projects,
            'content'=>$content,
            'services' => $services,
            'meta'=>$meta,
            'socials' => $socials, // img(sometimes) , name(sometimes) , url
        ]);


    }

    public function show($locale, $slug)
    {
        $projectId = ProjectTrans::select('project_id', 'lang')
            ->where('slug', $slug)
            ->first();
        if ($projectId->lang !== $locale) {
            $projectRedirect = ProjectTrans::select('slug')
                ->where([
                    ['project_id', $projectId->project_id],
                    ['lang', $locale]
                ])
                ->first();
            return Redirect::route('front.single.project', [
                'locale' => $locale,
                'slug' => $projectRedirect->slug
            ]);
        }

        $project = Project::getFrontSingleProject($locale, $projectId->project_id);
        $content = Content::getContentByPage($locale, 4);
        $relevantProject = Project::getAllProjectOnPages($locale);
        $img = Image::getImageByPageId(4);
        $projectMeta = ProjectMeta::getProjectMeta($locale, $projectId->project_id);
        $projects = Project::getForFrontAllProjects($locale);
        $services = Service::getForFrontAllServices($locale);
        $socials = Social::getAllSocials($locale);
        $socials = Social::getAllSocialsForFront($locale);

        return View::make('front.pages.projects.single-project', [
            'locale' => $locale,
            'project' => $project,
            'content' => $content,
            'relevantProject' => $relevantProject,
            'images' => $img,
            'projectMeta' => $projectMeta,
            'services' => $services,
            'projects' => $projects,
            'socials' => $socials, // img(sometimes) , name(sometimes) , url
        ]);
    }
}
