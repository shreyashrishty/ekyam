{{-- resources/views/auth/login.blade.php --}}
@extends('layouts.app')
@section('title','Login')

@section('content')
<div class="relative min-h-screen bg-gradient-to-r from-indigo-600 to-purple-600 flex items-center justify-center px-6 py-12">

  <!-- Optional Image Overlay -->
  <div
    class="absolute inset-0 opacity-20 bg-cover bg-center"
    style="background-image: url('{{ asset('images/login-bg.jpg') }}');"
  ></div>

  <!-- Login Form Card -->
  <div class="relative z-10 w-full max-w-md bg-white bg-opacity-90 rounded-2xl shadow-lg px-8 py-10 animate-fade-in-up">
    <h2 class="text-2xl font-bold text-center mb-6">Login to EKYAM</h2>

    {{-- Global validation errors --}}
    @if ($errors->any())
      <div class="mb-4 p-4 bg-red-100 border border-red-400 text-red-800 rounded">
        <ul class="list-disc list-inside text-sm">
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form method="POST" action="{{ route('login') }}" novalidate>
      @csrf

      <!-- Email -->
      <div class="mb-4">
        <label for="email" class="block text-sm font-medium mb-1">Email Address</label>
        <input
          id="email"
          name="email"
          type="email"
          value="{{ old('email') }}"
          required
          autofocus
          class="w-full border border-gray-300 rounded p-2 focus:outline-none focus:ring-2 focus:ring-indigo-500"
        >
        @error('email')
          <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
        @enderror
      </div>

      <!-- Password -->
      <div class="mb-4">
        <label for="password" class="block text-sm font-medium mb-1">Password</label>
        <input
          id="password"
          name="password"
          type="password"
          required
          minlength="8"
          class="w-full border border-gray-300 rounded p-2 focus:outline-none focus:ring-2 focus:ring-indigo-500"
        >
        @error('password')
          <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
        @enderror
      </div>

      <!-- Remember Me and Forgot Password -->
      <div class="flex items-center justify-between mb-6">
        <label class="flex items-center">
          <input
            id="remember"
            name="remember"
            type="checkbox"
            class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded"
          >
          <span class="ml-2 text-sm">Remember Me</span>
        </label>
        @if (Route::has('password.request'))
          <a href="{{ route('password.request') }}" class="text-sm text-indigo-600 hover:underline">
            Forgot your password?
          </a>
        @endif
      </div>

      <!-- Submit -->
      <div class="text-center">
        <button
          type="submit"
          class="w-full bg-indigo-600 text-white py-2 rounded-full font-semibold hover:bg-indigo-700 transition animate-bounce"
        >
          Login
        </button>
      </div>
    </form>

    <p class="mt-6 text-center text-sm text-gray-600">
      Don’t have an account?
      <a href="{{ route('register') }}" class="text-indigo-600 hover:underline">Sign Up</a>
    </p>
  </div>
</div>
@endsection
