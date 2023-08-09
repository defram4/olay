@extends('layouts.admin')
@section('content')
    <!-- Page Content -->
    <div class="content">
        <!-- Table -->
        <div class="col-12">
            <!-- Floating Labels -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">{{ __('Add banner') }}</h3>
                </div>

                @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        <strong>
                            {!! implode('<br/>', $errors->all('<span>:message</span>')) !!}
                        </strong>
                    </div>
                @endif

                <div class="block-content">
                    <form action="{{ route('admin.banners.store', ['locale' => app()->getLocale()]) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            @foreach ($langs as $lang)
                                <div class="col-md-6 mb-4">
                                    <h3 class="mb-n2" style="color: red">{{ $lang->name }}</h3>
                                    <div class="{{ $errors->has("text.$loop->index.title_1") ? 'is-invalid' : '' }}">
                                        <div class="form-material floating">
                                            <input type="text" class="form-control" id="title_1-{{ $loop->index }}"
                                                name="text[{{ $loop->index }}][title_1]" autocomplete="off"
                                                value="{{ old("text.$loop->index.title_1") }}">
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
                                                name="text[{{ $loop->index }}][title_2]" autocomplete="off"
                                                value="{{ old("text.$loop->index.title_2") }}">
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
                                                name="text[{{ $loop->index }}][title_3]" autocomplete="off"
                                                value="{{ old("text.$loop->index.title_3") }}">
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
                                                name="text[{{ $loop->index }}][title_4]" autocomplete="off"
                                                value="{{ old("text.$loop->index.title_4") }}">
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
                                                name="text[{{ $loop->index }}][btn_text]" autocomplete="off"
                                                value="{{ old("text.$loop->index.btn_text") }}">
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
                                                name="text[{{ $loop->index }}][btn_url]" autocomplete="off"
                                                value="{{ old("text.$loop->index.btn_url") }}">
                                            <label for="btn_url-{{ $loop->index }}">
                                                {{ __('Button Url') }}
                                            </label>
                                            @error("text.$loop->index.btn_url")
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
                                            <textarea class="form-control js-summernote" id="text-{{ $loop->index }}" name="text[{{ $loop->index }}][text]">{{ old("text.$loop->index.text") }}</textarea>

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

                            <div class="col-md-6 {{ $errors->has('big_img') ? 'is-invalid' : '' }}">
                                <div class="form-material ">
                                    <label for="big_img">
                                        {{ __('Big Image') }}
                                    </label>
                                    <img id="previewBigImage" src="#" style="display: none;max-width: 400px">

                                    <input type="file" class="form-control" id="big_img" name="big_img"
                                        autocomplete="off">
                                    @error('big_img')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 {{ $errors->has('small_img') ? 'is-invalid' : '' }}">
                                <div class="form-material ">
                                    <label for="small_img">
                                        {{ __('Small Image') }}
                                    </label>
                                    <img id="previewBigImage" src="#" style="display: none;max-width: 400px">

                                    <input type="file" class="form-control" id="small_img" name="small_img"
                                        autocomplete="off">
                                    @error('small_img')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6 {{ $errors->has('mobile_img') ? 'is-invalid' : '' }}">
                                <div class="form-material ">
                                    <label for="mobile_img">
                                        {{ __('Mobile Image') }}
                                    </label>
                                    <img id="previewMobileImage" src="#" style="display: none;max-width: 400px">
                                    <input type="file" class="form-control" id="mobile_img" name="mobile_img"
                                        autocomplete="off">
                                    @error('mobile_img')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6 {{ $errors->has('big_video') ? 'is-invalid' : '' }}">
                                <div class="form-material ">
                                    <label for="big_video">
                                        {{ __('Big Video') }}
                                    </label>
                                    <video id="previewBigVideo" src="#" controls
                                        style="display: none;max-width: 400px"></video>
                                    <input type="file" class="form-control" id="big_video" name="big_video"
                                        autocomplete="off">
                                    @error('big_video')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6 {{ $errors->has('mobile_video') ? 'is-invalid' : '' }}">
                                <div class="form-material ">
                                    <label for="mobile_video">
                                        {{ __('Mobile Video') }}
                                    </label>
                                    <video id="previewMobileVideo" src="#" controls
                                        style="display: none;max-width: 400px"></video>
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
                                    {{ __('Add') }}
                                </button>
                                <a href="{{ url()->previous() }}" type="submit" class="btn btn-alt-danger w-25">
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
        jQuery(function() {
            Codebase.helpers(['summernote']);
        });
    </script>

    <script>
        // Selectează elementele HTML
        const imageInput = document.getElementById('big_img');
        const previewImage = document.getElementById('previewBigImage');

        // Adaugă un eveniment ascultător la schimbarea valorii input-ului de tip file
        imageInput.addEventListener('change', function() {
            const file = this.files[0];

            // Verifică dacă este selectată o imagine
            if (file && file.type.startsWith('image/')) {
                // Creați un obiect FileReader
                const reader = new FileReader();

                // Definiți funcția onload pentru FileReader
                reader.onload = function(e) {
                    previewImage.src = e.target.result;
                    previewImage.style.display = 'block';
                };

                // Citirea fișierului ca URL de date
                reader.readAsDataURL(file);
            } else {
                // Resetarea imaginii și ascunderea previzualizării
                previewImage.src = '#';
                previewImage.style.display = 'none';
            }
        });
    </script>

    <script>
        // Selectează elementele HTML
        const imageMobileInput = document.getElementById('mobile_img');
        const previewMobileImage = document.getElementById('previewMobileImage');

        // Adaugă un eveniment ascultător la schimbarea valorii input-ului de tip file
        imageMobileInput.addEventListener('change', function() {
            const file = this.files[0];

            // Verifică dacă este selectată o imagine
            if (file && file.type.startsWith('image/')) {
                // Creați un obiect FileReader
                const reader = new FileReader();

                // Definiți funcția onload pentru FileReader
                reader.onload = function(e) {
                    previewMobileImage.src = e.target.result;
                    previewMobileImage.style.display = 'block';
                };

                // Citirea fișierului ca URL de date
                reader.readAsDataURL(file);
            } else {
                // Resetarea imaginii și ascunderea previzualizării
                previewMobileImage.src = '#';
                previewMobileImage.style.display = 'none';
            }
        });
    </script>
    <script>
        // Selectează elementele HTML
        const videoInput = document.getElementById('big_video');
        const previewBigVideo = document.getElementById('previewBigVideo');

        // Adaugă un eveniment ascultător la schimbarea valorii input-ului de tip file
        videoInput.addEventListener('change', function() {
            const file = this.files[0];

            // Verifică dacă este selectat un videoclip
            if (file && file.type.startsWith('video/')) {
                // Creați un obiect FileReader
                const reader = new FileReader();

                // Definiți funcția onload pentru FileReader
                reader.onload = function(e) {
                    previewBigVideo.src = e.target.result;
                    previewBigVideo.style.display = 'block';
                };

                // Citirea fișierului ca URL de date
                reader.readAsDataURL(file);
            } else {
                // Resetarea videoclipului și ascunderea previzualizării
                previewBigVideo.src = '#';
                previewBigVideo.style.display = 'none';
            }
        });
    </script>

    <script>
        // Selectează elementele HTML
        const mobileVideoInput = document.getElementById('mobile_video');
        const previewMobileVideo = document.getElementById('previewMobileVideo');

        // Adaugă un eveniment ascultător la schimbarea valorii input-ului de tip file
        mobileVideoInput.addEventListener('change', function() {
            const file = this.files[0];

            // Verifică dacă este selectat un videoclip
            if (file && file.type.startsWith('video/')) {
                // Creați un obiect FileReader
                const reader = new FileReader();

                // Definiți funcția onload pentru FileReader
                reader.onload = function(e) {
                    previewMobileVideo.src = e.target.result;
                    previewMobileVideo.style.display = 'block';
                };

                // Citirea fișierului ca URL de date
                reader.readAsDataURL(file);
            } else {
                // Resetarea videoclipului și ascunderea previzualizării
                previewMobileVideo.src = '#';
                previewMobileVideo.style.display = 'none';
            }
        });
    </script>
@endpush
