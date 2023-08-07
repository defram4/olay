@extends('layouts.admin')
@section('content')
    <!-- Page Content -->
    <div class="content">
        <h2 class="content-heading">{{ __('Roles & Users') }}</h2>
        <!-- Table -->
        <div class="block">
            <ul class="nav nav-tabs nav-tabs-block" data-toggle="tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link {{ session('user_page') ? '' : 'active' }}"
                       href="#btabs-static-home">{{ __('Roles') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ session('user_page') ? 'active' : '' }}"
                       href="#btabs-static-profile">{{ __('Users') }}</a>
                </li>
            </ul>
            <div class="block-content tab-content">
                <div class="tab-pane {{ session('user_page') ? '' : 'active' }}" id="btabs-static-home" role="tabpanel">
                    <div class="block">
                        <div class="col-sm-6 col-xl-4">
                            <a href="{{ route('admin.roles.create', ['locale' => app()->getLocale()]) }}" type="button"
                               class="btn btn-alt-secondary min-width-125"
                               data-toggle="click-ripple">{{ __('Add role') }}</a>
                        </div>
                        <div class="block-content">
                            <table class="table table-vcenter" id="role-container">
                                <thead>
                                <tr>
                                    <th class="text-center" style="width: 50px;">#</th>
                                    <th>{{ __('Name') }}</th>
                                    <th>{{ __('Active') }}</th>
                                    <th class="text-center" style="width: 100px;">{{ __('Actions') }}</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($roles as $role)
                                    <tr>
                                        <th class="text-center" scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $role->label }}</td>
                                        <td>
                                            <div>
                                                <label
                                                    class="css-control-sm css-control-primary css-switch pointer">
                                                    <input type="checkbox" data-id="{{ $role->id }}"
                                                           class="css-control-input toggle-role"
                                                        {{ $role->active ? 'checked' : '' }}
                                                    >
                                                    <span class="css-control-indicator"></span>
                                                </label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <a href="{{ route('admin.roles.edit', ['locale' => app()->getLocale(), 'role' => $role->id]) }}"
                                                   class="btn btn-sm btn-primary" data-toggle="tooltip"
                                                   title="{{ __('Edit') }}">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <form
                                                    action="{{ route('admin.roles.destroy', ['locale' => app()->getLocale(), 'role' => $role->id]) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm form-delete btn-danger"
                                                            data-toggle="tooltip"
                                                            title="{{ __('Delete') }}">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                </form>

                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="tab-pane {{ session('user_page') ? 'active' : '' }}" id="btabs-static-profile"
                     role="tabpanel">
                    <div class="block">
                        <div class="col-sm-6 col-xl-4">
                            <a href="{{ route('admin.users.create', ['locale' => app()->getLocale()]) }}" type="button"
                               class="btn btn-alt-secondary min-width-125 js-click-ripple-enabled"
                               data-toggle="click-ripple" style="overflow: hidden; position: relative; z-index: 1;">
                                {{ __('Add user') }}
                            </a>
                        </div>
                        <div class="block-content">
                            <table class="table table-striped table-vcenter" id="user-container">
                                <thead>
                                <tr>
                                    <th class="text-center" style="width: 50px;">#</th>
                                    <th>{{ __('Name') }}</th>
                                    <th class="d-none d-sm-table-cell" style="width: 15%;">{{ __('Email') }}</th>
                                    <th>{{ __('Role') }}</th>
                                    <th>{{ __('Active') }}</th>
                                    <th class="text-center" style="width: 120px;">{{ __('Delete') }}</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <th class="text-center" scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $user->name }}</td>
                                        <td class="d-none d-sm-table-cell">{{ $user->email }}</td>
                                        <td class="d-none d-sm-table-cell">{{ $user->role->label }}</td>
                                        <td class="d-none d-sm-table-cell">
                                            <div>
                                                <label class="css-control-sm css-control-primary css-switch pointer">
                                                    <input type="checkbox" class="css-control-input toggle-user"
                                                           data-id="{{ $user->id }}"
                                                        {{ $user->active ? 'checked' : ''}}
                                                    >
                                                    <span class="css-control-indicator"></span>
                                                </label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <a href="{{ route('admin.users.edit', ['locale' => app()->getLocale(), 'user' => $user->id]) }}"
                                                   class="btn btn-sm btn-primary" data-toggle="tooltip"
                                                   title="{{ __('Edit') }}">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <form
                                                    action="{{ route('admin.users.destroy', ['locale' => app()->getLocale(), 'user' => $user->id]) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                            class="btn btn-sm btn-danger js-tooltip-enabled form-delete"
                                                            data-toggle="tooltip"
                                                            title="{{ __('Delete') }}">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Table -->
    </div>
    <!-- END Page Content -->
@endsection
@push('script')
    <script src="{{ asset('/admin/js/sweetalert.min.js') }}"></script>
    <script>
        $(document).ready(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('.form-delete').on('click', function (e) {
                e.preventDefault()
                Swal.fire({
                    title: '{{ __('Are you sure?') }}',
                    text: '{{ __("You could not be able to revert this!") }}',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: '{{ __('Yes, delete it!') }}',
                    cancelButtonText: '{{ __('Cancel') }}'
                }).then((result) => {
                    if (result.isConfirmed) {
                        e.currentTarget.form.submit();
                    }
                })

            })

            $('#role-container').on('change', ".toggle-role", function () {
                const input = $(this);
                const roleId = input.data('id');
                const status = input.prop('checked') ? 1 : 0;
                $.ajax({
                    method: 'POST',
                    url: '/api/toggle/role',
                    data: {
                        roleId,
                        status
                    }
                })
                    .fail(function (err) {
                        console.log(err)
                    })
            })

            $('#user-container').on('change', '.toggle-user', function () {
                const input = $(this);
                const userId = input.data('id');
                const status = input.prop('checked') ? 1 : 0;
                $.ajax({
                    method: 'POST',
                    url: '/api/toggle/user',
                    data: {
                        userId,
                        status
                    }
                })
                    .fail(function (err) {
                        console.log(err)
                    })
            })
        });
    </script>
@endpush
