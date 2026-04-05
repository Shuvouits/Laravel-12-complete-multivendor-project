{{--

<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('admin.password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>

--}}




@extends('admin.auth.master')

@section('content')
    <form class="card card-md" method="POST" action="{{ route('admin.password.email') }}" autocomplete="off" novalidate>
        @csrf

        <div class="card-body">
            <h2 class="card-title text-center mb-4">Forgot password</h2>

            <p class="text-secondary mb-4">
                Enter your email address and we will send you a password reset link.
            </p>

            <!-- ✅ Session Status -->
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <!-- Email -->
            <div class="mb-3">
                <label class="form-label">Email address</label>
                <input type="email" name="email" value="{{ old('email') }}"
                    class="form-control @error('email') is-invalid @enderror" placeholder="Enter email" required />

                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Submit -->
            <div class="form-footer">
                <button type="submit" class="btn btn-primary w-100">
                    <!-- icon same rakhlam -->
                    Send me reset link
                </button>
            </div>
        </div>
    </form>

    <!-- Back to login -->
    <div class="text-center text-secondary mt-3">
        Forget it,
        <a href="{{ route('admin.login') }}">send me back</a> to the sign in screen.
    </div>
@endsection
