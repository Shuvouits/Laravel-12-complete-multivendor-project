{{--
<x-guest-layout>
    <form method="POST" action="{{ route('password.store') }}">
        @csrf

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Reset Password') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>

--}}


@extends('frontend.master')

@section('content')
    <main class="main pages">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="{{ url('/') }}" rel="nofollow">
                        <i class="fi-rs-home mr-5"></i>Home
                    </a>
                    <span></span> Pages <span></span> Reset Password
                </div>
            </div>
        </div>

        <div class="page-content pt-150 pb-135">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-10 col-md-12 m-auto">
                        <div class="row">

                            <!-- Left Image -->
                            <div class="col-lg-6 pr-30 d-none d-lg-block">
                                <img class="border-radius-15" src="{{ asset('frontend/assets/imgs/page/login-1.png') }}"
                                    alt="" />
                            </div>

                            <!-- Right Form -->
                            <div class="col-lg-6 col-md-8">
                                <div class="login_wrap widget-taber-content background-white">
                                    <div class="padding_eight_all bg-white">

                                        <div class="heading_s1">
                                            <h1 class="mb-5">Reset Password</h1>
                                            <p class="mb-30">
                                                Enter your new password below
                                            </p>
                                        </div>

                                        <!-- Validation Errors -->
                                        @if ($errors->any())
                                            <div class="mb-4">
                                                <ul class="list-disc list-inside text-red-600">
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif

                                        <form method="POST" action="{{ route('password.store') }}">
                                            @csrf

                                            <!-- Token -->
                                            <input type="hidden" name="token" value="{{ request()->route('token') }}">

                                            <!-- Email -->
                                            <div class="form-group">
                                                <input type="email" name="email"
                                                    value="{{ old('email', request()->email) }}" required readonly
                                                    class="form-control" />
                                            </div>

                                            <!-- Password -->
                                            <div class="form-group">
                                                <input type="password" name="password" required placeholder="New Password *"
                                                    class="form-control" />
                                            </div>

                                            <!-- Confirm Password -->
                                            <div class="form-group">
                                                <input type="password" name="password_confirmation" required
                                                    placeholder="Confirm Password *" class="form-control" />
                                            </div>

                                            <div class="form-group">
                                                <button type="submit" class="btn btn-heading btn-block hover-up">
                                                    Reset Password
                                                </button>
                                            </div>

                                            <div class="text-center">
                                                <a href="{{ route('login') }}" class="text-muted">
                                                    Back to Login
                                                </a>
                                            </div>

                                        </form>

                                    </div>
                                </div>
                            </div>
                            <!-- End Right -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
