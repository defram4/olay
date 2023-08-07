@extends('layouts.admin')
@section('content')
    <!-- Page Content -->
    <div class="content">
        <!-- Table -->
        <div class="col-12">
            <!-- Floating Labels -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">{{ __('Edit news') }}</h3>
                </div>

                @if($errors->any())
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        <strong>
                            {!! implode('<br/>', $errors->all('<span>:message</span>')) !!}
                        </strong>
                    </div>
                @endif

                <div class="block-content">
                    <form
                        action="{{ route('admin.newses.update', ['locale' => app()->getLocale(), 'news' => $news->id]) }}"
                        method="post"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')


                        <div class="form-group row">
                            @foreach($langs as $lang)
                                <div class="col-md-12 mb-4">
                                    <h3 class="mb-n2" style="color: red;padding-bottom: 2%">{{ $lang->name }}</h3>

                                    <div class="{{ $errors->has("text.$loop->index.title") ? 'is-invalid' : '' }}">
                                        <div class="form-material floating">
                                            <input type="text" class="form-control" id="title-{{ $loop->index }}"
                                                   name="text[{{ $loop->index }}][title]"
                                                   autocomplete="off"
                                                   value="{{ $news->text[$loop->index]->title ?? '' }}">
                                            <label for="title-{{ $loop->index }}">
                                                {{ __('Title') }}
                                                <span class="text-danger">*</span>
                                            </label>
                                            @error("text.$loop->index.title")
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="{{ $errors->has("text.$loop->index.sub_title") ? "is-invalid" : "" }}">
                                        <div class="form-material floating">
                                            <input type="text" class="form-control" id="sub_title-{{ $loop->index }}"
                                                   name="text[{{ $loop->index }}][sub_title]"
                                                   autocomplete="off"
                                                   value="{{ $news->text[$loop->index]->sub_title ?? '' }}">
                                            <label for="sub_title-{{ $loop->index }}">
                                                {{ __('Sub title') }}
                                                <span class="text-danger">*</span>
                                            </label>
                                            @error("text.$loop->index.sub_title")
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="{{ $errors->has("text.$loop->index.excerpt") ? 'is-invalid' : '' }}">
                                        <div class="form-material floating">
                                        <textarea type="text"
                                                  class="form-control"
                                                  id="excerpt-{{ $loop->index }}"
                                                  name="text[{{ $loop->index }}][excerpt]"
                                                  autocomplete="off">{{ $news->text[$loop->index]->excerpt ?? ''  }}</textarea>
                                            <label for="excerpt-{{ $loop->index }}">
                                                {{ __('Excerpt') }}
                                                <span class="text-danger">*</span>
                                            </label>
                                        </div>
                                        @error("text.$loop->index.excerpt")
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="{{ $errors->has("text.$loop->index.text") ? "is-invalid" : "" }}">
                                        <div class="form-material floating">
                                            <label for="description-{{ $loop->index }}">
                                                {{ __('Description') }}
                                                <span class="text-danger">*</span>
                                            </label>
                                            <textarea class="form-control js-summernote"
                                                      id="description-{{ $loop->index }}"
                                                      name="text[{{ $loop->index }}][text]">{{ $news->text[$loop->index]->text ?? '' }}</textarea>

                                            @error("text.$loop->index.text")
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <input type="hidden" name="text[{{ $loop->index }}][lang]"
                                           value="{{ $lang->code }}">
                                    <hr>
                                    <input type="hidden" name="seotext[{{ $loop->index }}][lang]"
                                           value="{{ $lang->code }}">
                                    <h3 class="mb-n2">SEO/{{ $lang->name }}</h3>

                                    <div class="{{ $errors->has("seotext.$loop->index.title") ? "is-invalid" : "" }}">
                                        <div class="form-material floating">
                                            <input type="text" class="form-control" id="title_seo-{{ $loop->index }}"
                                                   name="seotext[{{ $loop->index }}][title]"
                                                   autocomplete="off"
                                                   value="{{ $news->meta->text[$loop->index]->title ?? '' }}"
                                            >
                                            <label for="title_seo-{{$loop->index}}">
                                                {{ __('Title') }}
                                                <span class="text-danger">*</span>
                                            </label>
                                            @error("seotext.$loop->index.title")
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="{{ $errors->has("seotext.$loop->index.keywords") ? "is-invalid" : '' }}">
                                        <div class="form-material floating">
                                            <input type="text" class="form-control" id="keywords-{{ $loop->index }}"
                                                   name="seotext[{{ $loop->index }}][keywords]"
                                                   autocomplete="off"
                                                   value="{{ $news->meta->text[$loop->index]->keywords ?? '' }}">
                                            <label for="keywords-{{ $loop->index }}">
                                                {{ __('Keywords') }}
                                                <span class="text-danger">*</span>
                                            </label>
                                            @error("seotext.$loop->index.keywords")
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="{{ $errors->has("seotext.$loop->index.text") ? "is-invalid" : "" }}">
                                        <div class="form-material floating mb-5">
                                        <textarea class="form-control" id="seo-subTitle-{{ $loop->index }}"
                                                  name="seotext[{{ $loop->index }}][text]"
                                                  autocomplete="off">{{ $news->meta->text[$loop->index]->text ?? '' }}</textarea>
                                            <label for="seo-subTitle-{{ $loop->index }}">
                                                {{ __('Description') }}
                                                <span class="text-danger">*</span>
                                            </label>
                                            @error("seotext.$loop->index.text")
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                </div>
                            @endforeach
                        </div>
                        <div class="form-group row">

                            <div class="col-md-12 {{ $errors->has('img') ? "is-invalid" : "" }}">
                                <img src="{{ asset('storage/news/'. $news->img) }}"
                                     class="img-fluid" alt="news img">
                                <div class="form-material ">
                                    <label for="img">
                                        {{ __('Photo') }}
                                    </label>
                                    <input type="file" class="form-control" id="img" name="img"
                                           autocomplete="off">
                                    @error('img')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-12 {{ $errors->has('seo.img') ? "is-invalid" : "" }}">
                                <img src="{{ asset('storage/news/'. $news->meta->img) }}"
                                     class="img-fluid" alt="news CEO img">
                                <div class="form-material">
                                    <label for="seoimg">
                                        {{ __('Image SEO') }}
                                    </label>
                                    <input type="file" class="form-control" id="seoimg" name="seo[img]"
                                           autocomplete="off">
                                    @error('seo.img')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                        </div>

                        <div class="form-group row">

                            <div class="col-md-12 {{ $errors->has('cover_img') ? "is-invalid" : "" }}">
                                <img src="{{ asset('storage/news/'. $news->cover_img) }}"
                                     class="img-fluid" alt="news cover img">
                                <div class="form-material ">
                                    <label for="cover_img">
                                        {{ __('Cover Img') }}
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="file" class="form-control" id="cover_img" name="cover_img"
                                           autocomplete="off">
                                    @error('cover_img')
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

                                <button type="submit" class="btn btn-alt-primary w-25">
                                    {{ __('Edit') }}
                                </button>

                                <a href="{{ URL::previous() }}"
                                   type="submit"
                                   class="btn btn-alt-danger w-25">
                                    {{ __('Back') }}
                                </a>

                            </div>

                        </div>

                    </form>


                </div>
            </div>
            <!-- END Floating Labels -->

            <div class="p-5">
                <h2>{{ __('Image gallery') }}</h2>
                <div class="row">
                    @foreach($news->gallery as $img)
                        <div class="col-md-4 position-relative" style="padding-top: 2%">
                            <img src="{{ asset('storage/news/'. $img->img) }}" alt="gallery img" class="img-fluid">
                            <form
                                style="position: absolute;top: 2%;right: 5%;"
                                action="{{ route('admin.gallery-news-delete', ['locale' => app()->getLocale(), 'id' => $img->id]) }}"
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
