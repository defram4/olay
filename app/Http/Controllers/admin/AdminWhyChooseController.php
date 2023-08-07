<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\WhyChooseRequest;
use App\Models\Lang;
use App\Models\WhyChoose;
use App\Services\WhyChooseService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use Illuminate\Support\Facades\View;

class AdminWhyChooseController extends Controller
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
        $why_chooses = WhyChoose::getAllWhyChooses($locale);

        return View::make('admin.why_choose.index', [
            'why_chooses' => $why_chooses,
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

        return View::make('admin.why_choose.create', [
            'langs' => $langs
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(WhyChooseRequest $request, $locale, WhyChooseService $why_chooseService)
    {
        $why_chooseService->store($request);

        return Redirect::route('admin.why_chooses.index', [
            'locale' => $locale
        ])
            ->with('toast_success', trans('WhyChoose successfully added'));
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($locale, WhyChoose $why_choose)
    {
        $why_choose->load([
            'text',
        ]);

        $langs = Lang::all('code', 'name');

        return View::make('admin.why_choose.edit', [
            'why_choose' => $why_choose,
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
    public function update(WhyChooseRequest $request, $locale, WhyChoose $why_choose, WhyChooseService $why_chooseService)
    {
        $why_chooseService->update($request, $why_choose);

        return Redirect::route('admin.why_chooses.index', ['locale' => $locale])
            ->with('toast_success', trans('WhyChoose successfully updated'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($locale, WhyChoose $why_choose)
    {
        removeFile('why_choose', $why_choose->img);
        $why_choose->delete();
        return Redirect::route('admin.why_chooses.index', ['locale' => $locale])
            ->with('toast_success', trans('WhyChoose removed successfully'));
    }
}
