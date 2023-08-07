@extends('layouts.admin')
@section('content')
    <!-- Page Content -->
    <div class="content">
        <!-- Table -->
        <div class="col-12">
            <!-- Floating Labels -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">{{ __('Edit user') }}</h3>
                </div>
                <div class="block-content">
                    <form
                        action="{{ route('admin.users.update', ['locale' => app()->getLocale(), 'user' => $user->id]) }}"
                        method="post">
                        @csrf
                        @method('PATCH')
                        <div class="form-group row">
                            <div class="col-3">
                                <div class="{{ $errors->has('email') ? 'is-invalid' : '' }}">
                                    <div class="form-material floating">
                                        <input type="email" class="form-control" id="title" name="email"
                                               autocomplete="off" value="{{ $user->email }}" disabled>
                                        <label for="title">{{ __('Email') }}</label>
                                    </div>
                                    @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                            </div>
                            <div class="col-3">
                                <div class="{{ $errors->has('email') ? 'is-invalid' : '' }}">
                                    <div class="form-material floating">
                                        <input type="text" class="form-control" id="title" name="email"
                                               autocomplete="off" value="{{ $user->name }}" disabled>
                                        <label for="title">{{ __('Name') }}</label>
                                    </div>
                                    @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="{{ $errors->has('role_id') ? 'is-invalid' : '' }}">
                                    <div class="form-material floating">
                                        <select class="form-control" id="role_id" name="role_id">
                                            <option></option><!-- Empty value for demostrating material select box -->
                                            @foreach($roles as $role)
                                                <option value="{{ $role->id }}"
                                                    {{ $user->role_id == $role->id ? 'selected' : '' }}
                                                >{{ $role->label }}</option>
                                            @endforeach
                                        </select>
                                        <label for="role_id">{{ __('Role') }}</label>
                                    </div>
                                    @error('role_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12 text-center my-3">
                                <button type="submit" class="btn btn-alt-primary w-25">{{ __('Save') }}</button>
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
