@extends('layouts.admin')
@section('content')
    <!-- Page Content -->
    <div class="content">
        <!-- Table -->
        <div class="col-6 offset-3">
            <!-- Floating Labels -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">{{ __('Add language') }}</h3>
                </div>
                <div class="block-content">
                    <form action="{{ route('admin.langs.store', ['locale' => app()->getLocale()]) }}" method="post">
                        @csrf
                        <div class="form-group row">
                            <div class="col-md-9 {{ $errors->has('name') ? "is-invalid" : "" }}">
                                <div class="form-material floating">
                                    <input type="text" class="form-control" id="material-text2" name="name"
                                           autocomplete="off" value="{{ old('name') }}">
                                    <label for="material-text2">{{ __('Name') }}</label>
                                </div>
                                @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-9 {{ $errors->has('code') ? 'is-invalid' : '' }}">
                                <div class="form-material floating">
                                    <input type="text" class="form-control" id="material-password2" name="code"
                                           autocomplete="off" value="{{ old('code') }}">
                                    <label for="material-password2">{{ __('Code') }}</label>
                                </div>
                                @error('code')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror

                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-9">
                                <button type="submit" class="btn btn-alt-primary">{{ __('Save') }}</button>
                                <a href="{{ route('admin.langs.index', ['locale' => app()->getLocale()]) }}"
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
