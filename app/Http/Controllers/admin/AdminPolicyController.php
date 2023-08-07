<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PolicyStoreRequest;
use App\Http\Requests\PolicyUpdateRequest;
use App\Models\Lang;
use App\Models\Policy;
use App\Services\TextService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;

class AdminPolicyController extends Controller
{
    public function index($locale)
    {
        $policies = Policy::select(
            'policies.id',
            'policies.active',
            'policy_trans.title',
            'policy_trans.text',
            'policies.created_at')

            ->leftJoin('policy_trans', function ($join) use ($locale) {
                $join->on('policy_trans.policy_id', 'policies.id')
                    ->where('policy_trans.lang', $locale);
            })
            ->get();

        return View::make('admin.policy.index', [
            'policies' => $policies
        ]);

    }

    public function create($locale)
    {
        $langs = Lang::getAllLang();

        return View::make('admin.policy.policy.create', [
            'langs' => $langs
        ]);
    }

    public function store(PolicyStoreRequest $request)
    {
        $data = $request->validated();
        $policy = Policy::create();
        $policy->text()->createMany($data['text']);
        return Redirect::route('admin.policies.index', ['locale' => App::getLocale()])
            ->with(['toast_success' => trans('Policy created successfully'), 'policy_page' => true]);
    }

    public function edit($locale, $id)
    {
        $policy = Policy::findOrFail($id);
        $policy->load(['text']);
        $langs = Lang::getAllLang();

        return View::make('admin.policy.policy.edit', compact('policy', 'langs'));
    }

    public function update(PolicyUpdateRequest $request, $locale, Policy $policy)
    {

        $data = $request->validated();

        (New TextService())->updateText($data['text'],$policy);

        return Redirect::route('admin.policies.index', ['locale' => app()->getLocale()])->with([
            'toast_success' => trans('Policy edited successfully')]);
    }

    public function destroy($locale, $id)
    {
        Policy::destroy($id);
        return redirect()->route('admin.policies.index', $locale);
    }
}
