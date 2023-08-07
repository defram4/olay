@extends('layouts.admin')
@section('content')
    <!-- Page Content -->
    <div class="content">
        <!-- Table -->
        <div class="col-12">
            <!-- Floating Labels -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">{{ __('Edit photo') }}</h3>
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
                        action="{{ route('admin.galleries.update', ['locale' => app()->getLocale(), 'gallery' => $gallery->id]) }}"
                        method="post"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')

                        <div class="form-group row">

                            <div class="col-md-12 {{ $errors->has('img') ? "is-invalid" : "" }}">
                                <img src="{{ asset('storage/gallery/'. $gallery->img) }}"
                                     class="img-fluid" alt="Gallery img">
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
