<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProjectStoreRequest;
use App\Http\Requests\ProjectUpdateRequest;
use App\Http\Requests\ServiceStoreRequest;
use App\Http\Requests\ServiceUpdateRequest;
use App\Models\Lang;
use App\Models\Project;
use App\Models\Service;
use App\Services\ProjectService;
use App\Services\ServiceService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;

class ProjectController extends Controller
{
    public function index($locale)
    {

        $projects = Project::getProjects($locale);

        return View::make('admin.project.index', [
            'projects' => $projects
        ]);
    }

    public function create()
    {
        $langs = Lang::all('code', 'name');

        return View::make('admin.project.create', [
            'langs' => $langs
        ]);
    }

    public function store(ProjectStoreRequest $request, $locale, ProjectService $projectService)
    {
        $projectService->store($request);

        return Redirect::route('admin.projects.index', ['locale' => $locale])
            ->with('toast_success', trans('Service successfully added'));
    }

    public function edit($locale, Project $project)
    {
        $project->load(['text', 'gallery', 'meta.text']);
        $langs = Lang::all('code', 'name');
        return View::make('admin.project.edit', [
            'project' => $project,
            'langs' => $langs
        ]);
    }

    public function update(ProjectUpdateRequest $request, $locale, Project $project, ProjectService $projectService)
    {
        $projectService->update($request, $project);
        return Redirect::route('admin.projects.index', ['locale' => $locale])
            ->with('toast_success', trans('Service successfully updated'));
    }


    public function destroy($locale, Project $project)
    {
        if (!$project) {
            return redirect()->route('admin.projects.index', ['locale' => $locale])
                ->with('toast_error', trans('Project not found'));
        }

        removeFile('project', $project->img);

        if ($project->meta) {
            removeFile('project', $project->meta->img);
        }

        $project->delete();

        return Redirect::route('admin.projects.index', ['locale' => $locale])
            ->with('toast_success', trans('Project removed successfully'));
    }

}
