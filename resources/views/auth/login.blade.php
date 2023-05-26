@extends('layouts/main-app')

@section('title', 'Task Manger - Login')

@section('content')

<div class="container px-4 mx-auto">
  <div class="text-center max-w-md mx-auto">
    {{-- <a class="mb-36 inline-block" href="#">
      <img src="flaro-assets/logos/flaro-logo-black-xl.svg" alt="">
    </a> --}}
    <h2 class="mb-4 text-6xl md:text-7xl text-center font-bold font-heading tracking-px-n leading-tight">Welcome Back
    </h2>
    <p class="mb-12 font-medium text-lg text-gray-600 leading-normal">Sign in with your email and password</p>
    <form method="POST" action="{{ route('login') }}">
    @csrf
      <label class="block mb-5">
        <input
          class="px-4 py-3.5 w-full text-gray-500 font-medium placeholder-gray-500 bg-white outline-none border border-gray-300 rounded-lg focus:ring focus:ring-indigo-300"
           placeholder="Email Address" id="email" class="block mt-1 w-full" type="email" name="email" :value="{{old('email')}}" required autofocus autocomplete="username">
           <span style="color: red;"> @error('email'){{ $message }}@enderror</span>
      </label>
     
     
      

      <label class="relative block mb-5">
        <div class="absolute right-4 top-1/2 transform -translate-y-1/2"><a
            class="text-sm text-indigo-600 hover:text-indigo-700 font-medium" href="#">Forgot Password?</a></div>
        <input
          class="px-4 pr-36 py-3.5 w-full text-gray-500 font-medium placeholder-gray-500 bg-white outline-none border border-gray-300 rounded-lg focus:ring focus:ring-indigo-300"
          id="password" class="block mt-1 w-full"  placeholder="Password"
          type="password"
          name="password"
          required autocomplete="current-password" value="{{old('password')}}">
          <span style="color: red;"> @error('password'){{ $message }}@enderror</span>
      </label>
      
      <button
        class="mb-8 py-4 px-9 w-full text-white font-semibold border border-indigo-700 rounded-xl shadow-4xl focus:ring focus:ring-indigo-300 bg-indigo-600 hover:bg-indigo-700 transition ease-in-out duration-200"
        type="submit">Sign In</button>
      <p class="font-medium">
        <span>Don’t have an account?</span>
        <a class="text-indigo-600 hover:text-indigo-700" href="#">Create free account</a>

        <div class="block mt-4">
          <label for="remember_me" class="inline-flex items-center">
              <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
              <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
          </label>
      </div>

      <div class="flex items-center justify-end mt-4">
          @if (Route::has('password.request'))
              <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                  {{ __('Forgot your password?') }}
              </a>
          @endif

          <x-primary-button class="ml-3">
              {{ __('Log in') }}
          </x-primary-button>
      </div>
      </p>
    </form>
  </div>
</div>

@endsection

