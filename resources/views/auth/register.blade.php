{{--

<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

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
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
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
                    <span></span> Pages <span></span> Register
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
                                            <h1 class="mb-5">Create Account</h1>
                                            <p class="mb-30">
                                                Already have an account?
                                                <a href="{{ route('login') }}">Login here</a>
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

                                        <form method="POST" action="{{ route('register') }}">
    @csrf

    <div class="form-group">
        <input type="text" name="name" value="{{ old('name') }}" required autofocus placeholder="Full Name *" class="form-control" />
    </div>

    <div class="form-group">
        <input type="email" name="email" value="{{ old('email') }}" required placeholder="Email Address *" class="form-control" />
    </div>

    <div class="form-group">
        <input type="password" name="password" required placeholder="Password *" class="form-control" />
    </div>

    <div class="form-group">
        <input type="password" name="password_confirmation" required placeholder="Confirm Password *" class="form-control" />
    </div>

    <div class="payment_option mb-30">
        <div class="custome-radio">
            <input
                class="form-check-input"
                type="radio"
                name="user_type"
                id="exampleRadios3"
                value="user"
                {{ old('user_type', 'user') == 'user' ? 'checked' : '' }}
            />
            <label class="form-check-label" for="exampleRadios3">
                I am a customer
            </label>
        </div>

        <div class="custome-radio">
            <input
                class="form-check-input"
                type="radio"
                name="user_type"
                id="exampleRadios4"
                value="vendor"
                {{ old('user_type') == 'vendor' ? 'checked' : '' }}
            />
            <label class="form-check-label" for="exampleRadios4">
                I am a vendor
            </label>
        </div>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-heading btn-block hover-up">
            Register
        </button>
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
