@extends('layouts.admin')
@section('content')
    <!-- Page Content -->
    <div class="content">
        <h2 class="content-heading">{{ __('Banner') }}</h2>
        <div class="block">

            <div class="block-header block-header-default">
                <div class="col-sm-6 col-xl-4">
                    <a href="{{ route('admin.banners.create', ['locale' => app()->getLocale()]) }}"
                        class="btn btn-alt-secondary min-width-125 js-click-ripple-enabled" data-toggle="click-ripple"
                        style="overflow: hidden; position: relative; z-index: 1;">
                        {{ __('Add banner') }}
                    </a>
                </div>
            </div>
            <div class="block-content">
                <table class="table table-vcenter" id="container-banner">
                    <thead>
                        <tr>
                            <th class="text-center" style="width: 5%;">#</th>
                            <th style="width: 25%">{{ __('Title') }}</th>
                            <th style="width: 15%">{{ __('Button') }}</th>
                            {{-- <th style="width: 20%">{{ __('Video') }}</th> --}}
                            <th style="width: 20%">{{ __('Photo') }}</th>
                            <th class="d-none d-sm-table-cell" style="width: 5%;">{{ __('Active') }}</th>
                            <th class="text-center" style="width: 10%">{{ __('Actions') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($banners as $banner)
                            <tr>
                                <th class="text-center" scope="row">{{ $loop->iteration }}</th>
                                <td>
                                    {{ $banner->title_1 }}
                                    {{-- <br>
                                    {{ $banner->title_2 }}
                                    <br>
                                    {{ $banner->title_3 }}
                                    <br>
                                    {{ $banner->title_4 }} --}}
                                </td>
                                <td>
                                    @if ($banner->btn_text)
                                        <button type="button" class="btn btn-primary">{!! $banner->btn_text !!}</button>
                                    @endif
                                </td>
                                {{-- <td>
                                    @if ($banner->big_video)
                                        <video width="160" height="90" controls autoplay loop>
                                            <source src="{{ asset('storage/banner/' . $banner->big_video) }}"
                                                type="video/mp4">
                                        </video>
                                    @else
                                        <img class="img-fluid" width="160" height="90"
                                            src="{{ asset('admin/media/photos/no_video.jpg') }}">
                                    @endif
                                </td> --}}
                                <td>
                                    @if ($banner->big_img)
                                        <img class="img-fluid" width="160" height="90"
                                            src="{{ asset('storage/banner/' . $banner->big_img) }}" alt="banner img">
                                    @else
                                        <img class="img-fluid" width="160" height="90"
                                            src="{{ asset('admin/media/photos/no_img.jpg') }}" alt="banner img">
                                    @endif
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    <div>
                                        <label class="css-control-sm css-control-primary css-switch pointer">
                                            <input type="checkbox" class="css-control-input toggle-banner"
                                                data-id="{{ $banner->id }}" {{ $banner->active ? 'checked' : '' }}>
                                            <span class="css-control-indicator"></span>
                                        </label>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <a href="{{ route('admin.banners.edit', ['locale' => app()->getLocale(), 'banner' => $banner->id]) }}"
                                            class="btn btn-sm btn-primary js-tooltip-enabled" data-toggle="tooltip"
                                            title="{{ __('Edit') }}" data-original-title="Edit">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        <form
                                            action="{{ route('admin.banners.destroy', ['locale' => app()->getLocale(), 'banner' => $banner->id]) }}"
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
            $('#container-banner').on('change', '.toggle-banner', function() {
                const input = $(this);
                const bannerId = input.data('id');
                const status = input.prop('checked') ? 1 : 0;
                $.ajax({
                        method: 'post',
                        url: '/api/toggle/banner',
                        data: {
                            bannerId,
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
