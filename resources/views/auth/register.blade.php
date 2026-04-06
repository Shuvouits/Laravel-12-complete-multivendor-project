
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
                <a href="index.html" rel="nofollow"><i class="fi-rs-home mr-5"></i>Home</a>
                <span></span> Pages <span></span> My Account
            </div>
        </div>
    </div>

    <div class="page-content pt-50 pb-40">
        <div class="container">
            <div class="row">
                <div class="col-xxl-8 col-xl-10 col-lg-12 col-md-9 m-auto">
                    <div class="row align-items-center">

                        <!-- Register Form -->
                        <div class="col-lg-6 offset-md-3">
                            <div class="login_wrap widget-taber-content background-white">
                                <div class="padding_eight_all bg-white">
                                    <div class="heading_s1">
                                        <h2 class="mb-5">Create an Account</h2>
                                        <p class="mb-30">
                                            Already have an account?
                                            <a href="{{ route('login') }}">Login</a>
                                        </p>
                                    </div>

                                    <!-- Laravel Register Form -->
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf

                                        <!-- Name -->
                                        <div class="form-group">
                                            <input type="text"
                                                   name="name"
                                                   value="{{ old('name') }}"
                                                   required autofocus
                                                   placeholder="Username"
                                                   class="form-control @error('name') is-invalid @enderror" />
                                            @error('name')
                                                <span class="text-danger mt-2 d-block">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <!-- Email -->
                                        <div class="form-group">
                                            <input type="email"
                                                   name="email"
                                                   value="{{ old('email') }}"
                                                   required
                                                   placeholder="Email"
                                                   class="form-control @error('email') is-invalid @enderror" />
                                            @error('email')
                                                <span class="text-danger mt-2 d-block">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <!-- Password -->
                                        <div class="form-group">
                                            <input type="password"
                                                   name="password"
                                                   required
                                                   placeholder="Password"
                                                   class="form-control @error('password') is-invalid @enderror" />
                                            @error('password')
                                                <span class="text-danger mt-2 d-block">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <!-- Confirm Password -->
                                        <div class="form-group">
                                            <input type="password"
                                                   name="password_confirmation"
                                                   required
                                                   placeholder="Confirm password"
                                                   class="form-control" />
                                        </div>




                                        <!-- User Type -->

                                        {{--

                                         <div class="payment_option mb-30">
                                            <div class="custome-radio">
                                                <input class="form-check-input"
                                                       type="radio"
                                                       name="user_type"
                                                       id="customerRadio"
                                                       value="customer"
                                                       checked />
                                                <label class="form-check-label" for="customerRadio">
                                                    I am a customer
                                                </label>
                                            </div>
                                            <div class="custome-radio">
                                                <input class="form-check-input"
                                                       type="radio"
                                                       name="user_type"
                                                       id="vendorRadio"
                                                       value="vendor" />
                                                <label class="form-check-label" for="vendorRadio">
                                                    I am a vendor
                                                </label>
                                            </div>
                                        </div>

                                        --}}


                                        <!-- Submit Button -->
                                        <div class="form-group mb-0">
                                            <button type="submit"
                                                    class="btn btn-fill-out btn-block hover-up font-weight-bold">
                                                Submit & Register
                                            </button>
                                        </div>
                                    </form>
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
