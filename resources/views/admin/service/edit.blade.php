@extends('layouts.admin')
@section('content')
    <!-- Page Content -->
    <div class="content">
        <!-- Table -->
        <div class="col-12">
            <!-- Floating Labels -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">{{ __('Edit service') }}</h3>
                </div>
                <div class="block-content">
                    <form
                        action="{{ route('admin.services.update', ['locale' => app()->getLocale(), 'service' => $service->id]) }}"
                        method="post"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="form-group row">
                            @foreach($langs as $lang)
                                <div class="col-md-6 mb-4">
                                    <h3 class="mb-n2">{{ $lang->name }}</h3>
                                    <div class="{{ $errors->has("text.$loop->index.title") ? 'is-invalid' : '' }}">
                                        <div class="form-material floating">
                                            <input type="text" class="form-control" id="title-{{ $loop->index }}"
                                                   name="text[{{ $loop->index }}][title]"
                                                   autocomplete="off"
                                                   value="{{ $service->text[$loop->index]->title ?? '' }}"
                                            >
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
                                            <input type="text" class="form-control" id="subTitle-{{ $loop->index }}"
                                                   name="text[{{ $loop->index }}][sub_title]"
                                                   autocomplete="off"
                                                   value="{{ $service->text[$loop->index]->sub_title ?? '' }}"
                                            >
                                            <label for="subTitle-{{ $loop->index }}">
                                                {{ __('Sub title') }}
                                                <span class="text-danger">*</span>
                                            </label>
                                            @error("text.$loop->index.sub_title")
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="{{ $errors->has("text.$loop->index.text") ? "is-invalid" : "" }}">
                                        <div class="form-material floating">
                                            <label for="text-{{ $loop->index }}">
                                                {{ __('Description') }}
                                                <span class="text-danger">*</span>
                                            </label>
                                            <textarea class="form-control js-summernote"
                                                      id="text-{{ $loop->index }}"
                                                      name="text[{{ $loop->index }}][text]">{{ $service->text[$loop->index]->text ?? '' }}</textarea>

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
                                                   value="{{ $service->meta->text[$loop->index]->title ?? '' }}"
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
                                    <div
                                        class="{{ $errors->has("seotext.$loop->index.keywords") ? "is-invalid" : '' }}">
                                        <div class="form-material floating">
                                            <input type="text" class="form-control" id="keywords-{{ $loop->index }}"
                                                   name="seotext[{{ $loop->index }}][keywords]"
                                                   autocomplete="off"
                                                   value="{{ $service->meta->text[$loop->index]->keywords ?? '' }}">
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
                                        class="{{ $errors->has("seotext.$loop->index.text") ? "is-invalid" : "" }}">
                                        <div class="form-material floating mb-5">
                                        <textarea class="form-control" id="seo-subTitle-{{ $loop->index }}"
                                                  name="seotext[{{ $loop->index }}][text]"
                                                  autocomplete="off">{{ $service->meta->text[$loop->index]->text ?? '' }}</textarea>
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
                            <div class="col-md-6 {{ $errors->has('img') ? "is-invalid" : "" }}">
                                <img src="{{ asset('storage/service/'. $service->img) }}" class="img-fluid" alt="service foto">
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
                            <div class="col-md-6 {{ $errors->has('seo.img') ? "is-invalid" : "" }}">
                                <img src="{{ asset('storage/service/'. $service->meta->img) }}" alt="seo foto"
                                     class="img-fluid">
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
                                <button type="submit" class="btn btn-alt-primary w-25">{{ __('Edit') }}</button>
                                <a href="{{ route('admin.services.index', ['locale' => app()->getLocale()]) }}"
                                   type="submit"
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
                    @foreach($service->gallery as $img)
                        <div class="col-md-4 position-relative" style="padding-top: 2%">
                            <img src="{{ asset('storage/service/'. $img->img) }}" alt="gallery img" class="img-fluid">
                            <form
                                style="position: absolute;top: 2%;right: 5%;"
                                action="{{ route('admin.gallery-service-delete', ['locale' => app()->getLocale(), 'id' => $img->id]) }}"
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
