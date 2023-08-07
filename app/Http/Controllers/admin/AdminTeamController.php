<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TeamRequest;
use App\Models\Lang;
use App\Models\Team;
use App\Services\TeamService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use Illuminate\Support\Facades\View;

class AdminTeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param $locale
     * @return \Illuminate\Http\Response
     */
    public function index($locale)
    {

        $langs = Lang::all();
        $teams = Team::getAllTeams($locale);

        return View::make('admin.team.index', [
            'teams' => $teams,
            'langs' => $langs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($locale)
    {
        $langs = Lang::all();

        return View::make('admin.team.create', [
            'langs' => $langs
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TeamRequest $request, $locale, TeamService $teamService)
    {
        $teamService->store($request);

        return Redirect::route('admin.teams.index', [
            'locale' => $locale
        ])
            ->with('toast_success', trans('Team successfully added'));
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($locale, Team $team)
    {
        $team->load([
            'text',
        ]);

        $langs = Lang::all('code', 'name');

        return View::make('admin.team.edit', [
            'team' => $team,
            'langs' => $langs
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TeamRequest $request, $locale, Team $team, TeamService $teamService)
    {
        $teamService->update($request, $team);

        return Redirect::route('admin.teams.index', ['locale' => $locale])
            ->with('toast_succes', trans('Team succesfully updated'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($locale, Team $team)
    {
        removeFile('team', $team->img);
        $team->delete();
        return Redirect::route('admin.teams.index', ['locale' => $locale])
            ->with('toast_succes', trans('Team removed succesfully'));
    }
}
