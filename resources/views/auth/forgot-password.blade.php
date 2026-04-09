

{{--

<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
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


@extends('frontend.master')

@section('content')
<main class="main pages">
    <div class="page-header breadcrumb-wrap">
        <div class="container">
            <div class="breadcrumb">
                <a href="{{ url('/') }}" rel="nofollow">
                    <i class="fi-rs-home mr-5"></i>Home
                </a>
                <span></span> Pages <span></span> Forgot Password
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
                            <img class="border-radius-15"
                                 src="{{ asset('frontend/assets/imgs/page/login-1.png') }}"
                                 alt="" />
                        </div>

                        <!-- Right Form -->
                        <div class="col-lg-6 col-md-8">
                            <div class="login_wrap widget-taber-content background-white">
                                <div class="padding_eight_all bg-white">

                                    <div class="heading_s1">
                                        <h1 class="mb-5">Forgot Password</h1>
                                        <p class="mb-30">
                                            Enter your email and we’ll send you a reset link
                                        </p>
                                    </div>

                                    <!-- Session Status -->
                                    <x-auth-session-status class="mb-4" :status="session('status')" />

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

                                    <form method="POST" action="{{ route('password.email') }}">
                                        @csrf

                                        <div class="form-group">
                                            <input type="email"
                                                   name="email"
                                                   value="{{ old('email') }}"
                                                   required
                                                   autofocus
                                                   placeholder="Enter your email *"
                                                   class="form-control" />
                                        </div>

                                        <div class="form-group">
                                            <button type="submit"
                                                class="btn btn-heading btn-block hover-up">
                                                Email Password Reset Link
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
                        <!-- End Right Form -->

                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
