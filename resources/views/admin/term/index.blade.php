@extends('layouts.admin')
@section('content')
    <!-- Page Content -->
    <div class="content">
        <h2 class="content-heading">{{ __('Terms & Conditions') }}</h2>
        <div class="block pt-5">
            <div class="tab-pane"
                 role="tabpanel">
                <div class="block">
                    <div class="col-sm-6 col-xl-4">
                        <a href="{{ route('admin.terms.create', ['locale' => app()->getLocale()]) }}"
                           type="button"
                           class="btn btn-alt-secondary min-width-125 js-click-ripple-enabled"
                           data-toggle="click-ripple" style="overflow: hidden; position: relative; z-index: 1;">
                            {{ __('Add Terms & Conditions') }}
                        </a>
                    </div>
                    <div class="block-content">
                        <table class="table table-vcenter" id="term_table">
                            <thead>
                            <tr>
                                <th class="text-center" style="width: 50px;">#</th>
                                <th>{{ __('Title') }}</th>
                                <th class="d-none d-sm-table-cell" style="width: 15%;">{{ __('Published') }}</th>
                                <th class="text-center" style="width: 100px;">{{ __('Actions') }}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($terms as $term)
                                <tr>
                                    <th class="text-center" scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $term ->title }}</td>
                                    <td class="d-none d-sm-table-cell">
                                        <div>
                                            <label class="css-control-sm css-control-primary css-switch pointer">
                                                <input data-id="{{ $term->id }}" type="checkbox"
                                                       class="css-control-input toggle-term"
                                                    {{ $term->active ? 'checked' : '' }}>
                                                <span class="css-control-indicator"></span>
                                            </label>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <a href="{{ route('admin.terms.edit', ['locale' => app()->getLocale(), 'term' => $term->id]) }}"
                                               class="btn btn-sm btn-primary js-tooltip-enabled"
                                               data-toggle="tooltip" title="" data-original-title="Edit">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                            <form
                                                action="{{ route('admin.terms.destroy', ['locale' => app()->getLocale(), 'term' => $term->id]) }}"
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

            $('#term_table').on('change', '.toggle-term', function () {
                const input = $(this);
                const termId = input.data('id');
                const status = input.prop('checked') ? 1 : 0;
                $.ajax({
                    method: 'POST',
                    url: '/api/toggle/term',
                    data: {
                        termId,
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
