@extends('admin.master')

@section('content')
    @php
        $admin = auth('admin')->user();
    @endphp

    <div class="page-body">

        <div class="container-xl">
            <div class="row row-cards">

                <!-- Profile Update -->
                <div class="col-lg-7">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Update Profile</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.profile.update') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="space-y">







                                    <div class="text-center mb-4">
                                        @if ($admin->avatar)
                                            <img id="avatarPreview" src="{{ asset($admin->avatar) }}" alt="Admin Avatar"
                                                style="width: 110px; height: 110px; object-fit: cover; border-radius: 50%; border: 3px solid #e9ecef;">
                                        @else


                                            <img id="avatarPreview"
                                                src="{{ asset('uploads/avatar.avif') }}" alt="Admin Avatar"
                                                style="width: 110px; height: 110px; object-fit: cover; border-radius: 50%; border: 3px solid #e9ecef;">
                                        @endif
                                    </div>

                                    <div>
                                        <label class="form-label">Profile Photo</label>
                                        <input type="file" name="avatar" id="avatarInput" class="form-control"
                                            accept="image/*">
                                        @error('avatar')
                                            <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div>
                                        <label class="form-label">Name</label>
                                        <input type="text" name="name" placeholder="Enter name" class="form-control"
                                            value="{{ old('name', $admin->name) }}">
                                        @error('name')
                                            <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div>
                                        <label class="form-label">Email</label>
                                        <input type="email" name="email" placeholder="Enter email address"
                                            class="form-control" value="{{ old('email', $admin->email) }}">
                                        @error('email')
                                            <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div>
                                        <button type="submit" class="btn btn-primary btn-4 w-100">
                                            Update Profile
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="icon icon-right icon-2">
                                                <path d="M5 12l14 0"></path>
                                                <path d="M13 18l6 -6"></path>
                                                <path d="M13 6l6 6"></path>
                                            </svg>
                                        </button>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Password Change -->
                <div class="col-lg-5">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Change Password</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.password.update') }}" method="POST">
                                @csrf
                                @method('PUT')

                                <div class="space-y">

                                    <div>
                                        <label class="form-label">Current Password</label>
                                        <input type="password" name="current_password" placeholder="Enter current password"
                                            class="form-control">
                                        @error('current_password')
                                            <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div>
                                        <label class="form-label">New Password</label>
                                        <input type="password" name="password" placeholder="Enter new password"
                                            class="form-control">
                                        @error('password')
                                            <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div>
                                        <label class="form-label">Confirm New Password</label>
                                        <input type="password" name="password_confirmation"
                                            placeholder="Confirm new password" class="form-control">
                                    </div>

                                    <div>
                                        <button type="submit" class="btn btn-primary btn-4 w-100">
                                            Change Password
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="icon icon-right icon-2">
                                                <path d="M5 12l14 0"></path>
                                                <path d="M13 18l6 -6"></path>
                                                <path d="M13 6l6 6"></path>
                                            </svg>
                                        </button>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
@endsection


@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const avatarInput = document.getElementById('avatarInput');
            const avatarPreview = document.getElementById('avatarPreview');

            if (avatarInput && avatarPreview) {
                avatarInput.addEventListener('change', function(e) {
                    const file = e.target.files[0];

                    if (file) {
                        const reader = new FileReader();

                        reader.onload = function(event) {
                            avatarPreview.src = event.target.result;
                        };

                        reader.readAsDataURL(file);
                    }
                });
            }
        });
    </script>
@endpush
