@extends('layouts.admin')
@section('content')
    <!-- Page Content -->
    <div class="content">
        <h2 class="content-heading">{{ __('Blog') }}</h2>
        <div class="block">
            <ul class="nav nav-tabs nav-tabs-block" data-toggle="tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link {{ session('post_page') ? '' : 'active' }}"
                       href="#btabs-static-home">{{ __('Categories') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ session('post_page') ? "active" : "" }}"
                       href="#btabs-static-profile">{{ __('Posts') }}</a>
                </li>
            </ul>
            <div class="block-content tab-content">
                <div class="tab-pane {{ session('post_page') ? "" : "active" }}" id="btabs-static-home" role="tabpanel">
                    <div class="block">
                        <div class="col-sm-6 col-xl-4">
                            <a href="{{ route('admin.blog_categories.create', ['locale' => app()->getLocale()]) }}"
                               type="button"
                               class="btn btn-alt-secondary min-width-125 js-click-ripple-enabled"
                               data-toggle="click-ripple" style="overflow: hidden; position: relative; z-index: 1;">
                                {{ __('Add category') }}
                            </a>
                        </div>
                        <div class="block-content">
                            <table class="table table-vcenter" id="category_table">
                                <thead>
                                <tr>
                                    <th class="text-center" style="width: 50px;">#</th>
                                    <th>{{ __('Title') }}</th>
                                    <th class="d-none d-sm-table-cell" style="width: 15%;">{{ __('Published') }}</th>
                                    <th>{{ __('Photo') }}</th>
                                    <th class="text-center" style="width: 100px;">{{ __('Actions') }}</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($categories as $category)
                                    <tr>
                                        <th class="text-center" scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $category->title }}</td>
                                        <td class="d-none d-sm-table-cell">
                                            <div>
                                                <label class="css-control-sm css-control-primary css-switch pointer">
                                                    <input type="checkbox" class="css-control-input toggle-category"
                                                           {{ $category->active ? 'checked' : '' }} data-id="{{ $category->id }}">
                                                    <span class="css-control-indicator"></span>
                                                </label>
                                            </div>
                                        </td>
                                        <td style="width: 15%">
                                            <img class="img-fluid" src="{{ asset('storage/category/'. $category->img) }}"
                                                 alt="">
                                        </td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <a href="{{ route('admin.blog_categories.edit', ['locale' => app()->getLocale(), 'blogCategory' => $category->id]) }}"
                                                   class="btn btn-sm btn-primary js-tooltip-enabled"
                                                   data-toggle="tooltip" title="" data-original-title="Edit">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <form
                                                    action="{{ route('admin.blog_categories.destroy', ['locale' => app()->getLocale(), 'blogCategory' => $category->id]) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                            class="btn btn-sm btn-danger js-tooltip-enabled form-delete"
                                                            data-toggle="tooltip" title="" data-original-title="Delete">
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
                <div class="tab-pane {{ session('post_page') ? "active" : "" }}" id="btabs-static-profile"
                     role="tabpanel">
                    <div class="block">
                        <div class="col-sm-6 col-xl-4">
                            <a href="{{ route('admin.blog_posts.create', ['locale' => app()->getLocale()]) }}"
                               type="button"
                               class="btn btn-alt-secondary min-width-125 js-click-ripple-enabled"
                               data-toggle="click-ripple" style="overflow: hidden; position: relative; z-index: 1;">
                                {{ __('Add post') }}
                            </a>
                        </div>
                        <div class="block-content">
                            <table class="table table-vcenter" id="post_table">
                                <thead>
                                <tr>
                                    <th class="text-center" style="width: 50px;">#</th>
                                    <th>{{ __('Title') }}</th>
                                    <th>{{ __('Category') }}</th>
                                    <th class="d-none d-sm-table-cell" style="width: 15%;">{{ __('Published') }}</th>
                                    <th>{{ __('Photo') }}</th>
                                    <th class="text-center" style="width: 100px;">{{ __('Actions') }}</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($posts as $post)
                                    <tr>
                                        <th class="text-center" scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $post ->title }}</td>
                                        <td>{{ $post->category_title }}</td>
                                        <td class="d-none d-sm-table-cell">
                                            <div>
                                                <label class="css-control-sm css-control-primary css-switch pointer">
                                                    <input data-id="{{ $post->id }}" type="checkbox"
                                                           class="css-control-input toggle-post"
                                                        {{ $post->active ? 'checked' : '' }}
                                                    >
                                                    <span class="css-control-indicator"></span>
                                                </label>
                                            </div>
                                        </td>
                                        <td style="width: 15%">
                                            <img class="img-fluid" src="{{ asset('storage/post/'. $post->img) }}" alt="">
                                        </td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <a href="{{ route('admin.blog_posts.edit', ['locale' => app()->getLocale(), 'blogPost' => $post->id]) }}"
                                                   class="btn btn-sm btn-primary js-tooltip-enabled"
                                                   data-toggle="tooltip" title="" data-original-title="Edit">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <form
                                                    action="{{ route('admin.blog_posts.destroy', ['locale' => app()->getLocale(), 'blogPost' => $post->id]) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                            class="btn btn-sm btn-danger js-tooltip-enabled form-delete"
                                                            data-toggle="tooltip" title="" data-original-title="Delete">
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
            $('#category_table').on('change', '.toggle-category', function () {
                const input = $(this);
                const categoryId = input.data('id');
                const status = input.prop('checked') ? 1 : 0;
                $.ajax({
                    method: 'POST',
                    url: '/api/toggle/category',
                    data: {
                        categoryId,
                        status
                    }
                })
                    .catch(function (err) {
                        console.log(err);
                    })
            });

            $('#post_table').on('change', '.toggle-post', function () {
                const input = $(this);
                const postId = input.data('id');
                const status = input.prop('checked') ? 1 : 0;
                $.ajax({
                    method: 'POST',
                    url: '/api/toggle/post',
                    data: {
                        postId,
                        status
                    }
                })
                    .catch(function (err) {
                        console.log(err)
                    })
            })
        });
    </script>

@endpush
