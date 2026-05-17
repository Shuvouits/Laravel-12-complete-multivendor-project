@extends('admin.master')

@section('content')
    <div class="container-xl mt-5">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Update Brand</h3>

                <div class="card-actions">
                    <a href="{{ route('admin.brands.index') }}" class="btn btn-primary">
                        Back
                    </a>
                </div>
            </div>

            <div class="card-body">
                <form action="{{ route('admin.brands.update', $brand) }}" method="POST"
                    enctype="multipart/form-data" class="brand-form">

                    @csrf
                    @method('PUT')

                    <div class="row">

                        {{-- Brand Logo --}}
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">Brand Logo</label>

                                <input type="file" class="form-control" name="brand_logo">

                                @if ($brand->image)
                                    <div class="mt-2">
                                        <img src="{{ asset($brand->image) }}" width="100"
                                            class="img-thumbnail">
                                    </div>
                                @endif

                                <x-input-error :messages="$errors->get('brand_logo')" class="mt-2" />
                            </div>
                        </div>

                        {{-- Brand Name --}}
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label required">Name</label>

                                <input type="text" class="form-control" name="name"
                                    value="{{ $brand->name }}">

                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </div>
                        </div>

                        {{-- Status --}}
                        <div class="col-md-12">
                            <div class="mb-2">
                                <label class="form-check form-switch form-switch-3">
                                    <input class="form-check-input" type="checkbox"
                                        @checked($brand->is_active) name="status" id="status">

                                    <span class="form-check-label">Active</span>
                                </label>
                            </div>
                        </div>

                    </div>
                </form>
            </div>

            <div class="card-footer text-end">
                <button class="btn btn-primary mt-3"
                    onclick="$('.brand-form').submit()">
                    Update
                </button>
            </div>
        </div>
    </div>
@endsection
