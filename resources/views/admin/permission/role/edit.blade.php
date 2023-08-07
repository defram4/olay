@extends('layouts.admin')
@section('content')
    <!-- Page Content -->
    <div class="content">
        <!-- Table -->
        <div class="col-6 offset-3">
            <!-- Floating Labels -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">{{ __('Edit role') }}</h3>
                </div>
                <div class="block-content">
                    <form
                        action="{{ route('admin.roles.update', ['locale' => app()->getLocale(), 'role' => $role->id]) }}"
                        method="post">
                        @csrf
                        @method('PATCH')
                        <div class="form-group row">
                            <div class="col-md-9">
                                <div class="{{ $errors->has('label') ? 'is-invalid' : '' }}">
                                    <div class="form-material floating">
                                        <input type="text" class="form-control" id="material-text2" name="label"
                                               autocomplete="off" value="{{ $role->label }}">
                                        <label for="material-text2">{{ __('Label') }}</label>
                                    </div>
                                    @error('label')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-9">
                                <div class="{{ $errors->has('role') ? 'is-invalid' : '' }}">
                                    <div class="form-material floating">
                                        <input type="text" class="form-control" id="material-password2" name="role"
                                               autocomplete="off" value="{{ $role->role }}">
                                        <label for="material-password2">{{ __('Role') }}</label>
                                    </div>
                                    @error('role')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-9">
                                <button type="submit" class="btn btn-alt-primary">{{ __('Save') }}</button>
                                <a href="{{ route('admin.permissions', ['locale' => app()->getLocale()]) }}"
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
