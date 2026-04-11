@extends('frontend.master')

@section('content')
    <main class="main pages">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="{{ url('/') }}" rel="nofollow">
                        <i class="fi-rs-home mr-5"></i>Home
                    </a>
                    <span></span> Pages <span></span> KYC Verification
                </div>
            </div>
        </div>

        <div class="page-content pt-150 pb-135">
            <div class="container">
                <div class="row">
                    <div class="col-xl-10 col-lg-12 col-md-12 m-auto">
                        <div class="row">
                            <div class="col-lg-5 pr-30 d-none d-lg-block">
                                <img class="border-radius-15"
                                    src="{{ asset('frontend/assets/imgs/page/login-1.png') }}"
                                    alt="KYC Verification" />
                            </div>

                            <div class="col-lg-7 col-md-12">
                                <div class="login_wrap widget-taber-content background-white">
                                    <div class="padding_eight_all bg-white">
                                        <div class="heading_s1">
                                            <h1 class="mb-10">KYC Verification</h1>
                                            <p class="mb-30 text-muted">
                                                Please submit your identity information for account verification.
                                            </p>
                                        </div>

                                        {{-- Success Message --}}
                                        @if (session('success'))
                                            <div class="alert alert-success mb-4">
                                                {{ session('success') }}
                                            </div>
                                        @endif

                                        {{-- Validation Errors --}}
                                        @if ($errors->any())
                                            <div class="alert alert-danger mb-4">
                                                <ul class="mb-0 pl-3">
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif

                                        <form method="POST" action="{{ route('kyc.store') }}" enctype="multipart/form-data">
                                            @csrf

                                            <div class="row">
                                                {{-- Full Name --}}
                                                <div class="form-group col-md-6">
                                                    <input type="text"
                                                        name="full_name"
                                                        value="{{ old('full_name') }}"
                                                        required
                                                        placeholder="Full Name *"
                                                        class="form-control" />
                                                </div>

                                                {{-- Date of Birth --}}
                                                <div class="form-group col-md-6">
                                                    <input type="date"
                                                        name="date_of_birth"
                                                        value="{{ old('date_of_birth') }}"
                                                        required
                                                        class="form-control" />
                                                </div>

                                                {{-- Gender --}}
                                                <div class="form-group col-md-6">
                                                    <select name="gender" class="form-control" required>
                                                        <option value="">Select Gender *</option>
                                                        <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>
                                                            Male
                                                        </option>
                                                        <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>
                                                            Female
                                                        </option>
                                                    </select>
                                                </div>

                                                {{-- Document Type --}}
                                                <div class="form-group col-md-6">
                                                    <select name="document_type" class="form-control" required>
                                                        <option value="">Select Document Type *</option>
                                                        <option value="passport" {{ old('document_type') == 'passport' ? 'selected' : '' }}>
                                                            Passport
                                                        </option>
                                                        <option value="driving_license" {{ old('document_type') == 'driving_license' ? 'selected' : '' }}>
                                                            Driving License
                                                        </option>
                                                        <option value="id_card" {{ old('document_type') == 'id_card' ? 'selected' : '' }}>
                                                            ID Card
                                                        </option>
                                                    </select>
                                                </div>

                                                {{-- Full Address --}}
                                                <div class="form-group col-md-12">
                                                    <textarea name="full_address"
                                                        rows="4"
                                                        required
                                                        placeholder="Full Address *"
                                                        class="form-control">{{ old('full_address') }}</textarea>
                                                </div>

                                                {{-- Document Upload --}}
                                                <div class="form-group col-md-12">
                                                    <label class="mb-2 d-block">Upload Document Scan Copy *</label>
                                                    <input type="file"
                                                        name="document_scan_copy"
                                                        required
                                                        class="form-control"
                                                        accept=".jpg,.jpeg,.png,.pdf" />
                                                    <small class="text-muted d-block mt-2">
                                                        Accepted formats: JPG, JPEG, PNG, PDF
                                                    </small>
                                                </div>

                                                {{-- Submit Button --}}
                                                <div class="form-group col-md-12">
                                                    <button type="submit"
                                                        class="btn btn-heading btn-block hover-up">
                                                        Submit KYC
                                                    </button>
                                                </div>
                                            </div>
                                        </form>

                                        {{-- Optional status box if user already submitted --}}
                                        @isset($kyc)
                                            <div class="mt-4">
                                                <div class="card p-3 border-radius-10">
                                                    <h5 class="mb-2">Current KYC Status</h5>

                                                    @if ($kyc->status == 'pending')
                                                        <span class="badge bg-warning text-dark">Pending</span>
                                                    @elseif($kyc->status == 'approved')
                                                        <span class="badge bg-success">Approved</span>
                                                    @elseif($kyc->status == 'rejected')
                                                        <span class="badge bg-danger">Rejected</span>
                                                    @endif

                                                    @if ($kyc->rejected_reason)
                                                        <p class="mt-2 mb-0 text-danger">
                                                            <strong>Reason:</strong> {{ $kyc->rejected_reason }}
                                                        </p>
                                                    @endif
                                                </div>
                                            </div>
                                        @endisset

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
