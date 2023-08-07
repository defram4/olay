@extends('layouts.admin')
@section('content')
    <!-- Page Content -->
    <div class="content">
        <!-- Table -->
        <div class="col-12">
            <!-- Floating Labels -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">{{ __('Edit social') }}</h3>
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
                        action="{{ route('admin.socials.update', ['locale' => app()->getLocale(), 'social' => $social->id]) }}"
                        method="post"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')

                        <div class="form-group row">

                            <div class="col-md-12 {{ $errors->has('url') ? "is-invalid" : "" }}">
                                <div class="form-material">
                                    <label for="url">
                                        {{ __('Edit social link') }}
                                    </label>
                                    <input type="text"
                                           class="form-control"
                                           id="url"
                                           name="url"
                                           autocomplete="off"
                                           value="{{ $social->url ?? '' }}">
                                    @error('url')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                        </div>

                        <div class="form-group row">

                            @foreach($langs as $lang)
                                <div class="col-md-6 mb-4">
                                    <h3 class="mb-n2" style="color: red;padding-bottom: 2%">{{ $lang->name }}</h3>

                                    <div class="{{ $errors->has("text.$loop->index.name") ? 'is-invalid' : '' }}">
                                        <div class="form-material floating">
                                            <input type="text" class="form-control" id="name-{{ $loop->index }}"
                                                   name="text[{{ $loop->index }}][name]"
                                                   autocomplete="off"
                                                   value="{{ $social->text[$loop->index]->name ?? '' }}">
                                            <label for="title-{{ $loop->index }}">
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

                            <div class="col-md-12 {{ $errors->has('img') ? "is-invalid" : "" }}">
                                <img src="{{ asset('storage/social/'. $social->img) }}"
                                     class="img-fluid" alt="Social img">
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
