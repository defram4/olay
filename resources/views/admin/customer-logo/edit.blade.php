@extends('layouts.admin')
@section('content')
    <!-- Page Content -->
    <div class="content">
        <!-- Table -->
        <div class="col-12">
            <!-- Floating Labels -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">{{ __('Edit customer logo') }}</h3>
                </div>
                <div class="block-content">
                    <form
                        action="{{ route('admin.customerLogos.update', ['locale' => app()->getLocale(), 'customerLogo' => $customer->id]) }}"
                        method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="form-group row">
                            @foreach($langs as $lang)
                                <div class="col-md-6 mb-4">
                                    <h3 class="mb-n2">{{ $lang->name }}</h3>
                                    <div class="{{ $errors->has("text.$loop->index.name") ? 'is-invalid' : "" }}">
                                        <div class="form-material floating">
                                            <input type="text"
                                                   class="form-control"
                                                   id="title-{{ $loop->index }}"
                                                   name="text[{{ $loop->index }}][name]"
                                                   autocomplete="off"
                                                   value="{{ $customer->text[$loop->index]->name ?? '' }}">
                                            <label for="title-{{ $loop->index }}">
                                                {{ __('Name') }}
                                                <span class="invalid-feedback">*</span>
                                            </label>
                                            @error("text.$loop->index.name")
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <input type="hidden" name="text[{{ $loop->index }}][lang]"
                                           value="{{ $lang->code }}">
                                </div>
                            @endforeach
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6 {{ $errors->has('customer.img') ? 'is-invalid' : '' }}">
                                <div class="form-material">
                                    <label for="img">
                                        {{ __('Logo') }}
                                    </label>
                                    <input type="file"
                                           class="form-control"
                                           id="img"
                                           name="customer[img]"
                                           autocomplete="off">
                                    @error("customer.img")
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6 {{ $errors->has('customer.url') ? 'is-invalid' : '' }}">
                                <div class="form-material floating">
                                    <input type="text"
                                           class="form-control"
                                           id="title2"
                                           name="customer[url]"
                                           autocomplete="off"
                                           value="{{ $customer->url }}">
                                    <label for="title2">
                                        {{ __('Link') }}
                                    </label>
                                    @error("customer.url")
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 offset-4">
                                <img src="{{ asset('storage/customer/'. $customer->img) }}" alt="customer logo"
                                     class="img-fluid">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12 text-center my-3">
                                <button type="submit" class="btn btn-alt-primary w-25">{{ __('Edit') }}</button>
                                <a href="{{ route('admin.customerLogos.index', ['locale' => app()->getLocale()]) }}"
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
