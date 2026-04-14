@extends('vendor.master')



@section('content')
    <div class="page-body">
        <div class="container-xl">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Create Store</h3>
                        </div>

                        <form action="{{ route('vendor.store-profile.update', 1) }}" method="POST"
                            enctype="multipart/form-data" id="storeForm">
                            @csrf
                            @method('PUT')


                            <div class="card-body">

                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul class="mb-0">
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <label class="form-label">Store Logo <span class="text-danger">*</span></label>
                                        <input type="file" name="logo" id="logoInput"
                                            class="form-control @error('logo') is-invalid @enderror" accept="image/*">

                                        @error('logo')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror

                                        <div class="mt-3">
                                            <img id="logoPreview" src="https://placehold.co/150x150?text=Logo+Preview"
                                                alt="Logo Preview" class="img-fluid rounded border"
                                                style="width: 150px; height: 150px; object-fit: cover;">
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-4">
                                        <label class="form-label">Store Banner <span class="text-danger">*</span></label>
                                        <input type="file" name="banner" id="bannerInput"
                                            class="form-control @error('banner') is-invalid @enderror" accept="image/*">

                                        @error('banner')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror

                                        <div class="mt-3">
                                            <img id="bannerPreview" src="https://placehold.co/600x200?text=Banner+Preview"
                                                alt="Banner Preview" class="img-fluid rounded border"
                                                style="width: 100%; height: 200px; object-fit: cover;">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Store Name <span class="text-danger">*</span></label>
                                        <input type="text" name="name" value="{{ old('name') }}"
                                            class="form-control @error('name') is-invalid @enderror"
                                            placeholder="Enter store name">

                                        @error('name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Phone</label>
                                        <input type="text" name="phone" value="{{ old('phone') }}"
                                            class="form-control @error('phone') is-invalid @enderror"
                                            placeholder="Enter phone number">

                                        @error('phone')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Email</label>
                                        <input type="email" name="email" value="{{ old('email') }}"
                                            class="form-control @error('email') is-invalid @enderror"
                                            placeholder="Enter email address">

                                        @error('email')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Address</label>
                                        <input type="text" name="address" value="{{ old('address') }}"
                                            class="form-control @error('address') is-invalid @enderror"
                                            placeholder="Enter address">

                                        @error('address')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-12 mb-3">
                                        <label class="form-label">Short Description</label>
                                        <input type="text" name="short_description"
                                            value="{{ old('short_description') }}"
                                            class="form-control @error('short_description') is-invalid @enderror"
                                            placeholder="Enter short description">

                                        @error('short_description')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-12 mb-3">
                                        <label class="form-label">Long Description</label>

                                        <div id="editor" style="height: 300px;">
                                            {!! old('long_description') !!}
                                        </div>

                                        <input type="hidden" name="long_description" id="long_description">

                                        @error('long_description')
                                            <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="card-footer text-end">
                                <a href="{{ url()->previous() }}" class="btn btn-outline-secondary">Cancel</a>
                                <button type="submit" class="btn btn-primary">Save Store</button>
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
