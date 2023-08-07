@extends('layouts.admin')
@section('content')
    <!-- Page Content -->
    <div class="row">
        <div class="col-md-8 offset-2">
            <!-- Floating Labels -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">{{ __('User details') }}</h3>
                </div>
                <div class="block-content">
                    <form action="{{ route('admin.user_details_update', ['locale' => app()->getLocale()]) }}"
                          method="post">
                        @csrf
                        <div class="form-group row">
                            <div class="col-md-12 {{ $errors->has('name') ? 'is-invalid' : '' }}">
                                <div class="form-material floating open">
                                    <input type="text" class="form-control" id="material-text2"
                                           name="name" value="{{ auth()->user()->name }}">
                                    <label for="material-text2">{{ __('Name') }}</label>
                                    @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12 {{ $errors->has('email') ? 'is-invalid' : '' }}">
                                <div class="form-material floating">
                                    <input type="email" class="form-control" id="material-email2"
                                           name="email" value="{{ auth()->user()->email }}">
                                    <label for="material-email2">{{ __('Email') }}</label>
                                    @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-9">
                                <button type="submit" class="btn btn-alt-primary">{{ __('Submit') }}</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
            <!-- END Floating Labels -->
        </div>
    </div>
    <div class="row" id="password_container">
        <div class="col-md-8 offset-2 pt-50">
            <!-- Floating Labels -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">{{ __('Password') }}</h3>
                </div>
                <div class="block-content">
                    <form action="{{ route('admin.user_password_update', ['locale' => app()->getLocale()]) }}"
                          method="post">
                        @csrf
                        <div class="form-group row">
                            <div class="col-12 {{ $errors->has('current_password') ? 'is-invalid' : '' }}">
                                <div class="form-material floating">
                                    <input type="password"
                                           class="form-control"
                                           id="old-pass"
                                           name="current_password">
                                    <label for="old-pass">{{ __('Old password') }}</label>
                                    @error('current_password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12 {{ $errors->has('new_password') ? "is-invalid" : '' }}">
                                <div class="form-material floating">
                                    <input type="password"
                                           class="form-control"
                                           id="new-pass"
                                           name="new_password">
                                    <label for="new-pass">{{ __('New password') }}</label>
                                    @error('new_password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <div class="form-material floating">
                                    <input type="password" class="form-control" id="confirm-pass"
                                           name="new_password_confirmation">
                                    <label for="confirm-pass">{{ __('Confirm password') }}</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-9">
                                <button type="submit" class="btn btn-alt-primary">{{ __('Submit') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END Floating Labels -->
        </div>
    </div>
    <!-- END Page Content -->
@endsection
