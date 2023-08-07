@extends('layouts.admin')
@section('content')
    <!-- Page Content -->
    <div class="content">
        <!-- Table -->
        <div class="col-12">
            <!-- Floating Labels -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">{{ __('Add FAQ') }}</h3>
                </div>
                <div class="block-content">
                    <form action="{{ route('admin.faqs.store', ['locale' => app()->getLocale()]) }}"
                          method="post" enctype="multipart/form-data">
                        @csrf
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
                                                   value="{{ old("text.$loop->index.title") }}">
                                            <label for="title-{{ $loop->index }}">
                                                {{ __('Title') }}
                                                <span class="text-danger">*</span>
                                            </label>
                                        </div>
                                        @error("text.$loop->index.title")
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="{{ $errors->has("text.$loop->index.text") ? 'is-invalid' : '' }}">
                                        <div class="form-material floating">
                                        <textarea id="description-{{$loop->index}}" class="form-control js-summernote"
                                                  name="text[{{ $loop->index }}][text]">{{ old("text.$loop->index.text") }}</textarea>
                                            <label for="description-{{ $loop->index }}">
                                                {{ __('Description') }}
                                                <span class="text-danger">*</span>
                                            </label>
                                        </div>
                                        @error("text.$loop->index.text")
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <input type="hidden" name="text[{{ $loop->index }}][lang]" value="{{ $lang->code }}">

                                </div>
                            @endforeach
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12 text-center my-3">
                                <button type="submit" class="btn btn-alt-primary w-25">{{ __('Save') }}</button>
                                <a href="{{ route('admin.faqs.index', ['locale' => app()->getLocale()]) }}" type="submit"
                                   class="btn btn-alt-danger w-25">{{ __('Back') }}</a>
                            </div>
                        </div>
                        @if ($errors->any())
                            @foreach ($errors->all() as $error)
                                <div>{{$error}}</div>
                            @endforeach
                        @endif
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
