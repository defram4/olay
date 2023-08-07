@extends('layouts.admin')
@section('content')
    <!-- Page Content -->
    <div class="content">
        <h2 class="content-heading">{{ __('Images') }}</h2>
        <div class="block">

            <div class="block-header block-header-default">
                <div class="col-sm-6 col-xl-4">
                    <a href="{{ route('admin.images.create', ['locale' => app()->getLocale()]) }}" type="button"
                       class="btn btn-alt-secondary min-width-125 js-click-ripple-enabled"
                       data-toggle="click-ripple" style="overflow: hidden; position: relative; z-index: 1;">
                        {{ __('Add image') }}
                    </a>
                </div>
            </div>
            <div class="block-content block-content-full">
                <!-- DataTables functionality is initialized with .js-dataTable-full class in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
                <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                    <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th class="text-center">{{ __('Image') }}</th>
                        <th class="d-none d-sm-table-cell text-center">{{ __('Page') }}</th>
                        <th class="d-none d-sm-table-cell text-center" style="width: 15%;">{{ __('Key') }}</th>
                        <th class="text-center text-center" style="width: 15%;">{{ __('Actions') }}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($images as $image)

                        <tr>
                            <td class="text-center">{{ $loop->iteration }}</td>

                            <td class="font-w600 text-center">

                                <img src="{{ asset('storage/image/'. $image->img) ?? 'media/photos/default.png' }}"
                                     class="img-fluid" alt="No img">

                            </td>

                            <td class="d-none d-sm-table-cell text-center">{{ $image->home_label }}</td>

                            <td class="d-none d-sm-table-cell text-center">
                                <code>
                                    {{ $image->key }}
                                </code>
                            </td>

                            <td class="text-center">
                                <div class="btn-group">

                                    <a href="{{ route('admin.images.edit', ['locale' => app()->getLocale(), 'image' => $image->id]) }}"
                                       class="btn btn-sm btn-primary js-tooltip-enabled"
                                       data-toggle="tooltip" title="{{ __('Edit') }}" data-original-title="Edit">
                                        <i class="fa fa-pencil"></i>
                                    </a>

                                    <form
                                        action="{{ route('admin.images.destroy', ['locale' => app()->getLocale(), 'image' => $image->id]) }}"
                                        method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                                class="btn btn-sm btn-danger js-tooltip-enabled form-delete"
                                                data-toggle="tooltip" title="{{ __('Delete') }}"
                                                data-original-title="Delete">
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
    <!-- END Page Content -->
@endsection
@push('style')
    <link rel="stylesheet" href="{{ asset('/admin/js/plugins/datatables/dataTables.bootstrap4.css') }}">
@endpush
@push('script')
    <script src="{{ asset('/admin/js/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('/admin/js/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Page JS Code -->
    <script src="{{ asset('/admin/js/pages/be_tables_datatables.min.js') }}"></script>
    <script src="{{ asset('/admin/js/sweetalert.min.js') }}"></script>
    <script>
        $(document).ready(function () {
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

            });
        });
    </script>
@endpush
