<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TestimonialRequest;
use App\Models\Lang;
use App\Models\Testimonial;
use App\Services\TestimonialService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use Illuminate\Support\Facades\View;

class AdminTestimonialController extends Controller
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
        $testimonials = Testimonial::getAllTestimonials($locale);

        return View::make('admin.testimonial.index', [
            'testimonials' => $testimonials,
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

        return View::make('admin.testimonial.create', [
            'langs' => $langs
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TestimonialRequest $request, $locale, TestimonialService $testimonialService)
    {
        $testimonialService->store($request);

        return Redirect::route('admin.testimonials.index', [
            'locale' => $locale
        ])
            ->with('toast_success', trans('Testimonial successfully added'));
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($locale, Testimonial $testimonial)
    {
        $testimonial->load([
            'text',
        ]);

        $langs = Lang::all('code', 'name');

        return View::make('admin.testimonial.edit', [
            'testimonial' => $testimonial,
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
    public function update(TestimonialRequest $request, $locale, Testimonial $testimonial, TestimonialService $testimonialService)
    {
        $testimonialService->update($request, $testimonial);

        return Redirect::route('admin.testimonials.index', ['locale' => $locale])
            ->with('toast_succes', trans('Testimonial succesfully updated'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($locale, Testimonial $testimonial)
    {
        removeFile('testimonial', $testimonial->img);
        $testimonial->delete();
        return Redirect::route('admin.testimonials.index', ['locale' => $locale])
            ->with('toast_succes', trans('Testimonial removed succesfully'));
    }
}
