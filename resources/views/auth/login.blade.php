{{-- <x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" /> --}}
@extends('layouts.home')
@section('content')
    @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
    @endif

    <form method="POST" action="{{ route('login') }}">

        @csrf

        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card  text-white" style="background-color: #00000096 !important;  border-radius: 1rem;">
                        <div class="card-body p-5 text-center">

                            <div class="mb-md-5 mt-md-4 pb-5">


                                <img src="{{ asset('storage/images/logo.svg') }}" alt="" width="130rem">
                                <p class="text-white-50 mb-3">Ingresa tu correo y tu contraseña</p>

                                <div class="form-outline form-white mb-4">
                                    {{-- <input :value="old('email')" required autofocus autocomplete="username" type="email" id="email" class="form-control form-control-lg" />
                            <label for="email" value="{{ __('Email') }}" class="form-label">Email</label> --}}
                                    <x-label for="email" value="{{ __('Correo') }}" class="form-label" />
                                    <x-input id="email" class="form-control form-control-lg" type="email"
                                        name="email" :value="old('email')" required autofocus autocomplete="username" />
                                </div>


                                <div class="form-outline form-white mb-4">
                                    {{-- <input id="password" name="password" required autocomplete="current-password"
                                        type="password" class="form-control form-control-lg" />
                                    <label for="password" value="{{ __('Password') }}" class="form-label">Password</label> --}}

                                    <x-label for="password" value="{{ __('Contraseña') }}" class="form-label" />
                                    <x-input id="password"  class="form-control form-control-lg" type="password" name="password"
                                        required autocomplete="current-password" />
                                </div>

                                <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Forgot password?</a>
                                </p>

                                <button class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>

                                <div class="d-flex justify-content-center text-center mt-4 pt-1">
                                    <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                                    <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                                    <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
                                </div>

                            </div>
                            <div class="block mt-4">
                                <label for="remember_me" class="flex items-center">
                                    <x-checkbox id="remember_me" name="remember" />
                                    <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                </label>
                            </div>
                            <div class="flex items-center justify-end mt-4">
                                @if (Route::has('password.request'))
                                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                        href="{{ route('password.request') }}">
                                        {{ __('Forgot your password?') }}
                                    </a>
                                @endif

                                {{-- <x-button class="ms-4">
                                    {{ __('Log in') }}
                                </x-button> --}}
                            </div>
                            <div>
                                <p class="mb-0">Don't have an account? <a href="{{route('register')}}"
                                        class="text-white-50 fw-bold">Sign Up</a>
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- <div>
            <x-label for="email" value="{{ __('Email') }}" />
            <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                autofocus autocomplete="username" />
        </div>

        <div class="mt-4">
            <x-label for="password" value="{{ __('Password') }}" />
            <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="current-password" />
        </div>

        <div class="block mt-4">
            <label for="remember_me" class="flex items-center">
                <x-checkbox id="remember_me" name="remember" />
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-button class="ms-4">
                {{ __('Log in') }}
            </x-button>
        </div> --}}
    </form>
@endsection
{{-- </x-authentication-card>
</x-guest-layout> --}}
