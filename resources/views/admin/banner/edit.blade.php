@extends('layouts.admin')
@section('content')
    <!-- Page Content -->
    <div class="content">
        <!-- Table -->
        <div class="col-12">
            <!-- Floating Labels -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">{{ __('Edit banner') }}</h3>
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
                        action="{{ route('admin.banners.update', ['locale' => app()->getLocale(), 'banner' => $banner->id]) }}"
                        method="post"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')

                        <div class="form-group row">
                            @foreach($langs as $lang)
                                <div class="col-md-6 mb-4">
                                    <h3 class="mb-n2" style="color: red;padding-bottom: 2%">{{ $lang->name }}</h3>

                                    <div class="{{ $errors->has("text.$loop->index.title_1") ? 'is-invalid' : '' }}">
                                        <div class="form-material floating">
                                            <input type="text" class="form-control" id="title_1-{{ $loop->index }}"
                                                   name="text[{{ $loop->index }}][title_1]"
                                                   autocomplete="off"
                                                   value="{{ $banner->text[$loop->index]->title_1 ?? '' }}">
                                            <label for="title_1-{{ $loop->index }}">
                                                {{ __('Title 1') }}
                                            </label>
                                            @error("text.$loop->index.title_1")
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="{{ $errors->has("text.$loop->index.title_2") ? 'is-invalid' : '' }}">
                                        <div class="form-material floating">
                                            <input type="text" class="form-control" id="title_2-{{ $loop->index }}"
                                                   name="text[{{ $loop->index }}][title_2]"
                                                   autocomplete="off"
                                                   value="{{ $banner->text[$loop->index]->title_2 ?? '' }}">
                                            <label for="title_2-{{ $loop->index }}">
                                                {{ __('Title 2') }}
                                            </label>
                                            @error("text.$loop->index.title_2")
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="{{ $errors->has("text.$loop->index.title_3") ? 'is-invalid' : '' }}">
                                        <div class="form-material floating">
                                            <input type="text" class="form-control" id="title_3-{{ $loop->index }}"
                                                   name="text[{{ $loop->index }}][title_3]"
                                                   autocomplete="off"
                                                   value="{{ $banner->text[$loop->index]->title_3 ?? '' }}">
                                            <label for="title_3-{{ $loop->index }}">
                                                {{ __('Title 3') }}
                                            </label>
                                            @error("text.$loop->index.title_3")
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="{{ $errors->has("text.$loop->index.title_4") ? 'is-invalid' : '' }}">
                                        <div class="form-material floating">
                                            <input type="text" class="form-control" id="title_4-{{ $loop->index }}"
                                                   name="text[{{ $loop->index }}][title_4]"
                                                   autocomplete="off"
                                                   value="{{ $banner->text[$loop->index]->title_4 ?? '' }}">
                                            <label for="title_4-{{ $loop->index }}">
                                                {{ __('Title 4') }}
                                            </label>
                                            @error("text.$loop->index.title_4")
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="{{ $errors->has("text.$loop->index.btn_text") ? 'is-invalid' : '' }}">
                                        <div class="form-material floating">
                                            <input type="text" class="form-control" id="btn_text-{{ $loop->index }}"
                                                   name="text[{{ $loop->index }}][btn_text]"
                                                   autocomplete="off"
                                                   value="{{ $banner->text[$loop->index]->btn_text ?? '' }}">
                                            <label for="btn_text-{{ $loop->index }}">
                                                {{ __('Button text') }}
                                            </label>
                                            @error("text.$loop->index.btn_text")
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="{{ $errors->has("text.$loop->index.btn_url") ? 'is-invalid' : '' }}">
                                        <div class="form-material floating">
                                            <input type="text" class="form-control" id="btn_url-{{ $loop->index }}"
                                                   name="text[{{ $loop->index }}][btn_url]"
                                                   autocomplete="off"
                                                   value="{{ $banner->text[$loop->index]->btn_url ?? '' }}">
                                            <label for="btn_url-{{ $loop->index }}">
                                                {{ __('Button Url') }}
                                            </label>
                                            @error("text.$loop->index.btn_url")
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="{{ $errors->has("text.$loop->index.text") ? "is-invalid" : "" }}">
                                        <div class="form-material floating">
                                            <label for="description-{{ $loop->index }}">
                                                {{ __('Banner description') }}
                                                <span class="text-danger">*</span>
                                            </label>
                                            <textarea class="form-control js-summernote"
                                                      id="description-{{ $loop->index }}"
                                                      name="text[{{ $loop->index }}][text]">{{ $banner->text[$loop->index]->text ?? '' }}</textarea>

                                            @error("text.$loop->index.text")
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

                            <div class="col-md-6 {{ $errors->has('big_img') ? "is-invalid" : "" }}">
                                @if($banner->big_img)
                                    <img src="{{ asset('storage/banner/'. $banner->big_img) }}"
                                         class="img-fluid" alt="Banner big img">
                                @else
                                    <img class="img-fluid" width="160" height="90"
                                         src="{{ asset('admin/media/photos/no_img.jpg') }}"
                                         alt="banner img">
                                @endif
                                <div class="form-material ">
                                    <label for="big_img">
                                        {{ __('Big image') }}
                                    </label>
                                    <input type="file" class="form-control" id="big_img" name="big_img"
                                           autocomplete="off">
                                    @error('big_img')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div style="padding-bottom: 3%"></div>

                            </div>


                            <div class="col-md-6 {{ $errors->has('mobile_img') ? "is-invalid" : "" }}">
                                @if($banner->mobile_img)
                                    <img src="{{ asset('storage/banner/'. $banner->mobile_img) }}"
                                         class="img-fluid" alt="Banner mobile img">
                                @else
                                    <img class="img-fluid" width="160" height="90"
                                         src="{{ asset('admin/media/photos/no_img.jpg') }}"
                                         alt="banner img">
                                @endif
                                <div class="form-material ">
                                    <label for="mobile_img">
                                        {{ __('Mobile image') }}
                                    </label>
                                    <input type="file" class="form-control" id="mobile_img" name="mobile_img"
                                           autocomplete="off">
                                    @error('mobile_img')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div style="padding-bottom: 3%"></div>
                            </div>

                            <div class="col-md-6 {{ $errors->has('big_video') ? "is-invalid" : "" }}">
                                @if($banner->big_video)
                                    <video width="100%" height="auto" controls autoplay loop>
                                        <source src="{{ asset('storage/banner/'. $banner->big_video) }}"
                                                type="video/mp4">
                                    </video>
                                @else
                                    <img class="img-fluid" width="160" height="90"
                                         src="{{ asset('admin/media/photos/no_video.jpg') }}"
                                         alt="banner img">
                                @endif
                                <div class="form-material ">
                                    <label for="big_video">
                                        {{ __('Big Video') }}
                                    </label>
                                    <input type="file" class="form-control" id="big_video" name="big_video"
                                           autocomplete="off">
                                    @error('big_video')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6 {{ $errors->has('mobile_video') ? "is-invalid" : "" }}">
                                @if($banner->mobile_video)
                                <video width="100%" height="auto" controls autoplay loop>
                                    <source src="{{ asset('storage/banner/'. $banner->mobile_video) }}"
                                            type="video/mp4">
                                </video>
                                @else
                                    <img class="img-fluid" width="160" height="90"
                                         src="{{ asset('admin/media/photos/no_video.jpg') }}"
                                         alt="banner img">
                                @endif
                                <div class="form-material ">
                                    <label for="mobile_video">
                                        {{ __('Mobile Video') }}
                                    </label>
                                    <input type="file" class="form-control" id="mobile_video" name="mobile_video"
                                           autocomplete="off">
                                    @error('mobile_video')
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
