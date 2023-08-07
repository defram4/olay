@extends('layouts.admin')
@section('content')
    <!-- Page Content -->
    <div class="content">
        <!-- Table -->
        <div class="col-12">
            <!-- Floating Labels -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">{{ __('Edit category') }}</h3>
                </div>
                <div class="block-content">
                    <form
                        action="{{ route('admin.blog_categories.update', ['locale' => app()->getLocale(), 'blogCategory' => $blogCategory->id]) }}"
                        method="post"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="form-group row">
                            @foreach($langs as $lang)
                                <div class="col-md-6 mb-4">
                                    <h3 class="mb-n2">{{ $lang->name }}</h3>
                                    <div class="{{ $errors->has("text.$loop->index.title") ? 'is-invalid' : ''}}">
                                        <div class="form-material floating ">
                                            <input type="text"
                                                   class="form-control"
                                                   id="title-{{ $loop->index }}"
                                                   name="text[{{ $loop->index }}][title]"
                                                   autocomplete="off"
                                                   value="{{ $blogCategory->text[$loop->index]->title ?? '' }}"
                                            >
                                            <label for="title-{{ $loop->index }}">
                                                {{ __('Title') }}
                                                <span class="text-danger">*</span>
                                            </label>
                                        </div>
                                        @error("text.$loop->index.title")
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="{{ $errors->has("text.$loop->index.description") ? 'is-invalid' : ''}}">
                                        <div class="form-material floating">
                                        <textarea type="text"
                                                  class="form-control"
                                                  id="description-{{ $loop->index }}"
                                                  name="text[{{ $loop->index }}][description]"
                                                  autocomplete="off">{{ $blogCategory->text[$loop->index]->description ?? '' }}</textarea>
                                            <label for="description-{{ $loop->index }}">
                                                {{ __('Description') }}
                                                <span class="text-danger">*</span>
                                            </label>
                                        </div>
                                        @error("text.$loop->index.description")
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <input type="hidden" name="text[{{$loop->index}}][lang]" value="{{ $lang->code }}">
                                    <hr>
                                    <input type="hidden" name="seotext[{{ $loop->index }}][lang]"
                                           value="{{ $lang->code }}">
                                    <h3 class="mb-n2">SEO/{{ $lang->name }}</h3>
                                    <div class="{{ $errors->has("seotext.$loop->index.title") ? 'is-invalid' : ''}}">
                                        <div class="form-material floating">
                                            <input type="text" class="form-control" id="title_seo-{{ $loop->index }}"
                                                   name="seotext[{{ $loop->index}}][title]"
                                                   autocomplete="off"
                                                   value="{{ $meta->text[$loop->index]->title ?? '' }}"
                                            >
                                            <label for="title_seo-{{ $loop->index }}">
                                                {{ __('Title') }}
                                                <span class="text-danger">*</span>
                                            </label>
                                        </div>
                                        @error("seotext.$loop->index.description")
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div
                                        class="{{ $errors->has("seotext.$loop->index.keywords") ? "is-invalid" : '' }}">
                                        <div class="form-material floating">
                                            <input type="text" class="form-control" id="keywords-{{ $loop->index }}"
                                                   name="seotext[{{ $loop->index }}][keywords]"
                                                   autocomplete="off"
                                                   value="{{ $meta->text[$loop->index]->keywords ?? '' }}">
                                            <label for="keywords-{{ $loop->index }}">
                                                {{ __('Keywords') }}
                                                <span class="text-danger">*</span>
                                            </label>
                                            @error("seotext.$loop->index.keywords")
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div
                                        class="{{ $errors->has("seotext.$loop->index.description") ? 'is-invalid' : ''}}">
                                        <div class="form-material floating mb-5">
                                        <textarea class="form-control" id="subTitle-{{ $loop->index }}"
                                                  name="seotext[{{ $loop->index }}][description]"
                                                  autocomplete="off">{{ $meta->text[$loop->index]->description ?? '' }}</textarea>
                                            <label for="subTitle-{{ $loop->index }}">
                                                {{ __('Description') }}
                                                <span class="text-danger">*</span>
                                            </label>
                                        </div>
                                        @error("seotext.$loop->index.description")
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <img src="{{ asset('storage/category/'. $blogCategory->img) }}" class="img-fluid" alt="foto">
                                <h2>{{ __('Image main') }}</h2>
                                <div class="{{ $errors->has("img") ? 'is-invalid' : ''}}">
                                    <div class="form-material">
                                        <label for="img">
                                            {{ __('Photo') }}
                                        </label>
                                        <input type="file" class="form-control" id="img" name="img"
                                               autocomplete="off">
                                    </div>
                                    @error('img')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <img src="{{ asset('storage/category/'. $meta->img) }}" class="img-fluid" alt="foto seo">
                                <h2>{{ __('Image SEO') }}</h2>
                                <div class="{{ $errors->has("seo.img") ? 'is-invalid' : ''}}">
                                    <div class="form-material">
                                        <label for="img">
                                            {{ __('Photo') }}
                                        </label>
                                        <input type="file" class="form-control" id="img" name="seo[img]"
                                               autocomplete="off">
                                    </div>
                                    @error('seo.img')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12 text-center my-3">
                                <button type="submit" class="btn btn-alt-primary w-25">{{ __('Edit') }}</button>
                                <a href="{{ route('admin.blog', ['locale' => app()->getLocale()]) }}" type="submit"
                                   class="btn btn-alt-danger w-25">{{ __('Back') }}</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END Floating Labels -->
        </div>
        <!-- END Table -->
    </div>
    <!-- END Page Content -->
@endsection
