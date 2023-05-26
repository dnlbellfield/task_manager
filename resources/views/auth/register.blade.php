@extends('layouts/main-app')

@section('title', 'Task Manger - Register')

@section('content')
<div class="container px-4 mx-auto">
  <div class="text-center max-w-md mx-auto">
    <!-- <a class="mb-36 inline-block" href="#">
      <img src="flaro-assets/logos/flaro-logo-black-xl.svg" alt="">
    </a> -->
    <h2 class="mb-4 text-6xl md:text-7xl text-center font-bold font-heading tracking-px-n leading-tight">Join for free</h2>
    <p class="mb-12 font-medium text-lg text-gray-600 leading-normal">Register your first name, last name, email address, and password. </p>
    <form method="POST" action="{{ route('register') }}">
      @csrf
      <label class="block mb-5">
        <input class="px-4 py-3.5 w-full text-gray-500 font-medium placeholder-gray-500 bg-white outline-none border border-gray-300 rounded-lg focus:ring focus:ring-indigo-300"   class="block mt-1 w-full" type="text"  id="name" name="name" :value="{{old('name')}}" required autofocus autocomplete="username" placeholder="First &amp; Last Name">
        <span style="color: red;"> @error('name'){{ $message }}@enderror</span>
      </label>
      <label class="block mb-5">
        <input class="px-4 py-3.5 w-full text-gray-500 font-medium placeholder-gray-500 bg-white outline-none border border-gray-300 rounded-lg focus:ring focus:ring-indigo-300" type="text"  id="email" name="email" :value="{{old('email')}}" required autofocus  placeholder="Email Address">
        <span style="color: red;"> @error('email'){{ $message }}@enderror</span>
      </label>
      <label class="block mb-5">
        <input class="px-4 py-3.5 w-full text-gray-500 font-medium placeholder-gray-500 bg-white outline-none border border-gray-300 rounded-lg focus:ring focus:ring-indigo-300" type="password" id="password" name="password" :value="{{old('password')}}" required autofocus   placeholder="Create Password">
        <span style="color: red;"> @error('password'){{ $message }}@enderror</span>
      </label>
      <label class="block mb-5">
        <input class="px-4 py-3.5 w-full text-gray-500 font-medium placeholder-gray-500 bg-white outline-none border border-gray-300 rounded-lg focus:ring focus:ring-indigo-300" type="password" id="password_confirmation" name="password_confirmation" :value="{{old('password_confirmation')}}" required autofocus   placeholder="Confirm Password">
        <span style="color: red;"> @error('password'){{ $message }}@enderror</span>
      </label>
      <button class="mb-8 py-4 px-9 w-full text-white font-semibold border border-indigo-700 rounded-xl shadow-4xl focus:ring focus:ring-indigo-300 bg-indigo-600 hover:bg-indigo-700 transition ease-in-out duration-200" type="submit">Create Account</button>
      <p class="font-medium">
        <span>Already have an account?</span>
        <a class="text-indigo-600 hover:text-indigo-700" href="#">Login</a>
      </p>
    </form>
  </div>
</div>
@endsection
