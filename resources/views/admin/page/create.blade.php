@extends('layouts.admin')
@section('content')
    <!-- Page Content -->
    <div class="content">
        <!-- Table -->
        <div class="col-12">
            <!-- Floating Labels -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">{{ __('Add page') }}</h3>
                </div>
                <div class="block-content">
                    <form action="{{ route('admin.pages.store', ['locale' => app()->getLocale()]) }}"
                          method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <div class="col-md-6 offset-3 {{ $errors->has('label') ? 'is-invalid' : '' }}">
                                <div class="form-material floating">
                                    <input type="text"
                                           class="form-control"
                                           id="material-text2"
                                           name="label"
                                           autocomplete="off"
                                           value="{{ old('label') }}">
                                    <label for="material-text2">
                                        {{ __('Page name') }}
                                        <span class="text-danger">*</span>
                                    </label>
                                    @error('label')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="text-center w-50 mx-auto mt-4">
                                <h2>SEO</h2>
                            </div>
                        </div>
                        <div class="form-group row">
                            @foreach($langs as $lang)

                                <input type="hidden" name="seotext[{{ $loop->index }}][lang]" value="{{ $lang->code }}">
                                <div class="col-md-6 mb-4">
                                    <h3 class="mb-n2">{{ $lang->name }}</h3>
                                    <div class="{{ $errors->has("seotext.$loop->index.title") ? 'is-invalid' : '' }}">
                                        <div class="form-material floating">
                                            <input type="text"
                                                   class="form-control"
                                                   id="title-{{ $loop->index }}"
                                                   name="seotext[{{ $loop->index }}][title]"
                                                   autocomplete="off"
                                                   value="{{ old("seotext.$loop->index.title") }}">
                                            <label for="title-{{ $loop->index }}">
                                                {{ __('Name') }}
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
                                                   value="{{ old("seotext.$loop->index.keywords") }}">
                                            <label for="keywords-{{ $loop->index }}">
                                                {{ __('Keywords') }}
                                                <span class="text-danger">*</span>
                                            </label>
                                            @error("seotext.$loop->index.keywords")
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="{{ $errors->has("seotext.$loop->index.text") ? 'is-invalid' : '' }}">
                                        <div class="form-material floating">
                                        <textarea class="form-control"
                                                  id="text-{{ $loop->index }}"
                                                  name="seotext[{{ $loop->index }}][text]"
                                                  autocomplete="off">{{ old("seotext.$loop->index.text") }}</textarea>
                                            <label for="text-{{ $loop->index }}">
                                                {{ __('Description') }}
                                                <span class="text-danger">*</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="form-group row">
                            <div class="col-md-8 offset-2 {{ $errors->has('seoimg') ? 'is-invalid' : '' }}">
                                <div class="form-material">
                                    <label for="img">
                                        {{ __('Image SEO') }}
                                    </label>
                                    <input type="file"
                                           class="form-control"
                                           id="img"
                                           name="seoimg"
                                           autocomplete="off">
                                    @error('seoimg')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12 text-center my-3">
                                <button type="submit" class="btn btn-alt-primary w-25">{{ __('Save') }}</button>
                                <a href="{{ route('admin.pages.index', ['locale' => app()->getLocale()]) }}"
                                   type="submit"
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
