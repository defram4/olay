@extends('layouts.admin')
@section('content')
    <!-- Page Content -->
    <div class="content">
        <!-- Table -->
        <div class="col-12">
            <!-- Floating Labels -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">{{ __('Edit subservice') }}</h3>
                </div>
                <div class="block-content">
                    <form
                        action="{{ route('admin.sub_services.update', ['locale' => app()->getLocale(), 'subService' => $subService->id]) }}"
                        method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="form-group row">
                            <div class="col-md-6 offset-3 {{ $errors->has("service.service_id") ? 'is-invalid' : '' }}">
                                <div class="form-material floating">
                                    <select class="form-control" id="material-select2" name='service[service_id]'>
                                        <option></option><!-- Empty value for demostrating material select box -->
                                        @foreach($services as $service)
                                            <option value="{{ $service->id }}"
                                                {{ $subService->service_id == $service->id ? 'selected' : '' }}
                                            >{{ $service->title }}</option>
                                        @endforeach
                                    </select>
                                    <label for="material-select2">
                                        {{ __('Service') }}
                                        <span class="text-danger">*</span>
                                    </label>
                                    @error('service.service_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            @foreach($langs as $lang)
                                <div class="col-md-6 mb-4">
                                    <h3 class="mb-n2">{{ $lang->name }}</h3>
                                    <div class="{{ $errors->has("text.$loop->index.title") ? 'is-invalid' : '' }}">
                                        <div class="form-material floating">
                                            <input type="text" class="form-control" id="title-{{ $loop->index }}"
                                                   name="text[{{ $loop->index }}][title]"
                                                   autocomplete="off"
                                                   value="{{ $subService->text[$loop->index]->title ?? ''  }}">
                                            <label for="title-{{ $loop->index }}">
                                                {{ __('Title') }}
                                                <span class="text-danger">*</span>
                                            </label>
                                            @error("text.$loop->index.title")
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="{{ $errors->has("text.$loop->index.sub_title") ? 'is-invalid' : '' }}">
                                        <div class="form-material floating">
                                            <input type="text"
                                                   class="form-control"
                                                   id="subTitle-{{ $loop->index }}"
                                                   name="text[{{ $loop->index }}][sub_title]"
                                                   autocomplete="off"
                                                   value="{{ $subService->text[$loop->index]->sub_title ?? '' }}">
                                            <label for="subTitle-{{ $loop->index }}">
                                                {{ __('Sub title') }}
                                                <span class="text-danger">*</span>
                                            </label>
                                            @error("text.$loop->index.sub_title")
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="{{ $errors->has("text.$loop->index.text") ? 'is-invalid' : '' }}">
                                        <div class="form-material floating">
                                            <label for="text-{{ $loop->index }}">
                                                {{ __('Description') }}
                                                <span class="text-danger">*</span>
                                            </label>
                                            <br>
                                            <br>
                                            <textarea class="form-control js-summernote" id="text-{{ $loop->index }}"
                                                      name="text[{{ $loop->index }}][text]">{{ $subService->text[$loop->index]->text ?? ''}}</textarea>

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
                                    <div class="{{ $errors->has("seotext.$loop->index.title") ? "is-invalid" : '' }}">
                                        <div class="form-material floating">
                                            <input type="text"
                                                   class="form-control"
                                                   id="title_seo-{{ $loop->index }}"
                                                   name="seotext[{{ $loop->index }}][title]"
                                                   autocomplete="off"
                                                   value="{{ $subService->meta->text[$loop->index]->title ?? '' }}">
                                            <label for="title_seo-{{ $loop->index }}">
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
                                                   value="{{ $subService->meta->text[$loop->index]->keywords ?? '' }}">
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
                                            <textarea class="form-control"
                                                      id="seo-subTitle-{{ $loop->index }}"
                                                      name="seotext[{{ $loop->index }}][text]"
                                                      autocomplete="off">{{ $subService->meta->text[$loop->index]->text ?? '' }}</textarea>
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
                            <div class="col-md-6 {{ $errors->has("service.img") ? 'is-invalid' : '' }}">
                                <img src="{{ asset('storage/subService/'. $subService->img) }}" alt="sub Service photo"
                                     class="img-fluid">
                                <div class="form-material">
                                    <label for="img">
                                        {{ __('Photo') }}
                                    </label>
                                    <input type="file"
                                           class="form-control"
                                           id="img"
                                           name="service[img]"
                                           autocomplete="off">
                                    @error('service.img')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 {{ $errors->has("seo.img") ? 'is-invalid' : '' }}">
                                <img src="{{ asset('storage/subService/'. $subService->meta->img) }}" alt="SEO Photo"
                                     class="img-fluid">
                                <div class="form-material">
                                    <label for="img">
                                        {{ __('Image SEO') }}
                                    </label>
                                    <input type="file" class="form-control" id="img" name="seo[img]"
                                           autocomplete="off">
                                    @error('seo.img')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12 text-center my-3">
                                <button type="submit" class="btn btn-alt-primary w-25">{{ __('Edit') }}</button>
                                <a href="{{ route('admin.sub_services.index', ['locale' => app()->getLocale()]) }}"
                                   type="submit"
                                   class="btn btn-alt-danger w-25">{{ __('Edit') }}</a>
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
