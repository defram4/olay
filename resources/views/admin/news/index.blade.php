@extends('layouts.admin')
@section('content')
    <!-- Page Content -->
    <div class="content">
        <h2 class="content-heading">{{ __('Blog') }}</h2>
        <div class="block">

            <div class="block-header block-header-default">
                <div class="col-sm-6 col-xl-4">
                    <a href="{{ route('admin.newses.create', ['locale' => app()->getLocale()]) }}" type="button"
                        class="btn btn-alt-secondary min-width-125 js-click-ripple-enabled" data-toggle="click-ripple"
                        style="overflow: hidden; position: relative; z-index: 1;">
                        {{ __('Add post') }}
                    </a>
                </div>
            </div>
            <div class="block-content">
                <table class="table table-vcenter" id="container-news">
                    <thead>
                        <tr>
                            <th class="text-center" style="width: 50px;">#</th>
                            <th>{{ __('Title') }}</th>
                            <th>{{ __('Description') }}</th>

                            <th class="d-none d-sm-table-cell" style="width: 15%;">{{ __('Active') }}</th>
                            <th>{{ __('Photo') }}</th>
                            <th class="text-center" style="width: 100px;">{{ __('Actions') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($newses as $news)
                            <tr>
                                <th class="text-center" scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $news->title }}</td>
                                <td style="width: 30%">{!! $news->excerpt !!}</td>

                                <td class="d-none d-sm-table-cell">
                                    <div>
                                        <label class="css-control-sm css-control-primary css-switch pointer">
                                            <input type="checkbox" class="css-control-input toggle-news"
                                                data-id="{{ $news->id }}" {{ $news->active ? 'checked' : '' }}>
                                            <span class="css-control-indicator"></span>
                                        </label>
                                    </div>
                                </td>
                                <td style="width: 15%">
                                    <img class="img-fluid" src="{{ asset('storage/news/' . $news->img) }}"
                                        alt="news photo">
                                </td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <a href="{{ route('admin.newses.edit', ['locale' => app()->getLocale(), 'news' => $news->id]) }}"
                                            class="btn btn-sm btn-primary js-tooltip-enabled" data-toggle="tooltip"
                                            title="{{ __('Edit') }}" data-original-title="Edit">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        <form
                                            action="{{ route('admin.newses.destroy', ['locale' => app()->getLocale(), 'news' => $news->id]) }}"
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
@push('script')
    <script src="{{ asset('/admin/js/sweetalert.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.form-delete').on('click', function(e) {
                e.preventDefault()
                Swal.fire({
                    title: '{{ __('Are you sure?') }}',
                    text: '{{ __('You could not be able to revert this!') }}',
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
            $('#container-news').on('change', '.toggle-news', function() {
                const input = $(this);
                const newsId = input.data('id');
                const status = input.prop('checked') ? 1 : 0;
                $.ajax({
                        method: 'post',
                        url: '/api/toggle/news',
                        data: {
                            newsId,
                            status
                        }
                    })
                    .fail(function(err) {
                        console.log(err)
                    })
            });
        });
    </script>
@endpush
