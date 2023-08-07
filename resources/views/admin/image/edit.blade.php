@extends('layouts.admin')
@section('content')
    <!-- Page Content -->
    <div class="content">
        <!-- Table -->
        <div class="col-12">
            <!-- Floating Labels -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">{{ __('Edit Image') }}</h3>
                </div>
                <div class="block-content">
                    <form
                        action="{{ route('admin.images.update', ['locale' => app()->getLocale(), 'image' => $image->id]) }}"
                        method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="form-group row">
                            <div class="col-md-4 {{ $errors->has('key') ? 'is-invalid' : '' }}">
                                <div class="form-material floating">
                                    {{-- TODO: ADD hidden class on this input after finish project--}}
                                    <input type="text" class="form-control" id="key" name="key"
                                           autocomplete="off" value="{{ $image->key }}">
                                    {{-- TODO: ADD hidden class on this label after finish project--}}
                                    <label for="key">
                                        {{ __('Key') }}
                                        {{-- TODO: ADD hidden class on this span after finish project--}}
                                        <span class="text-danger">*</span>
                                    </label>
                                    @error('key')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4 {{ $errors->has('img') ? 'is-invalid' : '' }}">
                                <div class="form-material">
                                    <label for="img">
                                        {{ __('Image') }}
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="file" class="form-control" id="img" name="img"
                                           autocomplete="off">
                                    @error('img')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4 {{ $errors->has('page_id') ? 'is-invalid' : '' }}">
                                <div class="form-material floating">
                                    {{-- TODO: ADD hidden class on this select after finish project--}}
                                    <select class="form-control"
                                            id="material-select2"
                                            name="page_id">
                                        <option></option><!-- Empty value for demostrating material select box -->
                                        @foreach($pages as $page)
                                            <option value="{{ $page->id }}"
                                                {{ $image->page_id == $page->id ? 'selected' : '' }}
                                            >{{ $page->label }}</option>
                                        @endforeach
                                    </select>
                                    {{-- TODO: ADD hidden class on this label after finish project--}}
                                    <label for="material-select2">
                                        {{ __('Page') }}
                                        {{-- TODO: ADD hidden class on this span after finish project--}}
                                        <span class="text-danger">*</span>
                                    </label>
                                    @error('page_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 offset-3">

                                <img src="{{ asset('storage/image/'. $image->img) ?? 'media/photos/default.png' }}"
                                     class="img-fluid" alt="No img">

                            </div>
                        </div>


                        <div class="form-group row">
                            <div class="col-md-12 text-center my-3">
                                <button type="submit" class="btn btn-alt-primary w-25">{{ __('Add') }}</button>
                                <a href="{{ URL::previous() }}"
                                   type="submit" class="btn btn-alt-danger w-25">{{ __('Back') }}</a>
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
    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('js/plugins/cropperjs/cropper.min.css') }}">
@endpush
@push('script')

    <!-- Page JS Plugins -->
    <script src="{{ asset('js/plugins/cropperjs/cropper.min.js') }}"></script>

    <!-- Page JS Code -->
    <script src="{{ asset('js/pages/be_comp_image_cropper.min.js') }}"></script>
@endpush
