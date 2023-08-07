@extends('layouts.admin')
@section('content')
    <!-- Page Content -->
    <div class="content">
        <h2 class="content-heading">{{ __('Inbox') }}</h2>
        <div class="col-md-10 offset-1">
            <!-- Message List -->
            <div class="block">
                <div class="block-header block-header-default">
                    <div class="block-title">
                        <!--                            <strong>1-10</strong> from <strong>23</strong>-->
                    </div>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-toggle="block-option"
                                data-action="fullscreen_toggle"><i class="si si-size-fullscreen"></i></button>
                    </div>
                </div>
                <div class="block-content">
                    <!-- Messages Options -->
                    <div class="push text-right">
                        <button type="button" id="btn-delete"
                                class="btn btn-rounded form-delete btn-alt-secondary w-25">
                            <i class="fa fa-times text-danger mx-5"></i>
                            <span class="d-none d-sm-inline">{{ __('Delete') }}</span>
                        </button>
                    </div>
                    <!-- END Messages Options -->

                    <!-- Messages -->
                    <!-- Checkable Table (.js-table-checkable class is initialized in Helpers.tableToolsCheckable()) -->
                    <table class="js-table-checkable table table-hover table-vcenter js-table-checkable-enabled">
                        <tbody>
                        @foreach($inboxes as $inbox)
                            <tr>
                                <td class="text-center" style="width: 40px;">
                                    <label class="css-control css-control-primary css-checkbox">
                                        <input type="checkbox" class="css-control-input inbox-selector"
                                               data-id="{{ $inbox->id }}">
                                        <span class="css-control-indicator"></span>
                                    </label>
                                </td>
                                <td class="d-none d-sm-table-cell font-w600 show-modal" data-id="{{ $inbox->id }}"
                                    style="width: 140px;">
                                    {{ $inbox->name }}
                                </td>
                                <td class="show-modal" data-id="{{ $inbox->id }}">
                                    <a class="font-w600" href="#">
                                        {{ $inbox->title }}
                                    </a>
                                    <div class="text-muted mt-5">{{ Str::limit($inbox->message, 30) }}</div>
                                </td>
                                <td class="d-none d-xl-table-cell font-w600 font-size-sm text-muted show-modal"
                                    data-id="{{ $inbox->id }}"
                                    style="width: 120px;">
                                    {{ \Carbon\Carbon::parse($inbox->created_at)->format('d-m-Y') }}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <!-- END Messages -->
                </div>
            </div>
            <!-- END Message List -->
        </div>
    </div>
    <!-- END Page Content -->
    <!-- Message Modal -->
    <div class="modal fade" id="modal-message" tabindex="-1" role="dialog" aria-labelledby="modal-message"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-popout" role="document">
            <div class="modal-content">
                <div class="block block-themed block-transparent mb-0">
                    <div class="block-header bg-primary-dark">
                        <h3 class="block-title" id="modal-title"></h3>
                        <div class="block-options">
                            {{--                            <button type="button" class="btn-block-option" data-toggle="modal" data-placement="left"--}}
                            {{--                                    title="Reply" data-target="#modal-compose" data-dismiss="modal">--}}
                            {{--                                <i class="fa fa-reply"></i>--}}
                            {{--                            </button>--}}
                            <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                <i class="si si-close"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content block-content-full block-content-sm bg-body font-size-sm">
                        <span class="text-muted float-right"><em id="modal-date"></em></span>
                    </div>
                    <div class="block-content">
                        <p id="modal-name"></p>
                        <p id="modal-text"></p>
                    </div>
                    <div class="block-content bg-body p-3">
                        <a class="btn btn-primary" id="modal-email">
                            <i class="fa fa-mail-reply"></i>
                            {{ __('Email') }}
                        </a>
                        <a class="btn btn-success" id="modal-phone">
                            <i class="fa fa-phone"></i>
                            {{ __('Phone') }}
                        </a>
                        <button type="button" class="btn btn-danger" data-dismiss="modal" aria-label="Close">
                            {{ __('Cancel') }}
                        </button>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Message Modal -->
@endsection
@push('script')
    <script src="{{ asset('/admin/js/sweetalert.min.js') }}"></script>
    <script>
        $(document).ready(function () {
            let ids = [];
            $('.inbox-selector').on('change', function () {
                const id = $(this).data('id')
                if ($(this).prop('checked')) {
                    ids.push(id);
                } else {
                    ids = ids.filter(function (item) {
                        if (item !== id) {
                            return item;
                        }
                    });
                }
                $(this).parents('tr').toggleClass('table-active')
            });
            $('#btn-delete').on('click', function () {
                Swal.fire({
                    title: '{{ trans('Are you sure?') }}',
                    text: '{{ trans("You could not be able to revert this!") }}',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: '{{ trans('Yes, delete it!') }}',
                    cancelButtonText: '{{ trans('Cancel') }}'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            method: 'DELETE',
                            url: '/api/inbox',
                            data: {ids}
                        })
                            .then(function (res) {
                                location.reload();
                                $('.inbox-selector').prop('checked', false);

                            })
                            .catch(function (err) {
                                console.log(err)
                            })
                    }
                })

            })
            $('.show-modal').on('click', function (e) {
                e.preventDefault();
                const inboxId = $(this).data('id');
                $.ajax({
                    method: 'GET',
                    url: `/api/inbox/${inboxId}`,
                    dataType: 'json'
                })
                    .then(function (res) {
                        console.log(res)
                        $('#modal-title').text(res.title);
                        $('#modal-email').attr('href', `mailto:${res.email}`);
                        $('#modal-phone').attr('href', `tel:${res.phone}`);
                        $('#modal-name').text(res.name);
                        $('#modal-text').text(res.message);
                        $('#modal-message').modal('show')
                    })
                    .catch(function (err) {
                        console.log(err)
                    })
            })
        });
    </script>
@endpush
