@extends('layouts.admin')
@section('content')
    <!-- Page Content -->
    <div class="content">
        <!-- Table -->
        <div class="col-12">
            <!-- Floating Labels -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">{{ __('Add image') }}</h3>
                </div>
                <div class="block-content">
                    <form action="{{ route('admin.images.store', ['locale' => app()->getLocale()]) }}"
                          method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <div class="col-md-4 {{ $errors->has('key') ? 'is-invalid' : '' }}">
                                <div class="form-material floating">
                                    <input type="text" class="form-control" id="key" name="key"
                                           autocomplete="off" value="{{ old('key') }}">
                                    <label for="key">
                                        {{ __('Key') }}
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
                                    <select class="form-control"
                                            id="material-select2"
                                            name="page_id">
                                        <option></option><!-- Empty value for demostrating material select box -->
                                        @foreach($pages as $page)
                                            <option value="{{ $page->id }}"
                                                {{ old("page_id") == $page->id ? 'selected' : '' }}
                                            >{{ $page->label }}</option>
                                        @endforeach
                                    </select>
                                    <label for="material-select2">
                                        {{ __('Page') }}
                                        <span class="text-danger">*</span>
                                    </label>
                                    @error('page_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        {{--                        <div class="content">--}}
                        {{--                            <h2 class="content-heading">Cropper</h2>--}}

                        {{--                            <!-- Toolbar -->--}}
                        {{--                            <div class="block mb-10">--}}
                        {{--                                <div class="block-content text-center">--}}
                        {{--                                    <div class="btn-group push">--}}
                        {{--                                        <button type="button" class="js-tooltip btn btn-alt-primary"--}}
                        {{--                                                data-toggle="cropper" data-method="setDragMode" data-option="move"--}}
                        {{--                                                title="Set drag mode to move">--}}
                        {{--                                            <i class="fa fa-arrows"></i>--}}
                        {{--                                        </button>--}}
                        {{--                                        <button type="button" class="js-tooltip btn btn-alt-primary"--}}
                        {{--                                                data-toggle="cropper" data-method="setDragMode" data-option="crop"--}}
                        {{--                                                title="Set drag mode to crop">--}}
                        {{--                                            <i class="fa fa-crop"></i>--}}
                        {{--                                        </button>--}}
                        {{--                                    </div>--}}
                        {{--                                    <div class="btn-group push">--}}
                        {{--                                        <button type="button" class="js-tooltip btn btn-alt-primary"--}}
                        {{--                                                data-toggle="cropper" data-method="zoom" data-option="0.1"--}}
                        {{--                                                title="Zoom In">--}}
                        {{--                                            <i class="fa fa-search-plus"></i>--}}
                        {{--                                        </button>--}}
                        {{--                                        <button type="button" class="js-tooltip btn btn-alt-primary"--}}
                        {{--                                                data-toggle="cropper" data-method="zoom" data-option="-0.1"--}}
                        {{--                                                title="Zoom Out">--}}
                        {{--                                            <i class="fa fa-search-minus"></i>--}}
                        {{--                                        </button>--}}
                        {{--                                    </div>--}}
                        {{--                                    <div class="btn-group push">--}}
                        {{--                                        <button type="button" class="js-tooltip btn btn-alt-primary"--}}
                        {{--                                                data-toggle="cropper" data-method="rotate" data-option="-45"--}}
                        {{--                                                title="Rotate Left">--}}
                        {{--                                            <i class="fa fa-rotate-left"></i>--}}
                        {{--                                        </button>--}}
                        {{--                                        <button type="button" class="js-tooltip btn btn-alt-primary"--}}
                        {{--                                                data-toggle="cropper" data-method="rotate" data-option="45"--}}
                        {{--                                                title="Rotate Right">--}}
                        {{--                                            <i class="fa fa-rotate-right"></i>--}}
                        {{--                                        </button>--}}
                        {{--                                    </div>--}}
                        {{--                                    <div class="btn-group push">--}}
                        {{--                                        <button type="button" class="js-tooltip btn btn-alt-primary"--}}
                        {{--                                                data-toggle="cropper" data-method="scaleX" data-option="-1"--}}
                        {{--                                                title="Flip Horizontal">--}}
                        {{--                                            <i class="fa fa-arrows-h"></i>--}}
                        {{--                                        </button>--}}
                        {{--                                        <button type="button" class="js-tooltip btn btn-alt-primary"--}}
                        {{--                                                data-toggle="cropper" data-method="scaleY" data-option="-1"--}}
                        {{--                                                title="Flip Vertical">--}}
                        {{--                                            <i class="fa fa-arrows-v"></i>--}}
                        {{--                                        </button>--}}
                        {{--                                    </div>--}}
                        {{--                                    <div class="btn-group push">--}}
                        {{--                                        <button type="button" class="js-tooltip btn btn-alt-primary"--}}
                        {{--                                                data-toggle="cropper" data-method="setAspectRatio"--}}
                        {{--                                                data-option="1.7777777777777777" title="Set Aspect Ratio">--}}
                        {{--                                            16:9--}}
                        {{--                                        </button>--}}
                        {{--                                        <button type="button" class="js-tooltip btn btn-alt-primary"--}}
                        {{--                                                data-toggle="cropper" data-method="setAspectRatio"--}}
                        {{--                                                data-option="1.3333333333333333" title="Set Aspect Ratio">--}}
                        {{--                                            4:3--}}
                        {{--                                        </button>--}}
                        {{--                                        <button type="button" class="js-tooltip btn btn-alt-primary"--}}
                        {{--                                                data-toggle="cropper" data-method="setAspectRatio" data-option="1"--}}
                        {{--                                                title="Set Aspect Ratio">--}}
                        {{--                                            1:1--}}
                        {{--                                        </button>--}}
                        {{--                                        <button type="button" class="js-tooltip btn btn-alt-primary"--}}
                        {{--                                                data-toggle="cropper" data-method="setAspectRatio"--}}
                        {{--                                                data-option="0.6666666666666666" title="Set Aspect Ratio">--}}
                        {{--                                            2:3--}}
                        {{--                                        </button>--}}
                        {{--                                    </div>--}}
                        {{--                                    <button type="button" class="js-tooltip btn btn-alt-primary push"--}}
                        {{--                                            data-toggle="cropper" data-method="setAspectRatio" data-option="NaN"--}}
                        {{--                                            title="Set Aspect Ratio">--}}
                        {{--                                        Free--}}
                        {{--                                    </button>--}}
                        {{--                                    <div class="btn-group push">--}}
                        {{--                                        <button type="button" class="js-tooltip btn btn-alt-primary"--}}
                        {{--                                                data-toggle="cropper" data-method="clear" title="Clear">--}}
                        {{--                                            <i class="fa fa-times"></i>--}}
                        {{--                                        </button>--}}
                        {{--                                        <button type="button" class="js-tooltip btn btn-alt-primary"--}}
                        {{--                                                data-toggle="cropper" data-method="crop" title="Crop">--}}
                        {{--                                            <i class="fa fa-check"></i>--}}
                        {{--                                        </button>--}}
                        {{--                                    </div>--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}
                        {{--                            <!-- END Toolbar -->--}}

                        {{--                            <!-- Image Cropper -->--}}
                        {{--                            <div class="block">--}}
                        {{--                                <div class="block-content">--}}
                        {{--                                    <div class="row items-push">--}}
                        {{--                                        <div class="col-xl-8">--}}
                        {{--                                            <div>--}}
                        {{--                                                <img id="js-img-cropper" class="img-fluid" src="./photo22@2x.jpg"--}}
                        {{--                                                     alt="photo">--}}
                        {{--                                            </div>--}}
                        {{--                                        </div>--}}
                        {{--                                        <div class="col-xl-4">--}}
                        {{--                                            <div class="overflow-hidden mb-10">--}}
                        {{--                                                <div class="js-img-cropper-preview center-block overflow-hidden"--}}
                        {{--                                                     style="height: 200px;"></div>--}}
                        {{--                                            </div>--}}
                        {{--                                        </div>--}}
                        {{--                                    </div>--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}
                        {{--                            <!-- END Image Cropper -->--}}
                        {{--                        </div>--}}
                        <div class="form-group row">
                            <div class="col-md-12 text-center my-3">
                                <button type="submit" class="btn btn-alt-primary w-25">{{ __('Add') }}</button>
                                <a href="{{ route('admin.images.index', ['locale' => app()->getLocale()]) }}"
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
