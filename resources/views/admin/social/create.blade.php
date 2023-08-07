@extends('layouts.admin')
@section('content')
    <!-- Page Content -->
    <div class="content">
        <!-- Table -->
        <div class="col-12">
            <!-- Floating Labels -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">{{ __('Add social media') }}</h3>
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
                    <form action="{{ route('admin.socials.store', ['locale' => app()->getLocale()]) }}" method="post"
                          enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">

                            <div class="col-md-6 {{ $errors->has('url') ? "is-invalid" : "" }}">
                                <div class="form-material">
                                    <label for="url">
                                        {{ __('Add social link') }}
                                    </label>
                                    <input type="text"
                                           class="form-control"
                                           id="url"
                                           name="url"
                                           autocomplete="off"
                                           value="{{ old("url") }}">
                                    @error('url')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                        </div>

                        <div class="form-group row">
                            @foreach($langs as $lang)
                                <div class="col-md-12 mb-4">
                                    <h3 class="mb-n2" style="color: red">{{ $lang->name }}</h3>
                                    <div class="{{ $errors->has("text.$loop->index.name") ? 'is-invalid' : '' }}">
                                        <div class="form-material floating">
                                            <input type="text" class="form-control" id="name-{{ $loop->index }}"
                                                   name="text[{{ $loop->index }}][name]"
                                                   autocomplete="off"
                                                   value="{{ old("text.$loop->index.name") }}"
                                            >
                                            <label for="name-{{ $loop->index }}">
                                                {{ __('Name') }}
                                                <span class="text-danger">*</span>
                                            </label>
                                            @error("text.$loop->index.name")
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <input type="hidden" name="text[{{ $loop->index }}][lang]"
                                           value="{{ $lang->code }}">
                                </div>
                            @endforeach
                        </div>
                        <div class="form-group row">

                            <div class="col-md-6 {{ $errors->has('img') ? "is-invalid" : "" }}">
                                <div class="form-material ">
                                    <label for="img">
                                        {{ __('Photo') }}
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="file"
                                           class="form-control"
                                           id="img"
                                           name="img"
                                           autocomplete="off">
                                    @error('img')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                        </div>
                        <div class="form-group row">
                            <div class="col-md-12 text-center my-3">
                                <button type="submit" class="btn btn-alt-primary w-25">
                                    {{ __('Add') }}
                                </button>
                                <a href="{{ url()->previous() }}" type="submit"
                                   class="btn btn-alt-danger w-25">
                                    {{ __('Cancel') }}
                                </a>
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
