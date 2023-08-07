@extends('layouts.admin')
@section('content')
    <!-- Page Content -->
    <div class="content">
        <!-- Table -->
        <div class="col-12">
            <!-- Floating Labels -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">{{ __('Edit post') }}</h3>
                </div>
                <div class="block-content">
                    <form
                        action="{{ route('admin.blog_posts.update', ['locale' => app()->getLocale(), 'blogPost' => $blogPost->id]) }}"
                        method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="form-group row">
                            <div class="col-md-6 offset-3">
                                <div class="{{ $errors->has('post.category_id') ? "is-invalid" : '' }}">
                                    <div class="form-material floating">
                                        <select class="form-control" id="material-select2" name="post[category_id]">
                                            <option></option>
                                            @foreach($categories as $category)
                                                <option value="{{ $category->id }}"
                                                    {{ $blogPost->category_id == $category->id ? 'selected' : '' }}
                                                >{{ $category->title }}</option>
                                            @endforeach
                                        </select>
                                        <label for="material-select2">
                                            {{ __('Category') }}
                                            <span class="text-danger">*</span>
                                        </label>
                                    </div>
                                    @error('post.category_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                            </div>
                        </div>
                        <div class="form-group row">
                            @foreach($langs as $lang)
                                <div class="col-md-6 mb-4">
                                    <h3 class="mb-n2">{{ $lang->name }}</h3>
                                    <div class="{{ $errors->has("text.$loop->index.title") ? "is-invalid" : "" }}">
                                        <div class="form-material floating">
                                            <input type="text" class="form-control"
                                                   id="title-{{ $loop->index }}"
                                                   name="text[{{ $loop->index }}][title]"
                                                   autocomplete="off"
                                                   value="{{ $blogPost->text[$loop->index]->title ?? '' }}"
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

                                    <div class="{{ $errors->has("text.$loop->index.sub_title") ? 'is-invalid': '' }}">
                                        <div class="form-material floating">
                                            <input type="text"
                                                   class="form-control"
                                                   id="subTitle-{{ $loop->index }}"
                                                   name="text[{{ $loop->index }}][sub_title]"
                                                   autocomplete="off"
                                                   value="{{ $blogPost->text[$loop->index]->sub_title ?? ''  }}"
                                            >
                                            <label for="subTitle-{{ $loop->index }}">
                                                {{ __('Sub title') }}
                                                <span class="text-danger">*</span>
                                            </label>
                                        </div>
                                        @error("text.$loop->index.sub_title")
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="{{ $errors->has("text.$loop->index.excerpt") ? 'is-invalid' : '' }}">
                                        <div class="form-material floating">
                                        <textarea type="text"
                                                  class="form-control"
                                                  id="excerpt-{{ $loop->index }}"
                                                  name="text[{{ $loop->index }}][excerpt]"
                                                  autocomplete="off">{{ $blogPost->text[$loop->index]->excerpt ?? ''  }}</textarea>
                                            <label for="excerpt-{{ $loop->index }}">
                                                {{ __('Excerpt') }}
                                                <span class="text-danger">*</span>
                                            </label>
                                        </div>
                                        @error("text.$loop->index.excerpt")
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="{{ $errors->has("text.$loop->index.text") ? 'is-invalid' : '' }}">
                                        <div class="form-material floating">
                                        <textarea id="description-{{ $loop->index }}" class="form-control js-summernote"
                                                  name="text[{{ $loop->index }}][text]">{{ $blogPost->text[$loop->index]->text ?? ''  }}</textarea>
                                            <label for="description-{{ $loop->index }}">
                                                {{ __('Description') }}
                                                <span class="text-danger">*</span>
                                            </label>
                                        </div>
                                        @error("text.$loop->index.text")
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <input type="hidden" name="text[{{ $loop->index }}][lang]"
                                           value="{{ $lang->code }}">
                                    <hr>
                                    <input type="hidden" name="seotext[{{ $loop->index }}][lang]"
                                           value="{{ $lang->code }}">
                                    <h3 class="mb-n2">SEO/{{ $lang->name }}</h3>
                                    <div class="{{ $errors->has("seotext.$loop->index.title") ? 'is-invalid' : '' }}">
                                        <div class="form-material floating">
                                            <input type="text" class="form-control"
                                                   id="title_seo-{{ $loop->index }}"
                                                   name="seotext[{{ $loop->index }}][title]"
                                                   autocomplete="off"
                                                   value="{{ $blogPost->meta->text[$loop->index]->title ?? '' }}"
                                            >
                                            <label for="title_seo-{{ $loop->index }}">
                                                {{ __('Title') }}
                                                <span class="text-danger">*</span>
                                            </label>
                                        </div>
                                        @error("seotext.$loop->index.title")
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div
                                        class="{{ $errors->has("seotext.$loop->index.keywords") ? "is-invalid" : '' }}">
                                        <div class="form-material floating">
                                            <input type="text" class="form-control" id="keywords-{{ $loop->index }}"
                                                   name="seotext[{{ $loop->index }}][keywords]"
                                                   autocomplete="off"
                                                   value="{{ $blogPost->meta->text[$loop->index]->keywords ?? '' }}">
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
                                        class="{{ $errors->has("seotext.$loop->index.description") ? 'is-invalid' : '' }}">
                                        <div class="form-material floating mb-5">
                                        <textarea class="form-control" id="subTitle-{{ $loop->index }}"
                                                  name="seotext[{{ $loop->index }}][description]"
                                                  autocomplete="off">{{ $blogPost->meta->text[$loop->index]->description ?? '' }}</textarea>
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
                                <img src="{{ asset('storage/post/'. $blogPost->img) }}" class="img-fluid" alt="foto">
                                <h2>{{ __('Image main') }}</h2>
                                <div class="{{ $errors->has("post.img") ? 'is-invalid' : '' }}">
                                    <div class="form-material">
                                        <label for="img">
                                            {{ __('Photo') }}
                                        </label>
                                        <input type="file" class="form-control" id="img" name="post[img]"
                                               autocomplete="off">
                                    </div>
                                    @error("post.img")
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <img src="{{ asset('storage/post/'. $blogPost->meta->img) }}" class="img-fluid" alt="foto">
                                <h2>{{ __('Image SEO') }}</h2>
                                <div class="{{ $errors->has("seo.img") ? 'is-invalid' : '' }}">
                                    <div class="form-material">
                                        <label for="img">
                                            {{ __('Photo') }}
                                        </label>
                                        <input type="file" class="form-control" id="img" name="seo[img]"
                                               autocomplete="off">
                                    </div>
                                    @error("seo.img")
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <h2>{{ __('Gallery') }}</h2>
                        <div class="form-group row">

                            <div class="col-md-4 {{ $errors->has('gallery.*') ? 'is-invalid' : '' }}">
                                <div class="form-material">
                                    <label for="img">{{ __('Image gallery') }}</label>
                                    <input type="file"
                                           class="form-control"
                                           id="img"
                                           name="gallery[]"
                                           multiple
                                           autocomplete="off">
                                    @error("gallery.*")
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                        </div>

                        <div class="form-group row">
                            <div class="col-md-12 text-center my-3">
                                <button type="submit" class="btn btn-alt-primary w-25">{{ __('Save') }}</button>
                                <a href="{{ route('admin.blog', ['locale' => app()->getLocale()]) }}" type="submit"
                                   class="btn btn-alt-danger w-25">{{ __('Back') }}</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END Floating Labels -->

            <div class="p-5">
                <h2>{{ __('Image gallery') }}</h2>
                <div class="row">
                    @foreach($blogPost->gallery as $img)
                        <div class="col-md-4 position-relative" style="padding-top: 2%">
                            <img src="{{ asset('storage/post/'. $img->img) }}" alt="gallery img" class="img-fluid">
                            <form
                                style="position: absolute;top: 2%;right: 5%;"
                                action="{{ route('admin.gallery-post-delete', ['locale' => app()->getLocale(), 'id' => $img->id]) }}"
                                method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                        style="background-color: transparent; border: none">
                                    <i class="fa fa-remove text-danger"></i>
                                </button>
                            </form>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
        <!-- END Table -->
    </div>
    <!-- END Page Content -->
@endsection
@push('style')
    <link rel="stylesheet" href="{{ asset('admin/js/plugins/summernote/summernote-bs4.css') }}">
@endpush
@push('script')
    <script src="{{ asset('admin/js/plugins/summernote/summernote-bs4.min.js') }}"></script>
    <script>
        jQuery(function () {
            Codebase.helpers(['summernote']);
        });
    </script>
@endpush
