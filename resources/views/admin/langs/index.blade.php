@extends('layouts.admin')
@section('content')
    <!-- Page Content -->
    <div class="content">
        <h2 class="content-heading">{{ __('Languages') }}</h2>
        <!-- Table -->
        <div class="col-xl-10 offset-xl-1 col-md-12 offset-md-0">
            <div class="block">
                <div class="block-header block-header-default">
                    <div class="col-sm-6 col-xl-4">
                        <a href="{{ route('admin.langs.create', ['locale' => app()->getLocale()]) }}"
                           class="btn btn-alt-secondary min-width-125"
                           data-toggle="click-ripple">{{ __('Add language') }}</a>
                    </div>
                </div>
                <div class="block-content">
                    <table class="table table-vcenter" id="table">
                        <thead>
                        <tr>
                            <th class="text-center" style="width: 50px;">#</th>
                            <th>{{ __('Name') }}</th>
                            <th>{{ __('Active') }}</th>
                            <th class="d-none d-sm-table-cell" style="width: 15%;">{{ __('Code') }}</th>
                            <th class="text-center" style="width: 100px;">{{ __('Actions') }}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($langs as $lang)
                            <tr>
                                <th class="text-center" scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $lang->name }}</td>
                                <td>
                                    <div>
                                        <label
                                            class="css-control-sm css-control-primary css-switch pointer">
                                            <input type="checkbox" class="css-control-input toggle-status"
                                                   {{ $lang->active ? 'checked' : '' }} data-id="{{ $lang->id }}">
                                            <span class="css-control-indicator"></span>
                                        </label>
                                    </div>
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    <span class="badge badge-warning"><code>{{ $lang->code }}</code></span>
                                </td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <a href="{{ route('admin.langs.edit', ['locale' => app()->getLocale(), 'lang' => $lang->id]) }}"
                                           class="btn btn-sm btn-primary" data-toggle="tooltip"
                                           title="{{ __('Edit') }}">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        <form
                                            action="{{ route('admin.langs.destroy', ['locale' => app()->getLocale(), 'lang' => $lang->id]) }}"
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
            $('#table').on('change', '.toggle-status', function () {
                const input = $(this);
                const langId = input.data('id');
                const status = input.prop('checked') ? 1 : 0;
                $.ajax({
                    method: 'POST',
                    url: '/api/toggle/lang',
                    data: {
                        langId,
                        status
                    }
                })
                    .catch(function (err) {
                        console.log(err);
                    })
            });
        });
    </script>
@endpush
