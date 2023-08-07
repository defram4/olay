<?php


namespace App\Services;


use App\Http\Requests\TeamRequest;

use App\Models\Team;
use App\Services\TextService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;



class TeamService
{

    public function store(TeamRequest $request)
    {

        $data = $request->validated();

        if ($request->hasFile('img')) {
            $data['img'] = storeFile('team', $request->file('img'));
        }

        $team = Team::create([
            'img' => $data['img'],
        ]);

        $team->text()->createMany($data['text']);

        return true;
    }


    public function update(TeamRequest $request, Team $team)
    {
        $data = $request->validated();

        if ($request->hasFile('img')) {
            removeFile('team', $team->img);
            $data['img'] = storeFile('team', $request->file('img'));
            $team->update([
                'img' => $data['img']
            ]);
        }


        (new TextService())->updateText($data['text'], $team);
        return true;
    }


}
