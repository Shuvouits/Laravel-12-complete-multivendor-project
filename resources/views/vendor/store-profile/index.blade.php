@extends('vendor.master')



@section('content')
    <div class="page-body">
        <div class="container-fluid px-4">
            <div class="row justify-content-center">
                <div class="col-12 col-xxl-11">
                    <div class="card">
                        <div class="card-header py-3">
                            <h3 class="card-title mb-0">Create Store</h3>
                        </div>

                        <form action="{{ route('vendor.store-profile.update', 1) }}" method="POST"
                            enctype="multipart/form-data" id="storeForm">
                            @csrf
                            @method('PUT')

                            <div class="card-body px-4 px-md-5 py-4">

                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul class="mb-0">
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <div class="row g-4">
                                    <div class="col-12 col-xl-6">
                                        <label class="form-label">Store Logo <span class="text-danger">*</span></label>
                                        <input type="file" name="logo" id="logoInput"
                                            class="form-control form-control-lg @error('logo') is-invalid @enderror"
                                            accept="image/*">

                                        @error('logo')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror

                                        <div class="mt-3">
                                            <img id="logoPreview" src="https://placehold.co/150x150?text=Logo+Preview"
                                                alt="Logo Preview" class="img-fluid rounded border"
                                                style="width: 180px; height: 180px; object-fit: cover;">
                                        </div>
                                    </div>

                                    <div class="col-12 col-xl-6">
                                        <label class="form-label">Store Banner <span class="text-danger">*</span></label>
                                        <input type="file" name="banner" id="bannerInput"
                                            class="form-control form-control-lg @error('banner') is-invalid @enderror"
                                            accept="image/*">

                                        @error('banner')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror

                                        <div class="mt-3">
                                            <img id="bannerPreview" src="https://placehold.co/600x200?text=Banner+Preview"
                                                alt="Banner Preview" class="img-fluid rounded border"
                                                style="width: 100%; height: 220px; object-fit: cover;">
                                        </div>
                                    </div>
                                </div>

                                <div class="row g-4 mt-1">
                                    <div class="col-12 col-xl-6">
                                        <label class="form-label">Store Name <span class="text-danger">*</span></label>
                                        <input type="text" name="name" value="{{ old('name') }}"
                                            class="form-control form-control-lg @error('name') is-invalid @enderror"
                                            placeholder="Enter store name">

                                        @error('name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-12 col-xl-6">
                                        <label class="form-label">Phone</label>
                                        <input type="text" name="phone" value="{{ old('phone') }}"
                                            class="form-control form-control-lg @error('phone') is-invalid @enderror"
                                            placeholder="Enter phone number">

                                        @error('phone')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-12 col-xl-6">
                                        <label class="form-label">Email</label>
                                        <input type="email" name="email" value="{{ old('email') }}"
                                            class="form-control form-control-lg @error('email') is-invalid @enderror"
                                            placeholder="Enter email address">

                                        @error('email')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-12 col-xl-6">
                                        <label class="form-label">Address</label>
                                        <input type="text" name="address" value="{{ old('address') }}"
                                            class="form-control form-control-lg @error('address') is-invalid @enderror"
                                            placeholder="Enter address">

                                        @error('address')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-12">
                                        <label class="form-label">Short Description</label>
                                        <input type="text" name="short_description"
                                            value="{{ old('short_description') }}"
                                            class="form-control form-control-lg @error('short_description') is-invalid @enderror"
                                            placeholder="Enter short description">

                                        @error('short_description')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-12">
                                        <label class="form-label">Long Description</label>

                                        <div id="editor" style="height: 320px;">
                                            {!! old('long_description') !!}
                                        </div>

                                        <input type="hidden" name="long_description" id="long_description">

                                        @error('long_description')
                                            <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="card-footer text-end py-3 px-4 px-md-5">
                                <a href="{{ url()->previous() }}" class="btn btn-outline-secondary btn-lg">Cancel</a>
                                <button type="submit" class="btn btn-outline-primary btn-lg">Save Store</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
@endpush
